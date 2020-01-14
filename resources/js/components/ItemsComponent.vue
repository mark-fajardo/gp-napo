<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <h3>Items</h3>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="$store.state.oApi.oItems.rows.length + ' items'"
                    :s-card-label="'Total Items'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'0 items'"
                    :s-card-label="'Archived Items'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'0 refunds'"
                    :s-card-label="'Changed Items'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'0 items'"
                    :s-card-label="'Returned Items'">
                </dashboard-card>
            </div>
            <div class="row">
                <div class="col-sm-12" style="">
                    <items-btns></items-btns>
                    <!-- <table-sub></table-sub> -->
                    <div class="col-xs-12 form-inline mt-3">
                        <div class="form-group">
                            <label for="filter" class="sr-only">Filter</label>
                            <input type="text" class="form-control" v-model="sFilter" placeholder="Search" @keydown="$event.stopImmediatePropagation()">
                        </div>
                    </div>
                    <div class="col-xs-12 table-responsive">
                        <table-sub
                            :s-show="'items'"
                            :a-column="oItems.columns"
                            :a-data="oItems.rows"/>
                        <!-- <datatable-pager v-model="$store.state.oMessages.iPage" type="abbreviated"></datatable-pager> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Table from './subcomponents/TableComponent'
import { mapGetters } from 'vuex'

export default {
    components: {
        Table
    },
    methods : {
        
    },
    created () {
        this.$store.dispatch('getItems');
    },
    computed: {
        ...mapGetters(['oItems']),
        sFilter: {
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