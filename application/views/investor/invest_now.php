<script src="https://www.paypal.com/sdk/js?client-id=<?=PAYPAL?>&vault=true"></script>        
<link href="<?=$assets?>/css/investor/invest_now.css" rel="stylesheet" type="text/css" />
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom mt-5">
                
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-5" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="w-lg-50 border-bottom border-bottom-lg-0 border-right-lg">
                            <div class="py-8 px-8 py-lg-20 px-lg-10">
                                <div class="wizard-steps">
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">1</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">2</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">3</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">4</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">5</div>
                                    </div>
                                    <!--end::Wizard Step-->

                                </div>
                                <div class="text-center py-10">
                                    <div data-wizard-type="step-info">
                                        <h3 class="font-weight-bolder mb-5">Select Channel To Invest</h3>
                                        <p class="font-size-lg text-dark-50">To start off, please enter your username,
                                            <br />email address and password.</p>
                                            <img src="<?=$assets?>/media/svg/illustrations/process-setup.svg" alt="image" class="mt-10 h-300px" />
                                        </div>
                                        <div data-wizard-type="step-info">
                                            <h3 class="font-weight-bolder mb-5">Checkout Your Details</h3>
                                            <p class="font-size-lg text-dark-50">Please enter your name and contact number.
                                                <br />Your mailing address is optional.</p>
                                                <img src="<?=$assets?>/media/svg/illustrations/process-analyse.svg" alt="image" class="mt-10 h-300px" />
                                            </div>
                                            <div data-wizard-type="step-info">
                                                <h3 class="font-weight-bolder mb-5">Channels And Your Investment</h3>
                                                <p class="font-size-lg text-dark-50">Please ensure your billing details are up-to-date
                                                    <br />and accurate for us to server you better.</p>
                                                    <img style="height: 266px" src="<?=$assets?>/media/svg/illustrations/data-points.svg" alt="image" class="mt-10" />
                                                </div>
                                                <div data-wizard-type="step-info">
                                                    <h3 class="font-weight-bolder mb-5">CheckOut Your Contract</h3>
                                                        <img src="<?=$assets?>/media/svg/illustrations/process-verify.svg" alt="image" class="mt-10 h-300px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Nav-->
                                        <!--begin: Wizard Body-->
                                        <div class="w-lg-50">
                                            <div class="py-8 px-2  px-lg-2">
                                                <!--begin: Wizard Form-->
                                                <form method="post" class="form" id="investmenForm" enctype="multipart/form-data">
                                                    <!--begin: Wizard Step 1-->
                                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Check The Channel You Want To Invest</h4>
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <ul>
                                                              
                                                            <?php
                                                            foreach ($getChannels as $getChannel) {
                                                            ?>
                                                            <li>
                                                                <input type="checkbox" id="<?=$getChannel->name?>" />
                                                                <label for="<?=$getChannel->name?>" class="check"><img src="<?=$assets?>/media/<?=$getChannel->img?>" /></label>
                                                                <select class="form-control <?=$getChannel->name?>" name="channels[<?=$getChannel->id?>]" data-name="<?=$getChannel->name?>" value="<?=$getChannel->name?>" style="visibility: hidden;">
                                                                    <option value="">-- Select Amount</option>
                                                                    <?php
                                                                        for($i = 0 ; $i<=$getChannel->max_share ; $i+=$getChannel->min_share){
                                                                    ?>
                                                                    <option value="<?=$i?>"><?=$i?></option>
                                                                    <?php   
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <!--end::Input-->
                                                    </div>
                                                    </div>
                                                    <!--end: Wizard Step 1-->
                                                    <!--begin: Wizard Step 2-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Investor Details</h4>
                                                        <div class="row">
                                                            <div class="col-xl-12 mt-2">
                                                                <!--begin::Input-->
                                                                 <label>Full Name : <strong><?=$user->full_name?></strong></label>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <!--begin::Input-->
                                                                 <label>Address : <strong><?=$user->address?></strong></label>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <!--begin::Input-->
                                                                 <label>City : <strong><?=$user->city?></strong></label>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <!--begin::Input-->
                                                                 <label>Country : <strong><?=$user->country?></strong></label>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <!--begin::Input-->
                                                                 <label>Email : <strong><?=$user->email?></strong></label>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-12 mt-2">
                                                                <!--begin::Input-->
                                                                 <label>Phone : <strong><?=$user->phone?></strong></label>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <!--end: Wizard Step 2-->
                                                    <!--begin: Wizard Step 3-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Channel Details</h4>
                                                        <!--begin::Select-->
                                                        <div class="music" style="display: none;">
                                                            <img class="detailsimg" src="<?=$assets?>/media/1.PNG" />
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Channel Name: <b>Music</b></label>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                     <label>Invested: <b class="music_invest"></b></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="food" style="display: none;">
                                                            <img class="detailsimg" src="<?=$assets?>/media/2.PNG" />
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Channel Name: <b>Food</b></label>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                     <label>Invested: <b class="food_invest"></b></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sport" style="display: none;">
                                                            <img class="detailsimg" src="<?=$assets?>/media/3.PNG" />
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Channel Name: <b>Sport</b></label>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                     <label>Invested: <b class="sport_invest"></b></label>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end: Wizard Step 3-->
                                                    <!--begin: Wizard Step 4-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <!--begin::Section-->
                                                        <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                                        <div class="contract">
                                                        <?=$getContract->body?>
                                                        </div>
                                                        <input type="hidden" name="bank" class="bank">
                                                        <input type="hidden" class="contract_val" name="contract" >
                                                        <input type="hidden" class="contract_id" name="contract_id" value="<?=$getContract->id?>" >
                                                        <input type="hidden" name="order_id" value="">
                                                        <input type="hidden" class="total_investment" name="total_investment" >
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end: Wizard Step 4-->
                                                    <!--begin: Wizard Step 4-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <!--begin::Section-->
                                                        <div align="center">
                                                            <h4 class="mb-10 font-weight-bold text-dark">Select Your Payment</h4>
                                                        </div>
                                                        <div class="save_msg"></div>
                                                        <div class="mt-2 mb-2 paymentcards">
                                                            <h4 class="mb-5 font-weight-bold text-dark">Direct Bank Transfer: </h4>
                                                            <button type="button" class="paymentBtn btn font-weight-bold btn-primary form-control" data-type="Direct Bank Transfer">Bank Transfer</button>
                                                        </div>
                                                        <div class="mt-2 mb-2 paymentcards">
                                                            <h4 class="mb-5 font-weight-bold text-dark">Pay Through Paypal: </h4>
                                                            <div class="mt-4" id="paypal-button-container"> </div>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end: Wizard Step 4-->
                                                    <!--begin: Wizard Actions-->
                                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                        <div class="mr-2">
                                                            <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-10 py-4" data-wizard-type="action-prev">
                                                                <span class="svg-icon svg-icon-md mr-3">
                                                                    <!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Arrow-left.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>Previous</button>
                                                            </div>
                                                            <div>
                                                                
                                                                    <button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-10 py-4" data-wizard-type="action-next">Next
                                                                        <span class="svg-icon svg-icon-md ml-3">
                                                                            <!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span></button>
                                                                    </div>
                                                                </div>
                                                                <!--end: Wizard Actions-->
                                                            </form>
                                                            <!--end: Wizard Form-->
                                                        </div>
                                                    </div>
                                                    <!--end: Wizard Body-->
                                                </div>
                                                <!--end: Wizard-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Entry-->
                            </div>
                        
<!-- for contract purpose -->
<script type="text/javascript">
    var ChannelPrice = '<?=CHANNEL_PRICE?>';
    var ChannelVat = '<?=VAT?>';
    var BASEURL = '<?=base_url()?>';
    var ReplaceArray = 
    {
        Name : '<?=$user->full_name?>',
        Address : '<?=$user->address?>',
        City : '<?=$user->city?>',
        Vat  : '-',
        Date  : '<?=date('Y-m-d')?>',
        Login_name  : '<?=$user->full_name?>',
    }
</script>
<script src="<?=$assets?>/js/investor/invest_now.js"></script>