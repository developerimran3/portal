 <div class="sidebar" id="sidebar">
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title">
                     <span></span>
                 </li>
                 <li class="{{ Request::is('dashboard/student') ? 'active' : '' }}">
                     <a href="{{ route('student.index') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                 </li>
                 <li class="{{ Request::is('dashboard/student-profile') ? 'active' : '' }}">
                     <a href="{{ route('student.profile') }}"><i class="fe fe-user"></i> <span>My Profile</span></a>
                 </li>

                 <li>
                     <a href="#"><i class="fe fe-layout"></i> <span>Payment info</span></a>
                 </li>
                 <li>
                     <a href="#"><i class="fe fe-users"></i> <span>Registration</span></a>
                 </li>
                 <li>
                     <a href="#"><i class="fe fe-user-plus"></i> <span>Course</span></a>
                 </li>

                 <li>
                     <a href="#"><i class="fe fe-star-o"></i> <span>Drop Semester</span></a>
                 </li>
                 <li>
                     <a href="#"><i class="fe fe-activity"></i>
                         <span>Result</span></a>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-document"></i> <span> Schedule</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#"> Reports</a></li>
                     </ul>
                 </li>
                 <li>
                     <a
                         href="{{ route('student.logout') }}"onclick="return confirm('Are you sure you want to Logout?');"><i
                             class="fe fe-vector"></i> <span>Logout</span></a>
                 </li>

             </ul>
         </div>
     </div>
 </div>
