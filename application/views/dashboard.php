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
							<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-2"> $<?= (!empty($overall_investment['data'][0]->overall_investment)) ? $overall_investment['data'][0]->overall_investment : 0?></span>
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
							<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-2"> $<?=(!empty($pending_investment['data'][0]->overall_investment)) ? $pending_investment['data'][0]->overall_investment : 0?></span>
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
							<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-2"> $<?=(!empty($completed_investment['data'][0]->overall_investment)) ? $completed_investment['data'][0]->overall_investment : 0 ?></span>
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