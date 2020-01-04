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
            <div class="row">
                <form class="m-3">
                    <div class="form-group form-inline m-b1">
                        <label for="item-name" class="mr-3">Item Name:</label>
                        <input type="text" class="form-control" id="item-name" placeholder="Item name">
                    </div>
                    <div class="form-group form-inline mb-1">
                        <label for="item-brand" class="mr-3">Item Brand:</label>
                        <input type="text" class="form-control" id="item-brand" placeholder="Item brand">
                    </div>
                    <div class="form-group form-inline mb-1">
                        <label for="item-qty" class="mr-3">Item Quantity:</label>
                        <input type="number" class="form-control" id="item-qty" placeholder="Item quantity">
                    </div>
                    <div class="form-group form-inline mt-5 mb-1">
                        <button class="btn btn-outline-danger mr-1 my-2 my-sm-0">Cancel</button>
                        <button class="btn btn-outline-success mr-1 my-2 my-sm-0">Clear</button>
                        <button class="btn btn-success my-2 my-sm-0">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>