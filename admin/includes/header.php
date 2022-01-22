        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                <div class="topbar-main">
                    <div class="container-fluid">

                        <!-- Logo-->
                        <div>
                            
                            <a href="index" class="logo">
                                <img src="assets/images/logo.png" alt="" height="26"> 
                            </a>

                        </div>
                        <!-- End Logo-->

                        <div class="menu-extras topbar-custom navbar p-0">

                            <ul class="list-inline d-none d-lg-block mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                       Welcome | <b class="text-uppercase"> <?php echo $_SESSION['admin']."  "; ?></b><i class="mdi mdi-check"></i>
                                    </a>
                                    
                               
    
                            </ul>

                            

                            <ul class="list-inline ml-auto mb-0">
                                
                                <!-- notification-->

                               

                                
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1"><?php echo $_SESSION['admin']; ?> <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout"><i class="dripicons-exit text-muted"></i> Sohoka</a>
                                    </div>
                                </li>
                                <li class="menu-item list-inline-item">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>

                        </div>
                        <!-- end menu-extras -->

                        <div class="clearfix"></div>

                    </div> <!-- end container -->
                </div>
                
                <div class="navbar-custom">
                    <div class="container-fluid">

                        <div id="navigation">

                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="index"><i class="dripicons-home"></i> Home</a>
                                </li>


                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-help"></i> Commodities<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="add_commodity.php">Add new</a></li>
                                        <li><a href="all_commodities">View all</a></li>

                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="ibyakozwe"><i class="dripicons-home"></i> BOOKINGS</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="ubutumwa"><i class="dripicons-message"></i> MESSAGES</a>
                                </li>


                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end container -->
                </div> <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

        </div>