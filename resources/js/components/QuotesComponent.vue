<template>
    <div class="col-sm-10 bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <h3>Quotes</h3>
            </div>
            <div class="row">
                <dashboard-card
                    :s-title="$store.state.oApi.oCategories.rows.length + ' quotes'"
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
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</template>

