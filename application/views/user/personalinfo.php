 <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bolder mt-2 mb-2 mr-5">Please Fill The Information Below</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-300"></div>
                <!--end::Separator-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Account Details</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            

                            
                            <!--end::Item-->
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <form method="post" action="<?=base_url('users/personal_info_update')?>">
                    <div class="card-body">
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-sm-12 form-group fv-plugins-icon-container">
                                        <label><i class="fab fa-yelp" style="line-height: 39px;color: #50aec3;margin-right:5px"></i>Full Name:</label>
                                        <input type="text" class="form-control"  name="full_name" value="<?=$getAllUserData['data'][0]->full_name?>">
                                    </div>
                                    <input type="hidden" name="user_id" value="<?=$getAllUserData['data'][0]->id?>">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 form-group fv-plugins-icon-container">
                                        <label><i class="fab fa-yelp" style="line-height: 39px;color: #50aec3;margin-right:5px"></i>Address:</label>
                                        <input type="text" class="form-control"  name="address" value="<?=$getAllUserData['data'][0]->address?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 form-group fv-plugins-icon-container">
                                        <label><i class="fab fa-yelp" style="line-height: 39px;color: #50aec3;margin-right:5px"></i>Country:</label>
                                        <input type="text" class="form-control"  name="country" value="<?=$getAllUserData['data'][0]->country?>">
                                    </div>
                                    <div class="col-sm-4 form-group fv-plugins-icon-container">
                                        <label><i class="fab fa-yelp" style="line-height: 39px;color: #50aec3;margin-right:5px"></i>City:</label>
                                        <input type="text" class="form-control"  name="city" value="<?=$getAllUserData['data'][0]->city?>">
                                    </div>
                                    <div class="col-sm-4 form-group fv-plugins-icon-container">
                                        <label><i class="fab fa-yelp" style="line-height: 39px;color: #50aec3;margin-right:5px"></i>Zip:</label>
                                        <input type="text" class="form-control"  name="zip" value="<?=$getAllUserData['data'][0]->zip_code?>">
                                    </div>
                                </div>
                                
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_user_edit_tab_5" role="tabpanel"></div>
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_user_edit_tab_6" role="tabpanel"></div>
                            <!--end::Tab-->
                        </div>
                        <div align="right">
                            <button class="btn btn-dark">Submit</button>
                        </div>
                    </div>
                </form>
                <!--begin::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<?php
$k = 1;
$totalcompleted = 0;
$totalpending = 0;

$investment_tot = [];

$investment_channel_music = 0;
$investment_channel_sport = 0;
$investment_channel_food = 0;

foreach ($getPayments['data']['data'] as $getPayment) {
    if($getPayment->status != 0){
    $totalcompleted += $getPayment->total_investment;
    }else{
    $totalpending += $getPayment->total_investment;
    }
    $investment_tot[$k]['total'] = $getPayment->total_investment;
    $investment_tot[$k]['date'] = date('Y-M-d',strtotime($getPayment->created_on));
    if($getPayment->name == 'music' && $getPayment->status != 0){
        $investment_channel_music += $getPayment->total_investment;
    }else if($getPayment->name == 'sport' && $getPayment->status != 0){
        $investment_channel_sport += $getPayment->total_investment;
    }else if($getPayment->name == 'food' && $getPayment->status != 0){
        $investment_channel_food += $getPayment->total_investment;
    }

?> 
<!-- Modal-->
<div class="modal fade" id="contractmodal_<?=$k?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 866px!important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contract</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="contract">
                    <?=$getPayment->contract?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- message modal end-->
<!-- Modal-->
<div class="modal fade" id="detailsmodal_<?=$k?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 866px!important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contract</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-checkable">
                    <thead>
                            <tr>
                                <th>Channel Name</th>
                                <th>Bank</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$getPayment->name?></td>
                            <td><?=$getPayment->bank?></td>
                            <td><?=round($getPayment->total_investment,2)?></td>
                            <td>
                                <?php
                                if($getPayment->status == 0){
                                ?>
                                <span class="badge badge-warning"> Pending </span>
                                <?php
                                }else{
                                ?>
                                <span class="badge badge-success"> Completed </span>
                                <?php
                                }
                                ?>
                            </td>
                            <td><?= date('Y-M-d',strtotime($getPayment->created_on)) ?></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <h4>Comments</h4>
                    <table class="table">
                    <thead align="center">
                        <th>s.no</th>
                        <th>Comments</th>
                        <th>Created</th>
                    </thead>
                    <tbody class="msgsdiv" align="center">
                        
                    </tbody>
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- message modal end-->
<?php
$k++;
}
?> 
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','.investment_msg',function(){
            $.ajax({
                url : '<?=base_url("investor/getmsg")?>',
                method : 'POST',
                data : {
                    getTheId : $(this).data('investment')
                },
                dataType: "json",
                success: function( response ) {
                var data = response.data;
                if(data != ''){
                   var HTML = `<tr>`;
                    for(i in data){
                        HTML += `
                                <td>${parseInt(i) + 1}</td>
                                <td>${data[i].comment}</td>
                                <td>${data[i].created_on}</td>
                                `
                    }
                    HTML += `</tr>`;
                    $('.msgsdiv').html(HTML); 
                }else{
                     $('.msgsdiv').html('<tr><td></td><td>No data found</td><td></td></tr>'); 
                }
            }
            });
        });
    });

    // FOR STATUS CHART
    var status_count = [parseInt('<?=$totalcompleted?>'),parseInt('<?=$totalpending?>')];
    var status_label = ['COMPLETED','PENDING'];
    // FOR STATUS CHART END

    // FOR CHANNEL CHART
    var channel_count = [parseInt('<?=$investment_channel_music?>'),parseInt('<?=$investment_channel_food?>'),parseInt('<?=$investment_channel_sport?>')];
    var channel_label = ['MUSIC','FOOD','SPORT'];
    // FOR CHANNEL CHART END
    
    // FOR STATUS BAR CHART
    var investment_tot = [];
    var investment_date = [];
    <?php

    foreach ($investment_tot as $investment_tote) {
    ?>
        investment_tot.push(parseInt('<?=$investment_tote["total"]?>'));
        investment_date.push('<?=$investment_tote["date"]?>');
    <?php
    }
    ?>
    console.log(investment_tot);
    // FOR STATUS BAR CHART END

</script>
<script type="text/javascript" src="<?=$assets?>/js/investor/investor_profile.js"></script>