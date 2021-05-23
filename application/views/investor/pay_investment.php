<script src="https://www.paypal.com/sdk/js?client-id=<?=PAYPAL?>&vault=true"></script>     
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
 <script src="https://js.stripe.com/v3/"></script>     
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <div class="card card-custom gutter-b"></div>
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Review your Details and Pay
                            <span class="d-block text-muted pt-2 font-size-sm">Take Track On Payment</span>
                        </h3>
                    </div>
                </div>
                <!-- New Customers Accounts Table -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="contract">
                                <?=$getPayments['data']['data'][0]->contract?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class=" mb-2 paymentcards" style=" margin-top: 0px!important;">
                                <h4 class="mb-5 font-weight-bold text-dark">Pay Through Paypal: </h4>
                                <div class="mt-4" id="paypal-button-container"> </div>
                            </div>
                            <div class="mb-2 paymentcards">
                                <h4 class="mb-5 font-weight-bold text-dark">Pay Through Stripe: </h4>
                                <div class="stripecontainer">
                                  <button type="button" class="stripebtn" id="checkout-button">Debit or Credit</button>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--end::Card-->
      </div>
      <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
<script type="text/javascript">
        var BASEURL = '<?=base_url()?>';
</script>
<script src="<?=$assets?>/js/investor/invest_now.js"></script>