<template>
    <div class="col-sm-10 bg-white p-0 p-lg-5">
        <div class="container-fluid">
            <div class="row">
                <h2 class="ml-3 mt-3 font-weight-bold">Dashboard </h2>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="oItemsViews + ' views'"
                    :s-card-label="'Total Website Views'">
                </dashboard-card>
                <dashboard-card
                    :s-title="oItemsViewed + ' items'"
                    :s-card-label="'Items Viewed'">
                </dashboard-card>
                <dashboard-card
                    :s-title="oQuotesRow + ' users'"
                    :s-card-label="'Subscribed to Newsletter'">
                </dashboard-card>
                <dashboard-card
                    :s-title="oItemsRow + ' pcs'"
                    :s-card-label="'Warehouse Stock'">
                </dashboard-card>
            </div>
            <div class="row">
                <div class="col-sm-8" style="">
                    <line-graph :height="180"></line-graph>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
    methods : {
        
    },
    mounted () {
        this.$store.dispatch('getQuotes');
        this.$store.dispatch('getItems');
    },
    computed: {
        ...mapGetters({
            oItemsWhole : 'oItems',
            oQuotesWhole : 'oQuotes'
        }),
        oQuotesRow () {
            return this.oQuotesWhole.rows.length;
        },
        oItemsRow () {
            return this.oItemsWhole.rows.length;
        },
        oItemsViewed () {
            return this.oItemsWhole.rows.filter(rows => {
                return rows.views !== 0
            }).length;
        },
        oItemsViews () {
            let oTotalViews = 0;
            
            let oWithViews = this.oItemsWhole.rows.filter(rows => {
                return rows.views !== 0
            });

            oWithViews.forEach(function (aRow, iKey) {
                oTotalViews += aRow.views;
            });

            return oTotalViews;
        }
    }
}
</script>