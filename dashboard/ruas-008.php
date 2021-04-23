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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
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
                  
                  <h4 class="card-title "><a href="ruas.php"><i class="fas fa-arrow-left"></i></a>&emsp; Ruas 008</h4>
                  <p class="card-category">&emsp;&emsp;&ensp; Lumut - Sei Liat </p>
                  

                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Jenis Kerusakan
                        </th>
                        <th>
                          Tipe Kerusakan
                        </th>
                        <th>
                          Tingkat Resiko
                        </th>
                        <th>
                          Luas (m2)
                        </th>
                        <th>
                          Panjang (m)
                        </th>
                      </thead>
                      <tbody>
                       <tr><td>1</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>10.0975502645</td><td>-</td><tr>
<tr><td>2</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>8.90882086537999</td><td>-</td><tr>
<tr><td>3</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>5.28920680284</td><td>-</td><tr>
<tr><td>4</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>16.8926623119999</td><td>-</td><tr>
<tr><td>5</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.40222865999</td><td>-</td><tr>
<tr><td>6</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.382960979698</td><td>-</td><tr>
<tr><td>7</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.382888400163</td><td>-</td><tr>
<tr><td>8</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.8175725951</td><td>-</td><tr>
<tr><td>9</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>84.2364451334999</td><td>-</td><tr>
<tr><td>10</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>4.16135207541</td><td>-</td><tr>
<tr><td>11</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.9365714243</td><td>-</td><tr>
<tr><td>12</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.32600378776</td><td>-</td><tr>
<tr><td>13</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.9206257632</td><td>-</td><tr>
<tr><td>14</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>18.7228933542</td><td>-</td><tr>
<tr><td>15</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>15.3381432575</td><td>-</td><tr>
<tr><td>16</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.94675175312</td><td>-</td><tr>
<tr><td>17</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.14154711788</td><td>-</td><tr>
<tr><td>18</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.28593612333</td><td>-</td><tr>
<tr><td>19</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.438281987</td><td>-</td><tr>
<tr><td>20</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.094616999938</td><td>-</td><tr>
<tr><td>21</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.65339035213</td><td>-</td><tr>
<tr><td>22</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>46.1115588552</td><td>-</td><tr>
<tr><td>23</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.80077940430999</td><td>-</td><tr>
<tr><td>24</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.5873260838</td><td>-</td><tr>
<tr><td>25</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.95389808434</td><td>-</td><tr>
<tr><td>26</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.65033930884</td><td>-</td><tr>
<tr><td>27</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.50344998309</td><td>-</td><tr>
<tr><td>28</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.73581200079</td><td>-</td><tr>
<tr><td>29</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.29951520784</td><td>-</td><tr>
<tr><td>30</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.24148285982</td><td>-</td><tr>
<tr><td>31</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.1489154375999</td><td>-</td><tr>
<tr><td>32</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.16632069025</td><td>-</td><tr>
<tr><td>33</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>26.2099937294999</td><td>-</td><tr>
<tr><td>34</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.24597013564</td><td>-</td><tr>
<tr><td>35</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.6694771746</td><td>-</td><tr>
<tr><td>36</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.07327000149</td><td>-</td><tr>
<tr><td>37</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.45938497948</td><td>-</td><tr>
<tr><td>38</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.3783160012</td><td>-</td><tr>
<tr><td>39</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.4749673405</td><td>-</td><tr>
<tr><td>40</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.3663887178</td><td>-</td><tr>
<tr><td>41</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.1449241474999</td><td>-</td><tr>
<tr><td>42</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.61444399272</td><td>-</td><tr>
<tr><td>43</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.12144624137</td><td>-</td><tr>
<tr><td>44</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.35567810545</td><td>-</td><tr>
<tr><td>45</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.68888178896</td><td>-</td><tr>
<tr><td>46</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>20.3387219206</td><td>-</td><tr>
<tr><td>47</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>24.4511481961</td><td>-</td><tr>
<tr><td>48</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.08118024164999</td><td>-</td><tr>


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