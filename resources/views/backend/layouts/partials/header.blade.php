    <!--app header-->
                <div class="hor-header header">
                    <div class="container">
                        <div class="d-flex"> <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                            <a class="header-brand" href="{{url('/')}}"> <img src="assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Dayonelogo" style="    max-width: 50%;"> <img src="assets/images/brand/logo-white.png" class="header-brand-img dark-logo" alt="Dayonelogo"> <img src="assets/images/brand/favicon.png"
                                    class="header-brand-img mobile-logo" alt="Dayonelogo"> <img src="assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Dayonelogo"> </a>
                            
                            <div class="d-flex order-lg-2 my-auto ml-auto">
                                <a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-toggle="search"> <i class="feather feather-search search-icon header-icon"></i>
                                </a>
                                
                                <div class="dropdown header-message">
                                    <a class="nav-link icon" data-toggle="dropdown">
                                        <i class="feather feather-mail header-icon"></i> <span class="badge badge-success side-badge">0</span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
                                        <div class="header-dropdown-list message-menu" id="message-menu">
                                           
                                        </div>
                                        <div class=" text-center p-2"> <a href="#" class="">See All Messages</a> </div>
                                    </div>
                                </div>
                                <div class="dropdown header-notify">
                                    <a class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right"> <i class="feather feather-bell header-icon"></i> <span class="bg-dot"></span>
                                    </a>
                                </div>
                                <div class="dropdown profile-dropdown">
                                    <a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown"> <span> <img
                                                src="assets/images/users/16.jpg" alt="img"
                                                class="avatar avatar-md bradius"> </span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                                        <div class="p-3 text-center border-bottom"> <a href="#" class="text-center user pb-0 font-weight-bold">John Thomson</a>
                                            <p class="text-center user-semi-title">App Developer</p>
                                        </div>
                                        <a class="dropdown-item d-flex" href="#"> <i class="feather feather-user mr-3 fs-16 my-auto"></i>
                                            <div class="mt-1">Profile</div>
                                        </a>
                                       
                                        <a class="dropdown-item d-flex" href="{{ route('admin.logout.submit') }}" onclick="event.preventDefault();
                      document.getElementById('admin-logout-form').submit();"> <i class="feather feather-power mr-3 fs-16 my-auto"></i>
                                            <div class="mt-1">Sign Out</div>
                                        </a>
                                           <form id="admin-logout-form" action="{{ route('admin.logout.submit') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/app header-->
                <!--/Horizontal-main -->
                <div class="sticky" style="margin-bottom: -62px;">
                    <div class="horizontal-main hor-menu clearfix">
                        <div class="horizontal-mainwrapper container clearfix">
                            <!--Nav-->
                            <nav class="horizontalMenu clearfix">
                                <div class="horizontal-overlapbg "></div>
                                <ul class="horizontalMenu-list">
                                    <li aria-haspopup="true" class=""><a href="{{url('/admin')}}" class="sub-icon "><i
                                                class="feather feather-home hor-icon"></i>Dashboards </a>
                                    </li>
                                    <li aria-haspopup="true"><span class="horizontalMenu-click"><i
                                                class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                        <a href="#" class=""> <i class="feather feather-codepen hor-icon"></i> Customer Manager <i class="fa fa-angle-down horizontal-icon"></i> </a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="{{url('admin/customers')}}">Customer Overview</a></li>
                                            <li aria-haspopup="true"><a href="widgets-1.html">Customer Virtuals Cards Mangament</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true"><span class="horizontalMenu-click"><i
                                                class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                        <a href="#" class="sub-icon"> <i class="feather feather-server hor-icon"></i> Merchant & Stores
                                            <i class="fa fa-angle-down horizontal-icon"></i> </a>
                                            <ul class="sub-menu">
                                                    <li aria-haspopup="true"><a href="{{url('admin/merchants')}}">Merchant Overview</a></li>
                                                    <li aria-haspopup="true"><a href="{{url('admin/stores')}}">Store Overview</a></li>
                                                </ul>
                                    </li>
                                    <li aria-haspopup="true"><span class="horizontalMenu-click"><i
                                                class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                        <a href="#" class="sub-icon"> <i class="feather feather-file hor-icon"></i> Transactions <i class="fa fa-angle-down horizontal-icon"></i> </a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="{{url('admin/transactions/earn')}}"> Earn Transaction</a>
                                            </li>
                                            <li aria-haspopup="true"><a href="{{url('admin/transactions/burn')}}"> Burn Transactions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true"><span class="horizontalMenu-click"><i
                                                class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                        <a href="#" class="sub-icon"> <i class="feather feather-layers hor-icon"></i> Account Management
                                            <i class="fa fa-angle-down horizontal-icon"></i> </a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="form-elements.html"> User management</a>
                                                </li>
                                                <li aria-haspopup="true"><a href="advanced-forms.html"> Roles Managment</a>
                                                </li>
                                                <li aria-haspopup="true"><a href="advanced-forms.html"> Permisions Managment</a>
                                                </li>
                                            </ul>
                                    </li>
                            </nav>
                            <!--Nav-->
                        </div>
                    </div>
                </div>
                <div class="jumps-prevent" style="padding-top: 62px;"></div>
                <!--/Horizontal-main -->
                <!-- App-content opened -->