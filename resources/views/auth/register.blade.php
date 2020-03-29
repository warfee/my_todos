<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head')

</head>

<body class="animsition">
  <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/my_todos.png">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>

                                 <div class="form-group">
                                    <label>Retype Password</label>
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Retype Password">
                                </div>
                               
                                <button class="au-btn au-btn--block au-btn--green m-b-20 m-t-20" type="submit">register</button>
                               
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="#">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  @include('layouts.foot')

</body>

</html>
<!-- end document-->