<div class="left_sidebar">
        <div class="left_toggle"><i class="fa fa-bars"></i></div>
        <div class="left_navblock">
            <div class="menu_space">
                <div class="content">
                    <div class="sidebar_logo">
                        <div class="collapse_button">        
                            <button id="sidebar_collapse" class="btn btn-default"><i style="color:#fff;" class="fa fa-bars"></i></button>
                        </div>
                        <div class="logo none_title">
                            <a href="#"> Marketplace <span>Admin</span></a>
                        </div>  
                        <div class="logo collapse_title">
                            <a href="#">Admin</span></a>
                        </div>          
                    </div>
                    <div class="side_title">Site Tagline</div>
                    <ul class="left_vnavigation">
                        <li><a href="#"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                        <li><a href="#"><i class="fa fa-user"></i><span>User</span></a>
                            <ul class="sub_menu">
                                <li><a href="All Users">All Users</a></li>
                               <!--  <li><a href="#">User 2</a></li> -->
                            </ul>
                        </li>
                    <!--     <li><a href="#"><i class="fa fa-sitemap"></i><span>Category</span></a>
                            <ul class="sub_menu">
                                <li><a href="#">Category 1</a></li>
                                <li><a href="#">Category 2</a></li>
                            </ul>
                        </li> -->
                      <!--   <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Layouts</span></a>
                            <ul class="sub_menu">
                                <li><a href="#">Layouts 1</a></li>
                                <li><a href="#">Layouts 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-th-list"></i><span>Menu</span></a>
                            <ul class="sub_menu">
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-bookmark"></i><span>UI Elements</span></a></li> -->
                        <li><a href="#"><i class="fa fa-file-o"></i><span>Page</span></a>
                            <ul class="sub_menu">
                                <li><a href="{{ route('admin::showPage') }}">All Pages</a></li>
                                <li><a href="{{ route('admin::newPage') }}">Add New</a></li>
                            </ul>
                        </li>

                       
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact </span></a>
                            <ul class="sub_menu">
                                <li><a href="{{ route('admin::contactPage') }}">All Contacts</a></li>
                            
                            </ul>
                        </li>

                      <!--   <li><a href="#"><i class="fa fa-edit"></i><span>Forms</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart-o"></i><span>Charts</span></a></li>
                        <li><a href="#"><i class="fa  fa-cog"></i><span>Settings</span></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>