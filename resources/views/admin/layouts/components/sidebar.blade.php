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
                     <a href="#"><i class="fa fa-book"></i> <span>Study Materials</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#">Download Notice/Files</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-comment-o"></i> <span>Notice & Message</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#">School Notice Board</a></li>
                         <li><a href="#">Message Teacher</a></li>
                     </ul>

                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-credit-card"></i> <span>Fees & Payments</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#">View Fee Detailes</a></li>
                         <li><a href="#">Pay Online</a></li>
                     </ul>
                 </li>
                 <li class="{{ Request::is('dashboard/student-profile') ? 'active' : '' }}">
                     <a href="{{ route('student.profile') }}"><i class="fe fe-user"></i> <span>My Profile</span></a>
                 </li>
                 <li>
                     <a
                         href="{{ route('student.logout') }}"onclick="return confirm('Are you sure you want to Logout?');"><i
                             class="fa fa-sign-out"></i> <span>Logout</span></a>
                 </li>


                 {{-- Teacher Menu --}}
                 {{-- <li class="submenu">
                     <a href="#"><i class="fe fe-document"></i> <span>My Classes</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#">Class List</a></li>
                         <li><a href="#">Class Routine</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-document"></i> <span>Attendance</span> <span
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
                     <a href="#"><i class="fe fe-document"></i> <span>Marks</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#">Add Marks</a></li>
                         <li><a href="#">View Marks</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-comment-o"></i> <span>Massage/Notice</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#">Send Massage To Student</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="#"><i class="fe fe-layout"></i> <span>Exam Scheduls</span></a>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-book"></i> <span>Study Materials</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#">Upload Notice/File</a></li>
                     </ul>
                 </li> --}}
             </ul>
         </div>
     </div>
 </div>
