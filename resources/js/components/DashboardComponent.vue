<template>
    <div class="col-sm-10 bg-white p-0 p-lg-5">
        <div class="container-fluid">
            <div class="row">
                <h2 class="ml-3 mt-3 font-weight-bold">Dashboard</h2>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="oItemsViews + ' views'"
                    :s-card-label="'Items\' Total Views'">
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
            <div class="row" v-if="bShowGraph">
                <div class="col-sm-8" style="">
                    <line-graph 
                        :height="240"
                        :s-title="'Recently Viewed Pages (Max: 25)'"
                        :s-label="'Views'"
                        :s-label2="'Visitors'"
                        :a-labels="aVisitors[0]"
                        :a-data="aVisitors[1]"
                        :a-data2="aVisitors[2]">
                    </line-graph>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
    data () {
        return {
            bShowGraph : false
        }
    },
    methods : {
        refreshDashboard () {
            this.$forceUpdate();
        },
        getSpecificIndex (aArray, sIndex, sIndex2 = '', sIndex3 = '') {
            let aLabel = [];
            let aData = [];
            let aData2 = [];
            
            for (let aKey in aArray) {
                let sFirstIndex = aArray[aKey][sIndex].replace('GP NAPO Branded Bull Equipment', '');
                sFirstIndex = sFirstIndex.replace('Search results for:', 'Search:');
                sFirstIndex = sFirstIndex.replace(' | ', '');

                if (sFirstIndex !== '') {
                    aLabel.push(sFirstIndex);
                }
                
                if (sIndex2 !== '') {
                    aData.push(aArray[aKey][sIndex2]);
                }
                
                if (sIndex3 !== '') {
                    aData2.push(aArray[aKey][sIndex3]);
                }

                if (aKey === '25') {
                    break;
                }
            }

            return [aLabel, aData, aData2];
        }
    },
    mounted () {
        this.$store.dispatch('getAnalytics');
        this.$store.dispatch('getQuotes');
        this.$store.dispatch('getItems');
        this.bShowGraph = true;
    },
    computed: {
        ...mapGetters({
            oItemsWhole : 'oItems',
            oQuotesWhole : 'oQuotes',
            oAnalyticsWhole : 'oAnalytics'
        }),
        aVisitors () {
            return this.getSpecificIndex(this.oAnalyticsWhole.visitors, 'pageTitle', 'pageViews', 'visitors');
        },
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
        },

    }
}
</script>