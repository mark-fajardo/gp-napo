<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <h3>Dashboard</h3>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="'38 views'"
                    :s-card-label="'Total Website Views'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'42 items'"
                    :s-card-label="'Items Viewed'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'32 users'"
                    :s-card-label="'Subscribed to Newsletter'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'300 pcs'"
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
export default {
    
}
</script>