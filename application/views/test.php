


  <body>
    <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="fa fa-gear"></span></button><a href="#" class="navbar-brand"><span>Clean Zone</span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="dropdown-submenu"><a href="#">Sub menu</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Large menu <b class="caret"></b></a>
              <ul class="dropdown-menu col-menu-2">
                <li class="col-sm-6 no-padding">
                  <ul>
                    <li class="dropdown-header"><i class="fa fa-group"></i>Users</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="dropdown-header"><i class="fa fa-gear"></i>Config</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="col-sm-6 no-padding">
                  <ul>
                    <li class="dropdown-header"><i class="fa fa-legal"></i>Sales</li>
                    <li><a href="#">New sale</a></li>
                    <li><a href="#">Register a product</a></li>
                    <li><a href="#">Register a client</a></li>
                    <li><a href="#">Month sales</a></li>
                    <li><a href="#">Delivered orders</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right user-nav">
            <li class="dropdown profile_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img alt="Avatar" src="<?=base_url('application/assets/img/avatar2.jpg')?>" ><span>Jeff Hanneman</span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
                <li class="divider"></li>
                <li><a href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right not-nav">
            <li class="button dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-comments"></i></a>
              <ul class="dropdown-menu messages">
                <li>
                  <div class="nano nscroller">
                    <div class="content">
                      <ul>
                        <li><a href="#"><img src="application/assets/img/avatar2.jpg" alt="avatar"><span class="date pull-right">13 Sept.</span><span class="name">Daniel</span> I'm following you, and I want your money!</a></li>
                        <li><a href="#"><img src="application/assets/img/avatar_50.jpg" alt="avatar"><span class="date pull-right">20 Oct.</span><span class="name">Adam</span> is now following you</a></li>
                        <li><a href="#"><img src="application/assets/img/avatar4_50.jpg" alt="avatar"><span class="date pull-right">2 Nov.</span><span class="name">Michael</span> is now following you</a></li>
                        <li><a href="#"><img src="application/assets/img/avatar3_50.jpg" alt="avatar"><span class="date pull-right">2 Nov.</span><span class="name">Lucy</span> is now following you</a></li>
                      </ul>
                    </div>
                  </div>
                  <ul class="foot">
                    <li><a href="#">View all messages </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="button dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-globe"></i><span class="bubble">2</span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="nano nscroller">
                    <div class="content">
                      <ul>
                        <li><a href="#"><i class="fa fa-cloud-upload info"></i><b>Daniel</b> is now following you <span class="date">2 minutes ago.</span></a></li>
                        <li><a href="#"><i class="fa fa-male success"></i><b>Michael</b> is now following you <span class="date">15 minutes ago.</span></a></li>
                        <li><a href="#"><i class="fa fa-bug warning"></i><b>Mia</b> commented on post <span class="date">30 minutes ago.</span></a></li>
                        <li><a href="#"><i class="fa fa-credit-card danger"></i><b>Andrew</b> killed someone <span class="date">1 hour ago.</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <ul class="foot">
                    <li><a href="#">View all activity </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="button"><a href="javascript:;" class="speech-button"><i class="fa fa-microphone"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="cl-wrapper">
            <!--Sidebar item function-->
            <!--Sidebar sub-item function-->
            <div class="cl-sidebar">
              <div class="cl-toggle"><i class="fa fa-bars"></i></div>
              <div class="cl-navblock">
                <div class="menu-space">
                  <div class="content">
                    <div class="side-user">
                      <div class="info">
                        <p>Disk Usage: 40 <b>GB</b> / 100 <b>GB</b><a href="#"><i class="fa fa-plus"></i></a></p>
                        <div class="progress progress-user">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info"><span class="sr-only">50% Complete (success)</span></div>
                        </div>
                      </div>
                    </div>
                    <ul class="cl-vnavigation">
                            <li><a href="#"><i class="fa fa-home"></i><span>Dashboard</span></a>
                              <ul class="sub-menu">
                                      <li><a href="index.html">Version 1</a>
                                      </li>
                                      <li><a href="dashboard2.html"><span class="label label-primary pull-right">New</span>Version 2</a>
                                      </li>
                              </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-smile-o"></i><span>UI Elements</span></a>
                              <ul class="sub-menu">
                                      <li><a href="ui-elements.html">General</a>
                                      </li>
                                      <li><a href="ui-buttons.html">Buttons</a>
                                      </li>
                                      <li><a href="ui-modals.html">Modals</a>
                                      </li>
                                      <li><a href="ui-notifications.html">Notifications</a>
                                      </li>
                                      <li><a href="ui-icons.html">Icons</a>
                                      </li>
                                      <li><a href="ui-grid.html">Grid</a>
                                      </li>
                                      <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                      </li>
                                      <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                                      </li>
                                      <li><a href="ui-treeview.html">Tree View</a>
                                      </li>
                              </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-list-alt"></i><span>Forms</span></a>
                              <ul class="sub-menu">
                                      <li><a href="form-elements.html">Components</a>
                                      </li>
                                      <li><a href="form-validation.html">Validation</a>
                                      </li>
                                      <li><a href="form-wizard.html">Wizard</a>
                                      </li>
                                      <li><a href="form-masks.html">Input Masks</a>
                                      </li>
                                      <li><a href="form-multiselect.html">Multi Select</a>
                                      </li>
                                      <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                      </li>
                                      <li><a href="form-upload.html">Multi Upload</a>
                                      </li>
                              </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-table"></i><span>Tables</span></a>
                              <ul class="sub-menu">
                                      <li><a href="tables-general.html">General</a>
                                      </li>
                                      <li class="active"><a href="tables-datatables.html">Data Tables</a>
                                      </li>
                              </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-map-marker"></i><span>Maps</span></a>
                              <ul class="sub-menu">
                                      <li><a href="maps-google.html">Google Maps</a>
                                      </li>
                                      <li><a href="maps-vector.html">Vector Maps</a>
                                      </li>
                              </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope"></i><span>Email</span></a>
                              <ul class="sub-menu">
                                      <li><a href="email-inbox.html">Inbox</a>
                                      </li>
                                      <li><a href="email-read.html">Email Detail</a>
                                      </li>
                                      <li><a href="email-compose.html">Email Compose</a>
                                      </li>
                              </ul>
                            </li>
                            <li><a href="typography.html"><i class="fa fa-text-height"></i><span>Typography</span></a>
                            </li>
                            <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i><span>Charts</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-file"></i><span>Pages</span></a>
                              <ul class="sub-menu">
                                      <li><a href="pages-blank.html">Blank Page</a>
                                      </li>
                                      <li><a href="pages-blank-header.html">Blank Page Header</a>
                                      </li>
                                      <li><a href="pages-blank-aside.html">Blank Page Aside</a>
                                      </li>
                                      <li><a href="pages-login.html">Login</a>
                                      </li>
                                      <li><a href="pages-404.html">404 Page</a>
                                      </li>
                                      <li><a href="pages-500.html">500 Page</a>
                                      </li>
                                      <li><a href="pages-sign-up.html">Sign Up</a>
                                      </li>
                                      <li><a href="pages-forgot-password.html">Forgot Password</a>
                                      </li>
                                      <li><a href="pages-profile.html">Profile</a>
                                      </li>
                                      <li><a href="pages-search.html">Search</a>
                                      </li>
                                      <li><a href="pages-calendar.html">Calendar</a>
                                      </li>
                                      <li><a href="pages-code-editor.html">Code Editor</a>
                                      </li>
                                      <li><a href="pages-gallery.html">Gallery</a>
                                      </li>
                                      <li><a href="pages-timeline.html">Timeline</a>
                                      </li>
                              </ul>
                            </li>
                    </ul>
                  </div>
                </div>
                <div class="search-field collapse-button">
                  <input type="text" placeholder="Search..." class="form-control search">
                  <button id="sidebar-collapse" class="btn btn-default"><i class="fa fa-angle-left"></i>
                  </button>
                </div>
              </div>
            </div>
      <div id="pcont" class="container-fluid">
        <div class="page-head">
          <h2>Data Tables</h2>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">DataTables</li>
          </ol>
        </div>
        <div class="cl-mcont">
          <div class="row">
            <div class="col-md-12">
              <div class="block-flat">
                <div class="header">
                  <h3>Basic DataTable</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                          <th>CSS grade</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="odd gradeX">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center"> 4</td>
                          <td class="center"></td>
                        </tr>
                        <tr class="even gradeC">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 5.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center">5</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="odd gradeA">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 5.5
                          </td>
                          <td>Win 95+</td>
                          <td class="center">5.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 6
                          </td>
                          <td>Win 98+</td>
                          <td class="center">6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="odd gradeA">
                          <td>Trident</td>
                          <td>Internet Explorer 7</td>
                          <td>Win XP SP2+</td>
                          <td class="center">7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                          <td>Trident</td>
                          <td>AOL browser (AOL desktop)</td>
                          <td>Win XP</td>
                          <td class="center">6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 1.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 1.5</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 2.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 3.0</td>
                          <td>Win 2k+ / OSX.3+</td>
                          <td class="center">1.9</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Camino 1.0</td>
                          <td>OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Camino 1.5</td>
                          <td>OSX.3+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape 7.2</td>
                          <td>Win 95+ / Mac OS 8.6-9.2</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape Browser 8</td>
                          <td>Win 98SE+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape Navigator 9</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.1</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.2</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.2</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.3</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.4</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.4</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.5</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.6</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.7</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.8</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Seamonkey 1.1</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Epiphany 2.20</td>
                          <td>Gnome</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 1.2</td>
                          <td>OSX.3</td>
                          <td class="center">125.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 1.3</td>
                          <td>OSX.3</td>
                          <td class="center">312.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 2.0</td>
                          <td>OSX.4+</td>
                          <td class="center">419.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 3.0</td>
                          <td>OSX.4+</td>
                          <td class="center">522.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>OmniWeb 5.5</td>
                          <td>OSX.4+</td>
                          <td class="center">420</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>iPod Touch / iPhone</td>
                          <td>iPod</td>
                          <td class="center">420.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>S60</td>
                          <td>S60</td>
                          <td class="center">413</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 7.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 7.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 8.0</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 8.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.0</td>
                          <td>Win 95+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.2</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.5</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera for Wii</td>
                          <td>Wii</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Nokia N800</td>
                          <td>N800</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Nintendo DS browser</td>
                          <td>Nintendo DS</td>
                          <td class="center">8.5</td>
                          <td class="center">C/A<sup>1</sup></td>
                        </tr>
                        <tr class="gradeC">
                          <td>KHTML</td>
                          <td>Konqureror 3.1</td>
                          <td>KDE 3.1</td>
                          <td class="center">3.1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>KHTML</td>
                          <td>Konqureror 3.3</td>
                          <td>KDE 3.3</td>
                          <td class="center">3.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>KHTML</td>
                          <td>Konqureror 3.5</td>
                          <td>KDE 3.5</td>
                          <td class="center">3.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Tasman</td>
                          <td>Internet Explorer 4.5</td>
                          <td>Mac OS 8-9</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Tasman</td>
                          <td>Internet Explorer 5.1</td>
                          <td>Mac OS 7.6-9</td>
                          <td class="center">1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Tasman</td>
                          <td>Internet Explorer 5.2</td>
                          <td>Mac OS 8-X</td>
                          <td class="center">1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Misc</td>
                          <td>NetFront 3.1</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Misc</td>
                          <td>NetFront 3.4</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Dillo 0.8</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Links</td>
                          <td>Text only</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Lynx</td>
                          <td>Text only</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Misc</td>
                          <td>IE Mobile</td>
                          <td>Windows Mobile 6</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Misc</td>
                          <td>PSP browser</td>
                          <td>PSP</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeU">
                          <td>Other browsers</td>
                          <td>All others</td>
                          <td>-</td>
                          <td class="center">-</td>
                          <td class="center">U</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="block-flat">
                <div class="header">
                  <h3>Horizontal Icons</h3>
                </div>
                <div class="content">
                  <div>
                    <table id="datatable-icons" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                          <th>CSS grade</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="odd gradeX">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center"> 4</td>
                          <td class="center"></td>
                        </tr>
                        <tr class="even gradeC">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 5.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center">5</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="odd gradeA">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 5.5
                          </td>
                          <td>Win 95+</td>
                          <td class="center">5.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 6
                          </td>
                          <td>Win 98+</td>
                          <td class="center">6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="odd gradeA">
                          <td>Trident</td>
                          <td>Internet Explorer 7</td>
                          <td>Win XP SP2+</td>
                          <td class="center">7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                          <td>Trident</td>
                          <td>AOL browser (AOL desktop)</td>
                          <td>Win XP</td>
                          <td class="center">6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 1.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 1.5</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 2.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 3.0</td>
                          <td>Win 2k+ / OSX.3+</td>
                          <td class="center">1.9</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Camino 1.0</td>
                          <td>OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Camino 1.5</td>
                          <td>OSX.3+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape 7.2</td>
                          <td>Win 95+ / Mac OS 8.6-9.2</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape Browser 8</td>
                          <td>Win 98SE+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape Navigator 9</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.1</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.2</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.2</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.3</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.4</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.4</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.5</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.6</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.7</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.8</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Seamonkey 1.1</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Epiphany 2.20</td>
                          <td>Gnome</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 1.2</td>
                          <td>OSX.3</td>
                          <td class="center">125.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 1.3</td>
                          <td>OSX.3</td>
                          <td class="center">312.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 2.0</td>
                          <td>OSX.4+</td>
                          <td class="center">419.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 3.0</td>
                          <td>OSX.4+</td>
                          <td class="center">522.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>OmniWeb 5.5</td>
                          <td>OSX.4+</td>
                          <td class="center">420</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>iPod Touch / iPhone</td>
                          <td>iPod</td>
                          <td class="center">420.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>S60</td>
                          <td>S60</td>
                          <td class="center">413</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 7.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 7.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 8.0</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 8.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.0</td>
                          <td>Win 95+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.2</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.5</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera for Wii</td>
                          <td>Wii</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Nokia N800</td>
                          <td>N800</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Nintendo DS browser</td>
                          <td>Nintendo DS</td>
                          <td class="center">8.5</td>
                          <td class="center">C/A<sup>1</sup></td>
                        </tr>
                        <tr class="gradeC">
                          <td>KHTML</td>
                          <td>Konqureror 3.1</td>
                          <td>KDE 3.1</td>
                          <td class="center">3.1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>KHTML</td>
                          <td>Konqureror 3.3</td>
                          <td>KDE 3.3</td>
                          <td class="center">3.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>KHTML</td>
                          <td>Konqureror 3.5</td>
                          <td>KDE 3.5</td>
                          <td class="center">3.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Tasman</td>
                          <td>Internet Explorer 4.5</td>
                          <td>Mac OS 8-9</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Tasman</td>
                          <td>Internet Explorer 5.1</td>
                          <td>Mac OS 7.6-9</td>
                          <td class="center">1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Tasman</td>
                          <td>Internet Explorer 5.2</td>
                          <td>Mac OS 8-X</td>
                          <td class="center">1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Misc</td>
                          <td>NetFront 3.1</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Misc</td>
                          <td>NetFront 3.4</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Dillo 0.8</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Links</td>
                          <td>Text only</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Lynx</td>
                          <td>Text only</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Misc</td>
                          <td>IE Mobile</td>
                          <td>Windows Mobile 6</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Misc</td>
                          <td>PSP browser</td>
                          <td>PSP</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeU">
                          <td>Other browsers</td>
                          <td>All others</td>
                          <td>-</td>
                          <td class="center">-</td>
                          <td class="center">U</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="block-flat">
                <div class="header">
                  <h3>Row Details</h3>
                </div>
                <div class="content">
                  <div>
                    <table id="datatable2" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                          <th>CSS grade</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="odd gradeX">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center"> 4</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="even gradeC">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 5.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center">5</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="odd gradeA">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 5.5
                          </td>
                          <td>Win 95+</td>
                          <td class="center">5.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                          <td>Trident</td>
                          <td>
                            Internet
                            Explorer 6
                          </td>
                          <td>Win 98+</td>
                          <td class="center">6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="odd gradeA">
                          <td>Trident</td>
                          <td>Internet Explorer 7</td>
                          <td>Win XP SP2+</td>
                          <td class="center">7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                          <td>Trident</td>
                          <td>AOL browser (AOL desktop)</td>
                          <td>Win XP</td>
                          <td class="center">6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 1.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 1.5</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 2.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Firefox 3.0</td>
                          <td>Win 2k+ / OSX.3+</td>
                          <td class="center">1.9</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Camino 1.0</td>
                          <td>OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Camino 1.5</td>
                          <td>OSX.3+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape 7.2</td>
                          <td>Win 95+ / Mac OS 8.6-9.2</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape Browser 8</td>
                          <td>Win 98SE+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Netscape Navigator 9</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.1</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.2</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.2</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.3</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.4</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.4</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.5</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.6</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">1.6</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.7</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td class="center">1.7</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Mozilla 1.8</td>
                          <td>Win 98+ / OSX.1+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Seamonkey 1.1</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Gecko</td>
                          <td>Epiphany 2.20</td>
                          <td>Gnome</td>
                          <td class="center">1.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 1.2</td>
                          <td>OSX.3</td>
                          <td class="center">125.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 1.3</td>
                          <td>OSX.3</td>
                          <td class="center">312.8</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 2.0</td>
                          <td>OSX.4+</td>
                          <td class="center">419.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>Safari 3.0</td>
                          <td>OSX.4+</td>
                          <td class="center">522.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>OmniWeb 5.5</td>
                          <td>OSX.4+</td>
                          <td class="center">420</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>iPod Touch / iPhone</td>
                          <td>iPod</td>
                          <td class="center">420.1</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Webkit</td>
                          <td>S60</td>
                          <td>S60</td>
                          <td class="center">413</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 7.0</td>
                          <td>Win 95+ / OSX.1+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 7.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 8.0</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 8.5</td>
                          <td>Win 95+ / OSX.2+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.0</td>
                          <td>Win 95+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.2</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera 9.5</td>
                          <td>Win 88+ / OSX.3+</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Opera for Wii</td>
                          <td>Wii</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Nokia N800</td>
                          <td>N800</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Presto</td>
                          <td>Nintendo DS browser</td>
                          <td>Nintendo DS</td>
                          <td class="center">8.5</td>
                          <td class="center">C/A<sup>1</sup></td>
                        </tr>
                        <tr class="gradeC">
                          <td>KHTML</td>
                          <td>Konqureror 3.1</td>
                          <td>KDE 3.1</td>
                          <td class="center">3.1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>KHTML</td>
                          <td>Konqureror 3.3</td>
                          <td>KDE 3.3</td>
                          <td class="center">3.3</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                          <td>KHTML</td>
                          <td>Konqureror 3.5</td>
                          <td>KDE 3.5</td>
                          <td class="center">3.5</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Tasman</td>
                          <td>Internet Explorer 4.5</td>
                          <td>Mac OS 8-9</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Tasman</td>
                          <td>Internet Explorer 5.1</td>
                          <td>Mac OS 7.6-9</td>
                          <td class="center">1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Tasman</td>
                          <td>Internet Explorer 5.2</td>
                          <td>Mac OS 8-X</td>
                          <td class="center">1</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Misc</td>
                          <td>NetFront 3.1</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                          <td>Misc</td>
                          <td>NetFront 3.4</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Dillo 0.8</td>
                          <td>Embedded devices</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Links</td>
                          <td>Text only</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                          <td>Misc</td>
                          <td>Lynx</td>
                          <td>Text only</td>
                          <td class="center">-</td>
                          <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Misc</td>
                          <td>IE Mobile</td>
                          <td>Windows Mobile 6</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                          <td>Misc</td>
                          <td>PSP browser</td>
                          <td>PSP</td>
                          <td class="center">-</td>
                          <td class="center">C</td>
                        </tr>
                        <tr class="gradeU">
                          <td>Other browsers</td>
                          <td>All others</td>
                          <td>-</td>
                          <td class="center">-</td>
                          <td class="center">U</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>