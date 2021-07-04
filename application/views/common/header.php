<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
<meta charset="utf-8" />
<title>Cba | Dashboard</title>
<meta name="description" content="Updates and statistics" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Page Vendors Styles(used by this page)-->
<link href="<?=$assets?>/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
<!--begin::Global Theme Styles(used by all pages)-->
<link href="<?=$assets?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles-->
<!--begin::Layout Themes(used by all pages)-->
<link href="<?=$assets?>/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/style.css" rel="stylesheet" type="text/css" />
<!--end::Layout Themes-->
<link rel="shortcut icon" href="<?=$assets?>/media/logos/logo2.png" />
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?=$assets?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=$assets?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=$assets?>/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?=$assets?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?=$assets?>/js/pages/widgets.js"></script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
<!--begin::Logo-->
<a href="/dashboard">
<img alt="Logo" src="<?=$assets?>/media/logos/logo2.png" />
</a>
<!--end::Logo-->
<!--begin::Toolbar-->
<div class="d-flex align-items-center">
<!--begin::Aside Mobile Toggle-->
<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
<span></span>
</button>
<!--end::Aside Mobile Toggle-->
<!--begin::Header Menu Mobile Toggle-->
<button class="btn p-0 burger-icon ml-5" id="kt_header_mobile_toggle">
<span></span>
</button>
<!--end::Header Menu Mobile Toggle-->
<!--begin::Topbar Mobile Toggle-->
<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
<span class="svg-icon svg-icon-xl">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/General/User.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
</button>
<!--end::Topbar Mobile Toggle-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
<!--begin::Page-->
<div class="d-flex flex-row flex-column-fluid page">
<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
<!--begin::Brand-->
<div class="brand flex-column-auto" id="kt_brand">
<!--begin::Logo-->
<a href="/dashboard" class="brand-logo">
<img alt="Logo" src="<?=$assets?>/media/logos/logo2.png"/>
</a>
<!--end::Logo-->
<!--begin::Toggle-->
<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
<span class="svg-icon svg-icon svg-icon-xl">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Text/Toggle.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<path d="M2 11.5C2 12.3284 2.67157 13 3.5 13H20.5C21.3284 13 22 12.3284 22 11.5V11.5C22 10.6716 21.3284 10 20.5 10H3.5C2.67157 10 2 10.6716 2 11.5V11.5Z" fill="black" />
<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M9.5 20C8.67157 20 8 19.3284 8 18.5C8 17.6716 8.67157 17 9.5 17H20.5C21.3284 17 22 17.6716 22 18.5C22 19.3284 21.3284 20 20.5 20H9.5ZM15.5 6C14.6716 6 14 5.32843 14 4.5C14 3.67157 14.6716 3 15.5 3H20.5C21.3284 3 22 3.67157 22 4.5C22 5.32843 21.3284 6 20.5 6H15.5Z" fill="black" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
</button>
<!--end::Toolbar-->
</div>
<!--end::Brand-->
<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
<!--begin::Menu Container-->
<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
<!--begin::Menu Nav-->
<ul class="menu-nav">
<li class="menu-item  <?= ($this->uri->segment(1) == 'dashboard') ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('dashboard'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	<polygon points="0 0 24 0 24 24 0 24" />
	<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
	<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Dashboard</span>
</a>
</li>


<?php
	if($this->session->userdata('level') == 1){
?>
<li class="menu-item  <?= ($this->uri->segment(1) == 'contract' ) ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('contract/list'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24"></rect>
		<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
		<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Contract</span>
</a>
</li>
<li class="menu-item  <?= ($this->uri->segment(1) == 'promo' && $this->uri->segment(2) == '') ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('promo'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24"></rect>
		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Create Promo</span>
</a>
</li>
<li class="menu-item  <?= ($this->uri->segment(1) == 'investor' && ($this->uri->segment(2) == 'list' || $this->uri->segment(2) == 'investor_profile' )) ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('investor/list'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24"></rect>
		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Investors</span>
</a>
</li>

<li class="menu-item  <?= ($this->uri->segment(1) == 'investor' && ($this->uri->segment(2) == 'investments' )) ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('investor/investments'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24"></rect>
		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">All Investments</span>
</a>
</li>
<?php
}else{
?>
<li class="menu-item  <?= ($this->uri->segment(1) == 'investor'  && $this->uri->segment(2) == 'invest_now' ) ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('investor/invest_now'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24"></rect>
		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Invest Now</span>
</a>
</li>
<li class="menu-item  <?= ($this->uri->segment(1) == 'investor' && ($this->uri->segment(2) == 'my_investment_list' || $this->uri->segment(2) == 'pay_investment' )) ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('investor/my_investment_list'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24"></rect>
		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">My Investments</span>
</a>
</li>


<?php
}
?>

<li class="menu-item <?= ($this->uri->segment(2) == 'profile') ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
	<a href="<?php echo base_url('users/profile'); ?>" class="menu-link ">
		<span class="svg-icon menu-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect x="0" y="0" width="24" height="24" />
					<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
		<span class="menu-text">Profile Settings</span>
	</a>
</li>

</ul>
<!--end::Menu Nav-->
</div>
<!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
</div>
<!--end::Aside-->
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
<!--begin::Container-->
<div class="container-fluid d-flex align-items-stretch justify-content-between">
<!--begin::Header Menu Wrapper-->
<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
<!--begin::Header Menu-->
<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
<!--begin::Header Nav-->
<ul class="menu-nav">

</ul>
<!--end::Header Nav-->
</div>
<!--end::Header Menu-->
</div>
<!--end::Header Menu Wrapper-->
<!--begin::Topbar-->
<div class="topbar">
<!--begin::Search-->

<!--end::Search-->
<!--begin::Notifications-->

<!--end::Notifications-->
<!--end::Quick panel-->
<!--begin::Languages-->

<!--end::Languages-->
<!--begin::User-->
<div class="topbar-item ml-4" id="kt_quick_user_toggle">
	<div class="alert alert-dark mr-5 mt-3">
		My Wallet :  $ <span id="mywallet"><?= wallet()  ?> </span>
	</div>

	<div data-toggle="tooltip" class="btn btn-icon btn-light-primary h-40px w-40px p-0" id="kt_quick_user_toggle">
		<img src="<?=$assets?>/media/svg/avatars/004-boy-1.svg" class="h-30px align-self-end" alt="" />
	</div>

	<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" >
		<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
		<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?=callsession('full_name')?></span>

	</div>

</div>


<!--end::User-->
</div>
<!--end::Topbar-->
</div>
<!--end::Container-->
</div>

<!-- activation text -->
<?php
	if(checkAccountActivation() == 0){
?>
<div class="alert alert-danger" align="center">
	Please Check Your Email To Activate Your Account! <a href="<?=base_url('auth/send_activation_email/activate/'.$this->session->userdata('user_id'))?>" class="btn btn-dark btn-sm ml-3"> Resend</a>
</div>
<?php
	}
?>

<!-- activation text end-->


<!--end::Header-->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '4282513065100694');
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none" 
       src="https://www.facebook.com/tr?id=4282513065100694&ev=PageView&noscript=1"/>
</noscript>