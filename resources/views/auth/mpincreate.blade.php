<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>KJ-Plast</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ @asset('') }}assets/images/favicon.ico" />

    <!-- Layout config Js -->
    <script src="{{ @asset('') }}assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ @asset('') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ @asset('') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ @asset('') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ @asset('') }}assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Lock Screen</h5>
                                    <p class="text-muted">
                                        Set your M-Pin to unlock the screen!
                                    </p>
                                </div>
                                <div class="user-thumb text-center">
                                    <img src="{{ @asset('') }}assets/images/users/user-dummy-img.jpg"
                                        class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail" />
                                    <h5 class="font-size-15 mt-3">{{ @ucwords(Auth::user()->name) }}</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="post" action="{{ route('mpin.store') }}">
                                        @csrf
                                        <div class="mb-3">

                                            <input type="text" class="form-control" id=""
                                                placeholder="Enter Pin" required name="pin" autocomplete="off"
                                                autocorrect="off" autocapitalize="off" spellcheck="false" autofocus />
                                        </div>
                                        <div class="mb-3">

                                            <input type="password" class="form-control" id=""
                                                placeholder="Confirm Pin" required name="confirm_pin" autocomplete="off"
                                                autocorrect="off" autocapitalize="off" spellcheck="false" autofocus />
                                        </div>
                                        <div class="mb-2 mt-4">
                                            <button class="btn btn-success w-100" value="submit" name="submit"
                                                type="submit">
                                                Unlock
                                            </button>
                                        </div>
                                    </form>
                                    <!-- end form -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">
                                Not you ? return
                                {{--   <a href="{{ route('') }}" class="fw-semibold text-primary text-decoration-underline">
                                    Login
                                </a> --}}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->

        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ @asset('') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ @asset('') }}assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ @asset('') }}assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ @asset('') }}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ @asset('') }}assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ @asset('') }}assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{ @asset('') }}assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ @asset('') }}assets/js/pages/particles.app.js"></script>
</body>


</html>
