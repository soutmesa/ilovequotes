        Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id="left-panel">

            <!-- User info -->
            <div class="login-info">
                <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
                    
                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="{{url(Auth::user()->profile!=''?'/img/uploads/'.Auth::user()->profile:'/img/uploads/default.png')}}" alt="me" class="online" /> 
                        <span>
                            {{Auth::user()->user_name}}
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a> 
                    
                </span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive-->
            <nav>

                <ul>
                    <li {{setActive('home')}}>
                        <a href="{{ url('/home') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>  
                    </li>
                    
                    <li {{setActive('users/edit*')}}>
                        <a href="#"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Users</span></a>
                        <ul>
                            <li {{setActive('users/create')}}>
                                <a href="{{ url('/users/create') }}">Add New</a>
                            </li>
                            <li {{setActive('users')}}>
                                <a href="{{ url('/users') }}">All Users</a>
                            </li>
                        </ul>
                    </li>

                    <li {{setActive('roles/edit/')}}>
                        <a href="#"><i class="fa fa-lg fa-fw fa-cogs"></i> <span class="menu-item-parent">Roles</span></a>
                        <ul>
                            <li {{setActive('roles/create')}}>
                                <a href="{{ url('/roles/create') }}">Add New</a>
                            </li>
                            <li {{setActive('roles')}}>
                                <a href="{{ url('/roles') }}">All Roles</a>
                            </li>
                        </ul>
                    </li>

                    <li {{setActive('permissions/edit/*')}}>
                        <a href="#"><i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent">Permissions</span></a>
                        <ul>
                            <li {{setActive('permissions/create')}}>
                                <a href="{{ url('/permissions/create') }}">Add New</a>
                            </li>
                            <li {{setActive('permissions')}}>
                                <a href="{{ url('/permissions') }}">All Permissions</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li {{setActive('posts/edit/*')}}>
                        <a href="#"><i class="fa fa-lg fa-fw fa-tags"></i> <span class="menu-item-parent">Posts</span></a>
                        <ul>
                            <li {{setActive('posts/create')}}>
                                <a href="{{ url('/posts/create') }}">Add New</a>
                            </li>
                            <li {{setActive('posts')}}>
                                <a href="{{ url('/posts') }}">All Posts</a>
                            </li>
                        </ul>
                    </li>

                    <li {{setActive('categories/edit*')}}>
                        <a href="#"><i class="fa fa-lg fa-fw fa-paw"></i> <span class="menu-item-parent">Categories</span></a>
                        <ul>
                            <li {{setActive('categories/create')}}>
                                <a href="{{ url('/categories/create') }}">Add New</a>
                            </li>
                            <li {{setActive('categories')}}>
                                <a href="{{ url('/categories') }}">All Categories</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li {{setActive('music/edit/*')}}>
                        <a href="#"><i class="fa fa-lg fa-fw fa-music"></i> <span class="menu-item-parent">Music</span></a>
                        <ul>
                            <li {{setActive('music/create')}}>
                                <a href="{{ url('/music/create') }}">Add New</a>
                            </li>
                            <li {{setActive('music')}}>
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