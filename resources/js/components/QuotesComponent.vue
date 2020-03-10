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
                    :s-title="'0 quotes'"
                    :s-card-label="'Archived quotes'">
                </dashboard-card>
                <dashboard-card
                    :s-title="'0 quote request'"
                    :s-card-label="'Responded Quote Request'">
                </dashboard-card>
            </div>
            <div class="row">
              <div v-for="(aItem, iKey) in oQuotesRow" class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ aItem.first_name }} {{ aItem.last_name }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ aItem.company_name }}</h6>
                  <p class="card-text">{{ aItem.request_message }}</p>
                  <a href="#" class="btn btn-warning card-link">Mark as Responded</a>
                  <a href="#" class="btn btn-danger card-link">Archive Message</a>
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
        }
    }
}
</script>