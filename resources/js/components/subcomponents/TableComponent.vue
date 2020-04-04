<template>
    <div class="container-fluid mt-3">
        <div class="table-responsive">
            <table class="table w-100">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="form-check">
                                <input
                                    v-model="bSelectAllItems"
                                    @click="selectAllItem"
                                    class="form-check-input position-static"
                                    type="checkbox">
                            </div>
                        </th>
                        <th
                            v-for="(aCol, index) in aColumn"
                            :key="index"
                            scope="col">
                            {{ aCol.label }}
                        </th>
                    </tr>
                </thead>
                <tbody
                    v-if="sShow === 'items'">
                    <tr
                        v-for="(aItem, iKey) in paginatedData"
                        :key="aItem.id">
                        <th scope="row">
                            <div class="form-check">
                                <input
                                    v-model="aSelectedItemsIds"
                                    :value="aItem.id"
                                    class="form-check-input position-static"
                                    type="checkbox">
                            </div>
                        </th>
                        <td>{{ iKey + 1 }}</td>
                        <td>{{ aItem.item_qty }}</td>
                        <td>{{ aItem.item_name }}</td>
                        <td>{{ aItem.item_brand }}</td>
                        <td>
                            <span v-for="aCateg in aItem.categories" :key="aCateg.name" class="badge badge-success p-2 m-1">{{aCateg.name}}</span>
                        </td>
                        <td>
                            <span v-if="aItem.is_featured === 1" class="badge badge-info text-white p-2 m-1">FEATURED</span>
                            <span v-else class="badge badge-secondary text-white p-2 m-1">NOT FEATURED</span>
                        </td>
                        <td>
                            <inline-btns
                                :s-todo="'items'"
                                :a-item="aItem"
                                ></inline-btns>
                        </td>
                    </tr>
                    <tr v-if="aData.length === 0" class="text-center"><td colspan="7">There is no data</td></tr>
                </tbody>
                <tbody
                    v-if="sShow === 'items-archived'">
                    <tr
                        v-for="(aItem, iKey) in paginatedData"
                        :key="aItem.id">
                        <th scope="row">
                            <div class="form-check">
                                <input
                                    v-model="aSelectedItemsIds"
                                    :value="aItem.id"
                                    class="form-check-input position-static"
                                    type="checkbox">
                            </div>
                        </th>
                        <td>{{ iKey + 1 }}</td>
                        <td>{{ aItem.item_qty }}</td>
                        <td>{{ aItem.item_name }}</td>
                        <td>{{ aItem.item_brand }}</td>
                        <td>
                            <span v-for="aCateg in aItem.categories" :key="aCateg.name" class="badge badge-success p-2 m-1">{{aCateg.name}}</span>
                        </td>
                        <td>
                            <!-- <inline-btns
                                :s-todo="'items'"
                                :a-item="aItem"
                                ></inline-btns> -->
                        </td>
                    </tr>
                    <tr v-if="aData.length === 0" class="text-center"><td colspan="7">There is no data</td></tr>
                </tbody>
                <tbody
                    v-if="sShow === 'categories'">
                    <tr
                        v-for="(aItem, iKey) in aData"
                        :key="aItem.id">
                        <th scope="row">
                            <div class="form-check">
                                <input
                                    v-model="aSelectedItemsIds"
                                    :value="aItem.id"
                                    class="form-check-input position-static"
                                    type="checkbox">
                            </div>
                        </th>
                        <td>{{ iKey + 1 }}</td>
                        <td>{{ aItem.name }}</td>
                        <td>{{ aItem.description }}</td>
                        <td>
                            <inline-btns
                                :s-todo="'categories'"
                                :a-item="aItem"
                                ></inline-btns>
                        </td>
                    </tr>
                    <tr v-if="aData.length === 0" class="text-center"><td colspan="7">There is no data</td></tr>
                </tbody>
                <tbody
                    v-if="sShow === 'categories-archived'">
                    <tr
                        v-for="(aItem, iKey) in aData"
                        :key="aItem.id">
                        <th scope="row">
                            <div class="form-check">
                                <input
                                    v-model="aSelectedItemsIds"
                                    :value="aItem.id"
                                    class="form-check-input position-static"
                                    type="checkbox">
                            </div>
                        </th>
                        <td>{{ iKey + 1 }}</td>
                        <td>{{ aItem.name }}</td>
                        <td>{{ aItem.description }}</td>
                        <td>
                            <!-- <inline-btns
                                :s-todo="'categories'"
                                :a-item="aItem"
                                ></inline-btns> -->
                        </td>
                    </tr>
                    <tr v-if="aData.length === 0" class="text-center"><td colspan="7">There is no data</td></tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-end">
                <paginate
                    :page-count="pageCount"
                    :page-range="5"
                    :click-handler="onPaginateHandler"
                    :prev-text="'Prev'"
                    :next-text="'Next'"
                    container-class="pagination"
                    page-class="page-item"
                    page-link-class="page-link"
                    next-class="page-item"
                    prev-class="page-item"
                    prev-link-class="page-link"
                    next-link-class="page-link"	/>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props : {
        sShow : {
            type : String,
            default : 'items'
        },
        aColumn : {
            type : Array,
            default () {
                return [
                    'Name', 'Brand', 'Category', 'Qty'
                ]
            }
        },
        aData : {
            type : Array,
            default () {
                return [
                    [1, 'Oven Toaster', 'Dowell', 'Toaster', 5],
                    [1, 'ABC Steamer', 'ABCApply', 'Steamer', 3]
                ]
            }
        },
        iItemsPerPage: {
            type: Number,
            default: 10
        }
    },
    data: () => ({
        aSelectedItemsIds: [],
        bSelectAllItems: false,
        iInc : 0,
        paginatedData: [],
        currentPage: 1
    }),
    computed: {
        pageCount () {
           return parseInt((this.aData.length / this.iItemsPerPage).toFixed(0), 10)
        }
    },
    watch: {
        aSelectedItemsIds() {
            this.$store.commit('setDeleteIds', this.aSelectedItemsIds)
        },
        currentPage: {
            handler: 'constructPageData',
        },
        aData: {
            handler: 'constructPageData',
            immediate: true
        },
    },
    created () {
        this.iInc = 0;
    },
    methods: {
        onPaginateHandler (newPage) {
            this.currentPage = newPage
        },
        constructPageData () {
            if (this.pageCount === 0 || this.aData.length === 0) {
                this.paginatedData = []
                return
            }
            const offset = (this.currentPage * this.iItemsPerPage)
            const start = (offset - this.iItemsPerPage)
            this.paginatedData = [ ...this.aData ].filter((data, index) => (index >= start && index < offset))
        },
        selectAllItem() {
            this.aSelectedItemsIds = [];

            if (this.bSelectAllItems === false) {
                this.aData.map(item => {
                    this.aSelectedItemsIds.push(item.id)
                })
            }
        }
    }
}
</script>   