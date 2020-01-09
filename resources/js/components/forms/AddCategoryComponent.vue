<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row p-2">
                <router-link :to="{ name: 'categories'}">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button">Back</button>
                </router-link>
                <div class="navbar-brand ml-4" href="#">
                    Add Category
                </div>
            </div>
            <div class="mt-3 ml-2">
                <form action="#/categories/add">
                    <div class="form-group row">
                        <label for="category-name" class="col-sm-2 col-form-label">Category Name:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" v-model="sCategoryName" id="category-name" placeholder="Category name">
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
                                    <button type="submit" class="btn btn-success my-2 my-sm-0" @click="addCategory()">Add</button>
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
export default {
    data () {
        return {
            sCategoryName : '',
        };
    },
    methods : {
        addCategory : function () {
            let oThis = this;
            axios.post('/admin/api/category/add', {
                category_name : oThis.sCategoryName,
            })
            .then(function (bResponse) {
                if (bResponse.data === true) {
                    // Vue.$toast.open(oThis.$store.state.oMessages.oAlerts.sSuccessAddItem);
                    oThis.$store.dispatch('toast', {
                        bType : true,
                        sMsg : oThis.$store.state.oMessages.oAlerts.sSuccessAddCategory,
                    });
                    oThis.$router.push({ name : 'categories'});
                    return;
                }

                
            })
            .catch(function (oResponse) {
                oThis.$store.dispatch('toast', {
                    bType : false,
                    sMsg : oThis.$store.state.oMessages.oAlerts.sFailAddCategory,
                });
            });
        },
        clearForms : function () {
            this.sCategoryName = '';
        }
    }
}
</script>