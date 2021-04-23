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
                  
                  <h4 class="card-title "><a href="ruas.php"><i class="fas fa-arrow-left"></i></a>&emsp; Ruas 011</h4>
                  <p class="card-category">&emsp;&emsp;&ensp; Namang - Koba</p>
                  

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
                       <tr><td>1</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>25.3648755044999</td><tr>
<tr><td>2</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>5.01911213421</td><tr>
<tr><td>3</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>16.3778078399</td><tr>
<tr><td>4</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>6.61613983193</td><tr>
<tr><td>5</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>5.70252251629</td><tr>
<tr><td>6</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>15.8004248367</td><tr>
<tr><td>7</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>6.44371452018</td><tr>
<tr><td>8</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>56.3091285291</td><tr>
<tr><td>9</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>23.6000438189</td><tr>
<tr><td>10</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>4.27890712473</td><tr>
<tr><td>11</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>13.213513329</td><tr>
<tr><td>12</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>5.36177305331</td><tr>
<tr><td>13</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>21.8856638461</td><tr>
<tr><td>14</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>11.5431403936</td><tr>
<tr><td>15</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>13.0497011416</td><tr>
<tr><td>16</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>7.12830382582</td><tr>
<tr><td>17</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>17.6074774595999</td><tr>
<tr><td>18</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>16.8951742536999</td><tr>
<tr><td>19</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>27.7396652577999</td><tr>
<tr><td>20</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>84.8459170934</td><tr>
<tr><td>21</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>8.12164421776999</td><tr>
<tr><td>22</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>19.4984719027999</td><tr>
<tr><td>23</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>28.7360957697</td><tr>
<tr><td>24</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>2.61011876885</td><tr>
<tr><td>25</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>6.41157024124</td><tr>
<tr><td>26</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>2.03925092415</td><tr>
<tr><td>27</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>17.7870699559</td><tr>
<tr><td>28</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>9.0761386628</td><tr>
<tr><td>29</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>7.55594216002</td><tr>
<tr><td>30</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>15.0283013242999</td><tr>
<tr><td>31</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>2.54898955936</td><tr>
<tr><td>32</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>4.11416357949</td><tr>
<tr><td>33</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>3.08517618338</td><tr>
<tr><td>34</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>3.11973058929</td><tr>
<tr><td>35</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>3.2605243024</td><tr>
<tr><td>36</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>14.9268329983</td><tr>
<tr><td>37</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>15.456587704</td><tr>
<tr><td>38</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>6.83257164719</td><tr>
<tr><td>39</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>1.26316494938</td><tr>
<tr><td>40</td><td>RETAK REFLEKSI SAMBUNGAN</td><td>Line</td><td>RENDAH</td><td>-</td><td>1.71859907513</td><tr>
<tr><td>41</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>SEDANG</td><td>-</td><td>3.09739759361</td><tr>
<tr><td>42</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.05880889469</td><td></td><tr>
<tr><td>43</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.10080222697</td><td></td><tr>
<tr><td>44</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>15.6255086484</td><td></td><tr>
<tr><td>45</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.50241925991</td><td></td><tr>
<tr><td>46</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.00175378999849</td><td></td><tr>
<tr><td>47</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.15085380933</td><td></td><tr>
<tr><td>48</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>11.4565700303</td><td></td><tr>
<tr><td>49</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>18.8178404229</td><td></td><tr>
<tr><td>50</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.89262998825</td><td></td><tr>
<tr><td>51</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>8.659524229</td><td></td><tr>
<tr><td>52</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>89.8262954806999</td><td></td><tr>
<tr><td>53</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>TINGGI</td><td>15.4083910571999</td><td></td><tr>
<tr><td>54</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>3.28214605038</td><td></td><tr>
<tr><td>55</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.99100209091</td><td></td><tr>
<tr><td>56</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>1.05920735042</td><td></td><tr>
<tr><td>57</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.826571650071</td><td></td><tr>
<tr><td>58</td><td>LUBANG</td><td>Polygon</td><td>SEDANG</td><td>3.97804910051</td><td></td><tr>
<tr><td>59</td><td>LUBANG</td><td>Polygon</td><td>SEDANG</td><td>1.36666751959</td><td></td><tr>
<tr><td>60</td><td>LUBANG</td><td>Polygon</td><td>SEDANG</td><td>0.137898755065</td><td></td><tr>
<tr><td>61</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>1.75309052928</td><td></td><tr>
<tr><td>62</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>TINGGI</td><td>4.73728591953</td><td></td><tr>
<tr><td>63</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>11.2897661243</td><td></td><tr>
<tr><td>64</td><td>RETAK BLOK</td><td>Polygon</td><td>TINGGI</td><td>96.4145203844999</td><td></td><tr>
<tr><td>65</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>21.5492299603</td><td></td><tr>
<tr><td>66</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>35.4018855182999</td><td></td><tr>
<tr><td>67</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>5.9392612863</td><td></td><tr>
<tr><td>68</td><td>RETAK BLOK</td><td>Polygon</td><td>TINGGI</td><td>4.69302744482</td><td></td><tr>
<tr><td>69</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>2.83614011946</td><td></td><tr>
<tr><td>70</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>1.87731182137</td><td></td><tr>
<tr><td>71</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>31.1719416478</td><td></td><tr>
<tr><td>72</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>41.037402479</td><td></td><tr>
<tr><td>73</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>12.3778573035</td><td></td><tr>
<tr><td>74</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>7.9269827644</td><td></td><tr>
<tr><td>75</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.17886468364</td><td></td><tr>
<tr><td>76</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>18.9789873623</td><td></td><tr>
<tr><td>77</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>10.1136434564</td><td></td><tr>
<tr><td>78</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>7.72857367306</td><td></td><tr>
<tr><td>79</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>0.0145580350713</td><td></td><tr>
<tr><td>80</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.59679755369</td><td></td><tr>
<tr><td>81</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>0.1587594129</td><td></td><tr>
<tr><td>82</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>38.5724646773999</td><td></td><tr>
<tr><td>83</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>1.668377204</td><td></td><tr>
<tr><td>84</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>4.06598301966</td><td></td><tr>
<tr><td>85</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>80.6758475843</td><td></td><tr>
<tr><td>86</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>53.0052736493</td><td></td><tr>
<tr><td>87</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>127.946287475999</td><td></td><tr>
<tr><td>88</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>50.6544636058999</td><td></td><tr>
<tr><td>89</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>109.793270445999</td><td></td><tr>
<tr><td>90</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>59.2677374602999</td><td></td><tr>
<tr><td>91</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>129.894239684</td><td></td><tr>
<tr><td>92</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>112.943451792</td><td></td><tr>
<tr><td>93</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>107.207323598</td><td></td><tr>
<tr><td>94</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>70.0526011291999</td><td></td><tr>
<tr><td>95</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>79.7154115083999</td><td></td><tr>
<tr><td>96</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>148.174212904</td><td></td><tr>
<tr><td>97</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>102.469941534</td><td></td><tr>
<tr><td>98</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>4.83022494514</td><td></td><tr>
<tr><td>99</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>32.3769001528999</td><td></td><tr>
<tr><td>100</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>1.24572946448</td><td></td><tr>
<tr><td>101</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>54.3142661860999</td><td></td><tr>
<tr><td>102</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>210.463674680999</td><td></td><tr>
<tr><td>103</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>1.05408533768</td><td></td><tr>
<tr><td>104</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>18.8735120792</td><td></td><tr>
<tr><td>105</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>77.1796163917999</td><td></td><tr>
<tr><td>106</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>57.8393808423999</td><td></td><tr>
<tr><td>107</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>3.52485539044</td><td></td><tr>
<tr><td>108</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>87.3581751278999</td><td></td><tr>
<tr><td>109</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>107.883719682</td><td></td><tr>
<tr><td>110</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>173.239566607</td><td></td><tr>
<tr><td>111</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>224.714650839</td><td></td><tr>
<tr><td>112</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>108.306186464</td><td></td><tr>
<tr><td>113</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>74.9595192968999</td><td></td><tr>
<tr><td>114</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>3.57268617132</td><td></td><tr>
<tr><td>115</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>67.0255027724</td><td></td><tr>
<tr><td>116</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>103.736440568</td><td></td><tr>
<tr><td>117</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>23.1901196678999</td><td></td><tr>
<tr><td>118</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>11.9053365593</td><td></td><tr>
<tr><td>119</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>177.486355948</td><td></td><tr>
<tr><td>120</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>30.4161384482</td><td></td><tr>
<tr><td>121</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>87.2037811957</td><td></td><tr>
<tr><td>122</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>45.2282878727</td><td></td><tr>
<tr><td>123</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>0.248131691219</td><td></td><tr>
<tr><td>124</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>14.3343885182</td><td></td><tr>
<tr><td>125</td><td>RETAK BLOK</td><td>Polygon</td><td>SEDANG</td><td>6.45951999316</td><td></td><tr>
<tr><td>126</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.34702847997</td><td></td><tr>
<tr><td>127</td><td>TAMBALAN</td><td>Polygon</td><td>SEDANG</td><td>2.22382466489</td><td></td><tr>

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