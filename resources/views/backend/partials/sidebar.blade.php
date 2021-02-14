  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
              <img src="{{ asset('backend/img/logo/logo2.png') }}">
          </div>
          <div class="sidebar-brand-text mx-3">Admin Panel</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          Features
      </div>
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rolesSidebar"
              aria-expanded="true" aria-controls="rolesSidebar">
              <i class="far fa-fw fa-window-maximize"></i>
              <span>Roles & Permissions</span>
          </a>
          <div id="rolesSidebar" class="collapse" aria-labelledby="headingBootstrap"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Roles
                  </h6>
                  <a class="collapse-item {{ Route::is('admin.roles.create') ? 'active' : '' }}"
                      href="{{ route('admin.roles.create') }}">Create Role</a>
                  <a class="collapse-item {{ Route::is('admin.roles.index') ? 'active' : '' }}"
                      href="{{ route('admin.roles.index') }}">All Role</a>
                  <a class="collapse-item" href="#">Permission</a>
              </div>
          </div>
      </li>

            <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usersSidebar"
              aria-expanded="true" aria-controls="usersSidebar">
              <i class="far fa-fw fa-window-maximize"></i>
              <span>Users</span>
          </a>
          <div id="usersSidebar" class="collapse" aria-labelledby="headingBootstrap"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Users
                  </h6>
                  <a class="collapse-item {{ Route::is('admin.users.create') ? 'active' : '' }}"
                      href="{{ route('admin.users.create') }}">Create User</a>
                  <a class="collapse-item {{ Route::is('admin.users.index') ? 'active' : '' }}"
                      href="{{ route('admin.users.index') }}">All User</a>
                  <a class="collapse-item" href="#">Permission</a>
              </div>
          </div>
      </li>


  </ul>
  <!-- Sidebar -->
  <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
