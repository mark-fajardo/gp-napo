<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <h3>Items</h3>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="'3 sold'"
                    :s-card-label="'Total Items Sold'">
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
                    <table-sub></table-sub>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>