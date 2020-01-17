<template>
    <div class="container-fluid">
        <div class="row">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <router-link v-if="sTodo === 'categories'" type="button" class="btn btn-primary btn-sm" :to="{ name: 'update-categories', params: { aItem } }">
                        Update
                    </router-link>
                    <router-link v-if="sTodo === 'items'" type="button" class="btn btn-primary btn-sm" :to="{ name: 'update-items', params: { aItem } }">
                        Update
                    </router-link>
                    <button type="button" @click="archiveRow()" class="btn btn-warning btn-sm">Archive</button>
                    <button 
                        @click="onDelete"
                        type="button"
                         class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props : {
        sTodo : {
            type : String,
            default : 'items'
        },
        aItem : {
            type : Object,
            default : () => {}
        }
    },
    methods: {
        onDelete() {
            const id = this.aItem.id.toString();
            const aId = id.split().map(n => parseInt(n, 10))
            
            if (confirm('Are you sure you want to delete this items?')) {
                this.$store.commit('setDeleteIds', aId)
                this.sTodo === 'items' ? this.$store.dispatch('deleteItems') : this.$store.dispatch('deleteCategories')
            }
        },
        archiveRow () {
            if (confirm('Archive this row?')) {
                let oThis = this;
                let sEndPoint = (this.sTodo === 'categories' ? '/admin/api/category/archive' : '/admin/api/item/archive' );
                axios.post(sEndPoint, {
                    'id' : [this.aItem.id]
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
