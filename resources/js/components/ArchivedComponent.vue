<template>
    <div class="col-sm-10 bg-white p-0 p-lg-5">
        <div class="container-fluid">
            <div class="row">
                <h2 class="ml-3 mt-3 font-weight-bold">Archived Details</h2>
            </div>
            <div class="row">
                <h4 class="ml-3 mt-5">Items</h4>
            </div>
            <div class="row">
                <div class="col-sm-12" style="">
                    <!-- <items-btns 
                        @onDelete="deleteItemsHandler"/> -->
                    <!-- <table-sub></table-sub> -->
                    <div class="col-xs-12 form-inline mt-3">
                        <div class="form-group">
                            <label for="filter" class="sr-only">Filter</label>
                            <input type="text" class="form-control" v-model="sItemFilter" placeholder="Search" @keydown="$event.stopImmediatePropagation()">
                        </div>
                    </div>
                    <div class="col-xs-12 table-responsive">
                        <table-sub
                            :s-show="'items-archived'"
                            :a-column="oItems.columns"
                            :a-data="oItemsRow"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4 class="ml-3 mt-5">Categories</h4>
            </div>
            <div class="row">
                <div class="col-sm-12" style="">
                    <!-- <items-btns 
                        @onDelete="deleteItemsHandler"/> -->
                    <!-- <table-sub></table-sub> -->
                    <div class="col-xs-12 form-inline mt-3">
                        <div class="form-group">
                            <label for="filter" class="sr-only">Filter</label>
                            <input type="text" class="form-control" v-model="sFilter" placeholder="Search" @keydown="$event.stopImmediatePropagation()">
                        </div>
                    </div>
                    <div class="col-xs-12 table-responsive">
                        <table-sub
                            :s-show="'categories-archived'"
                            :a-column="oCategories.columns"
                            :a-data="oCategoriesRow"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    mounted () {
        this.$store.dispatch('getArchivedCategories');
        this.$store.dispatch('getArchivedItems');
    },
    computed: {
        ...mapGetters({
            oCategories : 'oArchivedCategories',
            oItems : 'oArchivedItems'
        }),
        oCategoriesRow () {
            return this.oCategories.rows.filter(rows => {
                return rows.name.toLowerCase().indexOf(this.sFilter) !== -1 
                    || rows.description.toLowerCase().indexOf(this.sFilter) !== -1
            });
        },
        oItemsRow () {
            return this.oItems.rows.filter(rows => {
                return rows.item_name.toLowerCase().indexOf(this.sFilter) !== -1 
                    || rows.item_brand.toLowerCase().indexOf(this.sFilter) !== -1
            });
        },
        sFilter: {
            get () {
               return this.$store.getters.sFilter
            },
            set (value) {
                this.$store.commit('setFilter', value)
            }
        },
        sItemFilter: {
            get () {
               return this.$store.getters.sFilter
            },
            set (value) {
                this.$store.commit('setFilter', value)
            }
        }
    }
}
</script>