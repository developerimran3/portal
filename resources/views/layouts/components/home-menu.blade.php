 <div class="container">
     <div class="row">
         <header>
             <nav class="navbar navbar-expand-lg bg-body-tertiary">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="#">Portal</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                             <li class="nav-item">
                                 <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                             </li>

                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" role="button"
                                     data-bs-toggle="dropdown" aria-expanded="false">
                                     Register
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="{{ route('student.register') }}">Student
                                             Register</a></li>
                                     <li>
                                         <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('staff.register') }}">Staff
                                             Register</a></li>
                                     <li>
                                         <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('teacher.register') }}">Teacher
                                             Register</a></li>
                                 </ul>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" role="button"
                                     data-bs-toggle="dropdown" aria-expanded="false">
                                     Login
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="{{ route('student.login') }}">Student
                                             Login</a></li>
                                     <li>
                                         <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('staff.login') }}">Staff
                                             Login</a></li>
                                     <li>
                                         <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('teacher.login') }}">Teacher
                                             Login</a></li>
                                 </ul>
                             </li>
                         </ul>
                         <form class="d-flex" role="search">
                             <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                             <button class="btn btn-outline-success" type="submit">Search</button>
                         </form>
                     </div>
                 </div>
         </header>
     </div>
 </div>
