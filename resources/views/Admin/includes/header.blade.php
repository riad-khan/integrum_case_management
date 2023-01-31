 <!-- Preloader -->


  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.php"> <img src="{{asset('/admin/assets/img/custom/logo-main.png')}}" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
	<!--
      <li class="menu-item">
        <a href="index.php">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
      </li>
	 -->

   @php
     $roles = Auth::user()->roles;

    $splitRoles = explode(",",$roles);
    $lastRole = end($splitRoles);
   @endphp

   @if($lastRole ==1 || $lastRole == 2 || $lastRole == 3)

      <li class="menu-item">
        <a href="/">
          <span><i class="material-icons fs-16">dashboard</i>Málið mitt</span>
        </a>
      </li>
      {{-- <li class="menu-item">
        <a href="user-management.php">
          <span><i class="fas fa-user"></i>Stillingar</span>
        </a>
      </li> --}}

      @endif

      @if($lastRole == 2)

      <li class="menu-item">
        <a href="/employee-dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard</span>
        </a>
      </li>

      @endif

      @if($lastRole == 3)

      <li class="menu-item">
        <a href="/user-management">
          <span><i class="material-icons fs-16">dashboard</i>User Management</span>
        </a>
      </li>

      @endif
    

    </ul>


  </aside>

  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">

    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>
        <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-toggle="tab"> Settings </a></li>
        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>

    <div class="ms-aside-body">

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2020</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2020</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2020</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="recentPosts">

          <h6>General Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Location Tracking</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Notifications</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Popups</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Log Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Advanced Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

        </div>

      </div>

    </div>

  </aside>

  <!-- Main Content -->
  <main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.php"><img src="assets/img/dashboard/cannadash-logo-84x41.png" alt="logo"> </a>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item ms-search-form pb-0 py-0">
          <form class="ms-form" method="post">
            <div class="ms-form-group my-0 mb-0 has-icon fs-14">
              <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value="">
              <i class="flaticon-search text-disabled"></i>
            </div>
          </form>
        </li>
        <li class="ms-nav-item dropdown">
          <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Mail</span></h6><span class="badge badge-pill badge-success">3 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-1.jpg')}}" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>Hey man, looking forward to your new project.</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                  <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-2.jpg')}}" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>Dear John, I was told you bought Cannadash! Send me your feedback</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>How many people are we inviting to the dashboard?</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
              <a href="email.php">Go to Inbox</a>
            </li>
          </ul>
        </li>
        <li class="ms-nav-item dropdown">
          <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>12 ways to improve your crypto dashboard</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>You have newly registered users</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>Your account was logged in from an unauthorized IP</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>An application form has been submitted</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
              <a href="#">View all Notifications</a>
            </li>
          </ul>
        </li>

        <li class="ms-nav-item m-0 display-none-sm">
          <label class="ms-switch m-0">
            <input type="checkbox" id="remove-quickbar" checked="">
            <span class="ms-switch-slider round"></span>
          </label>
        </li>
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="{{asset('/admin/assets/img/dashboard/rakhan-potik-1.jpg')}}" alt="people"> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, {{Auth::user()->first_name}}</span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="/user-profile"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
              <a class="media fs-14 p-2" href="email.php"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
              <a class="media fs-14 p-2" href="#"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="#"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="/logout"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>