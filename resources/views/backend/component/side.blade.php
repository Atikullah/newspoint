<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
{{--                <img src="{{asset("assets/images/atik.JPEG")}}" class="img-circle elevation-2" alt="User Image">--}}
                <img src="<strong>{{Auth::user()->image}}</strong></a>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><strong>{{Auth::user()->name}}</strong></a>
                <a href="#" class="d-block"><strong>{{Auth::user()->email}}</strong></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <router-link to="/home" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p style="font-size: 20px;color: red;font-family: fantasy;">Dashboard </p>
                    </router-link>

                </li>
{{--                <li class="nav-item has-treeview menu-open">--}}
{{--                    <a href="{{route('home')}}" class="nav-link active">--}}
{{--                        <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                        <p>--}}
{{--                            Dashboard--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="./index.html" class="nav-link active">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Dashboard v1</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="./index2.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Dashboard v2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="./index3.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Dashboard v3</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/widgets.html" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Widgets--}}
{{--                            <span class="right badge badge-danger">New</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-copy"></i>--}}
{{--                        <p>--}}
{{--                            Layout Options--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right">6</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Top Navigation</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Top Navigation + Sidebar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/boxed.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Boxed</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Fixed Sidebar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/fixed-topnav.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Fixed Navbar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/fixed-footer.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Fixed Footer</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Collapsed Sidebar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-address-book -pie"></i>--}}
{{--                        <p>--}}
{{--                            Employee--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/charts/chartjs.html" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-user-plus "></i>--}}
{{--                                <p>Add Employee</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/charts/flot.html" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-users"></i>--}}
{{--                                <p>Employee List</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

                <li class="nav-item has-treeview">
                    <span class="nav-link">
                        <i class="nav-icon fas fa-address-book -pie"></i>
                        <p style="color: lawngreen;font-size:17px;">
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </span>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/addcategory" class="nav-link">
                                <i class="nav-icon fas fa-user-plus "></i>
                                <p>Add Category</p>
                            <router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/categorylist" class="nav-link">
                                <i class="nav-icon fas fa-list-alt "></i>
                                <p>Category List</p>
                           <router-link>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p style="color: lawngreen;font-size:17px;">
                            Sub Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/international" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-primary"></i>
                                <p>International</p>
                            </router-link>

                        </li>


                        <li class="nav-item">
                            <router-link to="/bangladesh" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-danger"></i>
                                <p>Bangladesh</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/jobs" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-green"></i>
                                <p>Job</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/district" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-pink"></i>
                                <p>District</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/subdistrict" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-blue"></i>
                                <p>Sub District</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/business" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-yellow"></i>
                                <p>Business</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/sports" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-cyan"></i>
                                <p>Sports</p>
                            </router-link>

                        </li>

                        <li class="nav-item">
                            <router-link to="/entertainment" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-red"></i>
                                <p>Entertainment</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/lifestyle" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-warning"></i>
                                <p>Lifestyle</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/health" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-white"></i>
                                <p>Health</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/religion" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-red"></i>
                                <p>Religion</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/science" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-yellow"></i>
                                <p>Science</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/education" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-lime"></i>
                                <p>Education</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/life" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-primary"></i>
                                <p>Life</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/expatriate" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-white"></i>
                                <p>Expatriate</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/opinion" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-pink"></i>
                                <p>Opinion</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/photo" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-warning"></i>
                                <p>Photo</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/video" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-blue"></i>
                                <p>Video</p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/feature" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-lime"></i>
                                <p>Feature</p>
                            </router-link>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <span class="nav-link">
                        <i class="nav-icon fas fa-address-book -pie"></i>
                        <p style="color: lawngreen;font-size:17px;">
                            Reporters
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </span>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/addreporter" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-blue"></i>
                                <p>Add Reporters</p>
                                <router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/reporter" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-red"></i>
                                <p>Reporters List</p>
                                <router-link>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <span class="nav-link">
                        <i class="nav-icon fas fa-address-book -pie"></i>
                        <p style="color: lawngreen;font-size:17px;">
                             Congiguration
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </span>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/general_config" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-blue"></i>
                                <p>General configuration</p>
                                <router-link>
                        </li>


                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <span class="nav-link">
                        <i class="nav-icon fas fa-address-book -pie"></i>
                        <p style="color: lawngreen;font-size:17px;">
                             Employee
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </span>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/employee_information" class="nav-link">
                                <i class="far fa-dot-circle nav-icon text-blue"></i>
                                <p>Employee Information</p>
                                <router-link>
                        </li>


                    </ul>
                </li>






                {{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p>--}}
{{--                            Forms--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/forms/general.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>General Elements</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/forms/advanced.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Advanced Elements</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/forms/editors.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Editors</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/forms/validation.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Validation</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-table"></i>--}}
{{--                        <p>--}}
{{--                            Tables--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/tables/simple.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Simple Tables</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/tables/data.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>DataTables</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/tables/jsgrid.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>jsGrid</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-header">EXAMPLES</li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/calendar.html" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-calendar-alt"></i>--}}
{{--                        <p>--}}
{{--                            Calendar--}}
{{--                            <span class="badge badge-info right">2</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/gallery.html" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-image"></i>--}}
{{--                        <p>--}}
{{--                            Gallery--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-envelope"></i>--}}
{{--                        <p>--}}
{{--                            Mailbox--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/mailbox/mailbox.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Inbox</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/mailbox/compose.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Compose</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/mailbox/read-mail.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Read</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-book"></i>--}}
{{--                        <p>--}}
{{--                            Pages--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/invoice.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Invoice</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/profile.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Profile</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/e-commerce.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>E-commerce</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/projects.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Projects</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/project-add.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Project Add</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/project-edit.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Project Edit</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/project-detail.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Project Detail</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/contacts.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Contacts</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-plus-square"></i>--}}
{{--                        <p>--}}
{{--                            Extras--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/login.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Login</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/register.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Register</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/forgot-password.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Forgot Password</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/recover-password.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Recover Password</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/lockscreen.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Lockscreen</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/legacy-user-menu.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Legacy User Menu</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/language-menu.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Language Menu</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/404.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Error 404</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/500.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Error 500</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/pace.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Pace</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/blank.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Blank Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="starter.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Starter Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-header">MISCELLANEOUS</li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="https://adminlte.io/docs/3.0" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-file"></i>--}}
{{--                        <p>Documentation</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-header">MULTI LEVEL EXAMPLE</li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-circle nav-icon"></i>--}}
{{--                        <p>Level 1</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-circle"></i>--}}
{{--                        <p>--}}
{{--                            Level 1--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Level 2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item has-treeview">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>--}}
{{--                                    Level 2--}}
{{--                                    <i class="right fas fa-angle-left"></i>--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <ul class="nav nav-treeview">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">--}}
{{--                                        <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                        <p>Level 3</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">--}}
{{--                                        <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                        <p>Level 3</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">--}}
{{--                                        <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                        <p>Level 3</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Level 2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-circle nav-icon"></i>--}}
{{--                        <p>Level 1</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-header">LABELS</li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-circle text-danger"></i>--}}
{{--                        <p class="text">Important</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-circle text-warning"></i>--}}
{{--                        <p>Warning</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-circle text-info"></i>--}}
{{--                        <p>Informational</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt text-info"> Logout</i>

                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>




