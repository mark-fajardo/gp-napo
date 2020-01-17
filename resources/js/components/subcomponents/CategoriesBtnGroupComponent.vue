<template>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <router-link type="button" class="btn btn-success" :to="{ name: 'add-categories'}">
                        Add Category
                    </router-link>
                    <!-- <button type="button" class="btn btn-primary">Update</button> -->
                    <button type="button" class="btn btn-warning">Archive</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>