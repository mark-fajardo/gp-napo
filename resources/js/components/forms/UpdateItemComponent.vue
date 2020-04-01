<template>
    <div class="col-sm-10 bg-white p-0 p-lg-5">
        <div class="container-fluid">
            <div class="row p-2">
                <router-link :to="{ name: 'items'}">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button">Back</button>
                </router-link>
                <div class="navbar-brand ml-4" href="#">
                    Update Item
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
                                v-model="aItem.categories" 
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
                        <label for="category-img" class="col-sm-2 col-form-label">Feature this item:</label>
                        <div class="col-sm-5">
                            <input type="checkbox" v-model="isFeatured">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category-img" class="col-sm-2 col-form-label">Item Images:</label>
                        <div class="col-sm-5">
                            <input ref="itemImages" type="file" class="mt-1" id="category-img" accept="image/*" @change="uploadImage" multiple>
                        </div>
                    </div>
                    <div v-if="oImgSortable.length !== 0" class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Preview <br> 
                            <small><i>Drag the panel to order the image</i></small>
                        </label>       
                        <div class="col-sm-5">
                            <ImageList 
                                lockAxis="y" 
                                v-model="oImgSortable" 
                                @sort-start="onSorting('start')"
                                @sort-end="onSorting('end')"
                                :style="{cursor: selectedCursor}"
                            >  
                                <ImageItem 
                                    v-for="(item, index) in oImgSortable " 
                                    :index="index" 
                                    :key="index" 
                                    :imageData="item"
                                    :isImageFromApi="isImageFromApi"
                                    @delete="removeImage"
                                />
                            </ImageList> 
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
                                    <button type="submit" class="btn btn-success my-2 my-sm-0">Update</button>
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
import ImageList from './DraggableImage/ImageList'
import ImageItem from './DraggableImage/ImageItem'

export default {
    components: {
        'multiselect': Multiselect,
        ImageList,
        ImageItem
    },
    props : {
        aItem : {
            type : Object,
            default : () => {}
        }
    },
    data () {
        return {
            iItemId : 0,
            sItemName : '',
            sItemBrand : '',
            sItemQty : '',
            aCategIds : [],
            isFeatured: false,
            oImg : [],
            oImgSortable: [],
            isImageFromApi: true,
            selectedCursor: 'grab',
            bPreviewImage : null,
        };
    },
    created () {
        if (this.aItem === undefined || this.aItem === null) {
            this.$router.push({ name : 'items'});
            return;
        }
        this.iItemId = this.aItem.id;
        this.sItemName = this.aItem.item_name;
        this.sItemBrand = this.aItem.item_brand;
        this.sItemQty = this.aItem.item_qty;
        this.isFeatured = this.aItem.is_featured === 1
        this.oImg = this.aItem.img_dir
        this.oImgSortable = this.aItem.img_dir
    },
    beforeDestroy() {
        this.isImageFromApi = true
        this.oImg = []
        this.oImgSortable = []
    },
    methods : {
        addItem : function () {
            const oImg = this.getSortedImages()
            if (this.recollectCategIds() === false) {
                this.aCategIds = [];
                return;
            }

            if (!this.validateImgs()) return
            
            let oThis = this;
            let oFormData = new FormData();
            oFormData.append('item_id', this.iItemId);
            oFormData.append('item_name', this.sItemName);
            oFormData.append('item_brand', this.sItemBrand);
            oFormData.append('item_qty', this.sItemQty);
            oFormData.append('item_categs', this.aCategIds);
            oFormData.append('isFeatured', this.isFeatured);
            if (this.isImageFromApi) {
                oFormData.append('img_dir', oImg);
            } else {
                for (let i = 0; i < oImg.length; i++) {
                    oFormData.append('file_' + i, oImg[i]); 
                }
            }

            axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
            axios.post('/admin/api/item/update', oFormData)
            .then(function (bResponse) {
                if (bResponse.status === 200) {
                    oThis.$store.dispatch('toast', {
                        bType : true,
                        sMsg : oThis.$store.state.oMessages.oAlerts.sSuccessUpdateItem,
                    });
                    oThis.$router.push({ name : 'items'});
                }
            })
            .catch(function (oResponse) {
                oThis.$store.dispatch('toast', {
                    bType : false,
                    sMsg : oThis.$store.state.oMessages.oAlerts.sFailUpdateItem,
                });
                oThis.$store.dispatch('toast', {
                    bType : false,
                    sMsg : oThis.$store.state.oMessages.oAlerts.sMinFiveChars,
                });
            });
        },
        clearForms : function () {
            this.sItemName = '',
            this.sItemBrand = '',
            this.sItemQty = ''
        },
        uploadImage : function (e) {
            this.isImageFromApi = false
            this.oImg = []
            this.oImgSortable = []
            const oImg = [];
            const oImgSortable = []
            const imagesFiles = this.$refs.itemImages.files
            Array.from(imagesFiles).forEach((file, i) => {
                const data = new FormData();
                const extension = file.name.substring(file.name.lastIndexOf('.'))
                const newFileName = file.name.replace(extension, `-image-${i}`) + extension
                data.append(newFileName, file, newFileName);
                const newImage = data.get(newFileName);
                this.getPreviewImage(newImage, (image) => {
                    const { src } = image
                    const base64Src = `data:${newImage.type};base64,${src}`
                    oImgSortable.push({
                        id: i,
                        name: newImage.name,
                        size: newImage.size,
                        src: base64Src
                    })
                })
                oImg.push(newImage)
            })
            this.oImg = oImg
            this.oImgSortable = oImgSortable
            this.$refs.itemImages.value = ''
        },
        removeImage(name) {
            if (this.oImg.length <= 1) {
                alert('There should be atleast 1 Image')
                return
            }
            const newSortableImage = !this.isImageFromApi ? this.oImgSortable.filter(image => image.name !== name) : this.oImgSortable.filter(image => image !== name)
            const newImages = !this.isImageFromApi ? this.oImg.filter(image => image.name !== name) : this.oImg.filter(image => image !== name)
            this.oImg = newImages
            this.oImgSortable = newSortableImage
        },
        getSortedImages() {
            const oImgSortable = [...this.oImgSortable]
            const oImg = [...this.oImg]
            const images = !this.isImageFromApi ? oImgSortable.map(sortImage => oImg.find(image => image.name === sortImage.name)) : oImgSortable

            return images.reverse()
        },
        getPreviewImage(file, callback) {
            const image = {}
            const reader = new FileReader()
            reader.onload = (e) => {
                const src = btoa(e.target.result)
                image.src = src
                callback(image)
            }
            reader.readAsBinaryString(file) 
        },
        onSorting(type) {
            this.selectedCursor = type === 'start' ? 'grabbing' : 'grab'
        },
        cancelSelect : function (e) {
            this.bPreviewImage = null;
            this.oImg = [];
        },
        recollectCategIds : function () {
            let iCategLen = this.aItem.categories.length;
            if (iCategLen <= 0) {
                this.$store.dispatch('toast', {
                    bType : false,
                    sMsg : this.$store.state.oMessages.oAlerts.sNoCategSelected,
                });
                return false;
            }

            for (let i = 0; i < iCategLen; i++) {
                let iIndex = this.aCategIds.indexOf(this.aItem.categories[i]['id']);
                if (iIndex === -1) {
                    this.aCategIds.push(this.aItem.categories[i]['id']);
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