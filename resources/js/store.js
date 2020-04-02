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
                sSuccessReplied : 'Successfully marked as replied',
                sFailReplied : 'Failed to marked as replied',
            },
            iPage : 1,
            sFilter : '',
            sFilter2 : '',
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
                    sLabel : 'Quotes',
                    sRoute : 'quotes'
                },
                // {
                //     sLabel : 'Orders',
                //     sRoute : 'orders'
                // },
                // {
                //     sLabel : 'Customers',
                //     sRoute : 'customers'
                // },
                // {
                //     sLabel : 'Reports',
                //     sRoute : 'reports'
                // },
                {
                    sLabel : 'Archived details',
                    sRoute : 'archived'
                }
            ]
        },
        oApi : {
            oAnalytics : [],
            oItems : {
                columns: [
                    {label: 'No', field: 'no'},
                    {label: 'Quantity', field: 'item_qty', headerClass: 'class-in-header second-class'},
                    {label: 'Item Name', field: 'item_name'},
                    {label: 'Item Brand', field: 'item_brand'},
                    {label: 'Category', field: 'item_name'},
                    {label: 'Featured', field: 'is_featured'},
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
            oQuotes : {
                columns: [
                    {label: 'No', field: 'no'},
                    {label: 'First Name', field: 'first_name'},
                    {label: 'Last Name', field: 'last_name'},
                    {label: 'Email', field: 'email'},
                    {label: 'Phone', field: 'phone'},
                    {label: 'Company Name', field: 'company_name'},
                    {label: 'Message', field: 'request_message'}
                ],
                rows: []
            },
            oArchivedCategories  : {
                columns: [
                    {label: 'No', field: 'no'},
                    {label: 'Category Name', field: 'name'},
                    {label: 'Category Description', field: 'description'},
                    {label: 'Action', field: 'action'},
                    // {label: 'Address', representedAs: ({address, city, state}) => `${address}<br />${city}, ${state}`, interpolate: true}
                ],
                rows: []
            },
            oArchivedItems  : {
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
        },
        aToBeDeletedIds: []
    },
    mutations: {
        setFilter: (state, value) => {
            state.oMessages.sFilter = value;
        },
        setFilter2: (state, value) => {
            state.oMessages.sFilter2 = value;
        },
        setAnalytics: (state, payload) => {
            state.oApi.oAnalytics = payload;
        },
        setItems: (state, payload) => {
            state.oApi.oItems.rows = payload;
        },
        setCategories: (state, payload) => {
            state.oApi.oCategories.rows = payload;
        },
        setQuotes: (state, payload) => {
            state.oApi.oQuotes.rows = payload;
        },
        setArchivedCategories: (state, payload) => {
            state.oApi.oArchivedCategories.rows = payload;
        },
        setArchivedItems: (state, payload) => {
            state.oApi.oArchivedItems.rows = payload;
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
        getAnalytics : function (context) {
            axios.get('/admin/api/fetch-analytics')
                .then(function (oResponse) {
                    context.commit('setAnalytics', oResponse.data)
                })
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
        getQuotes : function (context) {
            axios.get('/admin/api/quotes/load')
                .then(function (oResponse) {
                    context.commit('setQuotes', oResponse.data)
                })
        },
        getArchivedCategories : function (context) {
            axios.get('/admin/api/category/load/archived')
                .then(function (oResponse) {
                    context.commit('setArchivedCategories', oResponse.data)
                })
        },
        getArchivedItems : function (context) {
            axios.get('/admin/api/item/load/archived')
                .then(function (oResponse) {
                    context.commit('setArchivedItems', oResponse.data)
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
        oAnalytics: state => state.oApi.oAnalytics,
        oItems: state => state.oApi.oItems,
        oCategories: state => state.oApi.oCategories,
        oQuotes: state => state.oApi.oQuotes,
        oArchivedCategories: state => state.oApi.oArchivedCategories,
        oArchivedItems: state => state.oApi.oArchivedItems,
        sFilter: state => state.oMessages.sFilter,
        sFilter2: state => state.oMessages.sFilter2,
        aToBeDeletedItems: state => state.aToBeDeletedItems
    }
});