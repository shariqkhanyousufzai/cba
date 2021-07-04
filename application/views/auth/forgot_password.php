<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="../../../">
  <meta charset="utf-8" />
  <title>Cba</title>
  <meta name="description" content="Login page example" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Page Custom Styles(used by this page)-->
  <link href="<?=base_url('assets')?>/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
  <!--end::Page Custom Styles-->
  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="<?=base_url('assets')?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('assets')?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('assets')?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Theme Styles-->
  <!--begin::Layout Themes(used by all pages)-->
  <link href="<?=base_url('assets')?>/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('assets')?>/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('assets')?>/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('assets')?>/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
  <!--end::Layout Themes-->
  <link rel="shortcut icon" href="<?=base_url('assets')?>/media/logos/logo2.png" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
      <!--begin::Aside-->
      <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #242939;">
        <!--begin::Aside Top-->
        <div class="d-flex flex-column-auto flex-column pt-lg-5">
          <!--begin::Aside header-->
          <a href="#" class="text-center mb-15">
            <img src="<?=base_url('assets')?>/media/logos/logo2.png" alt="logo" style="height: 179px" />
          </a>
          <!--end::Aside header-->
          <!--begin::Aside title-->
          <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">Invest in YouTube channels and share in all 
            <br />the advertising revenue.</h3>


            <!--end::Aside title-->
          </div>
          <!--end::Aside Top-->
          <!--begin::Aside Bottom-->
          <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?=base_url('assets')?>/media/svg/illustrations/payment.svg)"></div>
          <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
          <!--begin::Content body-->
          <div class="d-flex flex-column-fluid flex-center">
            <!--begin::Signin-->
            <div class="login-form login-signin">
              <!--begin::Form-->
              <form class="form" method="post" action="<?= base_url('auth/forgot_password')?>" novalidate="novalidate">
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                  <h3 id="msg" class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg"></h3>
                </div>
                <!--begin::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                  <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="text" name="identity" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Action-->
                <div class="signuptxt" align="right">
                  Want to login? <a href="<?=base_url()?>">Login!</a>
                </div>
                <div class="pb-lg-0 pb-5" align="right">
                  <button type="submit"  class="themebtn btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Reset Password</button>
                </div>
                <!--end::Action-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Signin-->
            <!--begin::Signup-->
            <div class="login-form login-signup">
              <!--begin::Form-->
              
                <!--end::Form-->
              </div>
              <!--end::Signup-->
              <!--begin::Forgot-->
              <div class="login-form login-forgot">
                <!--begin::Form-->
                
                <!--end::Form-->
              </div>
              <!--end::Forgot-->
            </div>
            <!--end::Content body-->
            <!--begin::Content footer-->

            <!--end::Content footer-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Login-->
      </div>
      <!--begin::Global Config(global config for global JS scripts)-->
      <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3E97FF", "secondary": "#E5EAEE", "success": "#08D1AD", "info": "#844AFF", "warning": "#F5CE01", "danger": "#FF3D60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#DEEDFF", "secondary": "#EBEDF3", "success": "#D6FBF4", "info": "#6125E1", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
      <!--end::Global Config-->
      <!--begin::Global Theme Bundle(used by all pages)-->
      <script src="<?=base_url('assets')?>/plugins/global/plugins.bundle.js"></script>
      <script src="<?=base_url('assets')?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
      <script src="<?=base_url('assets')?>/js/scripts.bundle.js"></script>
      <!--end::Global Theme Bundle-->
      <!--begin::Page Scripts(used by this page)-->
      <script src="<?=base_url('assets')?>/js/pages/custom/login/login.js"></script>
      <!--end::Page Scripts-->
      <script type="text/javascript">

        $(document).ready(function(){
          $(".cbalogo").animate({marginTop: '30%'});
          var showText = function (target, message, index, interval) {   
            if (index < message.length) {
              $(target).append(message[index++]);
              setTimeout(function () { showText(target, message, index, interval); }, interval);
            }
          } 
          showText("#msg", "Welcome to CBA Invest In Youtube", 0, 30);
        });

        <?php
        if(isset($message)){
          ?>

          Swal.fire({
            html: '<?=$message?>',
          })
          <?php
        }
        ?>
      </script>
    </body>
    <!--end::Body-->
    </html>