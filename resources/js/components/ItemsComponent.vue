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
                    <products-btns></products-btns>
                    <!-- <table-sub></table-sub> -->
                    <div class="col-xs-12 form-inline mt-3">
                        <div class="form-group">
                            <label for="filter" class="sr-only">Filter</label>
                            <input type="text" class="form-control" v-model="$store.state.oMessages.sFilter" placeholder="Filter">
                        </div>
                    </div>
                    <div class="col-xs-12 table-responsive">
                        <datatable class="table mt-3" :columns="$store.state.oApi.oItems.columns" :data="$store.state.oApi.oItems.rows" :per-page="10"></datatable>
                        <datatable-pager v-model="$store.state.oMessages.iPage" type="abbreviated"></datatable-pager>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods : {
        getItems : function () {
            let oThis = this;
            axios.get('/admin/api/item/load')
                .then(function (oResponse) {
                    oThis.$store.state.oApi.oItems.rows = oResponse.data;
                })
        }
    },
    mounted () {
        this.getItems();
    }
}
</script>