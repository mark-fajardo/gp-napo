<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <h3>Quotes</h3>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="$store.state.oApi.oQuotes.rows.length + ' quotes'"
                    :s-card-label="'Total Quote Request'">
                </dashboard-card>
                <dashboard-card
                    :s-title="oArchivedQuotes + ' quotes'"
                    :s-card-label="'Archived quotes'">
                </dashboard-card>
                <dashboard-card
                    :s-title="oRepliedQuotes + ' quotes'"
                    :s-card-label="'Responded Quote Request'">
                </dashboard-card>
            </div>
            <div class="row p-3">
              <div v-for="(aItem, iKey) in oQuotesRow" class="card m-3 bg-light" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ aItem.first_name }} {{ aItem.last_name }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ aItem.company_name }}</h6>
                  <p class="card-text">{{ aItem.request_message }}</p>
                  <div v-if="aItem.archived === 0 && aItem.replied === 0">
                    <a href="#" @click="markAsReplied(aItem.id)" class="btn btn-warning card-link">Mark as Responded</a>
                    <a href="#" @click="archiveRow(aItem.id)" class="btn btn-danger card-link">Archive Message</a>
                  </div>
                  <div v-else-if="aItem.archived === 1">
                      <span class="badge badge-secondary">Archived</span>
                  </div>
                  <div v-else-if="aItem.replied === 1">
                      <span class="badge badge-success">Replied</span>
                  </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
    methods : {
        archiveRow (iId) {
            if (confirm('Archive this quote?')) {
                let oThis = this;
                let sEndPoint = '/admin/api/quotes/archive';
                axios.post(sEndPoint, {
                    'id' : [iId]
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
        },
        markAsReplied (iId) {
            if (confirm('Mark selected as replied?')) {
                let oThis = this;
                let sEndPoint = '/admin/api/quotes/replied';
                axios.post(sEndPoint, {
                    'id' : [iId]
                })
                .then(function (bResponse) {
                    if (bResponse.data === true) {
                        oThis.$store.dispatch('toast', {
                            bType : true,
                            sMsg : oThis.$store.state.oMessages.oAlerts.sSuccessReplied,
                        });
                        oThis.$router.go();
                    }

                })
                .catch(function (oResponse) {
                    oThis.$store.dispatch('toast', {
                        bType : false,
                        sMsg : oThis.$store.state.oMessages.oAlerts.sFailReplied,
                    });
                });
            }
        }
    },
    mounted () {
        this.$store.dispatch('getQuotes');
    },
    computed: {
        ...mapGetters({
            oQuotesWhole : 'oQuotes'
        }),
        oQuotesRow () {
            return this.oQuotesWhole.rows;
        },
        oArchivedQuotes () {
            return this.oQuotesWhole.rows.filter(rows => {
                return rows.archived === 1
            }).length;
        },
        oRepliedQuotes () {
            return this.oQuotesWhole.rows.filter(rows => {
                return rows.replied === 1
            }).length;
        }
    }
}
</script>