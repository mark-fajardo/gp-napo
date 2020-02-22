<template>
    <div class="container-fluid mt-3">
        
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
        }
    },
    data: () => ({
        aSelectedItemsIds: [],
        bSelectAllItems: false,
        iInc : 0,
    }),
    created () {
        this.iInc = 0;
    },
    methods: {
        selectAllItem() {
            this.aSelectedItemsIds = [];

            if (this.bSelectAllItems === false) {
                this.aData.map(item => {
                    this.aSelectedItemsIds.push(item.id)
                })
            }
        }
    },
    watch: {
        aSelectedItemsIds() {
            this.$store.commit('setDeleteIds', this.aSelectedItemsIds)
        }
    }
}
</script>   