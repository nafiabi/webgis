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
                  
                  <h4 class="card-title "><a href="ruas.php"><i class="fas fa-arrow-left"></i></a>&emsp; Ruas 002</h4>
                  <p class="card-category">&emsp;&emsp;&ensp; Ibul - Kelapa </p>
                  

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
                        <tr><td>1</td><td>PENURUNAN LAJUR (BAHU)</td><td>Line</td><td>TINGGI</td><td>-</td><td>15.6362305361999</td><tr>
<tr><td>2</td><td>PENURUNAN LAJUR (BAHU)</td><td>Line</td><td>RENDAH</td><td>-</td><td>9.82019684104</td><tr>
<tr><td>3</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>29.8397158048</td><td>-</td><tr>
<tr><td>4</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>48.6044814504</td><td>-</td><tr>
<tr><td>5</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.721583080197</td><td>-</td><tr>
<tr><td>6</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>117.339058604</td><td>-</td><tr>
<tr><td>7</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.34382352662</td><td>-</td><tr>
<tr><td>8</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.07059031965</td><td>-</td><tr>
<tr><td>9</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.13132050025</td><td>-</td><tr>
<tr><td>10</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.59765402094</td><td>-</td><tr>
<tr><td>11</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>1.50595379541</td><td>-</td><tr>
<tr><td>12</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.388875630604</td><td>-</td><tr>
<tr><td>13</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.0427517100782</td><td>-</td><tr>
<tr><td>14</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.591122906388</td><td>-</td><tr>
<tr><td>15</td><td>LUBANG</td><td>Polygon</td><td>SEDANG</td><td>2.1555103868</td><td>-</td><tr>
<tr><td>16</td><td>LUBANG</td><td>Polygon</td><td>SEDANG</td><td>0.955350030785</td><td>-</td><tr>
<tr><td>17</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>5.83419624652</td><td>-</td><tr>
<tr><td>18</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>5.32154613875</td><td>-</td><tr>
<tr><td>19</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>17.6883380794999</td><td>-</td><tr>
<tr><td>20</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.56716900288</td><td>-</td><tr>
<tr><td>21</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>8.30784011085</td><td>-</td><tr>
<tr><td>22</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>TINGGI</td><td>28.0672983575</td><td>-</td><tr>
<tr><td>23</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>TINGGI</td><td>25.4324266871</td><td>-</td><tr>
<tr><td>24</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>10.8780325829</td><td>-</td><tr>
<tr><td>25</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>6.26048588625</td><td>-</td><tr>
<tr><td>26</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>2.76533956565</td><td>-</td><tr>
<tr><td>27</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>11.0414415172999</td><td>-</td><tr>
<tr><td>28</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>TINGGI</td><td>0.0518890296288</td><td>-</td><tr>
<tr><td>29</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>9.52687248047</td><td>-</td><tr>
<tr><td>30</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.2478007242999</td><td>-</td><tr>
<tr><td>31</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>9.40761780102</td><td>-</td><tr>
<tr><td>32</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>14.5257265361</td><td>-</td><tr>
<tr><td>33</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>6.71847383572</td><td>-</td><tr>
<tr><td>34</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>6.96050394278</td><td>-</td><tr>
<tr><td>35</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>16.1760696634</td><td>-</td><tr>
<tr><td>36</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>TINGGI</td><td>7.03042569135</td><td>-</td><tr>
<tr><td>37</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>16.0137742094999</td><td>-</td><tr>
<tr><td>38</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.8300741936</td><td>-</td><tr>
<tr><td>39</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.6571492087</td><td>-</td><tr>
<tr><td>40</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>9.70173515886999</td><td>-</td><tr>
<tr><td>41</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>22.2987175304</td><td>-</td><tr>
<tr><td>42</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.94103239602</td><td>-</td><tr>
<tr><td>43</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>7.97625189916</td><td>-</td><tr>
<tr><td>44</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>8.47925127743</td><td>-</td><tr>
<tr><td>45</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>6.14265875883</td><td>-</td><tr>
<tr><td>46</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>1.66031234851</td><td>-</td><tr>
<tr><td>47</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.82605807007</td><td>-</td><tr>
<tr><td>48</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.82613754685</td><td>-</td><tr>
<tr><td>49</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>11.5351090086999</td><td>-</td><tr>
<tr><td>50</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.14030576344</td><td>-</td><tr>
<tr><td>51</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>12.0279063493</td><td>-</td><tr>
<tr><td>52</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.06329621561</td><td>-</td><tr>
<tr><td>53</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.93386498259</td><td>-</td><tr>
<tr><td>54</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.18552703517</td><td>-</td><tr>
<tr><td>55</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>15.5879690283</td><td>-</td><tr>
<tr><td>56</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.46653018016</td><td>-</td><tr>
<tr><td>57</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>4.90851232092</td><td>-</td><tr>
<tr><td>58</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>5.76249448392</td><td>-</td><tr>
<tr><td>59</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.3911806069</td><td>-</td><tr>
<tr><td>60</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.78836628265</td><td>-</td><tr>
<tr><td>61</td><td>RETAK SELIP</td><td>Polygon</td><td>TINGGI</td><td>10.6666286554</td><td>-</td><tr>
<tr><td>62</td><td>RETAK SELIP</td><td>Polygon</td><td>TINGGI</td><td>10.9543396965</td><td>-</td><tr>
<tr><td>63</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>17.4057757188999</td><td>-</td><tr>
<tr><td>64</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>8.93060413245999</td><td>-</td><tr>
<tr><td>65</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>19.5510172233</td><td>-</td><tr>
<tr><td>66</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>32.1008213897</td><td>-</td><tr>
<tr><td>67</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>22.4583237693</td><td>-</td><tr>
<tr><td>68</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.12089289144</td><td>-</td><tr>
<tr><td>69</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.33596353487</td><td>-</td><tr>
<tr><td>70</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.2476322172</td><td>-</td><tr>
<tr><td>71</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.00528333878</td><td>-</td><tr>
<tr><td>72</td><td>SUNGKUR</td><td>Polygon</td><td>SEDANG</td><td>7.65505373659</td><td>-</td><tr>
<tr><td>73</td><td>SUNGKUR</td><td>Polygon</td><td>TINGGI</td><td>4.68351157735</td><td>-</td><tr>
<tr><td>74</td><td>SUNGKUR</td><td>Polygon</td><td>RENDAH</td><td>1.236100272</td><td>-</td><tr>
<tr><td>75</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.36242836945</td><td>-</td><tr>
<tr><td>76</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>16.455435849</td><td>-</td><tr>
<tr><td>77</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.57703031886</td><td>-</td><tr>
<tr><td>78</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.20005608524</td><td>-</td><tr>
<tr><td>79</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.2563036776</td><td>-</td><tr>
<tr><td>80</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.9694258486</td><td>-</td><tr>
<tr><td>81</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.43140233694</td><td>-</td><tr>
<tr><td>82</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.56026877111</td><td>-</td><tr>
<tr><td>83</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.6996209824</td><td>-</td><tr>
<tr><td>84</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.9879587799</td><td>-</td><tr>
<tr><td>85</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.91564532922999</td><td>-</td><tr>
<tr><td>86</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.45097890848</td><td>-</td><tr>
<tr><td>87</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.36247687599</td><td>-</td><tr>
<tr><td>88</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.73137939284</td><td>-</td><tr>
<tr><td>89</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>28.9862905132999</td><td>-</td><tr>
<tr><td>90</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.46718510276</td><td>-</td><tr>
<tr><td>91</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.94969877684</td><td>-</td><tr>
<tr><td>92</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.60388060809</td><td>-</td><tr>
<tr><td>93</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.58900743649</td><td>-</td><tr>
<tr><td>94</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.43311735364</td><td>-</td><tr>
<tr><td>95</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.77380958088</td><td>-</td><tr>
<tr><td>96</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.33908184739</td><td>-</td><tr>
<tr><td>97</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.24750796029</td><td>-</td><tr>
<tr><td>98</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.30821516096</td><td>-</td><tr>
<tr><td>99</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.45623189654999</td><td>-</td><tr>
<tr><td>100</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.24168835009</td><td>-</td><tr>
<tr><td>101</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>42.0542896891999</td><td>-</td><tr>
<tr><td>102</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>22.8759941767</td><td>-</td><tr>
<tr><td>103</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.9068070748</td><td>-</td><tr>
<tr><td>104</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.80035890518</td><td>-</td><tr>
<tr><td>105</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.45992741</td><td>-</td><tr>
<tr><td>106</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.57223102939</td><td>-</td><tr>
<tr><td>107</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.6612926919</td><td>-</td><tr>
<tr><td>108</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.38841281826</td><td>-</td><tr>
<tr><td>109</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.50375704595</td><td>-</td><tr>
<tr><td>110</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.04359769942</td><td>-</td><tr>
<tr><td>111</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.7007207015</td><td>-</td><tr>
<tr><td>112</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>25.6446512722</td><td>-</td><tr>
<tr><td>113</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.7080755188</td><td>-</td><tr>
<tr><td>114</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.04434025469</td><td>-</td><tr>
<tr><td>115</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.1402541971</td><td>-</td><tr>
<tr><td>116</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>21.5246849856999</td><td>-</td><tr>
<tr><td>117</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.30871673082</td><td>-</td><tr>
<tr><td>118</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.83155294752</td><td>-</td><tr>
<tr><td>119</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.80855853935</td><td>-</td><tr>
<tr><td>120</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>25.9099267082999</td><td>-</td><tr>
<tr><td>121</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.44492996942</td><td>-</td><tr>
<tr><td>122</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.99130925913</td><td>-</td><tr>
<tr><td>123</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.73589553374</td><td>-</td><tr>
<tr><td>124</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.32175704118</td><td>-</td><tr>
<tr><td>125</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.0028597201484</td><td>-</td><tr>
<tr><td>126</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.80286130112</td><td>-</td><tr>
<tr><td>127</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.7634458624999</td><td>-</td><tr>
<tr><td>128</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.66241459535</td><td>-</td><tr>
<tr><td>129</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.4303723192</td><td>-</td><tr>
<tr><td>130</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.33462119803</td><td>-</td><tr>
<tr><td>131</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.06674182975</td><td>-</td><tr>
<tr><td>132</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.16543156575</td><td>-</td><tr>
<tr><td>133</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.30345793112</td><td>-</td><tr>
<tr><td>134</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.902533694614</td><td>-</td><tr>
<tr><td>135</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>29.7546004119</td><td>-</td><tr>
<tr><td>136</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.2196036488</td><td>-</td><tr>
<tr><td>137</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>22.2413487452</td><td>-</td><tr>
<tr><td>138</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.64620298613</td><td>-</td><tr>
<tr><td>139</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>15.3085105467</td><td>-</td><tr>
<tr><td>140</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.00699199974</td><td>-</td><tr>
<tr><td>141</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.94957179215</td><td>-</td><tr>
<tr><td>142</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.94567430133</td><td>-</td><tr>
<tr><td>143</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.9894259475</td><td>-</td><tr>
<tr><td>144</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.05950166049</td><td>-</td><tr>
<tr><td>145</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.522113478452</td><td>-</td><tr>
<tr><td>146</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.40065402047</td><td>-</td><tr>
<tr><td>147</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.52753572041</td><td>-</td><tr>
<tr><td>148</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.4315800698</td><td>-</td><tr>
<tr><td>149</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.5940328905999</td><td>-</td><tr>
<tr><td>150</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>34.499101537</td><td>-</td><tr>
<tr><td>151</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>32.7111785808</td><td>-</td><tr>
<tr><td>152</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>19.9842197072</td><td>-</td><tr>
<tr><td>153</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>15.2854424005999</td><td>-</td><tr>
<tr><td>154</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.35459289</td><td>-</td><tr>
<tr><td>155</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.22565962422</td><td>-</td><tr>
<tr><td>156</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.32005952907</td><td>-</td><tr>
<tr><td>157</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.0247908201038</td><td>-</td><tr>
<tr><td>158</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.15728917927</td><td>-</td><tr>
<tr><td>159</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.92064984562</td><td>-</td><tr>
<tr><td>160</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.36684684937</td><td>-</td><tr>


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