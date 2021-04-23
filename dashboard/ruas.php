<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    WEBGIS Kerusakan Jalan
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         <img src="../assets/img/logo.png">
         <!-- <h4><b>WEBGIS KERUSAKAN JALAN</b></h4>
          <h6 class=sub-tittle>JALAN NASIONAL PULAU BANGKA,</h6>
          <h6 class=sub-tittle>PROVINSI KEPULAUAN BANGKA BELITUNG</h6> -->
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="../index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="javascript:;">
              <i class="material-icons">content_paste</i>
              <p>Ruas Jalan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="form.php">
              <i class="material-icons">library_books</i>
              <p>Form Pelaporan</p>
            </a>
          <!-- </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Ruas Jalan</a>
          </div>
           <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
               <div class="ripple-container"></div>
                <ul class="navbar-nav">
              <a class="navbar-brand" href="javascript:;">Kerusakan Jalan Nasional Pulau Bangka</a>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Ruas Jalan Nasioal</h4>
                  <p class="card-category"> Pulau Bangka </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No Ruas
                        </th>
                        <th>
                          Nama Ruas
                        </th>
                        <th>
                          Panjang (km)
                        </th>
                        <th>
                          Jumlah Kerusakan
                        </th>
                        <th>
                          Detail
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            001
                          </td>
                          <td>
                            TANJUNG KELIAN - IBUL
                          </td>
                          <td>
                            52.19
                          </td>
                          <td>
                            711
                          </td>
                          <td class="text-primary">
                            <a href="ruas-001.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            002
                          </td>
                          <td>
                            IBUL - KELAPA
                          </td>
                          <td>
                            25.40
                          </td>
                          <td>
                            160
                          </td>
                          <td class="text-primary">
                            <a href="ruas-002.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            003
                          </td>
                          <td>
                            KELAPA - BTS. KAB (BANGKA/BANGKA BARAT)
                          </td>
                          <td>
                            4.21
                          </td>
                          <td>
                            3
                          </td>
                          <td class="text-primary">
                            <a href="ruas-003.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            004
                          </td>
                          <td>
                            BTS. KAB (BANGKA/BANGKA BARAT) - PUDING GEBAK (SP. BELINYU)
                          </td>
                          <td>
                            1.17
                          </td>
                          <td>
                            3
                          </td>
                          <td class="text-primary">
                            <a href="ruas-004.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            005
                          </td>
                          <td>
                            PUDING GEBAK (SP. BELINYU) - PUDING BESAR
                          </td>
                          <td>
                            29.68
                          </td>
                          <td>
                            464
                          </td>
                          <td class="text-primary">
                            <a href="ruas-005.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            006
                          </td>
                          <td>
                            PUDING BESAR - BTS. KOTA PANGKAL PINANG
                          </td>
                          <td>
                            25.58
                          </td>
                          <td>
                            527
                          </td>
                          <td class="text-primary">
                            <a href="ruas-006.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            006.11.K
                          </td>
                          <td>
                            JLN. DEPATI AMIR / JLN. MENTO (P. PINANG)
                          </td>
                          <td>
                            2.37
                          </td>
                          <td>
                            0
                          </td>
                          <td class="text-primary">
                            <a href="ruas-006.11.K.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            006.12.K
                          </td>
                          <td>
                            JLN. MESJID JAMI' (P. PINANG)
                          </td>
                          <td>
                            0.80
                          </td>
                          <td>
                            0
                          </td>
                          <td class="text-primary">
                            <a href="ruas-006.12.K.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            007
                          </td>
                          <td>
                            TANJUNG GUDANG - LUMUT
                          </td>
                          <td>
                            22.02
                          </td>
                          <td>
                            15
                          </td>
                          <td class="text-primary">
                            <a href="ruas-007.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            008
                          </td>
                          <td>
                            LUMUT - SEI LIAT
                          </td>
                          <td>
                            37.09
                          </td>
                          <td>
                            48
                          </td>
                          <td class="text-primary">
                            <a href="ruas-008.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            009
                          </td>
                          <td>
                            SEI LIAT - BTS. KOTA PANGKAL PINANG
                          </td>
                          <td>
                            25.85
                          </td>
                          <td>
                            47
                          </td>
                          <td class="text-primary">
                            <a href="ruas-009.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            009.11.K
                          </td>
                          <td>
                            JLN. SUDIRMAN (P. PINANG)
                          </td>
                          <td>
                            4.26
                          </td>
                          <td>
                            2
                          </td>
                          <td class="text-primary">
                            <a href="ruas-009.11.K.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            009.12.K
                          </td>
                          <td>
                            JLN. YOS SUDARSO (P. PINANG)
                          </td>
                          <td>
                            2.10
                          </td>
                          <td>
                            40
                          </td>
                          <td class="text-primary">
                            <a href="ruas-009.12.K.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            010
                          </td>
                          <td>
                            BTS. KOTA PANGKAL PINANG - NAMANG
                          </td>
                          <td>
                            21.75
                          </td>
                          <td>
                            241
                          </td>
                          <td class="text-primary">
                            <a href="ruas-010.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            010.11.K
                          </td>
                          <td>
                            JLN. MAYOR SYAFRI (P. PINANG)
                          </td>
                          <td>
                            0.74
                          </td>
                          <td>
                            5
                          </td>
                          <td class="text-primary">
                            <a href="ruas-010.11.K.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            010.12.K
                          </td>
                          <td>
                            JLN. SOEKARNO-HATTA (P. PINANG)
                          </td>
                          <td>
                            2.08
                          </td>
                          <td>
                            23
                          </td>
                          <td class="text-primary">
                            <a href="ruas-010.12.K.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            011
                          </td>
                          <td>
                            NAMANG-KOBA
                          </td>
                          <td>
                            34.93
                          </td>
                          <td>
                            127
                          </td>
                          <td class="text-primary">
                            <a href="ruas-011.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            012
                          </td>
                          <td>
                            KOBA - BTS. KAB. (BANGKA TENGAH/SELATAN)
                          </td>
                          <td>
                            7.09
                          </td>
                          <td>
                            10
                          </td>
                          <td class="text-primary">
                            <a href="ruas-012.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            013
                          </td>
                          <td>
                            BTS. KAB. (BANGKA TENGAH/SELATAN) - AIR BARA
                          </td>
                          <td>
                            1.48
                          </td>
                          <td>
                            2
                          </td>
                          <td class="text-primary">
                            <a href="ruas-013.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            014
                          </td>
                          <td>
                            AIR BARA - TOBOALI
                          </td>
                          <td>
                            54.86
                          </td>
                          <td>
                            215
                          </td>
                          <td class="text-primary">
                            <a href="ruas-014.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            015
                          </td>
                          <td>
                            TOBOALI - SADAI
                          </td>
                          <td>
                            38.86
                          </td>
                          <td>
                            26
                          </td>
                          <td class="text-primary">
                            <a href="ruas-015.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            027
                          </td>
                          <td>
                            LUMUT - PUDING GEBAK
                          </td>
                          <td>
                            29.64
                          </td>
                          <td>
                            205
                          </td>
                          <td class="text-primary">
                            <a href="ruas-027.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            029.11.K
                          </td>
                          <td>
                            SP. PELABUHAN PANGKAL BALAM - SP. JALAN ALEXANDER (JLN. KETAPANG) (PANGKAL PINANG)
                          </td>
                          <td>
                            4.79
                          </td>
                          <td>
                            59
                          </td>
                          <td class="text-primary">
                            <a href="ruas-029.11.K.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            029.12.K
                          </td>
                          <td>
                            SP. JLN. ALEXANDER - SP. JLN. AIR ITAM (JLN. ALEXANDER) (PANGKAL PINANG)
                          </td>
                          <td>
                            2.20
                          </td>
                          <td>
                            7
                          </td>
                          <td class="text-primary">
                            <a href="ruas-029.12.K.php "><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            029.13.K
                          </td>
                          <td>
                            SP. JLN. AIR ITAM - SP. JLN. PULAU PELEPAS
                          </td>
                          <td>
                            1.43
                          </td>
                          <td>
                            24
                          </td>
                          <td class="text-primary">
                            <a href="ruas-029.13.K.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            029.14.K
                          </td>
                          <td>
                            JLN. PULAU PELEPAS (PANGKAL PINANG)
                          </td>
                          <td>
                            4.71
                          </td>
                          <td>
                            46
                          </td>
                          <td class="text-primary">
                            <a href="ruas-029.14.K.php"><span class="material-icons">
                                info
                            </span>
                          </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
            
   
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <div>
          <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

          </ul>
        </div>
      </ul>
      </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>