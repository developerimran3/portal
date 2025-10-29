 <div class="sidebar" id="sidebar">
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title">
                     <span></span>
                 </li>
                 <li class="{{ Request::is('dashboard/staff') ? 'active' : '' }}">
                     <a href="{{ route('staff.index') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                 </li>
                 <li class="{{ Request::is('dashboard/staff-profile') ? 'active' : '' }}">
                     <a href="{{ route('staff.profile') }}"><i class="fe fe-user"></i> <span>Profile</span></a>
                 </li>

                 <li>
                     <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                 </li>
                 <li>
                     <a href="specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
                 </li>
                 <li>
                     <a href="doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                 </li>

                 <li>
                     <a href="reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                 </li>
                 <li>
                     <a href="transactions-list.html"><i class="fe fe-activity"></i>
                         <span>Transactions</span></a>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="invoice-report.html">Invoice Reports</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="{{ route('staff.logout') }}"
                         onclick="return confirm('Are you sure you want to Logout?');"><i
                             class="fe
                         fe-vector"> </i>

                         <span>Logout</span></a>
                 </li>

             </ul>
         </div>
     </div>
 </div>
