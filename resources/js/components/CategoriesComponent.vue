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
                            <label for="filter" class="sr-only">Filter</label>
                            <input type="text" class="form-control" v-model="$store.state.oMessages.sFilter" placeholder="Filter">
                        </div>
                    </div>
                    <div class="col-xs-12 table-responsive">

                        <table-sub
                            :s-show="'categories'"
                            :a-column="$store.state.oApi.oCategories.columns"
                            :a-data="$store.state.oApi.oCategories.rows"/>

                        <!-- <datatable class="table mt-3" :columns="$store.state.oApi.oCategories.columns" :data="$store.state.oApi.oCategories.rows" :per-page="10"></datatable>
                        <datatable-pager v-model="$store.state.oMessages.iPage" type="abbreviated"></datatable-pager> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods : {

    },
    mounted () {
        this.$store.dispatch('getCategories');
    }
}
</script>