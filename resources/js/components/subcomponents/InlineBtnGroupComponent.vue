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
                    <button type="button" class="btn btn-warning btn-sm">Archive</button>
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
            default : {}
        }
    },
    methods: {
        onDelete() {
            console.log(this.aItem)
            const id = this.aItem.id.toString();
            const aId = id.split().map(n => parseInt(n, 10))
            
            if (confirm('Are you sure you want to delete this items?')) {
                this.$store.commit('setDeleteIds', aId)
                this.sTodo === 'items' ? this.$store.dispatch('deleteItems') : this.$store.dispatch('deleteCategories')
            }
        }
    }
}
</script>   