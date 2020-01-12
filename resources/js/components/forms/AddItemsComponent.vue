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
                <form action="#/items/add">
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
                        <vue-tags-input
                            v-model="sTags"
                            :tags="aTags"
                            :autocomplete-items="filteredItems"
                            @tags-changed="newTags => aTags = newTags"
                            />
                    </div>
                    <div class="container-fluid mt-5 mb-1">
                        <div class="row">
                            <div class="col-sm-7 bg-light border">
                                <div class="form-group form-inline m-3 ml-auto">
                                    <router-link :to="{ name: 'items'}">
                                        <button class="btn btn-outline-danger mr-1 my-2 my-sm-0">Cancel</button>
                                    </router-link>
                                    <button type="button" class="btn btn-outline-success mr-1 my-2 my-sm-0" @click="clearForms()">Clear</button>
                                    <button type="submit" class="btn btn-success my-2 my-sm-0" @click="addItem()">Add</button>
                                </div>
                                <pre>{{filteredItems}}</pre>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            sItemName : '',
            sItemBrand : '',
            sItemQty : '',
            sTags : '',
            aTags : [],
            autocompleteItems : this.$store.state.oApi.oCategories.rows,
        };
    },
    methods : {
        addItem : function () {
            let oThis = this;
            axios.post('/admin/api/item/add', {
                item_name : oThis.sItemName,
                item_brand : oThis.sItemBrand,
                item_qty : oThis.sItemQty,
            })
            .then(function (bResponse) {
                console.log(bResponse)
                if (bResponse.data === true) {
                    // Vue.$toast.open(oThis.$store.state.oMessages.oAlerts.sSuccessAddItem);
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
        }
    },
    mounted () {
        this.$store.dispatch('getCategories');
    },
    computed: {
        filteredItems () {
            return this.$store.state.oApi.oCategories.rows.filter(i => {
                return i.name.toLowerCase().indexOf(this.sTags.toLowerCase()) !== -1;
            });
        },
    },
}
</script>