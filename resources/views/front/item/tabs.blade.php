<div class="single-product-description-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  description tab navigation  =======-->

                <div class="description-tab-navigation">
                    <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                        <a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#product-description" role="tab" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="faq-tab" data-toggle="tab" href="#product-faq" role="tab" aria-selected="false">FAQ's</a>
                    </div>
                </div>

                <!--=======  End of description tab navigation  =======-->
            </div>
        </div>
    </div>

    <!--=======  description tab content  =======-->
    <div class="single-product-description-tab-content">

        <div class="tab-content">

            <div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="description-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--=======  description content  =======-->

                            <div class="description-content">
                               {!! $item->item_description !!}
                            </div>

                            <!--=======  End of description content  =======-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="product-faq" role="tabpanel" aria-labelledby="faq-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="faq-wrapper section-space--bottom--60">

                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    What other uses of this product <span> <i class="ion-plus"></i>
                                                    <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
    
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Is this product brand new? <span> <i class="ion-plus"></i>
                                                    <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What shipping methods are available? <span> <i class="ion-plus"></i>
                                                    <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!--=======  End of description tab content  =======-->

</div>