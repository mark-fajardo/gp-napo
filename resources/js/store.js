import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state : {
        oMessages : {
            oAlerts : {
                sSuccessAddItem : 'Item is successfully added',
            }
        },
        oApi : {
            oItems : {
                columns: [
                    {label: 'id', field: 'id'},
                    {label: 'Username', field: 'user.username', headerClass: 'class-in-header second-class'},
                    {label: 'First Name', field: 'user.firstName'},
                    {label: 'Last Name', field: 'user.lastName'},
                    {label: 'Email', field: 'user.email'},
                    {label: 'Address', representedAs: ({address, city, state}) => `${address}<br />${city}, ${state}`, interpolate: true}
                ],
                rows: [
                    {
                        id: 1,
                        user: {
                            username: "dprice0",
                            firstName: "Daniel",
                            lastName: "Price",
                            email: "dprice0@blogs.com"
                        },
                        address: "3 Toban Park",
                        city: "Pocatello",
                        state: "Idaho"
                    }
                ]
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