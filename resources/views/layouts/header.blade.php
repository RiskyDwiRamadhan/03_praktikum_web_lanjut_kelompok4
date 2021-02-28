
    <div class="tm-top-header">
        <div class="container">
          <div class="row">
            <div class="tm-top-header-inner">
              <div class="tm-logo-container">
                <img src="{{asset('template')}}/img/logo.png" alt="Logo" class="tm-site-logo">
                <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
              </div>
              <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
              </div>
              <nav class="tm-nav">
                <ul>
                  <li><a href="{{ url('/') }}" class="active">Home</a></li> 
                  <li><a href="{{ url('/today') }}">Today Special</a></li>
                  <li><a href="{{ url('/menu') }}">Menu</a></li>
                  <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
              </nav>   
            </div>           
          </div>    
        </div>
      </div>
      <section class="tm-welcome-section">
        <div class="container tm-position-relative">
          <div class="tm-lights-container">
            <img src="{{asset('template')}}/img/light.png" alt="Light" class="light light-1">
            <img src="{{asset('template')}}/img/light.png" alt="Light" class="light light-2">
            <img src="{{asset('template')}}/img/light.png" alt="Light" class="light light-3">  
          </div>        