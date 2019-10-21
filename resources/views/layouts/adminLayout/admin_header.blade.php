<!--Header-part-->
<div id="header">
    <img src="{{asset('images/avatar5.png')}}" style="width: 50px; height:50px; margin-top: 5px " class="img-circle" alt="User Image">
    <span class="text" style="color: white;">{{ Auth::user()->name }}</span>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">{{ Auth::user()->name }}</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

