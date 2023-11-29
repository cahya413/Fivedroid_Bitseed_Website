<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Berita| MA IPB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body data-sidebar="dark">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="layout-wrapper">
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="index.php" class="logo logo-dark">
              <span class="logo-sm">
                <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">MA IPB | ADMIN</p>
              </span>
              <span class="logo-lg">
                <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">MA IPB | ADMIN</p>
              </span>
            </a>

            <a href="index.php" class="logo logo-light">
              <span class="logo-sm">
                <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">MA IPB | ADMIN</p>
              </span>
              <span class="logo-lg">
                <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">MA IPB | ADMIN</p>
              </span>
            </a>
          </div>

          <button
            type="button"
            class="btn btn-sm px-3 font-size-24 header-item waves-effect"
            id="vertical-menu-btn"
          >
            <i class="mdi mdi-menu"></i>
          </button>

          <div class="d-none d-sm-block ms-2">
            <h4 class="page-title font-size-18">Dashboard</h4>
          </div>
        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
          <div class="search-bar">
            <input class="search-input form-control" placeholder="Search" />
            <a
              href="#"
              class="close-search toggle-search"
              data-bs-target="#search-wrap"
            >
              <i class="mdi mdi-close-circle"></i>
            </a>
          </div>
        </div>

        <div class="d-flex">
          <div class="dropdown d-none d-lg-inline-block">
            <button
              type="button"
              class="btn header-item toggle-search noti-icon waves-effect"
              data-bs-target="#search-wrap"
            >
              <i class="mdi mdi-magnify"></i>
            </button>
          </div>

          <div class="dropdown d-none d-lg-inline-block">
            <button
              type="button"
              class="btn header-item noti-icon waves-effect"
              data-bs-toggle="fullscreen"
            >
              <i class="mdi mdi-fullscreen"></i>
            </button>
          </div>

          <div class="dropdown d-inline-block ms-2">
            <button
              type="button"
              class="btn header-item waves-effect"
              id="page-header-user-dropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                class="rounded-circle header-profile-user"
                src="assets/images/users/avatar-1.jpg"
                alt="Header Avatar"
              />
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item" href="#"
                ><i class="dripicons-user font-size-16 align-middle me-2"></i>
                Profile</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"
                ><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                Logout</a
              >
            </div>
          </div>

          <div class="dropdown d-inline-block">
            <button
              type="button"
              class="btn header-item noti-icon right-bar-toggle waves-effect"
            >
              <i class="mdi mdi-spin mdi-cog"></i>
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
      <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Main</li>

            <li>
              <a href="index.php" class="waves-effect">
                <i class="dripicons-device-desktop"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="ulasan.php" class="waves-effect">
                <i class="dripicons-star"></i>
                <span>Ulasan</span>
              </a>
          </li>
          <!-- <li>
              <a href="laporan.html" class="waves-effect">
                <i class="dripicons-bookmarks"></i>
                <span>Laporan</span>
              </a>
          </li> -->
          <!-- <li>
              <a href="berita.html" class="waves-effect">
                <i class="fas fa-newspaper"></i>
                <span>Berita</span>
              </a>
          </li> -->

            <li>
              <a href="calendar.html" class="waves-effect">
                <i class="dripicons-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li class="menu-title">Extras</li>

            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="dripicons-copy"></i>
                <span> Pages </span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="pages-login.html">Login</a></li>
                <li><a href="pages-register.html">Register</a></li>
                <li><a href="pages-starter.html">Starter Page</a></li>
                <li><a href="pages-404.html">Error 404</a></li>
                <li><a href="pages-500.html">Error 500</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Admin MA IPB<span class="d-none d-sm-inline-block">
                    - Kelompok 4 <i class="mdi mdi-heart text-danger"></i> by
                    Keluarga cemara</span
                  >
                </div>
              </div>
            </div>
          </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Demo</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <h6 class="mt-4">Select Custom Colors</h6>
            <div class="d-flex">
                
            <ul class="list-unstyled mb-0">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                    <label class="form-check-label" for="theme-default">Default</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                    <label class="form-check-label" for="theme-orange">Orange</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                    <label class="form-check-label" for="theme-teal">Teal</label>
                </li>
            </ul>

            <ul class="list-unstyled mb-0 ms-4">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                    <label class="form-check-label" for="theme-purple">Purple</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                    <label class="form-check-label" for="theme-green">Green</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                    <label class="form-check-label" for="theme-red">Red</label>
                </li>
            </ul>

            </div>
            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                <label class="form-check-label" for="theme-default">Default</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                <label class="form-check-label" for="theme-teal">Teal</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                <label class="form-check-label" for="theme-orange">Orange</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                <label class="form-check-label" for="theme-purple">Purple</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                <label class="form-check-label" for="theme-green">Green</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                <label class="form-check-label" for="theme-red">Red</label>
            </div> -->
        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
<div class="main-content" style="margin-top: -8%;">

  <div class="page-content mb-5">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title mb-5">TABEL BERITA</h4>

                          <table id="datatable-buttons"
                              class="table table-striped table-bordered dt-responsive nowrap"
                              style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th>Age</th>
                                      <th>Start date</th>
                                      <th>Salary</th>
                                  </tr>
                              </thead>

                              <tbody>
                                  <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                  </tr>
                                  <tr>
                                      <td>Garrett Winters</td>
                                      <td>Accountant</td>
                                      <td>Tokyo</td>
                                      <td>63</td>
                                      <td>2011/07/25</td>
                                      <td>$170,750</td>
                                  </tr>
                                  <tr>
                                      <td>Ashton Cox</td>
                                      <td>Junior Technical Author</td>
                                      <td>San Francisco</td>
                                      <td>66</td>
                                      <td>2009/01/12</td>
                                      <td>$86,000</td>
                                  </tr>
                                  <tr>
                                      <td>Cedric Kelly</td>
                                      <td>Senior Javascript Developer</td>
                                      <td>Edinburgh</td>
                                      <td>22</td>
                                      <td>2012/03/29</td>
                                      <td>$433,060</td>
                                  </tr>
                                  <tr>
                                      <td>Airi Satou</td>
                                      <td>Accountant</td>
                                      <td>Tokyo</td>
                                      <td>33</td>
                                      <td>2008/11/28</td>
                                      <td>$162,700</td>
                                  </tr>
                                  <tr>
                                      <td>Brielle Williamson</td>
                                      <td>Integration Specialist</td>
                                      <td>New York</td>
                                      <td>61</td>
                                      <td>2012/12/02</td>
                                      <td>$372,000</td>
                                  </tr>
                                  <tr>
                                      <td>Herrod Chandler</td>
                                      <td>Sales Assistant</td>
                                      <td>San Francisco</td>
                                      <td>59</td>
                                      <td>2012/08/06</td>
                                      <td>$137,500</td>
                                  </tr>
                                  <tr>
                                      <td>Rhona Davidson</td>
                                      <td>Integration Specialist</td>
                                      <td>Tokyo</td>
                                      <td>55</td>
                                      <td>2010/10/14</td>
                                      <td>$327,900</td>
                                  </tr>
                                  <tr>
                                      <td>Colleen Hurst</td>
                                      <td>Javascript Developer</td>
                                      <td>San Francisco</td>
                                      <td>39</td>
                                      <td>2009/09/15</td>
                                      <td>$205,500</td>
                                  </tr>
                                  <tr>
                                      <td>Sonya Frost</td>
                                      <td>Software Engineer</td>
                                      <td>Edinburgh</td>
                                      <td>23</td>
                                      <td>2008/12/13</td>
                                      <td>$103,600</td>
                                  </tr>
                                  <tr>
                                      <td>Jena Gaines</td>
                                      <td>Office Manager</td>
                                      <td>London</td>
                                      <td>30</td>
                                      <td>2008/12/19</td>
                                      <td>$90,560</td>
                                  </tr>
                                  <tr>
                                      <td>Quinn Flynn</td>
                                      <td>Support Lead</td>
                                      <td>Edinburgh</td>
                                      <td>22</td>
                                      <td>2013/03/03</td>
                                      <td>$342,000</td>
                                  </tr>
                                  <tr>
                                      <td>Charde Marshall</td>
                                      <td>Regional Director</td>
                                      <td>San Francisco</td>
                                      <td>36</td>
                                      <td>2008/10/16</td>
                                      <td>$470,600</td>
                                  </tr>
                                  <tr>
                                      <td>Haley Kennedy</td>
                                      <td>Senior Marketing Designer</td>
                                      <td>London</td>
                                      <td>43</td>
                                      <td>2012/12/18</td>
                                      <td>$313,500</td>
                                  </tr>
                                  <tr>
                                      <td>Tatyana Fitzpatrick</td>
                                      <td>Regional Director</td>
                                      <td>London</td>
                                      <td>19</td>
                                      <td>2010/03/17</td>
                                      <td>$385,750</td>
                                  </tr>
                                  <tr>
                                      <td>Michael Silva</td>
                                      <td>Marketing Designer</td>
                                      <td>London</td>
                                      <td>66</td>
                                      <td>2012/11/27</td>
                                      <td>$198,500</td>
                                  </tr>
                                  <tr>
                                      <td>Paul Byrd</td>
                                      <td>Chief Financial Officer (CFO)</td>
                                      <td>New York</td>
                                      <td>64</td>
                                      <td>2010/06/09</td>
                                      <td>$725,000</td>
                                  </tr>
                                  <tr>
                                      <td>Gloria Little</td>
                                      <td>Systems Administrator</td>
                                      <td>New York</td>
                                      <td>59</td>
                                      <td>2009/04/10</td>
                                      <td>$237,500</td>
                                  </tr>
                                  <tr>
                                      <td>Bradley Greer</td>
                                      <td>Software Engineer</td>
                                      <td>London</td>
                                      <td>41</td>
                                      <td>2012/10/13</td>
                                      <td>$132,000</td>
                                  </tr>
                                  <tr>
                                      <td>Dai Rios</td>
                                      <td>Personnel Lead</td>
                                      <td>Edinburgh</td>
                                      <td>35</td>
                                      <td>2012/09/26</td>
                                      <td>$217,500</td>
                                  </tr>
                                  <tr>
                                      <td>Jenette Caldwell</td>
                                      <td>Development Lead</td>
                                      <td>New York</td>
                                      <td>30</td>
                                      <td>2011/09/03</td>
                                      <td>$345,000</td>
                                  </tr>
                                  <tr>
                                      <td>Yuri Berry</td>
                                      <td>Chief Marketing Officer (CMO)</td>
                                      <td>New York</td>
                                      <td>40</td>
                                      <td>2009/06/25</td>
                                      <td>$675,000</td>
                                  </tr>
                                  <tr>
                                      <td>Caesar Vance</td>
                                      <td>Pre-Sales Support</td>
                                      <td>New York</td>
                                      <td>21</td>
                                      <td>2011/12/12</td>
                                      <td>$106,450</td>
                                  </tr>
                                  <tr>
                                      <td>Doris Wilder</td>
                                      <td>Sales Assistant</td>
                                      <td>Sidney</td>
                                      <td>23</td>
                                      <td>2010/09/20</td>
                                      <td>$85,600</td>
                                  </tr>
                                  <tr>
                                      <td>Angelica Ramos</td>
                                      <td>Chief Executive Officer (CEO)</td>
                                      <td>London</td>
                                      <td>47</td>
                                      <td>2009/10/09</td>
                                      <td>$1,200,000</td>
                                  </tr>
                                  <tr>
                                      <td>Gavin Joyce</td>
                                      <td>Developer</td>
                                      <td>Edinburgh</td>
                                      <td>42</td>
                                      <td>2010/12/22</td>
                                      <td>$92,575</td>
                                  </tr>
                                  <tr>
                                      <td>Jennifer Chang</td>
                                      <td>Regional Director</td>
                                      <td>Singapore</td>
                                      <td>28</td>
                                      <td>2010/11/14</td>
                                      <td>$357,650</td>
                                  </tr>
                                  <tr>
                                      <td>Brenden Wagner</td>
                                      <td>Software Engineer</td>
                                      <td>San Francisco</td>
                                      <td>28</td>
                                      <td>2011/06/07</td>
                                      <td>$206,850</td>
                                  </tr>
                                  <tr>
                                      <td>Fiona Green</td>
                                      <td>Chief Operating Officer (COO)</td>
                                      <td>San Francisco</td>
                                      <td>48</td>
                                      <td>2010/03/11</td>
                                      <td>$850,000</td>
                                  </tr>
                                  <tr>
                                      <td>Shou Itou</td>
                                      <td>Regional Marketing</td>
                                      <td>Tokyo</td>
                                      <td>20</td>
                                      <td>2011/08/14</td>
                                      <td>$163,000</td>
                                  </tr>
                                  <tr>
                                      <td>Michelle House</td>
                                      <td>Integration Specialist</td>
                                      <td>Sidney</td>
                                      <td>37</td>
                                      <td>2011/06/02</td>
                                      <td>$95,400</td>
                                  </tr>
                                  <tr>
                                      <td>Suki Burks</td>
                                      <td>Developer</td>
                                      <td>London</td>
                                      <td>53</td>
                                      <td>2009/10/22</td>
                                      <td>$114,500</td>
                                  </tr>
                                  <tr>
                                      <td>Prescott Bartlett</td>
                                      <td>Technical Author</td>
                                      <td>London</td>
                                      <td>27</td>
                                      <td>2011/05/07</td>
                                      <td>$145,000</td>
                                  </tr>
                                  <tr>
                                      <td>Gavin Cortez</td>
                                      <td>Team Leader</td>
                                      <td>San Francisco</td>
                                      <td>22</td>
                                      <td>2008/10/26</td>
                                      <td>$235,500</td>
                                  </tr>
                                  <tr>
                                      <td>Martena Mccray</td>
                                      <td>Post-Sales support</td>
                                      <td>Edinburgh</td>
                                      <td>46</td>
                                      <td>2011/03/09</td>
                                      <td>$324,050</td>
                                  </tr>
                                  <tr>
                                      <td>Unity Butler</td>
                                      <td>Marketing Designer</td>
                                      <td>San Francisco</td>
                                      <td>47</td>
                                      <td>2009/12/09</td>
                                      <td>$85,675</td>
                                  </tr>
                                  <tr>
                                      <td>Howard Hatfield</td>
                                      <td>Office Manager</td>
                                      <td>San Francisco</td>
                                      <td>51</td>
                                      <td>2008/12/16</td>
                                      <td>$164,500</td>
                                  </tr>
                                  <tr>
                                      <td>Hope Fuentes</td>
                                      <td>Secretary</td>
                                      <td>San Francisco</td>
                                      <td>41</td>
                                      <td>2010/02/12</td>
                                      <td>$109,850</td>
                                  </tr>
                                  <tr>
                                      <td>Vivian Harrell</td>
                                      <td>Financial Controller</td>
                                      <td>San Francisco</td>
                                      <td>62</td>
                                      <td>2009/02/14</td>
                                      <td>$452,500</td>
                                  </tr>
                                  <tr>
                                      <td>Timothy Mooney</td>
                                      <td>Office Manager</td>
                                      <td>London</td>
                                      <td>37</td>
                                      <td>2008/12/11</td>
                                      <td>$136,200</td>
                                  </tr>
                                  <tr>
                                      <td>Jackson Bradshaw</td>
                                      <td>Director</td>
                                      <td>New York</td>
                                      <td>65</td>
                                      <td>2008/09/26</td>
                                      <td>$645,750</td>
                                  </tr>
                                  <tr>
                                      <td>Olivia Liang</td>
                                      <td>Support Engineer</td>
                                      <td>Singapore</td>
                                      <td>64</td>
                                      <td>2011/02/03</td>
                                      <td>$234,500</td>
                                  </tr>
                                  <tr>
                                      <td>Bruno Nash</td>
                                      <td>Software Engineer</td>
                                      <td>London</td>
                                      <td>38</td>
                                      <td>2011/05/03</td>
                                      <td>$163,500</td>
                                  </tr>
                                  <tr>
                                      <td>Sakura Yamamoto</td>
                                      <td>Support Engineer</td>
                                      <td>Tokyo</td>
                                      <td>37</td>
                                      <td>2009/08/19</td>
                                      <td>$139,575</td>
                                  </tr>
                                  <tr>
                                      <td>Thor Walton</td>
                                      <td>Developer</td>
                                      <td>New York</td>
                                      <td>61</td>
                                      <td>2013/08/11</td>
                                      <td>$98,540</td>
                                  </tr>
                                  <tr>
                                      <td>Finn Camacho</td>
                                      <td>Support Engineer</td>
                                      <td>San Francisco</td>
                                      <td>47</td>
                                      <td>2009/07/07</td>
                                      <td>$87,500</td>
                                  </tr>
                                  <tr>
                                      <td>Serge Baldwin</td>
                                      <td>Data Coordinator</td>
                                      <td>Singapore</td>
                                      <td>64</td>
                                      <td>2012/04/09</td>
                                      <td>$138,575</td>
                                  </tr>
                                  <tr>
                                      <td>Zenaida Frank</td>
                                      <td>Software Engineer</td>
                                      <td>New York</td>
                                      <td>63</td>
                                      <td>2010/01/04</td>
                                      <td>$125,250</td>
                                  </tr>
                                  <tr>
                                      <td>Zorita Serrano</td>
                                      <td>Software Engineer</td>
                                      <td>San Francisco</td>
                                      <td>56</td>
                                      <td>2012/06/01</td>
                                      <td>$115,000</td>
                                  </tr>
                                  <tr>
                                      <td>Jennifer Acosta</td>
                                      <td>Junior Javascript Developer</td>
                                      <td>Edinburgh</td>
                                      <td>43</td>
                                      <td>2013/02/01</td>
                                      <td>$75,650</td>
                                  </tr>
                                  <tr>
                                      <td>Cara Stevens</td>
                                      <td>Sales Assistant</td>
                                      <td>New York</td>
                                      <td>46</td>
                                      <td>2011/12/06</td>
                                      <td>$145,600</td>
                                  </tr>
                                  <tr>
                                      <td>Hermione Butler</td>
                                      <td>Regional Director</td>
                                      <td>London</td>
                                      <td>47</td>
                                      <td>2011/03/21</td>
                                      <td>$356,250</td>
                                  </tr>
                                  <tr>
                                      <td>Lael Greer</td>
                                      <td>Systems Administrator</td>
                                      <td>London</td>
                                      <td>21</td>
                                      <td>2009/02/27</td>
                                      <td>$103,500</td>
                                  </tr>
                                  <tr>
                                      <td>Jonas Alexander</td>
                                      <td>Developer</td>
                                      <td>San Francisco</td>
                                      <td>30</td>
                                      <td>2010/07/14</td>
                                      <td>$86,500</td>
                                  </tr>
                                  <tr>
                                      <td>Shad Decker</td>
                                      <td>Regional Director</td>
                                      <td>Edinburgh</td>
                                      <td>51</td>
                                      <td>2008/11/13</td>
                                      <td>$183,000</td>
                                  </tr>
                                  <tr>
                                      <td>Michael Bruce</td>
                                      <td>Javascript Developer</td>
                                      <td>Singapore</td>
                                      <td>29</td>
                                      <td>2011/06/27</td>
                                      <td>$183,000</td>
                                  </tr>
                                  <tr>
                                      <td>Donna Snider</td>
                                      <td>Customer Support</td>
                                      <td>New York</td>
                                      <td>27</td>
                                      <td>2011/01/25</td>
                                      <td>$112,000</td>
                                  </tr>
                              </tbody>
                          </table>

                      </div>
                  </div>
              </div>
              <!-- end col -->
          </div>
          <!-- end row -->
      </div>
  </div>
</div>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>