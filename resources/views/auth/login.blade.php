<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- <link rel="stylesheet" href="assets/css/auth.css"> --}}
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>

    <section class="signin-section">
        <div class="container-fluid">

            <div class="row g-0 auth-row">
                <div class="col-lg-6">
                    <div class="auth-cover-wrapper bg-primary-100">
                        <div class="auth-cover">
                            <div class="title text-center">
                                <h1 class="text-primary mb-10">Welcome Back</h1>
                                <p class="text-medium">
                                    Silahkan login terlebih dahulu untuk melanjutkan
                                </p>
                            </div>
                            <div class="cover-image">
                                <img src="assets/images/auth/signin-image.svg" alt="" />
                            </div>
                            <div class="shape-image">
                                <img src="assets/images/auth/shape.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="signin-wrapper">
                        <div class="form-wrapper">
                            <h6 class="mb-15">Login</h6>
                            {{-- <p class="text-sm mb-25">
                                Start creating the best possible user experience for you
                                customers.
                            </p> --}}
                            <form action="/login" method="POST">
                              @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>NIS</label>
                                            <input type="text" name="nis" placeholder="nis" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                        <div class="form-check checkbox-style mb-30">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox-remember" />
                                            <label class="form-check-label" for="checkbox-remember">
                                                Ingat saya</label>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                        <div
                                            class="
                          text-start text-md-end text-lg-start text-xxl-end
                          mb-30
                        ">
                                            <a href="#0" class="hover-underline">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div
                                            class="
                          button-group
                          d-flex
                          justify-content-center
                          flex-wrap
                        ">
                                            <button
                                                class="
                            main-btn
                            primary-btn
                            btn-hover
                            w-100
                            text-center
                          ">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </section>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jsbede.js"></script>

</body>

</html>
