<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <h3>Items</h3>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="oItemsWhole.rows.length + ' items'"
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
                    <items-btns 
                        @onDelete="deleteItemsHandler"/>
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
                            :a-column="oItemsWhole.columns"
                            :a-data="oItemsRow"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    methods : {
        deleteItemsHandler() {
            if (confirm('Are you sure you want to delete this items?')) {
                this.$store.dispatch('deleteItems')
            }
        }
    },
    mounted () {
        this.$store.dispatch('getItems');
    },
    computed: {
        ...mapGetters({
            oItemsWhole : 'oItems'
        }),
        oItemsRow () {
            return this.oItemsWhole.rows.filter(rows => {
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
        }
    }
}
</script>