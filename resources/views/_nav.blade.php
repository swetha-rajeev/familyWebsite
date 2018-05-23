 <nav class="navbar my-navbar navbar-fixed-top navbar-expand-md navbar-light">
  <button class="navbar-toggler dropdowntoggler" type="button" data-toggle="collapse" data-target="#navbarTogglerid" aria-controls="navbarTogglerid" aria-expanded="false" aria-label="Toggle navigation" id="toggleButton">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{url('/')}}">Our World</a>

  <div class="collapse navbar-collapse collapsetoggler" id="navbarTogglerid">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navdisplay">
      
      <li class="nav-item ">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link textStyle" href="#">Calendar</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">About Us</a>
      </li>
    </ul>
    
    @if(Auth::check())
      <div class="dropdown login-dropdown">
         <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id ="login-button">Hi Swetha
              <span class="caret"></span></button>
                <ul class="dropdown-menu">
                     <li><a href="#"><span class="icons"><i class="fab fa-blogger"></i></span>Blog</a></li>
                      <li><a href="#"><span class="icons"><i class="far fa-images"></i></span>Gallery</a></li>
                       <li><a href="#"><span class="icons"><i class="far fa-calendar-alt"></i></span>Calendar</a></li>
                       <li class = "seperator"><a href="#"><span class="icons"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
                   </ul>
            </div>
    @else
    
      <a href="{{ url('/login') }}" class="nav-item navbar-right justify-content-end" id="textcolor">Login </a>
    
    @endif

     
  </div>
</nav>

