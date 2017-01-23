<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/users/') }}">ILQ</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Product Management</a></li>
        <li><a href="">User Management</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> SOT Mesa<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Activities Log</a></li>
            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
            <li><a href="#"><i class="fa fa-bug" aria-hidden="true"></i> Report A Problem</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>