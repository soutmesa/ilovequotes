<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <title> SmartAdmin </title>
        <meta name="description" content="">
        <meta name="author" content="">
            
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        @include('admin.layouts.partials.style')

    </head>
    <body class="">
    
        @include('admin.layouts.partials.head')

        @include('admin.layouts.partials.leftsidebar')

        <!-- MAIN PANEL -->
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">

                <span class="ribbon-button-alignment"> 
                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                        <i class="fa fa-refresh"></i>
                    </span> 
                </span>

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li>Home</li><li>Tables</li><li>Data Tables</li>
                </ol>
                <!-- end breadcrumb -->

            </div>
            <!-- END RIBBON -->

            <!-- MAIN CONTENT -->
            <div id="content">

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                        <h1 class="page-title txt-color-blueDark">
                            <i class="fa fa-table fa-fw "></i> 
                                Table 
                            <span>> 
                                Data Tables
                            </span>
                        </h1>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                        <ul id="sparks" class="">
                            <li class="sparks-info">
                                <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                                <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                                    1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                                </div>
                            </li>
                            <li class="sparks-info">
                                <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                                <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                                    110,150,300,130,400,240,220,310,220,300, 270, 210
                                </div>
                            </li>
                            <li class="sparks-info">
                                <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                                <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                                    110,150,300,130,400,240,220,310,220,300, 270, 210
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
				
					<div class="col-sm-12">
				
				
							<div class="well well-sm">
				
								<div class="row">
				
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="well well-light well-sm no-margin no-padding">
				
											<div class="row">
				
												<div class="col-sm-12">
													<div id="myCarousel" class="carousel fade profile-carousel">
														<div class="air air-bottom-right padding-10">
															<a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&nbsp; <a href="javascript:void(0);" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>
														</div>
														<div class="air air-top-left padding-10">
															<h4 class="txt-color-white font-md">{{$user->date_of_birth}}</h4>
														</div>
														<ol class="carousel-indicators">
															<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
															<li data-target="#myCarousel" data-slide-to="1" class=""></li>
															<li data-target="#myCarousel" data-slide-to="2" class=""></li>
														</ol>
														<div class="carousel-inner">
															<!-- Slide 1 -->
															<div class="item active">
																<img src="{{url('img/demo/s1.jpg')}}" alt="demo user">
															</div>
															<!-- Slide 2 -->
															<div class="item">
																<img src="{{url('img/demo/s2.jpg')}}" alt="demo user">
															</div>
															<!-- Slide 3 -->
															<div class="item">
																<img src="{{url('img/demo/m3.jpg')}}" alt="demo user">
															</div>
														</div>
													</div>
												</div>
				
												<div class="col-sm-12">
				
													<div class="row">
														<div class="col-sm-3 profile-pic">
															<div class="img-box">
																
																<img src="{{url($user->profile!=''?'/img/uploads/'.$user->profile:'/img/uploads/default.png')}}" class="img" alt="demo user">
																<figcaption><a href="{{url('users/upload', $user->id)}}"><i class="fa fa-user"></i> Edit picture</a></figcaption>
															</div>
															<div class="padding-10">
																<h4 class="font-md"><strong>1,543</strong>
																<br>
																<small>Followers</small></h4>
																<br>
																<h4 class="font-md"><strong>419</strong>
																<br>
																<small>Connections</small></h4>
															</div>
														</div>
														<div class="col-sm-6">
															<h1>{{ucfirst($user->first_name)}} <span class="semi-bold">{{ucfirst($user->last_name)}}</span>
															<br>
															<small> 
															@foreach($user->roles as $data)
															{{ $data['display_name'] }},
															@endforeach
															at SmartAdmin</small></h1>
				
															<ul class="list-unstyled">
																<li>
																	<p class="text-muted">
																		<i class="fa fa-phone"></i>&nbsp;&nbsp;{{$user->phone}}
																	</p>
																</li>
																<li>
																	<p class="text-muted">
																		<i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:simmons@smartadmin">{{$user->email}}</a>
																	</p>
																</li>
																<li>
																	<p class="text-muted">
																		<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="txt-color-darken">Free after <a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment">4:30 PM</a></span>
																	</p>
																</li>
																<li>
																	<p class="text-muted">
																		<i class="fa fa-cog"></i>&nbsp;&nbsp;<span class="txt-color-darken"><a href="{{url('users/password', $user->id)}}" rel="tooltip" title="" data-placement="top" data-original-title="Change password">Change password</a></span>
																	</p>
																</li>
																<li>
																	<p class="text-muted">
																		<i class="fa fa-info"></i>&nbsp;&nbsp;<span class="txt-color-darken"><a href="{{url('users/password', $user->id)}}" rel="tooltip" title="" data-placement="top" data-original-title="Information">Update info</a></span>
																	</p>
																</li>
															</ul>
															<br>
															<p class="font-md">
																<i>A little about me...</i>
															</p>
															<p>
				
																Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
																cumque nihil impedit quo minus id quod maxime placeat facere
				
															</p>
															<br>
															<a href="javascript:void(0);" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>
															<br>
															<br>
				
														</div>
														<div class="col-sm-3">
															<h1><small>Connections</small></h1>
															<ul class="list-inline friends-list">
																<li><img src="{{url('img/avatars/1.png')}}" alt="friend-1">
																</li>
																<li><img src="{{url('img/avatars/2.png')}}" alt="friend-2">
																</li>
																<li><img src="{{url('img/avatars/3.png')}}" alt="friend-3">
																</li>
																<li><img src="{{url('img/avatars/4.png')}}" alt="friend-4">
																</li>
																<li><img src="{{url('img/avatars/5.png')}}" alt="friend-5">
																</li>
																<li><img src="{{url('img/avatars/male.png')}}" alt="friend-6">
																</li>
																<li>
																	<a href="javascript:void(0);">413 more</a>
																</li>
															</ul>
				
															<h1><small>Recent visitors</small></h1>
															<ul class="list-inline friends-list">
																<li><img src="{{url('img/avatars/male.png')}}" alt="friend-1">
																</li>
																<li><img src="{{url('img/avatars/female.png')}}" alt="friend-2">
																</li>
																<li><img src="{{url('img/avatars/female.png')}}" alt="friend-3">
																</li>
															</ul>
				
														</div>
				
													</div>
				
												</div>
				
											</div>
				
											<div class="row">
				
												<div class="col-sm-12">
				
													<hr>
				
													<div class="padding-10">
				
														<ul class="nav nav-tabs tabs-pull-right">
															<li class="active">
																<a href="#a1" data-toggle="tab">Recent Articles</a>
															</li>
															<li>
																<a href="#a2" data-toggle="tab">New Members</a>
															</li>
															<li class="pull-left">
																<span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i> Activity</span>
															</li>
														</ul>
				
														<div class="tab-content padding-top-10">
															<div class="tab-pane fade in active" id="a1">
				
																<div class="row">
				
																	<div class="col-xs-2 col-sm-1">
																		<time datetime="2014-09-20" class="icon">
																			<strong>Jan</strong>
																			<span>10</span>
																		</time>
																	</div>
				
																	<div class="col-xs-10 col-sm-11">
																		<h6 class="no-margin"><a href="javascript:void(0);">Allice in Wonderland</a></h6>
																		<p>
																			Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi Nam eget dui.
																			Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
																			sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.
																		</p>
																	</div>
				
																	<div class="col-sm-12">
				
																		<hr>
				
																	</div>
				
																	<div class="col-xs-2 col-sm-1">
																		<time datetime="2014-09-20" class="icon">
																			<strong>Jan</strong>
																			<span>10</span>
																		</time>
																	</div>
				
																	<div class="col-xs-10 col-sm-11">
																		<h6 class="no-margin"><a href="javascript:void(0);">World Report</a></h6>
																		<p>
																			Morning our be dry. Life also third land after first beginning to evening cattle created let subdue you'll winged don't Face firmament.
																			You winged you're was Fruit divided signs lights i living cattle yielding over light life life sea, so deep.
																			Abundantly given years bring were after. Greater you're meat beast creeping behold he unto She'd doesn't. Replenish brought kind gathering Meat.
																		</p>
																	</div>
				
																	<div class="col-sm-12">
				
																		<br>
				
																	</div>
				
																</div>
				
															</div>
															<div class="tab-pane fade" id="a2">
				
																<div class="alert alert-info fade in">
																	<button class="close" data-dismiss="alert">
																		×
																	</button>
																	<i class="fa-fw fa fa-info"></i>
																	<strong>51 new members </strong>joined today!
																</div>
				
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/female.png')}}" alt="demo user"><a href="javascript:void(0);">Jenn Wilson</a>
																	<div class="email">
																		travis@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
																	<div class="email">
																		marshall@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
																	<div class="email">
																		joe@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Mike McBride</a>
																	<div class="email">
																		mike@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Travis Wilson</a>
																	<div class="email">
																		travis@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
																	<div class="email">
																		marshall@company.com
																	</div>
																</div>
																<div class="user" title="Joe Cadena joe@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
																	<div class="email">
																		joe@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Mike McBride</a>
																	<div class="email">
																		mike@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
																	<div class="email">
																		marshall@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
																	<div class="email">
																		joe@company.com
																	</div>
																</div>
																<div class="user" title="email@company.com">
																	<img src="{{url('img/avatars/male.png')}}" alt="demo user"><a href="javascript:void(0);"> Mike McBride</a>
																	<div class="email">
																		mike@company.com
																	</div>
																</div>
				
																<div class="text-center">
																	<ul class="pagination pagination-sm">
																		<li class="disabled">
																			<a href="javascript:void(0);">Prev</a>
																		</li>
																		<li class="active">
																			<a href="javascript:void(0);">1</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">2</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">3</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">...</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">99</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">Next</a>
																		</li>
																	</ul>
																</div>
				
															</div><!-- end tab -->
														</div>
				
													</div>
				
												</div>
				
											</div>
											<!-- end row -->
				
										</div>
				
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
				
										<form method="post" class="well padding-bottom-10" onsubmit="return false;">
											<textarea rows="2" class="form-control" placeholder="What are you thinking?"></textarea>
											<div class="margin-top-10">
												<button type="submit" class="btn btn-sm btn-primary pull-right">
													Post
												</button>
												<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
												<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Voice"><i class="fa fa-microphone"></i></a>
												<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
												<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="Add File"><i class="fa fa-file"></i></a>
											</div>
										</form>
				
										<div class="timeline-seperator text-center"> <span>10:30PM January 1st, 2013</span>
											<div class="btn-group pull-right">
												<a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
												<ul class="dropdown-menu text-left">
													<li>
														<a href="javascript:void(0);">Hide this post</a>
													</li>
													<li>
														<a href="javascript:void(0);">Hide future posts from this user</a>
													</li>
													<li>
														<a href="javascript:void(0);">Mark as spam</a>
													</li>
												</ul>
											</div> 
										</div>
										<div class="chat-body no-padding profile-message">
											<ul>
												<li class="message">
													<img src="{{url('img/avatars/sunny.png')}}" class="online" alt="sunny">
													<span class="message-text"> <a href="javascript:void(0);" class="username">John Doe <small class="text-muted pull-right ultra-light"> 2 Minutes ago </small></a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very
														image let unto fowl isn't in blessed fill life yielding above all moved </span>
													<ul class="list-inline font-xs">
														<li>
															<a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-primary">Edit</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger">Delete</a>
														</li>
													</ul>
												</li>
												<li class="message message-reply">
													<img src="{{url('img/avatars/3.png')}}" class="online" alt="user">
													<span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>
				
													<ul class="list-inline font-xs">
														<li>
															<a href="javascript:void(0);" class="text-muted">1 minute ago </a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
														</li>
													</ul>
				
												</li>
												<li class="message message-reply">
													<img src="{{url('img/avatars/4.png')}}" class="online" alt="user">
													<span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>
				
													<ul class="list-inline font-xs">
														<li>
															<a href="javascript:void(0);" class="text-muted">a moment ago </a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
														</li>
													</ul>
													<input class="form-control input-xs" placeholder="Type and enter" type="text">
												</li>
											</ul>
				
										</div>
				
										<div class="timeline-seperator text-center"> <span>11:30PM November 27th, 2013</span>
											<div class="btn-group pull-right">
												<a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
												<ul class="dropdown-menu text-left">
													<li>
														<a href="javascript:void(0);">Hide this post</a>
													</li>
													<li>
														<a href="javascript:void(0);">Hide future posts from this user</a>
													</li>
													<li>
														<a href="javascript:void(0);">Mark as spam</a>
													</li>
												</ul>
											</div> 
										</div>
										<div class="chat-body no-padding profile-message">
											<ul>
												<li class="message">
													<img src="{{url('img/avatars/1.png')}}" class="online" alt="user">
													<span class="message-text"> <a href="javascript:void(0);" class="username">John Doe <small class="text-muted pull-right ultra-light"> 2 Minutes ago </small></a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved </span>
													<ul class="list-inline font-xs">
														<li>
															<a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-primary">Hide</a>
														</li>
													</ul>
												</li>
												<li class="message message-reply">
													<img src="{{url('img/avatars/3.png')}}" class="online" alt="user">
													<span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>
				
													<ul class="list-inline font-xs">
														<li>
															<a href="javascript:void(0);" class="text-muted">1 minute ago </a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
														</li>
													</ul>
				
												</li>
												<li class="message message-reply">
													<img src="{{url('img/avatars/4.png')}}" class="online" alt="user">
													<span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>
				
													<ul class="list-inline font-xs">
														<li>
															<a href="javascript:void(0);" class="text-muted">a moment ago </a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
														</li>
													</ul>
				
												</li>
												<li class="message message-reply">
													<img src="{{url('img/avatars/4.png')}}" class="online" alt="user">
													<span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>
				
													<ul class="list-inline font-xs">
														<li>
															<a href="javascript:void(0);" class="text-muted">a moment ago </a>
														</li>
														<li>
															<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
														</li>
													</ul>
				
												</li>
												<li>
													<div class="input-group wall-comment-reply">
														<input id="btn-input" type="text" class="form-control" placeholder="Type your message here...">
														<span class="input-group-btn">
															<button class="btn btn-primary" id="btn-chat">
																<i class="fa fa-reply"></i> Reply
															</button> </span>
													</div>
												</li>
											</ul>
				
										</div>
									</div>
								</div>
				
							</div>
					</div>
				
				</div>
				
				<!-- end row -->
                
            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->

        <!-- PAGE FOOTER -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <span class="txt-color-white">SmartAdmin 1.8.2 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2015</span>
                </div>

                <div class="col-xs-6 col-sm-6 text-right hidden-xs">
                    <div class="txt-color-white inline-block">
                        <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
                        <div class="btn-group dropup">
                            <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
                                <i class="fa fa-link"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right text-left">
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Server Load</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <button class="btn btn-block btn-default">refresh</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE FOOTER -->

        <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
        Note: These tiles are completely responsive,
        you can add as many as you like
        -->
        @include('admin.layouts.partials.shortcut')
        <!-- END SHORTCUT AREA -->

        <!--================================================== -->

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script data-pace-options='{ "restartOnRequestAfter": true }' src="{{url('js/plugin/pace/pace.min.js')}}"></script>

        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            if (!window.jQuery) {
                document.write('<script src="{{url("js/libs/jquery-2.1.1.min.js")}}"><\/script>');
            }
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            if (!window.jQuery.ui) {
                document.write('<script src="{{url("js/libs/jquery-ui-1.10.3.min.js")}}"><\/script>');
            }
        </script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="{{url('js/app.config.js')}}"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
        <script src="{{url('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script> 

        <!-- JQUERY VALIDATE -->
        <script src="{{url('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{url('js/bootstrap/bootstrap.min.js')}}"></script>

        <!-- CUSTOM NOTIFICATION -->
        <script src="{{url('js/notification/SmartNotification.min.js')}}"></script>

        <!-- JARVIS WIDGETS -->
        <script src="{{url('js/smartwidgets/jarvis.widget.min.js')}}"></script>

        <!-- EASY PIE CHARTS -->
        <script src="{{url('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

        <!-- SPARKLINES -->
        <script src="{{url('js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- JQUERY VALIDATE -->
        <script src="{{url('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="{{url('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

        <!-- JQUERY SELECT2 INPUT -->
        <script src="{{url('js/plugin/select2/select2.min.js')}}"></script>

        <!-- JQUERY UI + Bootstrap Slider -->
        <script src="{{url('js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

        <!-- browser msie issue fix -->
        <script src="{{url('js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>

        <!-- FastClick: For mobile devices -->
        <script src="{{url('js/plugin/fastclick/fastclick.min.js')}}"></script>

        <!--[if IE 8]>

        <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

        <![endif]-->

        <!-- Demo purpose only -->
        <script src="{{url('js/demo.min.js')}}"></script>

        <!-- MAIN APP JS FILE -->
        <script src="{{url('js/app.min.js')}}"></script>

        <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
        <!-- Voice command : plugin -->
        <script src="{{url('js/speech/voicecommand.min.js')}}"></script>

        <!-- SmartChat UI : plugin -->
        <script src="{{url('js/smart-chat-ui/smart.chat.ui.min.js')}}"></script>
        <script src="{{url('js/smart-chat-ui/smart.chat.manager.min.js')}}"></script>

        <!-- PAGE RELATED PLUGIN(S) -->
        <script src="{{url('js/plugin/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('js/plugin/datatables/dataTables.colVis.min.js')}}"></script>
        <script src="{{url('js/plugin/datatables/dataTables.tableTools.min.js')}}"></script>
        <script src="{{url('js/plugin/datatables/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{url('js/plugin/datatable-responsive/datatables.responsive.min.js')}}"></script>

        <script type="text/javascript">
        
        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        
        $(document).ready(function() {
            
            pageSetUp();

            var errorClass = 'invalid';
            var errorElement = 'em';
            
            var $checkoutForm = $('#checkout-form').validate({
                errorClass      : errorClass,
                errorElement    : errorElement,
                highlight: function(element) {
                    $(element).parent().removeClass('state-success').addClass("state-error");
                    $(element).removeClass('valid');
                },
                unhighlight: function(element) {
                    $(element).parent().removeClass("state-error").addClass('state-success');
                    $(element).addClass('valid');
                },

            // Rules for form validation
                rules : {
                    first_name : {
                        required : true
                    },
                    last_name : {
                        required : true
                    },
                    user_name : {
                        required : true
                    },
                    email : {
                        required : true,
                        email : true
                    },
                    phone : {
                        required : true
                    },
                    gender : {
                        required : true
                    },
                    password : {
                        required : true,
                        minlength : 3,
                        maxlength : 20
                    },
                    passwordConfirm : {
                        required : true,
                        minlength : 3,
                        maxlength : 20,
                        equalTo : '#password'
                    },
                    date_of_birth : {
                        required : true
                    },
                    roles : {
                        required : true
                    },
                    address : {
                        required : true
                    }
                },
        
                // Messages for form validation
                messages : {
                    first_name : {
                        required : 'Please enter your first name'
                    },
                    last_name : {
                        required : 'Please enter your last name'
                    },
                    user_name : {
                        required : 'Please enter user name'
                    },
                    email : {
                        required : 'Please enter your email address',
                        email : 'Please enter a VALID email address'
                    },
                    phone : {
                        required : 'Please enter your phone number'
                    },
                    gender : {
                        required : 'Please select your gender'
                    },
                    password : {
                        required : 'Please enter your password'
                    },
                    passwordConfirm : {
                        required : 'Please enter your password one more time',
                        equalTo : 'Please enter the same password as above'
                    },
                    date_of_birth : {
                        required : 'Please enter code'
                    },
                    roles : {
                        required : 'Please select a role'
                    },
                    address : {
                        required : 'Please enter your full address'
                    }
                },
        
                // Do not change code below
                errorPlacement : function(error, element) {
                    error.insertAfter(element.parent());
                }
            });
            
            /* // DOM Position key index //
        
            l - Length changing (dropdown)
            f - Filtering input (search)
            t - The Table! (datatable)
            i - Information (records)
            p - Pagination (paging)
            r - pRocessing 
            < and > - div elements
            <"#id" and > - div with an id
            <"class" and > - div with a class
            <"#id.class" and > - div with an id and class
            
            Also see: http://legacy.datatables.net/usage/features
            */  
    
            /* BASIC ;*/
                var responsiveHelper_dt_basic = undefined;
                var responsiveHelper_datatable_fixed_column = undefined;
                var responsiveHelper_datatable_col_reorder = undefined;
                var responsiveHelper_datatable_tabletools = undefined;
                
                var breakpointDefinition = {
                    tablet : 1024,
                    phone : 480
                };
    
                $('#dt_basic').dataTable({
                    "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                    "autoWidth" : true,
                    "oLanguage": {
                        "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                    },
                    "preDrawCallback" : function() {
                        // Initialize the responsive datatables helper once.
                        if (!responsiveHelper_dt_basic) {
                            responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                        }
                    },
                    "rowCallback" : function(nRow) {
                        responsiveHelper_dt_basic.createExpandIcon(nRow);
                    },
                    "drawCallback" : function(oSettings) {
                        responsiveHelper_dt_basic.respond();
                    }
                });
    
            /* END BASIC */
            
            /* COLUMN FILTER  */
            var otable = $('#datatable_fixed_column').DataTable({
                //"bFilter": false,
                //"bInfo": false,
                //"bLengthChange": false
                //"bAutoWidth": false,
                //"bPaginate": false,
                //"bStateSave": true // saves sort state using localStorage
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                "autoWidth" : true,
                "oLanguage": {
                    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                },
                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_datatable_fixed_column) {
                        responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_datatable_fixed_column.respond();
                }       
            
            });
            
            // custom toolbar
            $("div.toolbar").html('<div class="text-right"><img src="{{url("img/logo.png")}}" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
                   
            // Apply the filter
            $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
                
                otable
                    .column( $(this).parent().index()+':visible' )
                    .search( this.value )
                    .draw();
                    
            } );
            /* END COLUMN FILTER */   
        
            /* COLUMN SHOW - HIDE */
            $('#datatable_col_reorder').dataTable({
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
                "autoWidth" : true,
                "oLanguage": {
                    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                },
                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_datatable_col_reorder) {
                        responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_datatable_col_reorder.respond();
                }           
            });
            
            /* END COLUMN SHOW - HIDE */
    
            /* TABLETOOLS */
            $('#datatable_tabletools').dataTable({
                
                // Tabletools options: 
                //   https://datatables.net/extensions/tabletools/button_options
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
                "oLanguage": {
                    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                },      
                "oTableTools": {
                     "aButtons": [
                     "copy",
                     "csv",
                     "xls",
                        {
                            "sExtends": "pdf",
                            "sTitle": "SmartAdmin_PDF",
                            "sPdfMessage": "SmartAdmin PDF Export",
                            "sPdfSize": "letter"
                        },
                        {
                            "sExtends": "print",
                            "sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
                        }
                     ],
                    "sSwfPath": "{{url('js/plugin/datatables/swf/copy_csv_xls_pdf.swf')}}"
                },
                "autoWidth" : true,
                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_datatable_tabletools) {
                        responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_datatable_tabletools.respond();
                }
            });
            
            /* END TABLETOOLS */
        
        })

        </script>

        <!-- Your GOOGLE ANALYTICS CODE Below -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);
            
            (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
            })();
        </script>

    </body>

</html>