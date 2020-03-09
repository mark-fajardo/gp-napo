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

        <div class="tab-content" style="padding: 40px 0 !important">

            <div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="description-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="description-content">
                               {!! $item->item_description !!}
                            </div>
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
                                                <p>All of our unit our mostly second hand but rebuilt with original parts.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Do you ship overseas? <span> <i class="ion-plus"></i>
                                                    <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>We ship in any part of the world, but the buyer answers the shipping fee.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    Do you accept online payment? <span> <i class="ion-plus"></i>
                                                    <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>We accept payment online and bank to bank before the shipment of the equipement.</p>
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