<!-- Modal -->
<div id="modalForm" class="modal fade" role="dialog">
	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	        <div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">Edit Profile</h4>
	      	</div>
	      	<div class="row">
		      	<div class="modal-body">
		      		<!-- left column -->
					<div class="col-md-3">
						<div class="text-center">
							<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
							<h6>Upload a different photo...</h6>
							<input type="file" class="form-control" name="profile">
						</div>
					</div>
					<div class="col-md-9 personal-info">
						<h3>Personal info</h3>
				        <form class="form-horizontal" role="form">
					        <div class="form-group">
					            <label for="userName" class="col-sm-3 control-label">User Name</label>
					            <div class="col-sm-9">
					                <input type="text" id="userName" placeholder="User Name" class="form-control" autofocus>
					            </div>
					        </div>
					        <div class="form-group">
					            <label for="firstName" class="col-sm-3 control-label">First Name</label>
					            <div class="col-sm-9">
					                <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
					            </div>
					        </div>
					        <div class="form-group">
					            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
					            <div class="col-sm-9">
					                <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus>
					            </div>
					        </div>
					        <div class="form-group">
					            <label for="email" class="col-sm-3 control-label">Email</label>
					            <div class="col-sm-9">
					                <input type="email" id="email" placeholder="Email" class="form-control">
					            </div>
					        </div>
					        <div class="form-group">
					            <label for="password" class="col-sm-3 control-label">Password</label>
					            <div class="col-sm-9">
					                <input type="password" id="password" placeholder="Password" class="form-control">
					            </div>
					        </div>
					        <div class="form-group">
					            <label for="confirmPassword" class="col-sm-3 control-label">Confirm Password</label>
					            <div class="col-sm-9">
					                <input type="password" id="confirmPassword" placeholder="Confirm Password" class="form-control">
					            </div>
					        </div>
					        <div class="form-group">
					            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
					            <div class="col-sm-9">
					                <input type="text" class="form-control"  id="datetimepicker">
					            </div>
					        </div>
					        <div class="form-group">
					            <label for="placeBirth" class="col-sm-3 control-label">Place of Birth</label>
					            <div class="col-sm-9">
					                <textarea class="form-control" name="placeBirth" id="placeBirth"></textarea>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="control-label col-sm-3">Gender</label>
					            <div class="col-sm-6">
					                <div class="row">
					                    <div class="col-sm-4">
					                        <label class="radio-inline">
					                            <input type="radio" id="femaleRadio" value="female" name="gender">Female
					                        </label>
					                    </div>
					                    <div class="col-sm-4">
					                        <label class="radio-inline">
					                            <input type="radio" id="maleRadio" value="male" name="gender">Male
					                        </label>
					                    </div>
					                    <div class="col-sm-4">
					                        <label class="radio-inline">
					                            <input type="radio" id="uncknownRadio" value="other" name="gender">Others
					                        </label>
					                    </div>
					                </div>
					            </div>
					        </div> <!-- /.form-group -->
					        <div class="form-group">
					            <label class="control-label col-sm-3">Meal Preference</label>
					            <div class="col-sm-9">
					                <div class="checkbox">
					                    <label>
					                        <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
					                    </label>
					                </div>
					                <div class="checkbox">
					                    <label>
					                        <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
					                    </label>
					                </div>
					            </div>
					        </div> <!-- /.form-group -->
					        <div class="form-group">
					            <div class="col-sm-9 col-sm-offset-3">
					                <div class="checkbox">
					                    <label>
					                        <input type="checkbox">I accept <a href="#">terms</a>
					                    </label>
					                </div>
					            </div>
					        </div> <!-- /.form-group -->
					        <div class="form-group">
					            <div class="col-sm-9 col-sm-offset-3">
					                <button type="button" value="create" class="btn btn-primary btn-block">Register</button>
					            </div>
					        </div>
					    </form> <!-- /form -->
					</div>
		        </div>
		    </div> <!-- End row class --> 
	        <div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	   	</div>
	</div>
</div>
