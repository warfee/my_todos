<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts.head')

</head>

<body class="animsition">
    <div class="page-wrapper">

@include('layouts.mobile_header')

@include('layouts.sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
           @include('layouts.header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">

                    <div class="container-fluid">

                        @yield('content')
                        
                       @include('layouts.footer')
                    </div>
                </div>
            </div>
        </div>

    </div>

   @include('layouts.foot')
</body>

</html>
<!-- end document-->
