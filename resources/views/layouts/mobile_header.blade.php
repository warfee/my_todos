
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/dashboard.png')}}" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        
                          <li>
                             <a href="{{url('/dashboard')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                         <li>
                            <a href="{{url('/todos')}}">
                                <i class="fas fa-table"></i>To do</a>
                        </li>

                         <li>
                            <a href="{{url('/done_todos')}}">
                                <i class="far fa-check-square"></i>Done Todo</a>
                        </li>
            
            
                         <li>
                            <a href="{{ route('logout') }}"  
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                <i class="fas fa-sign-out-alt"></i>Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>