 <div class="header">
     <!-- Logo -->
     <div class="header-left">
         <a href="index.html" class="logo">
             <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
         </a>
         <a href="index.html" class="logo logo-small">
             <img src="{{ asset('assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
         </a>
     </div>
     <!-- /Logo -->
     <a href="javascript:void(0);" id="toggle_btn">
         <i class="fe fe-text-align-left"></i>
     </a>
     <div class="top-nav-search">
         <form>
             <input type="text" class="form-control" placeholder="Search here">
             <button class="btn" type="submit"><i class="fa fa-search"></i></button>
         </form>
     </div>

     <!-- Mobile Menu Toggle -->
     <a class="mobile_btn" id="mobile_btn">
         <i class="fa fa-bars"></i>
     </a>
     <!-- /Mobile Menu Toggle -->

     <!-- Header Right Menu -->
     <ul class="nav user-menu">

         <!-- Notifications -->
         <li class="nav-item dropdown noti-dropdown">
             <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                 <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
             </a>
         </li>
         <!-- /Notifications -->

         <!-- User Menu -->
         <li class="nav-item dropdown has-arrow">
             <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                 <span class="user-img"><img class="rounded-circle"
                         src="{{ URL::to('media/staff/' . Auth::guard('staff')->user()->photo) }}" width="31"
                         alt="{{ Auth::guard('staff')->user()->name }}"></span>
             </a>
             <div class="dropdown-menu">
                 <div class="user-header">
                     <div class="avatar avatar-sm">
                         <img src="{{ URL::to('media/staff/' . Auth::guard('staff')->user()->photo) }}" alt="User Image"
                             class="avatar-img rounded-circle">
                     </div>
                     <div class="user-text">
                         <h6>{{ Auth::guard('staff')->user()->name }}</h6>
                         <p class="text-muted mb-0">{{ Auth::guard('staff')->user()->role }}</p>
                     </div>
                 </div>
                 <a class="dropdown-item" href="{{ route('staff.profile') }}">My Profile</a>
                 <a class="dropdown-item" href="settings.html">Settings</a>
                 <a class="dropdown-item" href="{{ route('staff.logout') }}">Logout</a>
             </div>
         </li>
         <!-- /User Menu -->

     </ul>
     <!-- /Header Right Menu -->

 </div>
