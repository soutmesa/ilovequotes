Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id="left-panel">

            <!-- User info -->
            <div class="login-info">
                <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
                    
                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="{{url('img/avatars/sunny.png')}}" alt="me" class="online" /> 
                        <span>
                            <!-- {{Auth::user()->user_name}} -->
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a> 
                    
                </span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive-->
            <nav>
                <!-- 
                NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional href="" links. See documentation for details.
                -->

                <ul>
                    <li class="active">
                        <a href="{{ url('/home') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>  
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Users Management</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/users/create') }}">Add New</a>
                            </li>
                            <li>
                                <a href="{{ url('/users') }}">All Users</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-tags"></i> <span class="menu-item-parent">Posts</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/posts/create') }}">Add New</a>
                            </li>
                            <li>
                                <a href="{{ url('/posts') }}">All Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-music"></i> <span class="menu-item-parent">Music</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/music/create') }}">Add New</a>
                            </li>
                            <li>
                                <a href="{{ url('/music') }}">All Music</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            

            <span class="minifyme" data-action="minifyMenu"> 
                <i class="fa fa-arrow-circle-left hit"></i> 
            </span>

        </aside>
        <!-- END NAVIGATION