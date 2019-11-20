<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('/img/sidebar-3.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        Administrator
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="{{Request::is('admin/dashboard*') ? 'active' : ''}} ">
          <a class="nav-link" href="{{route('admin.dashboard.index')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{Request::is('admin/users*') ? 'active' : ''}} ">
          <a class="nav-link" href="{{route('admin.users.index')}}">
            <i class="material-icons">person</i>
            <p>Manage Users</p>
          </a>
        </li>
        <li class="{{Request::is('admin/tasks*') ? 'active' : ''}} ">
          <a class="nav-link" href="{{route('admin.tasks.index')}}">
            <i class="material-icons">home_work</i>
            <p>Manage tasks</p>
          </a>
        </li>
        
      </ul>
    </div>
  </div>