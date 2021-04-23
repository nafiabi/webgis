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
                  
                  <h4 class="card-title "><a href="ruas.php"><i class="fas fa-arrow-left"></i></a>&emsp; Ruas 001</h4>
                  <p class="card-category">&emsp;&emsp;&ensp; Tanjung Kelian - Ibul </p>
                  

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
                        <tr><td>1</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>2.82263992208</td><tr>
<tr><td>2</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>25.0219525481</td><tr>
<tr><td>3</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>51.7279149475999</td><tr>
<tr><td>4</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>24.4997921426999</td><tr>
<tr><td>5</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>13.8034959284</td><tr>
<tr><td>6</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>31.1878775283</td><tr>
<tr><td>7</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>7.66770985656</td><tr>
<tr><td>8</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>6.92672318363</td><tr>
<tr><td>9</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>5.82031658226</td><tr>
<tr><td>10</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>4.33065894578</td><tr>
<tr><td>11</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>6.98278090449</td><tr>
<tr><td>12</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>13.2063393638</td><tr>
<tr><td>13</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>4.71099024959</td><tr>
<tr><td>14</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>3.05817561969</td><tr>
<tr><td>15</td><td>RETAK MEMANJANG DAN MELINTANG</td><td>Line</td><td>RENDAH</td><td>-</td><td>1.58765621288</td><tr>
<tr><td>16</td><td>RETAK REFLEKSI SAMBUNGAN</td><td>Line</td><td>RENDAH</td><td>-</td><td>2.00904939191</td><tr>
<tr><td>17</td><td>RETAK REFLEKSI SAMBUNGAN</td><td>Line</td><td>RENDAH</td><td>-</td><td>0.696372263235</td><tr>
<tr><td>18</td><td>KEGEMUKAN</td><td>Polygon</td><td>RENDAH</td><td>13.3591678328</td><td>-</td><tr>
<tr><td>19</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.44017320311</td><td>-</td><tr>
<tr><td>20</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>13.5348647409</td><td>-</td><tr>
<tr><td>21</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.12097240839</td><td>-</td><tr>
<tr><td>22</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.61529988911</td><td>-</td><tr>
<tr><td>23</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.1025391451</td><td>-</td><tr>
<tr><td>24</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.27806364134</td><td>-</td><tr>
<tr><td>25</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>11.9129809637</td><td>-</td><tr>
<tr><td>26</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>22.31395699</td><td>-</td><tr>
<tr><td>27</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.11145213046</td><td>-</td><tr>
<tr><td>28</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>18.4635650674</td><td>-</td><tr>
<tr><td>29</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>43.800463471</td><td>-</td><tr>
<tr><td>30</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>109.689065887</td><td>-</td><tr>
<tr><td>31</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.586347625661</td><td>-</td><tr>
<tr><td>32</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.877051705996</td><td>-</td><tr>
<tr><td>33</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.59927977545</td><td>-</td><tr>
<tr><td>34</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>7.42484731957</td><td>-</td><tr>
<tr><td>35</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>9.29072715751</td><td>-</td><tr>
<tr><td>36</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.00689688048</td><td>-</td><tr>
<tr><td>37</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>17.7901451030999</td><td>-</td><tr>
<tr><td>38</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.81058776895</td><td>-</td><tr>
<tr><td>39</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>18.1722234020999</td><td>-</td><tr>
<tr><td>40</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>12.1394452987</td><td>-</td><tr>
<tr><td>41</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.95776623997</td><td>-</td><tr>
<tr><td>42</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.82629388965</td><td>-</td><tr>
<tr><td>43</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>2.93024291891</td><td>-</td><tr>
<tr><td>44</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>11.6221635015999</td><td>-</td><tr>
<tr><td>45</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.257332588787</td><td>-</td><tr>
<tr><td>46</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>TINGGI</td><td>12.8524300397</td><td>-</td><tr>
<tr><td>47</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>11.3062686944</td><td>-</td><tr>
<tr><td>48</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>40.6245901404999</td><td>-</td><tr>
<tr><td>49</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>4.85898252063</td><td>-</td><tr>
<tr><td>50</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.94405976439</td><td>-</td><tr>
<tr><td>51</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.871188110192</td><td>-</td><tr>
<tr><td>52</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>15.466273909</td><td>-</td><tr>
<tr><td>53</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>82.4174770637</td><td>-</td><tr>
<tr><td>54</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.60639790795</td><td>-</td><tr>
<tr><td>55</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>8.82459175696999</td><td>-</td><tr>
<tr><td>56</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.86766218885</td><td>-</td><tr>
<tr><td>57</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>34.3913570755999</td><td>-</td><tr>
<tr><td>58</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>11.0901339374999</td><td>-</td><tr>
<tr><td>59</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.07509307949</td><td>-</td><tr>
<tr><td>60</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>43.7076462466</td><td>-</td><tr>
<tr><td>61</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>104.231726159999</td><td>-</td><tr>
<tr><td>62</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.89491576125</td><td>-</td><tr>
<tr><td>63</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>21.8971875432999</td><td>-</td><tr>
<tr><td>64</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>19.9369185370999</td><td>-</td><tr>
<tr><td>65</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.45661091903</td><td>-</td><tr>
<tr><td>66</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.57099577921</td><td>-</td><tr>
<tr><td>67</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>13.1264669775</td><td>-</td><tr>
<tr><td>68</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.55207374282</td><td>-</td><tr>
<tr><td>69</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.7543038896</td><td>-</td><tr>
<tr><td>70</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.255303614858</td><td>-</td><tr>
<tr><td>71</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>9.11375780265</td><td>-</td><tr>
<tr><td>72</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>7.13353231715</td><td>-</td><tr>
<tr><td>73</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.25117072793</td><td>-</td><tr>
<tr><td>74</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>10.5133811056</td><td>-</td><tr>
<tr><td>75</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.12893472116</td><td>-</td><tr>
<tr><td>76</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.09725411091</td><td>-</td><tr>
<tr><td>77</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.81849570052</td><td>-</td><tr>
<tr><td>78</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.56878104289</td><td>-</td><tr>
<tr><td>79</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.42874040358</td><td>-</td><tr>
<tr><td>80</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>4.44901325379</td><td>-</td><tr>
<tr><td>81</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>9.29264901230999</td><td>-</td><tr>
<tr><td>82</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.36454180421</td><td>-</td><tr>
<tr><td>83</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.16494767078</td><td>-</td><tr>
<tr><td>84</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.56227725828</td><td>-</td><tr>
<tr><td>85</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>4.33143139439</td><td>-</td><tr>
<tr><td>86</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.789327950568</td><td>-</td><tr>
<tr><td>87</td><td>PEMUAIAN</td><td>Polygon</td><td>RENDAH</td><td>1.37925984047</td><td>-</td><tr>
<tr><td>88</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>7.4071019423</td><td>-</td><tr>
<tr><td>89</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.13553642599</td><td>-</td><tr>
<tr><td>90</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.89701737701</td><td>-</td><tr>
<tr><td>91</td><td>PEMUAIAN</td><td>Polygon</td><td>RENDAH</td><td>1.47977005166</td><td>-</td><tr>
<tr><td>92</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>4.06697160177</td><td>-</td><tr>
<tr><td>93</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.901956443904</td><td>-</td><tr>
<tr><td>94</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>11.8140517986</td><td>-</td><tr>
<tr><td>95</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.0310727012325</td><td>-</td><tr>
<tr><td>96</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.99721515885</td><td>-</td><tr>
<tr><td>97</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.52400734146</td><td>-</td><tr>
<tr><td>98</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.85033015319</td><td>-</td><tr>
<tr><td>99</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>28.4522701960999</td><td>-</td><tr>
<tr><td>100</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>27.9553667081</td><td>-</td><tr>
<tr><td>101</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>SEDANG</td><td>132.738253761</td><td>-</td><tr>
<tr><td>102</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.35781128103</td><td>-</td><tr>
<tr><td>103</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>7.39367306779</td><td>-</td><tr>
<tr><td>104</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>10.95334824</td><td>-</td><tr>
<tr><td>105</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>8.887652598</td><td>-</td><tr>
<tr><td>106</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.0201196403408</td><td>-</td><tr>
<tr><td>107</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>4.59553478161</td><td>-</td><tr>
<tr><td>108</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.17362953357</td><td>-</td><tr>
<tr><td>109</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>152.894743202</td><td>-</td><tr>
<tr><td>110</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>142.729869083</td><td>-</td><tr>
<tr><td>111</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>15.1007886564</td><td>-</td><tr>
<tr><td>112</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.35567084379</td><td>-</td><tr>
<tr><td>113</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>25.3781239141</td><td>-</td><tr>
<tr><td>114</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>26.1957415613</td><td>-</td><tr>
<tr><td>115</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.05108837535</td><td>-</td><tr>
<tr><td>116</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.12815690502</td><td>-</td><tr>
<tr><td>117</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.860128196896</td><td>-</td><tr>
<tr><td>118</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.83689685065</td><td>-</td><tr>
<tr><td>119</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.11752332564</td><td>-</td><tr>
<tr><td>120</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.666086169537</td><td>-</td><tr>
<tr><td>121</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.75509567523</td><td>-</td><tr>
<tr><td>122</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>99.8030201841</td><td>-</td><tr>
<tr><td>123</td><td>PEMUAIAN</td><td>Polygon</td><td>RENDAH</td><td>16.3190038934</td><td>-</td><tr>
<tr><td>124</td><td>PEMUAIAN</td><td>Polygon</td><td>RENDAH</td><td>7.42497885993</td><td>-</td><tr>
<tr><td>125</td><td>PEMUAIAN</td><td>Polygon</td><td>RENDAH</td><td>4.51823287552</td><td>-</td><tr>
<tr><td>126</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.61530701698</td><td>-</td><tr>
<tr><td>127</td><td>PEMUAIAN</td><td>Polygon</td><td>RENDAH</td><td>19.9012281203999</td><td>-</td><tr>
<tr><td>128</td><td>PEMUAIAN</td><td>Polygon</td><td>RENDAH</td><td>3.03047690272</td><td>-</td><tr>
<tr><td>129</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>4.16996315876</td><td>-</td><tr>
<tr><td>130</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.13164575029</td><td>-</td><tr>
<tr><td>131</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>8.96127419583</td><td>-</td><tr>
<tr><td>132</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.41700860493</td><td>-</td><tr>
<tr><td>133</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.70736357044</td><td>-</td><tr>
<tr><td>134</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.26449919427</td><td>-</td><tr>
<tr><td>135</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>16.1671856204</td><td>-</td><tr>
<tr><td>136</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.01246836233</td><td>-</td><tr>
<tr><td>137</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.71645365948</td><td>-</td><tr>
<tr><td>138</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>7.13902510546</td><td>-</td><tr>
<tr><td>139</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.66891600303</td><td>-</td><tr>
<tr><td>140</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.08064319098</td><td>-</td><tr>
<tr><td>141</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.319981722079</td><td>-</td><tr>
<tr><td>142</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.30032814072</td><td>-</td><tr>
<tr><td>143</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.90517292512</td><td>-</td><tr>
<tr><td>144</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.903988555868</td><td>-</td><tr>
<tr><td>145</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.667439037796</td><td>-</td><tr>
<tr><td>146</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>16.3975795574</td><td>-</td><tr>
<tr><td>147</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>11.1819594386</td><td>-</td><tr>
<tr><td>148</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.39352771049</td><td>-</td><tr>
<tr><td>149</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.03600936939</td><td>-</td><tr>
<tr><td>150</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.06060867501</td><td>-</td><tr>
<tr><td>151</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>5.56948250829</td><td>-</td><tr>
<tr><td>152</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>6.84534205957</td><td>-</td><tr>
<tr><td>153</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>23.3834914926999</td><td>-</td><tr>
<tr><td>154</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.90373452983</td><td>-</td><tr>
<tr><td>155</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.899293915885</td><td>-</td><tr>
<tr><td>156</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.5396207367</td><td>-</td><tr>
<tr><td>157</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.900092721515</td><td>-</td><tr>
<tr><td>158</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>2.34025807068</td><td>-</td><tr>
<tr><td>159</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>3.60515540506</td><td>-</td><tr>
<tr><td>160</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>7.34105623976</td><td>-</td><tr>
<tr><td>161</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>4.02896712899</td><td>-</td><tr>
<tr><td>162</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.71959593167</td><td>-</td><tr>
<tr><td>163</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.44291151318</td><td>-</td><tr>
<tr><td>164</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.32224110965</td><td>-</td><tr>
<tr><td>165</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>34.0928061715</td><td>-</td><tr>
<tr><td>166</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.249389870547</td><td>-</td><tr>
<tr><td>167</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>0.595365399036</td><td>-</td><tr>
<tr><td>168</td><td>PELEPASAN BUTIR</td><td>Polygon</td><td>RENDAH</td><td>1.64884485813</td><td>-</td><tr>
<tr><td>169</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>3.88794848127</td><td>-</td><tr>
<tr><td>170</td><td>LUBANG</td><td>Polygon</td><td>TINGGI</td><td>4.55891552503</td><td>-</td><tr>
<tr><td>171</td><td>LUBANG</td><td>Polygon</td><td>SEDANG</td><td>2.06374621104</td><td>-</td><tr>
<tr><td>172</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.615614795143</td><td>-</td><tr>
<tr><td>173</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>1.87140037487</td><td>-</td><tr>
<tr><td>174</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>1.47178565123</td><td>-</td><tr>
<tr><td>175</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.727555079605</td><td>-</td><tr>
<tr><td>176</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>0.782426770184</td><td>-</td><tr>
<tr><td>177</td><td>LUBANG</td><td>Polygon</td><td>RENDAH</td><td>1.0978096004</td><td>-</td><tr>
<tr><td>178</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>99.0738131083</td><td>-</td><tr>
<tr><td>179</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>20.4873973613</td><td>-</td><tr>
<tr><td>180</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>120.189148693</td><td>-</td><tr>
<tr><td>181</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>124.34526019</td><td>-</td><tr>
<tr><td>182</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>147.480618284999</td><td>-</td><tr>
<tr><td>183</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>31.364855107</td><td>-</td><tr>
<tr><td>184</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>29.3395504090999</td><td>-</td><tr>
<tr><td>185</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>6.18611149357</td><td>-</td><tr>
<tr><td>186</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>157.812578747</td><td>-</td><tr>
<tr><td>187</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>72.4076709319</td><td>-</td><tr>
<tr><td>188</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>0.376455549484</td><td>-</td><tr>
<tr><td>189</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>34.8940876339</td><td>-</td><tr>
<tr><td>190</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>31.7298524077</td><td>-</td><tr>
<tr><td>191</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>115.285524301</td><td>-</td><tr>
<tr><td>192</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>85.0784733075</td><td>-</td><tr>
<tr><td>193</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>51.0481954676</td><td>-</td><tr>
<tr><td>194</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>20.7042821163</td><td>-</td><tr>
<tr><td>195</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>5.98307419611</td><td>-</td><tr>
<tr><td>196</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>6.24437623713</td><td>-</td><tr>
<tr><td>197</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>75.788688644</td><td>-</td><tr>
<tr><td>198</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>80.3821082423999</td><td>-</td><tr>
<tr><td>199</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>2.24024299199</td><td>-</td><tr>
<tr><td>200</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>32.1886556306999</td><td>-</td><tr>
<tr><td>201</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>15.9094471486</td><td>-</td><tr>
<tr><td>202</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>8.79394732735</td><td>-</td><tr>
<tr><td>203</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>2.4966892622</td><td>-</td><tr>
<tr><td>204</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>16.3975705185999</td><td>-</td><tr>
<tr><td>205</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>58.0647653445999</td><td>-</td><tr>
<tr><td>206</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>21.7175870784</td><td>-</td><tr>
<tr><td>207</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>13.0682593815</td><td>-</td><tr>
<tr><td>208</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>26.7494008014999</td><td>-</td><tr>
<tr><td>209</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>2.62089072377</td><td>-</td><tr>
<tr><td>210</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>3.95734928946</td><td>-</td><tr>
<tr><td>211</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>5.47173750828</td><td>-</td><tr>
<tr><td>212</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>18.1732864266</td><td>-</td><tr>
<tr><td>213</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>7.87166027879</td><td>-</td><tr>
<tr><td>214</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>33.2488160146</td><td>-</td><tr>
<tr><td>215</td><td>PENGAUSAN AGREGAT</td><td>Polygon</td><td>-</td><td>12.4721347847</td><td>-</td><tr>
<tr><td>216</td><td>JEMBUL DAN LEKUKAN</td><td>Polygon</td><td>SEDANG</td><td>28.4301030186</td><td>-</td><tr>
<tr><td>217</td><td>JEMBUL DAN LEKUKAN</td><td>Polygon</td><td>RENDAH</td><td>9.87085633299</td><td>-</td><tr>
<tr><td>218</td><td>JEMBUL DAN LEKUKAN</td><td>Polygon</td><td>TINGGI</td><td>8.46968528016</td><td>-</td><tr>
<tr><td>219</td><td>AMBLES</td><td>Polygon</td><td>SEDANG</td><td>12.5684607511</td><td>-</td><tr>
<tr><td>220</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>9.98373772655999</td><td>-</td><tr>
<tr><td>221</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>11.0881971137</td><td>-</td><tr>
<tr><td>222</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>28.5392214051</td><td>-</td><tr>
<tr><td>223</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.80855438733</td><td>-</td><tr>
<tr><td>224</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.3018233584</td><td>-</td><tr>
<tr><td>225</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.6112285502</td><td>-</td><tr>
<tr><td>226</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>54.7648266097</td><td>-</td><tr>
<tr><td>227</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>24.9227042879999</td><td>-</td><tr>
<tr><td>228</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>38.5345085017</td><td>-</td><tr>
<tr><td>229</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>12.7214333724</td><td>-</td><tr>
<tr><td>230</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>57.4242804597</td><td>-</td><tr>
<tr><td>231</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>0.364118760124</td><td>-</td><tr>
<tr><td>232</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>22.1318090006</td><td>-</td><tr>
<tr><td>233</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>0.010708899718</td><td>-</td><tr>
<tr><td>234</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>17.1818015827</td><td>-</td><tr>
<tr><td>235</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>18.2759827759999</td><td>-</td><tr>
<tr><td>236</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>1.79480085857</td><td>-</td><tr>
<tr><td>237</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>0.000010184997528</td><td>-</td><tr>
<tr><td>238</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>11.3988452795</td><td>-</td><tr>
<tr><td>239</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>1.45310929375</td><td>-</td><tr>
<tr><td>240</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>25.5094130471</td><td>-</td><tr>
<tr><td>241</td><td>RETAK SELIP</td><td>Polygon</td><td>RENDAH</td><td>1.93584539682</td><td>-</td><tr>
<tr><td>242</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>TINGGI</td><td>7.3051776488</td><td>-</td><tr>
<tr><td>243</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>38.4795895887</td><td>-</td><tr>
<tr><td>244</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>9.6572153001</td><td>-</td><tr>
<tr><td>245</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.53010367249999</td><td>-</td><tr>
<tr><td>246</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>7.3947749374</td><td>-</td><tr>
<tr><td>247</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.24812379426</td><td>-</td><tr>
<tr><td>248</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>6.66063410755</td><td>-</td><tr>
<tr><td>249</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.52423850595</td><td>-</td><tr>
<tr><td>250</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.3202716984</td><td>-</td><tr>
<tr><td>251</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.48733383564</td><td>-</td><tr>
<tr><td>252</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.9397695388</td><td>-</td><tr>
<tr><td>253</td><td>RETAK SELIP</td><td>Polygon</td><td>RENDAH</td><td>5.76811433135</td><td>-</td><tr>
<tr><td>254</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.35338496252</td><td>-</td><tr>
<tr><td>255</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.23703329486</td><td>-</td><tr>
<tr><td>256</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>16.7673925329</td><td>-</td><tr>
<tr><td>257</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>42.9575333873999</td><td>-</td><tr>
<tr><td>258</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.87359562834</td><td>-</td><tr>
<tr><td>259</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>15.5658640599</td><td>-</td><tr>
<tr><td>260</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>26.0614096925</td><td>-</td><tr>
<tr><td>261</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>6.54392085985</td><td>-</td><tr>
<tr><td>262</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.88601284646</td><td>-</td><tr>
<tr><td>263</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.16916711006</td><td>-</td><tr>
<tr><td>264</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.07042111858</td><td>-</td><tr>
<tr><td>265</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>11.7101523368</td><td>-</td><tr>
<tr><td>266</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.85811015157</td><td>-</td><tr>
<tr><td>267</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.41558358246</td><td>-</td><tr>
<tr><td>268</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>11.9283659946</td><td>-</td><tr>
<tr><td>269</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.6564907333</td><td>-</td><tr>
<tr><td>270</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>11.6111936526</td><td>-</td><tr>
<tr><td>271</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.38434186516</td><td>-</td><tr>
<tr><td>272</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>23.7290257738999</td><td>-</td><tr>
<tr><td>273</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>21.2833332005</td><td>-</td><tr>
<tr><td>274</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>15.6152233211</td><td>-</td><tr>
<tr><td>275</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>35.8721687984999</td><td>-</td><tr>
<tr><td>276</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.48711414737</td><td>-</td><tr>
<tr><td>277</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>21.1011003292</td><td>-</td><tr>
<tr><td>278</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>1.63684405133</td><td>-</td><tr>
<tr><td>279</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.89693227757</td><td>-</td><tr>
<tr><td>280</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>38.6181588577999</td><td>-</td><tr>
<tr><td>281</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>16.693460171</td><td>-</td><tr>
<tr><td>282</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.48871537266</td><td>-</td><tr>
<tr><td>283</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>1.72755760164</td><td>-</td><tr>
<tr><td>284</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.33768398549</td><td>-</td><tr>
<tr><td>285</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>12.3864673563</td><td>-</td><tr>
<tr><td>286</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>12.5182377842</td><td>-</td><tr>
<tr><td>287</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>16.8802957760999</td><td>-</td><tr>
<tr><td>288</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>6.85250975303</td><td>-</td><tr>
<tr><td>289</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.2623537311</td><td>-</td><tr>
<tr><td>290</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>6.71327987003</td><td>-</td><tr>
<tr><td>291</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>9.26710358667999</td><td>-</td><tr>
<tr><td>292</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>15.4553639332999</td><td>-</td><tr>
<tr><td>293</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>26.6712640008</td><td>-</td><tr>
<tr><td>294</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>14.6082224443</td><td>-</td><tr>
<tr><td>295</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>39.8403935405</td><td>-</td><tr>
<tr><td>296</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.24296181426</td><td>-</td><tr>
<tr><td>297</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.70559832895</td><td>-</td><tr>
<tr><td>298</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>15.1315103002</td><td>-</td><tr>
<tr><td>299</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>19.3756887999999</td><td>-</td><tr>
<tr><td>300</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>1.33538990435</td><td>-</td><tr>
<tr><td>301</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.03909521233</td><td>-</td><tr>
<tr><td>302</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>18.3923038169</td><td>-</td><tr>
<tr><td>303</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.6320091087</td><td>-</td><tr>
<tr><td>304</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.18691045181</td><td>-</td><tr>
<tr><td>305</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.63670595813</td><td>-</td><tr>
<tr><td>306</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.20700198985</td><td>-</td><tr>
<tr><td>307</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>29.6025493136999</td><td>-</td><tr>
<tr><td>308</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>17.9097791356</td><td>-</td><tr>
<tr><td>309</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>11.7759534825</td><td>-</td><tr>
<tr><td>310</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>1.78540298956</td><td>-</td><tr>
<tr><td>311</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>26.3996265112</td><td>-</td><tr>
<tr><td>312</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>SEDANG</td><td>24.7233205767</td><td>-</td><tr>
<tr><td>313</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>2.96652494653</td><td>-</td><tr>
<tr><td>314</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.62389321066</td><td>-</td><tr>
<tr><td>315</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.92435945264</td><td>-</td><tr>
<tr><td>316</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>6.72329210117</td><td>-</td><tr>
<tr><td>317</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.92110566333</td><td>-</td><tr>
<tr><td>318</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>20.2827348261</td><td>-</td><tr>
<tr><td>319</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>15.195942549</td><td>-</td><tr>
<tr><td>320</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.38696453645</td><td>-</td><tr>
<tr><td>321</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>9.7341565998</td><td>-</td><tr>
<tr><td>322</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>5.14604318784</td><td>-</td><tr>
<tr><td>323</td><td>RETAK BLOK</td><td>Polygon</td><td>RENDAH</td><td>35.7802111036</td><td>-</td><tr>
<tr><td>324</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>21.895055236</td><td>-</td><tr>
<tr><td>325</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>12.7398949558</td><td>-</td><tr>
<tr><td>326</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>3.50336015395</td><td>-</td><tr>
<tr><td>327</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>9.33162756782999</td><td>-</td><tr>
<tr><td>328</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>13.0347645303</td><td>-</td><tr>
<tr><td>329</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>19.0118481724</td><td>-</td><tr>
<tr><td>330</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>22.8511870180999</td><td>-</td><tr>
<tr><td>331</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>10.3371821333</td><td>-</td><tr>
<tr><td>332</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>4.66509553696</td><td>-</td><tr>
<tr><td>333</td><td>RETAK KULIT BUAYA</td><td>Polygon</td><td>RENDAH</td><td>8.59552959064</td><td>-</td><tr>
<tr><td>334</td><td>SUNGKUR</td><td>Polygon</td><td>RENDAH</td><td>13.782042403</td><td>-</td><tr>
<tr><td>335</td><td>SUNGKUR</td><td>Polygon</td><td>RENDAH</td><td>12.2024413274</td><td>-</td><tr>
<tr><td>336</td><td>SUNGKUR</td><td>Polygon</td><td>RENDAH</td><td>0.224940634867</td><td>-</td><tr>
<tr><td>337</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.17075630094</td><td>-</td><tr>
<tr><td>338</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>32.6108884981</td><td>-</td><tr>
<tr><td>339</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.8513252495</td><td>-</td><tr>
<tr><td>340</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.52025958234</td><td>-</td><tr>
<tr><td>341</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.74077735008</td><td>-</td><tr>
<tr><td>342</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.984450115258</td><td>-</td><tr>
<tr><td>343</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.91058126632</td><td>-</td><tr>
<tr><td>344</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.42254665437</td><td>-</td><tr>
<tr><td>345</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.46408816911</td><td>-</td><tr>
<tr><td>346</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.254648700967</td><td>-</td><tr>
<tr><td>347</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.66372625974</td><td>-</td><tr>
<tr><td>348</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.30545384863</td><td>-</td><tr>
<tr><td>349</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.78596527147</td><td>-</td><tr>
<tr><td>350</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.65197426466</td><td>-</td><tr>
<tr><td>351</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.73475427513</td><td>-</td><tr>
<tr><td>352</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.550091040349</td><td>-</td><tr>
<tr><td>353</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.85577969783</td><td>-</td><tr>
<tr><td>354</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.58888435351</td><td>-</td><tr>
<tr><td>355</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>25.1407445876999</td><td>-</td><tr>
<tr><td>356</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>27.4966071646</td><td>-</td><tr>
<tr><td>357</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.1391494951</td><td>-</td><tr>
<tr><td>358</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>56.4601230099</td><td>-</td><tr>
<tr><td>359</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.25399086204</td><td>-</td><tr>
<tr><td>360</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>32.3768198567999</td><td>-</td><tr>
<tr><td>361</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.00971138299</td><td>-</td><tr>
<tr><td>362</td><td>TAMBALAN</td><td>Polygon</td><td>SEDANG</td><td>16.9351363628</td><td>-</td><tr>
<tr><td>363</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>15.1563529944</td><td>-</td><tr>
<tr><td>364</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.0099241788</td><td>-</td><tr>
<tr><td>365</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.3767841877</td><td>-</td><tr>
<tr><td>366</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.77646347732999</td><td>-</td><tr>
<tr><td>367</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>22.8264541043</td><td>-</td><tr>
<tr><td>368</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>51.3649777579</td><td>-</td><tr>
<tr><td>369</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.21929599872</td><td>-</td><tr>
<tr><td>370</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.4344062195</td><td>-</td><tr>
<tr><td>371</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.422398480035</td><td>-</td><tr>
<tr><td>372</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.914134349835</td><td>-</td><tr>
<tr><td>373</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.02707526572</td><td>-</td><tr>
<tr><td>374</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.22466158724</td><td>-</td><tr>
<tr><td>375</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.51970108443</td><td>-</td><tr>
<tr><td>376</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.93723155912</td><td>-</td><tr>
<tr><td>377</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.19916186486</td><td>-</td><tr>
<tr><td>378</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.5605766658</td><td>-</td><tr>
<tr><td>379</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.02494155434</td><td>-</td><tr>
<tr><td>380</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.616236016</td><td>-</td><tr>
<tr><td>381</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>29.0430164085</td><td>-</td><tr>
<tr><td>382</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>22.1301389015</td><td>-</td><tr>
<tr><td>383</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>18.6397340323</td><td>-</td><tr>
<tr><td>384</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.557077773</td><td>-</td><tr>
<tr><td>385</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.7870182871</td><td>-</td><tr>
<tr><td>386</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>24.1968722316999</td><td>-</td><tr>
<tr><td>387</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.97171551351</td><td>-</td><tr>
<tr><td>388</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.2269439605</td><td>-</td><tr>
<tr><td>389</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>25.8806493507999</td><td>-</td><tr>
<tr><td>390</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.8732804927999</td><td>-</td><tr>
<tr><td>391</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>18.2164184608</td><td>-</td><tr>
<tr><td>392</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.5904712492</td><td>-</td><tr>
<tr><td>393</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.822867766388</td><td>-</td><tr>
<tr><td>394</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.5637198306999</td><td>-</td><tr>
<tr><td>395</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.18808333864</td><td>-</td><tr>
<tr><td>396</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.3713590841</td><td>-</td><tr>
<tr><td>397</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.9291210264</td><td>-</td><tr>
<tr><td>398</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.35032420045999</td><td>-</td><tr>
<tr><td>399</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.14007912892</td><td>-</td><tr>
<tr><td>400</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.74918932714</td><td>-</td><tr>
<tr><td>401</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.8070709367</td><td>-</td><tr>
<tr><td>402</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>16.935893942</td><td>-</td><tr>
<tr><td>403</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.16815348024</td><td>-</td><tr>
<tr><td>404</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.21534385954</td><td>-</td><tr>
<tr><td>405</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.50778084984</td><td>-</td><tr>
<tr><td>406</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.48552845655</td><td>-</td><tr>
<tr><td>407</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.8343248776</td><td>-</td><tr>
<tr><td>408</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.66583865626</td><td>-</td><tr>
<tr><td>409</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.68666731912</td><td>-</td><tr>
<tr><td>410</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.81599568137</td><td>-</td><tr>
<tr><td>411</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.97787728052</td><td>-</td><tr>
<tr><td>412</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.989839259914</td><td>-</td><tr>
<tr><td>413</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.31392928104</td><td>-</td><tr>
<tr><td>414</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.813754529895</td><td>-</td><tr>
<tr><td>415</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.26516442962</td><td>-</td><tr>
<tr><td>416</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.1677593619</td><td>-</td><tr>
<tr><td>417</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.58214682857</td><td>-</td><tr>
<tr><td>418</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.3109439803999</td><td>-</td><tr>
<tr><td>419</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.44412937716</td><td>-</td><tr>
<tr><td>420</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.92608394161</td><td>-</td><tr>
<tr><td>421</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.33889735719</td><td>-</td><tr>
<tr><td>422</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.41855219946</td><td>-</td><tr>
<tr><td>423</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.54846020067</td><td>-</td><tr>
<tr><td>424</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.87440264638</td><td>-</td><tr>
<tr><td>425</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.69981977919</td><td>-</td><tr>
<tr><td>426</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.45571930979</td><td>-</td><tr>
<tr><td>427</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.77404103077</td><td>-</td><tr>
<tr><td>428</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.1571874183</td><td>-</td><tr>
<tr><td>429</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.66437446098</td><td>-</td><tr>
<tr><td>430</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.09657250002</td><td>-</td><tr>
<tr><td>431</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.90199596404</td><td>-</td><tr>
<tr><td>432</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.20636504106</td><td>-</td><tr>
<tr><td>433</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.9306666745</td><td>-</td><tr>
<tr><td>434</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.7846484316</td><td>-</td><tr>
<tr><td>435</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.85262883312</td><td>-</td><tr>
<tr><td>436</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.88662887223</td><td>-</td><tr>
<tr><td>437</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.19828805043</td><td>-</td><tr>
<tr><td>438</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.34911437151</td><td>-</td><tr>
<tr><td>439</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.521175954846</td><td>-</td><tr>
<tr><td>440</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.21786999086</td><td>-</td><tr>
<tr><td>441</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.0544405962999</td><td>-</td><tr>
<tr><td>442</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.38018751377</td><td>-</td><tr>
<tr><td>443</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.8943181598</td><td>-</td><tr>
<tr><td>444</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.44794017461</td><td>-</td><tr>
<tr><td>445</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.808426558</td><td>-</td><tr>
<tr><td>446</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.44460750909</td><td>-</td><tr>
<tr><td>447</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.03309891237</td><td>-</td><tr>
<tr><td>448</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.01172897187</td><td>-</td><tr>
<tr><td>449</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.98465007892</td><td>-</td><tr>
<tr><td>450</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.06490772515</td><td>-</td><tr>
<tr><td>451</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.81623519873</td><td>-</td><tr>
<tr><td>452</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.10300187246</td><td>-</td><tr>
<tr><td>453</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.06161068382</td><td>-</td><tr>
<tr><td>454</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.99179883554</td><td>-</td><tr>
<tr><td>455</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.9759876426</td><td>-</td><tr>
<tr><td>456</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.307161561226</td><td>-</td><tr>
<tr><td>457</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.264399194736</td><td>-</td><tr>
<tr><td>458</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.9166604867</td><td>-</td><tr>
<tr><td>459</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.80568496231</td><td>-</td><tr>
<tr><td>460</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.16626415945</td><td>-</td><tr>
<tr><td>461</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.88492593114</td><td>-</td><tr>
<tr><td>462</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.83482148259</td><td>-</td><tr>
<tr><td>463</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.1384893783999</td><td>-</td><tr>
<tr><td>464</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.4327188694</td><td>-</td><tr>
<tr><td>465</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.13286855379</td><td>-</td><tr>
<tr><td>466</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.68738100805</td><td>-</td><tr>
<tr><td>467</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>33.2651397658</td><td>-</td><tr>
<tr><td>468</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.7787601815</td><td>-</td><tr>
<tr><td>469</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.43233915075</td><td>-</td><tr>
<tr><td>470</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.25298798455</td><td>-</td><tr>
<tr><td>471</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.99749060588</td><td>-</td><tr>
<tr><td>472</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.04367759399</td><td>-</td><tr>
<tr><td>473</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.05522038031</td><td>-</td><tr>
<tr><td>474</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.53046056502</td><td>-</td><tr>
<tr><td>475</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.6646749973</td><td>-</td><tr>
<tr><td>476</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.99241784182</td><td>-</td><tr>
<tr><td>477</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.86209437429</td><td>-</td><tr>
<tr><td>478</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.114749535007</td><td>-</td><tr>
<tr><td>479</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.17631387396</td><td>-</td><tr>
<tr><td>480</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.69549231836</td><td>-</td><tr>
<tr><td>481</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.62321780479999</td><td>-</td><tr>
<tr><td>482</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>29.2845511147</td><td>-</td><tr>
<tr><td>483</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.974288814806</td><td>-</td><tr>
<tr><td>484</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>51.3508455401</td><td>-</td><tr>
<tr><td>485</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>20.1608052118</td><td>-</td><tr>
<tr><td>486</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>25.6988260818</td><td>-</td><tr>
<tr><td>487</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>20.1464347954999</td><td>-</td><tr>
<tr><td>488</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>19.1608323367</td><td>-</td><tr>
<tr><td>489</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.69678972475</td><td>-</td><tr>
<tr><td>490</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.516038894953</td><td>-</td><tr>
<tr><td>491</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.86077867971</td><td>-</td><tr>
<tr><td>492</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.18483065094</td><td>-</td><tr>
<tr><td>493</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.75792294922</td><td>-</td><tr>
<tr><td>494</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.05894555031</td><td>-</td><tr>
<tr><td>495</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.25316160374</td><td>-</td><tr>
<tr><td>496</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.32928154438</td><td>-</td><tr>
<tr><td>497</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.51947830226</td><td>-</td><tr>
<tr><td>498</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.25476831885</td><td>-</td><tr>
<tr><td>499</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.15181708686</td><td>-</td><tr>
<tr><td>500</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.840038265095</td><td>-</td><tr>
<tr><td>501</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.54767013445</td><td>-</td><tr>
<tr><td>502</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.73334124463</td><td>-</td><tr>
<tr><td>503</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.00679986022399</td><td>-</td><tr>
<tr><td>504</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.02275184945</td><td>-</td><tr>
<tr><td>505</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.40824495961</td><td>-</td><tr>
<tr><td>506</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.09883184531</td><td>-</td><tr>
<tr><td>507</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.71764837764</td><td>-</td><tr>
<tr><td>508</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.39728956509</td><td>-</td><tr>
<tr><td>509</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.20407344583</td><td>-</td><tr>
<tr><td>510</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.34411452161</td><td>-</td><tr>
<tr><td>511</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.40279717565</td><td>-</td><tr>
<tr><td>512</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.21323345778</td><td>-</td><tr>
<tr><td>513</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>33.5861212396999</td><td>-</td><tr>
<tr><td>514</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>18.6516994184</td><td>-</td><tr>
<tr><td>515</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>16.3665122477</td><td>-</td><tr>
<tr><td>516</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>31.2164194807</td><td>-</td><tr>
<tr><td>517</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>75.974056418</td><td>-</td><tr>
<tr><td>518</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.20423766975</td><td>-</td><tr>
<tr><td>519</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.19587367205</td><td>-</td><tr>
<tr><td>520</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.387356096</td><td>-</td><tr>
<tr><td>521</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.000037954981132</td><td>-</td><tr>
<tr><td>522</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.78156790949</td><td>-</td><tr>
<tr><td>523</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.3725909829</td><td>-</td><tr>
<tr><td>524</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.57718466954</td><td>-</td><tr>
<tr><td>525</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.4083019443</td><td>-</td><tr>
<tr><td>526</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.43573423786</td><td>-</td><tr>
<tr><td>527</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>30.4068171714</td><td>-</td><tr>
<tr><td>528</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.80728662221</td><td>-</td><tr>
<tr><td>529</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.7331518366</td><td>-</td><tr>
<tr><td>530</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.2831610717</td><td>-</td><tr>
<tr><td>531</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.08646987023</td><td>-</td><tr>
<tr><td>532</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.05284727715</td><td>-</td><tr>
<tr><td>533</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.471625769819</td><td>-</td><tr>
<tr><td>534</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.48237885514</td><td>-</td><tr>
<tr><td>535</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.68285597518</td><td>-</td><tr>
<tr><td>536</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>25.4199036354</td><td>-</td><tr>
<tr><td>537</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.93495371935</td><td>-</td><tr>
<tr><td>538</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.99908446259</td><td>-</td><tr>
<tr><td>539</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.05156957214</td><td>-</td><tr>
<tr><td>540</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.26693164963</td><td>-</td><tr>
<tr><td>541</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.1400710804</td><td>-</td><tr>
<tr><td>542</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.17234541739</td><td>-</td><tr>
<tr><td>543</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.61667050047</td><td>-</td><tr>
<tr><td>544</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>16.1887176283999</td><td>-</td><tr>
<tr><td>545</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>12.6698205408</td><td>-</td><tr>
<tr><td>546</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.96255226427</td><td>-</td><tr>
<tr><td>547</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.8771528476</td><td>-</td><tr>
<tr><td>548</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.08681083447</td><td>-</td><tr>
<tr><td>549</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.4312389036</td><td>-</td><tr>
<tr><td>550</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>20.9529437435999</td><td>-</td><tr>
<tr><td>551</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.69076051995</td><td>-</td><tr>
<tr><td>552</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.04921770398</td><td>-</td><tr>
<tr><td>553</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.92216970679</td><td>-</td><tr>
<tr><td>554</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.19002199327</td><td>-</td><tr>
<tr><td>555</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.19479855965</td><td>-</td><tr>
<tr><td>556</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>24.9139331197</td><td>-</td><tr>
<tr><td>557</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.202682539603</td><td>-</td><tr>
<tr><td>558</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.68666008322</td><td>-</td><tr>
<tr><td>559</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.635509179423</td><td>-</td><tr>
<tr><td>560</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.30159013187</td><td>-</td><tr>
<tr><td>561</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.12037798912</td><td>-</td><tr>
<tr><td>562</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>24.5108860214999</td><td>-</td><tr>
<tr><td>563</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.03287749671</td><td>-</td><tr>
<tr><td>564</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>24.6694763409999</td><td>-</td><tr>
<tr><td>565</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>19.3589281964</td><td>-</td><tr>
<tr><td>566</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>22.6369867981</td><td>-</td><tr>
<tr><td>567</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.06845063918</td><td>-</td><tr>
<tr><td>568</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.65375938004</td><td>-</td><tr>
<tr><td>569</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>14.434114053</td><td>-</td><tr>
<tr><td>570</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.0677160476999</td><td>-</td><tr>
<tr><td>571</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>24.0431539377</td><td>-</td><tr>
<tr><td>572</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>16.6521859435999</td><td>-</td><tr>
<tr><td>573</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.43622903049</td><td>-</td><tr>
<tr><td>574</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.6875454054</td><td>-</td><tr>
<tr><td>575</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.31905601393</td><td>-</td><tr>
<tr><td>576</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.42917522918</td><td>-</td><tr>
<tr><td>577</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>23.6833521460999</td><td>-</td><tr>
<tr><td>578</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.86475699578</td><td>-</td><tr>
<tr><td>579</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.30812464166</td><td>-</td><tr>
<tr><td>580</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>15.1757238717</td><td>-</td><tr>
<tr><td>581</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.64530745108</td><td>-</td><tr>
<tr><td>582</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>20.5855048148999</td><td>-</td><tr>
<tr><td>583</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>30.0252599943999</td><td>-</td><tr>
<tr><td>584</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>22.9767570841999</td><td>-</td><tr>
<tr><td>585</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>35.8777371206999</td><td>-</td><tr>
<tr><td>586</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.9922490923</td><td>-</td><tr>
<tr><td>587</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>21.3098234598</td><td>-</td><tr>
<tr><td>588</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.3141904167</td><td>-</td><tr>
<tr><td>589</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>23.7076386285</td><td>-</td><tr>
<tr><td>590</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.9980058031</td><td>-</td><tr>
<tr><td>591</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.1396999073</td><td>-</td><tr>
<tr><td>592</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>23.4847076052</td><td>-</td><tr>
<tr><td>593</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.98615243343</td><td>-</td><tr>
<tr><td>594</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.2001310885999</td><td>-</td><tr>
<tr><td>595</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.14938960221</td><td>-</td><tr>
<tr><td>596</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.9546921616</td><td>-</td><tr>
<tr><td>597</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.96204230119</td><td>-</td><tr>
<tr><td>598</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.54166102921</td><td>-</td><tr>
<tr><td>599</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.2149830303</td><td>-</td><tr>
<tr><td>600</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.59769140142</td><td>-</td><tr>
<tr><td>601</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.122245953712</td><td>-</td><tr>
<tr><td>602</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.47758704029</td><td>-</td><tr>
<tr><td>603</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.15728965631</td><td>-</td><tr>
<tr><td>604</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.0137804101056</td><td>-</td><tr>
<tr><td>605</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.13724762492</td><td>-</td><tr>
<tr><td>606</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.18642369004</td><td>-</td><tr>
<tr><td>607</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.859095809298</td><td>-</td><tr>
<tr><td>608</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.00690999949398</td><td>-</td><tr>
<tr><td>609</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.9159910504</td><td>-</td><tr>
<tr><td>610</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.472917774453</td><td>-</td><tr>
<tr><td>611</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.51851428894</td><td>-</td><tr>
<tr><td>612</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.00159965526</td><td>-</td><tr>
<tr><td>613</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.16672287385</td><td>-</td><tr>
<tr><td>614</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.6883743086</td><td>-</td><tr>
<tr><td>615</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.32441814884</td><td>-</td><tr>
<tr><td>616</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.319603924375</td><td>-</td><tr>
<tr><td>617</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.94003648997</td><td>-</td><tr>
<tr><td>618</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.5326219599</td><td>-</td><tr>
<tr><td>619</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.324774846158</td><td>-</td><tr>
<tr><td>620</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.26125864518</td><td>-</td><tr>
<tr><td>621</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.83737409976</td><td>-</td><tr>
<tr><td>622</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.526904900671</td><td>-</td><tr>
<tr><td>623</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.693530182</td><td>-</td><tr>
<tr><td>624</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.10505327883</td><td>-</td><tr>
<tr><td>625</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.52959883987</td><td>-</td><tr>
<tr><td>626</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.221330098862</td><td>-</td><tr>
<tr><td>627</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.88505036895</td><td>-</td><tr>
<tr><td>628</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.0010571289999</td><td>-</td><tr>
<tr><td>629</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.92010471301</td><td>-</td><tr>
<tr><td>630</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.30015890029</td><td>-</td><tr>
<tr><td>631</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.52324764069</td><td>-</td><tr>
<tr><td>632</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.07560696971</td><td>-</td><tr>
<tr><td>633</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>42.9898007207</td><td>-</td><tr>
<tr><td>634</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.4142270796</td><td>-</td><tr>
<tr><td>635</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>16.4086965908</td><td>-</td><tr>
<tr><td>636</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>21.813960676</td><td>-</td><tr>
<tr><td>637</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.299323119</td><td>-</td><tr>
<tr><td>638</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.0324118118999</td><td>-</td><tr>
<tr><td>639</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>37.2806246152999</td><td>-</td><tr>
<tr><td>640</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>18.3521697372999</td><td>-</td><tr>
<tr><td>641</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.53319334448</td><td>-</td><tr>
<tr><td>642</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.23317131082</td><td>-</td><tr>
<tr><td>643</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.01046645189</td><td>-</td><tr>
<tr><td>644</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.883839044</td><td>-</td><tr>
<tr><td>645</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.95451749898</td><td>-</td><tr>
<tr><td>646</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.84481740864</td><td>-</td><tr>
<tr><td>647</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>21.1765984697</td><td>-</td><tr>
<tr><td>648</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.6241505974</td><td>-</td><tr>
<tr><td>649</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.86410471404</td><td>-</td><tr>
<tr><td>650</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.651555046</td><td>-</td><tr>
<tr><td>651</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>28.5055002837</td><td>-</td><tr>
<tr><td>652</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.47534149379</td><td>-</td><tr>
<tr><td>653</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>19.0091208959</td><td>-</td><tr>
<tr><td>654</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.3419800035</td><td>-</td><tr>
<tr><td>655</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.3475392365999</td><td>-</td><tr>
<tr><td>656</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.76141560871</td><td>-</td><tr>
<tr><td>657</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.0180688291</td><td>-</td><tr>
<tr><td>658</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>17.1440140811</td><td>-</td><tr>
<tr><td>659</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.40395587395999</td><td>-</td><tr>
<tr><td>660</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>7.80565810219</td><td>-</td><tr>
<tr><td>661</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.41488133655</td><td>-</td><tr>
<tr><td>662</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.2482920644999</td><td>-</td><tr>
<tr><td>663</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.53589344964</td><td>-</td><tr>
<tr><td>664</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.682961919569</td><td>-</td><tr>
<tr><td>665</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.2478849067</td><td>-</td><tr>
<tr><td>666</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.82226364685</td><td>-</td><tr>
<tr><td>667</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.61014201948</td><td>-</td><tr>
<tr><td>668</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>18.1949054104</td><td>-</td><tr>
<tr><td>669</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.84676072757</td><td>-</td><tr>
<tr><td>670</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>10.8197356281</td><td>-</td><tr>
<tr><td>671</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.88198808554</td><td>-</td><tr>
<tr><td>672</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.56695439463</td><td>-</td><tr>
<tr><td>673</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.204357650014</td><td>-</td><tr>
<tr><td>674</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.92192090143</td><td>-</td><tr>
<tr><td>675</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.335107384451</td><td>-</td><tr>
<tr><td>676</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.0173056717</td><td>-</td><tr>
<tr><td>677</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.41718945738</td><td>-</td><tr>
<tr><td>678</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.57704740128</td><td>-</td><tr>
<tr><td>679</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>13.3958430664999</td><td>-</td><tr>
<tr><td>680</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.87054339041</td><td>-</td><tr>
<tr><td>681</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>31.0459408082999</td><td>-</td><tr>
<tr><td>682</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.80462423478</td><td>-</td><tr>
<tr><td>683</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.17055506947</td><td>-</td><tr>
<tr><td>684</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.6945901999</td><td>-</td><tr>
<tr><td>685</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.35170180477</td><td>-</td><tr>
<tr><td>686</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.16474593824</td><td>-</td><tr>
<tr><td>687</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.46506022796</td><td>-</td><tr>
<tr><td>688</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.2854025207</td><td>-</td><tr>
<tr><td>689</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>29.6147271198</td><td>-</td><tr>
<tr><td>690</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.62840498492</td><td>-</td><tr>
<tr><td>691</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>5.809348303</td><td>-</td><tr>
<tr><td>692</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.13344378553</td><td>-</td><tr>
<tr><td>693</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.10600718144</td><td>-</td><tr>
<tr><td>694</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>6.21911005166</td><td>-</td><tr>
<tr><td>695</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>8.06054595696</td><td>-</td><tr>
<tr><td>696</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>11.3001996641</td><td>-</td><tr>
<tr><td>697</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.19523502941</td><td>-</td><tr>
<tr><td>698</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.68176499166</td><td>-</td><tr>
<tr><td>699</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.3700777957</td><td>-</td><tr>
<tr><td>700</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.76925666529</td><td>-</td><tr>
<tr><td>701</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.92414648179</td><td>-</td><tr>
<tr><td>702</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.32165756011</td><td>-</td><tr>
<tr><td>703</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.04652028347</td><td>-</td><tr>
<tr><td>704</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>0.000499005135256</td><td>-</td><tr>
<tr><td>705</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>4.60849177439</td><td>-</td><tr>
<tr><td>706</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.27273344517</td><td>-</td><tr>
<tr><td>707</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>1.59639403439</td><td>-</td><tr>
<tr><td>708</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.59703400568</td><td>-</td><tr>
<tr><td>709</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>3.02512728021</td><td>-</td><tr>
<tr><td>710</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>2.8236305593</td><td>-</td><tr>
<tr><td>711</td><td>TAMBALAN</td><td>Polygon</td><td>RENDAH</td><td>9.70915503278</td><td>-</td><tr>

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