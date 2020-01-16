<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <h3>Categories</h3>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="$store.state.oApi.oCategories.rows.length + ' records'"
                    :s-card-label="'Total categories'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'0 items'"
                    :s-card-label="'Archived categories'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'0 items'"
                    :s-card-label="'Changed category related'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'0 items'"
                    :s-card-label="'Returned category related'">
                </dashboard-card>
            </div>
            <div class="row">
                <div class="col-sm-12" style="">
                    <categories-btns></categories-btns>
                    <!-- <table-sub></table-sub> -->
                    <div class="col-xs-12 form-inline mt-3">
                        <div class="form-group">
                            <label for="filter" class="sr-only">Search</label>
                            <input type="text" class="form-control" v-model="sFilter" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-xs-12 table-responsive">

                        <table-sub
                            :s-show="'categories'"
                            :a-column="oCategoriesWhole.columns"
                            :a-data="oItemsRow"/>
                    </div>
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
        this.$store.dispatch('getCategories');
    },
    computed: {
        ...mapGetters({
            oCategoriesWhole : 'oCategories'
        }),
        oItemsRow () {
            return this.oCategoriesWhole.rows.filter(rows => {
                return rows.name.toLowerCase().indexOf(this.sFilter) !== -1 
                    || rows.description.toLowerCase().indexOf(this.sFilter) !== -1
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