<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row p-2">
                <router-link :to="{ name: 'items'}">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button">Back</button>
                </router-link>
                <div class="navbar-brand ml-4" href="#">
                    Add Item
                </div>
            </div>
            <div class="mt-3 ml-2">
                <form action="#" @submit.prevent="addItem">
                    <div class="form-group row">
                        <label for="item-name" class="col-sm-2 col-form-label">Item Name:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" v-model="sItemName" id="item-name" placeholder="Item name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item-brand" class="col-sm-2 col-form-label">Item Brand:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" v-model="sItemBrand" id="item-brand" placeholder="Item brand">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item-qty" class="col-sm-2 col-form-label">Item Quantity:</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" v-model="sItemQty" id="item-qty" placeholder="Item quantity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item-qty" class="col-sm-2 col-form-label">Select Category:</label>
                        <div class="col-sm-5">
                            <multiselect 
                                v-model="aTags" 
                                :options="$store.state.oApi.oCategories.rows" 
                                :multiple="true" 
                                :close-on-select="false" 
                                :clear-on-select="false" 
                                :preserve-search="true" 
                                placeholder="Categories" 
                                label="name" 
                                track-by="name" 
                                :preselect-first="true">
                                <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} categories selected</span></template>
                            </multiselect>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category-img" class="col-sm-2 col-form-label">Item Images:</label>
                        <div class="col-sm-5">
                            <img :src="bPreviewImage" v-if="bPreviewImage !== null" class="uploading-image p-1 border" style="max-width: 200px; max-height: 200px"/>
                            <input type="file" class="mt-1" id="category-img" accept="image/jpeg" @change="uploadImage" multiple>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 mb-1">
                        <div class="row">
                            <div class="col-sm-7 bg-light border">
                                <div class="form-group form-inline m-3 ml-auto">
                                    <router-link :to="{ name: 'items'}">
                                        <button class="btn btn-outline-danger mr-1 my-2 my-sm-0">Cancel</button>
                                    </router-link>
                                    <button type="button" class="btn btn-outline-success mr-1 my-2 my-sm-0" @click="clearForms()">Clear</button>
                                    <button type="submit" class="btn btn-success my-2 my-sm-0">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect';
Vue.component('multiselect', Multiselect);
export default {
    data () {
        return {
            sItemName : '',
            sItemBrand : '',
            sItemQty : '',
            aTags : [],
            aCategIds : [],
            oImg : [],
            bPreviewImage : null,
        };
    },
    methods : {
        addItem : function () {
            if (this.recollectCategIds() === false) {
                this.aCategIds = [];
                return;
            }

            if (this.validateImgs() === false) {
                this.aCategIds = [];
                return;
            }
            
            let oThis = this;
            let oFormData = new FormData();
            oFormData.append('item_name', this.sItemName);
            oFormData.append('item_brand', this.sItemBrand);
            oFormData.append('item_qty', this.sItemQty);
            oFormData.append('item_categs', this.aCategIds);
            for (let i = 0; i < this.oImg.length; i++) {
               oFormData.append('file_' + i, this.oImg[i]); 
            }
            // oFormData.append(this.oImg);
            axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
            axios.post('/admin/api/item/add', oFormData)
            .then(function (bResponse) {
                if (bResponse.data === true) {
                    oThis.$store.dispatch('toast', {
                        bType : true,
                        sMsg : oThis.$store.state.oMessages.oAlerts.sSuccessAddItem,
                    });
                    oThis.$router.push({ name : 'items'});
                }

            })
            .catch(function (oResponse) {
                oThis.$store.dispatch('toast', {
                    bType : false,
                    sMsg : oThis.$store.state.oMessages.oAlerts.sFailAddItem,
                });
            });
        },
        clearForms : function () {
            this.sItemName = '',
            this.sItemBrand = '',
            this.sItemQty = ''
        },
        uploadImage : function (e) {
            this.oImg = [];
            let iImgCount = e.target.files.length;
            // for (let i = 0; i < iImgCount; i++) {
                const image = e.target.files[0];
                this.oImg = e.target.files;
                const reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e =>{
                    this.bPreviewImage = e.target.result;
                };
            // }
        },
        cancelSelect : function (e) {
            this.bPreviewImage = null;
            this.oImg = [];
        },
        recollectCategIds : function () {
            let iCategLen = this.aTags.length;
            if (iCategLen <= 0) {
                this.$store.dispatch('toast', {
                    bType : false,
                    sMsg : this.$store.state.oMessages.oAlerts.sNoCategSelected,
                });
                return false;
            }

            for (let i = 0; i < iCategLen; i++) {
                let iIndex = this.aCategIds.indexOf(this.aTags[i]['id']);
                if (iIndex === -1) {
                    this.aCategIds.push(this.aTags[i]['id']);
                }
            }

            return true;
        },
        validateImgs : function () {
            if (this.oImg.length === 0) {
                this.$store.dispatch('toast', {
                    bType : false,
                    sMsg : this.$store.state.oMessages.oAlerts.sNoImgSelected,
                });
                return false;
            }

            return true;
        }
    },
    mounted () {
        this.$store.dispatch('getCategories');
        this.aTags = [];
    },
    computed: {
    },
}
</script>