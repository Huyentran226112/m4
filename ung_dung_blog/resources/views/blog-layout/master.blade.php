<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('blogs/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('include.header')
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Chào Mừng Bạn Đến Với Blog Change Của Phong Tâm!</h1>
                    <p class="lead mb-0">Các bạn cùng trải nghiệm với anh em nhà mình nhé...!!!</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
               @yield('content')
                <!-- Side widgets-->
                @include('include.sidebar')
            </div>
        </div>
        <!-- Footer-->
        @include('include.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('blogs/js/scripts.js')}}"></script>
    </body>
</html>
