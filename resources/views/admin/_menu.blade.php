   <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"> @yield('pagetitle')</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="\dashboard"><img height="40px" src="http://nexthrm.vteamslabs.com/images/nxblog1.png"  alt="Image Gallery Admin"> </a>
            </div>
            <!-- /.navbar-top-links -->
<!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li> <span class="icon-bar"> Welcome {{ Auth::user()->name }}</span></li>         
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                       <li><a href="/users/changepassword"><i class="fa fa-lock fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/user/list/">All Users</a>
                                </li>
                                <li>
                                    <a href="/user/list/active/">Active Users</a>
                                </li>
                                <li>
                                    <a href="/user/list/inactive/">InActive Users</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-image-o"></i> Image Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/images/imagesetting/">Image Setting</a>
                                </li>
                                <li>
                                    <a href="/albumtype/list/">AlbumType</a>
                                </li>
                                <li>
                                    <a href="/album/list/">Album</a>
                                </li>
                                 <li>
                                    <a href="/images/list/all">List All  Images </a>
                                </li>
                                <li>
                                    <a href="/images/list/my">List My  Images </a>
                                </li>
                                <li>
                                    <a href="/images/upload/">Upload Images</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>