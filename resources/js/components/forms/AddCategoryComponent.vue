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
                    <div class="form-group row">
                        <label for="category-name" class="col-sm-2 col-form-label">Category Description:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" v-model="sCategoryDesc" id="category-name" placeholder="Category description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category-img" class="col-sm-2 col-form-label">Category Image:</label>
                        <div class="col-sm-5">
                            <img :src="bPreviewImage" v-if="bPreviewImage !== null" class="uploading-image p-1 border" style="max-width: 200px; max-height: 200px"/>
                            <input type="file" class="mt-1" id="category-img" accept="image/jpeg" @change="uploadImage">
                        </div>
                        <!-- <upload-image is="upload-image"
   :url="'https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjarsLWq4PnAhUm-2EKHXZjBasQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.shutterstock.com%2Fcategory%2Fnature&psig=AOvVaw27AUjyVWwN8nmADyS-EHNE&ust=1579099899119899'"></upload-image> -->
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
            sCategoryDesc : '',
            bPreviewImage : null,
            oImg : [],
        };
    },
    methods : {
        addCategory : function () {
            let oThis = this;
            let oFormData = new FormData();
            oFormData.append('category_name', this.sCategoryName);
            oFormData.append('category_desc', this.sCategoryDesc);
            oFormData.append('category_img', this.oImg);
            console.log(this.oImg);
            axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
            axios.post('/admin/api/category/add', oFormData)
            .then(function (bResponse) {
                if (bResponse.data === true) {
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
        },
        uploadImage : function (e){
            const image = e.target.files[0];
            const reader = new FileReader();
            reader.readAsDataURL(image);
            reader.onload = e =>{
                this.oImg = image;
                this.bPreviewImage = e.target.result;
            };
        }
    }
}
</script>