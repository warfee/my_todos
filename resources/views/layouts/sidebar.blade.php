
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/dashboard.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

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
                </nav>
            </div>
        </aside>