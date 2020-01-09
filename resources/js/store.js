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
                sFailAddCategory : 'Please check category credentials'
            },
            iPage : 1,
            sFilter : '',
        },
        oApi : {
            oItems : {
                columns: [
                    {label: 'id', field: 'id'},
                    {label: 'Quantity', field: 'item_qty', headerClass: 'class-in-header second-class'},
                    {label: 'Item Name', field: 'item_name'},
                    {label: 'Item Brand', field: 'item_brand'},
                    {label: 'Category', field: 'item_name'},
                    // {label: 'Address', representedAs: ({address, city, state}) => `${address}<br />${city}, ${state}`, interpolate: true}
                ],
                rows: []
            },
            oCategories : {
                columns: [
                    {label: 'id', field: 'id'},
                    {label: 'Category Name', field: 'name'},
                    // {label: 'Address', representedAs: ({address, city, state}) => `${address}<br />${city}, ${state}`, interpolate: true}
                ],
                rows: []
            }
        }
    },
    mutations : {

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
        }
    },
});