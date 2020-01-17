import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state : {
        oMessages : {
            oAlerts : {
                sSuccessAddItem : 'Item is successfully added',
                sFailAddItem : 'Please check item credentials',
                sSuccessAddCategory : 'Category is successfully added',
                sFailAddCategory : 'Please check category credentials',
                sNoCategSelected : 'There is no category selected',
                sNoImgSelected : 'There is no image selected',
                sSuccessDeleteItems: 'Item(s) successfully deleted',
                sFailDeleteItems: 'Failed to delete item(s), please try again',
                sSuccessDeleteCategory: 'Categories successfully deleted',
                sFailDeleteCategory: 'Failed to delete categories, please try again',
                sSuccessUpdateItem : 'Item is successfully updated',
                sFailUpdateItem : 'Please check category credentials',
                sMinFiveChars : 'Minimum of Five characters each text field',
                sSuccessArchive : 'Successfully archived',
                sFailArchive : 'Archive failed',
            },
            iPage : 1,
            sFilter : '',
        },
        oLabels : {
            oSideNav : [
                {
                    sLabel : 'Dashboard',
                    sRoute : 'dashboard'
                },
                {
                    sLabel : 'Items',
                    sRoute : 'items'
                },
                {
                    sLabel : 'Item categories',
                    sRoute : 'categories'
                },
                {
                    sLabel : 'Orders',
                    sRoute : 'orders'
                },
                {
                    sLabel : 'Customers',
                    sRoute : 'customers'
                },
                {
                    sLabel : 'Reports',
                    sRoute : 'reports'
                },
                {
                    sLabel : 'Archived details',
                    sRoute : 'archived'
                }
            ]
        },
        oApi : {
            oItems : {
                columns: [
                    {label: 'No', field: 'no'},
                    {label: 'Quantity', field: 'item_qty', headerClass: 'class-in-header second-class'},
                    {label: 'Item Name', field: 'item_name'},
                    {label: 'Item Brand', field: 'item_brand'},
                    {label: 'Category', field: 'item_name'},
                    {label: 'Action', field: 'action'},
                    // {label: 'Address', representedAs: ({address, city, state}) => `${address}<br />${city}, ${state}`, interpolate: true}
                ],
                rows: []
            },
            oCategories : {
                columns: [
                    {label: 'No', field: 'no'},
                    {label: 'Category Name', field: 'name'},
                    {label: 'Category Description', field: 'description'},
                    {label: 'Action', field: 'action'},
                    // {label: 'Address', representedAs: ({address, city, state}) => `${address}<br />${city}, ${state}`, interpolate: true}
                ],
                rows: []
            },
        },
        aToBeDeletedIds: []
    },
    mutations: {
        setFilter: (state, value) => {
            state.oMessages.sFilter = value;
        },
        setItems: (state, payload) => {
            state.oApi.oItems.rows = payload;
        },
        setCategories: (state, payload) => {
            state.oApi.oCategories.rows = payload;
        },
        setDeleteIds: (state, payload) => {
            state.aToBeDeletedIds = payload;
        }
    },
    actions: {
        toast : function (context, { bType, sMsg }) {
            if (bType === false) {
                Vue.$toast.open({
                    message : sMsg,
                    type : 'error',
                    position : 'top'
                });
                return;
            }
            
            Vue.$toast.open({
                message : sMsg,
                type : 'success',
                position : 'top'
            });
        },
        getItems : function (context) {
            axios.get('/admin/api/item/load')
                .then(function (oResponse) {
                    context.commit('setItems', oResponse.data)
                })
        },
        getCategories : function (context) {
            axios.get('/admin/api/category/load')
                .then(function (oResponse) {
                    context.commit('setCategories', oResponse.data)
                })
        },
        deleteItems: ({dispatch, commit, state}) => {
            const ids = [...state.aToBeDeletedIds]
            if (ids.length >= 1) {
                axios.post('/admin/api/item/delete', {id: ids})
                    .then(function (oResponse) {
                        if (oResponse.data.result === true) {
                            dispatch('getItems');
                            dispatch('toast', {
                                bType : true,
                                sMsg : state.oMessages.oAlerts.sSuccessDeleteItems
                            });
                            commit('setDeleteIds', []);
                        }
                    })
                    .catch(err => {
                        dispatch('toast', {
                            bType : false,
                            sMsg : state.oMessages.oAlerts.sFailDeleteItems
                        });
                    })
            }
        },
        deleteCategories: ({dispatch, commit, state}) => {
            const ids = [...state.aToBeDeletedIds]
            if (ids.length >= 1) {
                axios.post('/admin/api/category/delete', {id: ids})
                    .then(function (oResponse) {
                        if (oResponse.data.result === true) {
                            dispatch('getCategories');
                            dispatch('toast', {
                                bType : true,
                                sMsg : state.oMessages.oAlerts.sSuccessDeleteCategory
                            });
                            commit('setDeleteIds', []);
                        }
                    })
                    .catch(err => {
                        dispatch('toast', {
                            bType : false,
                            sMsg : state.oMessages.oAlerts.sFailDeleteCategory
                        });
                    })
            }
        }
    },
    getters: {
        oItems: state => state.oApi.oItems,
        oCategories: state => state.oApi.oCategories,
        sFilter: state => state.oMessages.sFilter,
        aToBeDeletedItems: state => state.aToBeDeletedItems
    }
});