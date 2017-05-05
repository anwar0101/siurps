<nav class="navbar navbar-default navbar-fixed-top top-nav-collapse">
  <div class="container">
    <div class="col-md-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="../img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('courses.index') }}">CSE</a></li>
                  <li><a href="{{ route('courses.index') }}">ECE</a></li>
                  <li><a href="{{ route('courses.index') }}">BBA</a></li>
                  <li><a href="{{ route('courses.index') }}">LLB</a></li>
                  <li><a href="{{ route('courses.index') }}">ENG</a></li>
                </ul>
              </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('students.create') }}">Add Student</a></li>
                  <li><a href="{{ route('students.index') }}">Student Info</a></li>
                </ul>
              </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Result <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    {# individual result, semester wise result, partial trancript#}
                  <li><a href="{{ route('results.create') }}">Result Entry</a></li>
                  <li><a href="{{ route('results.index') }}">Result Info</a></li>
                </ul>
              </li>

              @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li><a href="settings">Settings</a></li>
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif

          </ul>
        </div>
    </div>
  </div>
</nav>
