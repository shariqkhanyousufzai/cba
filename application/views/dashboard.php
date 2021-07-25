<?php
$getTotalViews = $data_channels['music']['views'] + $data_channels['food']['views'] + $data_channels['sport']['views'];

$getTotalSubs = $data_channels['music']['subscriber'] + $data_channels['food']['subscriber'] + $data_channels['sport']['subscriber'];
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard </h5>
					<button class="btn btn-info sendinbluecontact" data-email="alisa@gmail.com">Send In Blue</button>
					<!--end::Page Title-->
				</div>
				<!--end::Page Heading-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->

			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-lg-4">
					<!--begin::Stats Widget 3-->
					<div class="card card-custom ">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title">
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Overall Investment</span>
							</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-2 flex-wrap">
							<!--begin::label-->
							<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-2"> <?= (!empty($overall_investment['data'][0]->overall_investment)) ? asDollars($overall_investment['data'][0]->overall_investment) : asDollars(0)?></span>
							<!--end::label-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Stats Widget 3-->
				</div>
				<div class="col-lg-4">
					<!--begin::Stats Widget 3-->
					<div class="card card-custom ">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title">
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Pending Investment</span>
							</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-2 flex-wrap">
							<!--begin::label-->
							<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-2"> <?=(!empty($pending_investment['data'][0]->overall_investment)) ? asDollars($pending_investment['data'][0]->overall_investment) : asDollars(0)?></span>
							<!--end::label-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Stats Widget 3-->
				</div>
				<div class="col-lg-4">
					<!--begin::Stats Widget 3-->
					<div class="card card-custom ">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title">
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Completed Investment</span>
							</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-2 flex-wrap">
							<!--begin::label-->
							<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-2"> <?=(!empty($completed_investment['data'][0]->overall_investment)) ? asDollars($completed_investment['data'][0]->overall_investment) : asDollars(0) ?></span>
							<!--end::label-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Stats Widget 3-->
				</div>
			</div>

			<!--end::Row-->
			<!--begin::Row-->
			<div class="row mt-5">
				<div class="col-lg-6">
					<!--begin::Stats Widget 2-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title">
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Views</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
							<!--begin::Label-->
							<!-- <span class="font-weight-bolder display5 text-dark-75 pl-5 pr-10">9.3M</span> -->
							<!--end::Label-->
							<!--begin::Visuals-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::legends-->
								<div class="d-flex flex-column mr-4">
									<!--begin::legend-->
									<div class="legend d-flex align-items-center py-1">
										<span class="label label-danger label-dot mr-2 music_txt"></span>
										<span class="font-weight-bolder font-size-lg text-muted music_txt"></span>
									</div>
									<!--end::legend-->
									<!--begin::legend-->
									<div class="legend d-flex align-items-center py-1">
										<span class="label label-info label-dot mr-2 food_txt"></span>
										<span class="font-weight-bolder label-info font-size-lg food_txt text-muted"></span>
									</div>
									<!--end::legend-->
									<!--begin::legend-->
									<div class="legend d-flex align-items-center py-1">
										<span class="label label-dot  mr-2 sports_txt" style="background-color: rgb(62 151 255);"></span>
										<span class="font-weight-bolder font-size-lg text-muted sports_txt" style="color: #ff3d60;"></span>
									</div>
									<!--end::legend-->
								</div>
								<!--end::legends-->
								<!--begin::Chart-->
								<div class="d-flex flex-center position-relative">
									<div class="font-weight-bolder font-size-h5 text-muted position-absolute totalviews"><?=$getTotalViews?></div>
									<canvas id="kt_stats_widget_2_chart" style="height: 110px; width: 110px;"></canvas>
								</div>
								<!--end::Chart-->
							</div>
							<!--end::Visuals-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Stats Widget 2-->
				</div>
				<div class="col-lg-6">
					<!--begin::Stats Widget 2-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title">
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Subscriber</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
							<!--begin::Label-->
							<!-- <span class="font-weight-bolder display5 text-dark-75 pl-5 pr-10">9.3M</span> -->
							<!--end::Label-->
							<!--begin::Visuals-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::legends-->
								<div class="d-flex flex-column mr-4">
									<!--begin::legend-->
									<div class="legend d-flex align-items-center py-1">
										<span class="label label-danger label-dot mr-2 music_txt"></span>
										<span class="font-weight-bolder font-size-lg text-muted music_txt"></span>
									</div>
									<!--end::legend-->
									<!--begin::legend-->
									<div class="legend d-flex align-items-center py-1">
										<span class="label label-info label-dot mr-2 food_txt"></span>
										<span class="font-weight-bolder label-info font-size-lg text-muted food_txt"></span>
									</div>
									<!--end::legend-->
									<!--begin::legend-->
									<div class="legend d-flex align-items-center py-1">
										<span class="label label-dot  mr-2 sports_txt" style="background-color: rgb(62 151 255);"></span>
										<span class="font-weight-bolder font-size-lg text-muted sports_txt" style="color: #ff3d60;"></span>
									</div>
									<!--end::legend-->
								</div>
								<!--end::legends-->
								<!--begin::Chart-->
								<div class="d-flex flex-center position-relative"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
								<div class="font-weight-bolder font-size-h5 text-muted position-absolute totalsubs"><?=$getTotalSubs?></div>
								<canvas id="kt_stats_widget_3_chartsubs" style="height: 110px; width: 110px; display: block;" width="220" height="220" class="chartjs-render-monitor"></canvas>
							</div>
							<!--end::Chart-->
						</div>
						<!--end::Visuals-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Stats Widget 2-->
			</div>
			<?php
			if($this->session->userdata('group_name') == 'investor'){
			?>
			<div class="col-sm-12 ">
				<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title">
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">My Investment</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
							<div class="row">
                                <div class="col-sm-6">
                                    <h4>Investment Status </h4>
                                    <div id="chart_12"></div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Investment Channel </h4>
                                    <div id="chart_13"></div>
                                </div>
                                <div class="col-sm-12" align="center">
                                    <h4>Last Investment</h4>
                                    <div id="chart_3"></div>
                                </div>
                            </div>
						</div>
					<!--end::Body-->
				</div>
				
			</div>
			
			<div class="col-sm-12 ">
				<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title">
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">My Investment</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
							<table class="table table-bordered table-checkable" id="example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Payment Method</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Month/Date/Year</th>
                                <th>Documents</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($getPayments['data']['data'] as $getPayment) {
                            ?> 
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $getPayment->bank?></td>
                                <td><?= asDollars($getPayment->total_investment) ?></td>
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
                                <td><?= date('M-d-Y',strtotime($getPayment->created_on)) ?></td>
                                <td>
                                    <button style="width: 30%!important;display: inline-block;float: left;" data-target="#detailsmodal_<?=$i?>" data-investment="<?=$getPayment->investment_id?>" data-toggle="modal" class="btn mt-2 btn-md w-lg-100 btn-dark btn-icon investment_msg" title="Details">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="flaticon2-information"></i>
                                        </span>
                                    </button>
                                    <button style="width: 30%!important;display: inline-block;float: left;" data-target="#contractmodal_<?=$i?>" data-toggle="modal" class="btn mt-2 ml-1 btn-md w-lg-100 btn-dark btn-icon send_msg" title="Contract">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="flaticon-doc"></i>
                                        </span>
                                    </button>
                                    <button style="width: 30%!important;display: inline-block;float: left;" data-target="#contractinvoice_<?=$i?>" data-toggle="modal" class="btn mt-2 ml-1 btn-md w-lg-100 btn-dark btn-icon send_msg" title="Invoice">
                                        <span class="svg-icon svg-icon-md">
                                            <i class="flaticon-graphic-1"></i>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <?php
                            $i++;
                            }
                            ?>
                        </tbody>
                    </table>
						</div>
					<!--end::Body-->
				</div>
				
			</div>
			<?php
			}
			?>
		</div>
		<!--end::Row-->
		<!--end::Dashboard-->
	</div>
	<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<script type="text/javascript">
//investor channel which he invested
var investChannelsNameSub = [];
var investChannelsName = [];
var investChannelsDataSub = [];
var investChannelsData = [];
//investor channel which he invested
var MUSIC_VIEW = '<?=$data_channels["music"]["views"]?>';
var FOOD_VIEW = '<?=$data_channels["food"]["views"]?>';
var SPORT_VIEW = '<?=$data_channels["sport"]["views"]?>';
var MUSIC_SUBS = '<?=$data_channels["music"]["subscriber"]?>';
var FOOD_SUBS = '<?=$data_channels["food"]["subscriber"]?>';
var SPORT_SUBS = '<?=$data_channels["sport"]["subscriber"]?>';
var GetTotalSubscriber = parseInt(MUSIC_SUBS) + parseInt(FOOD_SUBS) + parseInt(SPORT_SUBS);
var GetTotalViews = parseInt(MUSIC_VIEW) + parseInt(FOOD_VIEW) + parseInt(SPORT_VIEW);

investChannelsDataSub.push(MUSIC_SUBS,FOOD_SUBS,SPORT_SUBS);
investChannelsNameSub.push('Music','Food','Sport');
investChannelsData.push(MUSIC_VIEW,FOOD_VIEW,SPORT_VIEW);
investChannelsName.push('Music','Food','Sport');
console.log(investChannelsData);
console.log(investChannelsName);

jQuery('.sports_txt').html('Sport');
jQuery('.music_txt').html('Music');
jQuery('.food_txt').html('Food');
jQuery('.totalsubs').html(GetTotalSubscriber);
jQuery('.totalviews').html(GetTotalViews);
</script>
<script type="text/javascript" src="<?=$assets?>/js/dashboard/dashboard.js"></script>
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
<div class="modal fade" id="contractinvoice_<?=$k?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 866px!important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Invoice Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <?=$getPayment->invoice?>
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
                            <td><?=asDollars($getPayment->total_investment)?></td>
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