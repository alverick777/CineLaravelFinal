<nav class="navbar navbar-inverse navbar-fixed-top size">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{ asset('img/logo brand.png') }}" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">        
          <li><a href="{{ route('main.index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li> 
          <li><a href="#" data-toggle="modal" data-target="#modal_contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
          <li><a href="#" data-toggle="modal" data-target="#modal_about"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>  
      </ul>  
    
      <ul class="nav navbar-nav navbar-right">      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input id="search_nav" type="text" class="form-control" placeholder="Search">
        </div>
        <button id="btn_search_nav" type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
      </form>  
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> 
          @if(Auth::check())
            {{ Auth::user()->email }}
          @else
            My Account 
          @endif 
            <span class="caret"></span></a>
          <ul class="dropdown-menu drop-back">
          @if(Auth::check())
            <li><a href="{{ route('users.profile') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Messages <span id="badge_message_nav" class="badge">42</span></a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-bullhorn" aria-hidden="true"></i> Report a problem</a></li>
            <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('users.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
          @else
            <li><a href="#" data-toggle="modal" data-target="#sign_in"><i class="fa fa-sign-in" aria-hidden="true"></i> Signin</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modal_signup"><i class="fa fa-pencil" aria-hidden="true"></i> SignUp</a></li>
          @endif     
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>