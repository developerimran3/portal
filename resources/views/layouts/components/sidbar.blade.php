 <div class="sidebar" id="sidebar">
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title">
                     <span>Main</span>
                 </li>
                 {{-- Dashboard --}}
                 @if (Auth::guard('student')->user())
                     <li class="{{ Request::is('dashboard/student') ? 'active' : '' }}">
                         <a href="{{ route('student.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                     </li>
                 @endif
                 @if (Auth::guard('teacher')->user())
                     <li class="{{ Request::is('dashboard/teacher') ? 'active' : '' }}">
                         <a href="{{ route('teacher.dashboard') }}"><i class="fe fe-home"></i>
                             <span>Dashboard</span></a>
                     </li>
                 @endif
                 @if (Auth::guard('staff')->user())
                     <li class="{{ Request::is('dashboard/staff') ? 'active' : '' }}">
                         <a href="{{ route('staff.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                     </li>
                 @endif
                 @if (Auth::guard('student')->user())
                     <li class="submenu">
                         <a href="#"><i class="fe fe-document"></i> <span> Attendance</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#"> My Attendance Record</a></li>
                         </ul>
                     </li>

                     <li class="submenu">
                         <a href="#"><i class="fe fe-document"></i> <span>Result/Report Card</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Exam Result</a></li>
                             <li><a href="#">Subject Wise Marks</a></li>
                         </ul>
                     </li>
                     <li>
                         <a href="#"><i class="fe fe-calendar"></i> <span>Class Routine</span></a>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-document"></i> <span>Assignment</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">View Assignment</a></li>
                             <li><a href="#">Submit Homework</a></li>
                         </ul>
                     </li>

                     <li class="submenu">
                         <a href="#"><i class="fe fe-book"></i> <span>Study Materials</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Download Notice/Files</a></li>
                         </ul>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-comment-o"></i> <span>Notice & Message</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">School Notice Board</a></li>
                             <li><a href="#">Message Teacher</a></li>
                         </ul>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-credit-card"></i> <span>Fees & Payments</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">View Fee Detailes</a></li>
                             <li><a href="#">Pay Online</a></li>
                         </ul>
                     </li>
                 @endif
                 {{-- Teacher Menu --}}
                 @if (Auth::guard('teacher')->user())
                     <li class="submenu">
                         <a href="#"><i class="fe fe-document"></i> <span>My Classes</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Class List</a></li>
                             <li><a href="#">Class Routine</a></li>
                         </ul>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-document"></i> <span> Attendance</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Take Attendance</a></li>
                             <li><a href="#">view Attendance</a></li>
                         </ul>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-document"></i> <span>Assignment</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Create Assignment</a></li>
                             <li><a href="#">Submited Work</a></li>
                         </ul>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-book"></i> <span>Study Materials</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Upload Notice/File</a></li>
                         </ul>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-comment-o"></i> <span>Notice & Message</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Send Massage To Student</a></li>
                         </ul>
                     </li>
                     </li>
                     <li class="submenu">
                         <a href="#"><i class="fe fe-document"></i> <span>Marks</span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="#">Add Marks</a></li>
                             <li><a href="#">View Marks</a></li>
                         </ul>
                     </li>

                     <li>
                         <a href="#"><i class="fe fe-layout"></i> <span>Exam Scheduls</span></a>
                     </li>
                 @endif
                 {{-- Staff Menu --}}
                 @if (Auth::guard('staff')->user())
                     @if (Auth::guard('staff')->user()->role == 'Account')
                         <li class="submenu">
                             <a href="#"><i class="fe fe-users"></i> <span>Student Manage</span> <span
                                     class="menu-arrow"></span></a>
                             <ul style="display: none;">
                                 <li><a href="#">Add/Edit/Delete Student</a></li>
                                 <li><a href="#">Student List</a></li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="#"><i class="fe fe-users"></i> <span>Teacher Manage</span> <span
                                     class="menu-arrow"></span></a>
                             <ul style="display: none;">
                                 <li><a href="#">Teacher List</a></li>
                                 <li><a href="#">Attendance/Salary</a></li>
                             </ul>
                         </li>
                     @endif
                     @if (in_array(Auth::guard('staff')->user()->role, ['Manager', 'Account']))
                         <li class="submenu">
                             <a href="#"><i class="fe fe-credit-card"></i> <span>Fees & Accounts</span>
                                 <span class="menu-arrow"></span></a>
                             <ul style="display: none;">
                                 <li><a href="#">Collect Fees</a></li>
                                 <li><a href="#">Expense Report</a></li>
                                 <li><a href="#">Salary Payment</a></li>
                             </ul>
                         </li>
                     @endif

                     @if (Auth::guard('staff')->user()->role == 'Librarian')
                         <li class="submenu">
                             <a href="#"><i class="fe fe-book"></i> <span>Library Manage</span> <span
                                     class="menu-arrow"></span></a>
                             <ul style="display: none;">
                                 <li><a href="#">Book List</a></li>
                                 <li><a href="#">Issue/Return</a></li>
                             </ul>
                         </li>
                     @endif
                     @if (in_array(Auth::guard('staff')->user()->role, ['Manager', 'Account', 'Librarian']))
                         <li>
                             <a href="#"><i class="fe fe-layout"></i> <span>Event/Notice</span></a>
                         </li>
                     @endif

                     @if (Auth::guard('staff')->user()->role == 'Manager')
                         <li class="submenu">
                             <a href="#"><i class="fe fe-book"></i> <span>Exam Manage</span> <span
                                     class="menu-arrow"></span></a>
                             <ul style="display: none;">
                                 <li><a href="#">Schedule Exam</a></li>
                                 <li><a href="#">Manage Result</a></li>
                             </ul>
                         </li>
                     @endif
                 @endif
                 {{-- my profile --}}
                 @if (Auth::guard('student')->user())
                     <li class="{{ Request::is('dashboard/student-profile') ? 'active' : '' }}">
                         <a href="{{ route('student.profile') }}"><i class="fe fe-user"></i> <span>My
                                 Profile</span></a>
                     </li>
                 @endif
                 @if (Auth::guard('staff')->user())
                     <li class="{{ Request::is('dashboard/staff-profile') ? 'active' : '' }}">
                         <a href="{{ route('staff.profile') }}"><i class="fe fe-user"></i> <span>My
                                 Profile</span></a>
                     </li>
                 @endif
                 @if (Auth::guard('teacher')->user())
                     <li class="{{ Request::is('dashboard/teacher-profile') ? 'active' : '' }}">
                         <a href="{{ route('teacher.profile') }}"><i class="fe fe-user"></i> <span>My
                                 Profile</span></a>
                     </li>
                 @endif
                 {{-- Log Out --}}
                 @if (Auth::guard('student')->user())
                     <li>
                         <a
                             href="{{ route('student.logout') }}"onclick="return confirm('Are you sure you want to Logout?');"><i
                                 class="fa fa-sign-out"></i> <span>Logout</span></a>
                     </li>
                 @endif
                 @if (Auth::guard('staff')->user())
                     <li>
                         <a
                             href="{{ route('staff.logout') }}"onclick="return confirm('Are you sure you want to Logout?');"><i
                                 class="fa fa-sign-out"></i> <span>Logout</span></a>
                     </li>
                 @endif
                 @if (Auth::guard('teacher')->user())
                     <li>
                         <a
                             href="{{ route('teacher.logout') }}"onclick="return confirm('Are you sure you want to Logout?');"><i
                                 class="fa fa-sign-out"></i> <span>Logout</span></a>
                     </li>
                 @endif

             </ul>
         </div>
     </div>
 </div>
