<template>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <router-link type="button" class="btn btn-success" :to="{ name: 'add-categories'}">
                        Add Category
                    </router-link>
                    <!-- <button type="button" class="btn btn-primary">Update</button> -->
                    <button type="button" @click="archiveRow()" class="btn btn-warning">Archive</button>
                    <button 
                         @click="emitDelete"
                        type="button" 
                        class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        emitDelete() {
            this.$emit('onDelete')
        },
        archiveRow () {
            if (confirm('Archive this row?')) {
                let oThis = this;
                axios.post('/admin/api/category/archive', {
                    'id' : oThis.$store.state.aToBeDeletedIds
                })
                .then(function (bResponse) {
                    if (bResponse.data === true) {
                        oThis.$store.dispatch('toast', {
                            bType : true,
                            sMsg : oThis.$store.state.oMessages.oAlerts.sSuccessArchive,
                        });
                        oThis.$router.go();
                    }

                })
                .catch(function (oResponse) {
                    oThis.$store.dispatch('toast', {
                        bType : false,
                        sMsg : oThis.$store.state.oMessages.oAlerts.sFailArchive,
                    });
                });
            }
        }
    }
}
</script>