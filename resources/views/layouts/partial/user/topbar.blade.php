<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
      <h2>Welcome {{Auth::user()->name}}</h2>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
      
        <ul class="navbar-nav">
     

          <li>
          <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="material-icons btn-danger">exit_to_app</i>
            {{-- <p class="hidden-lg hidden-md">Logout</p> --}}
          </a>

          <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
            @csrf

          </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->