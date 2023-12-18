<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
{{--    <link rel="stylesheet" href="./assets/css/style.css" />--}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.scss')}}" />
    @stack('styles')
    <title>MoveDesk</title>
    @yield('page_styles')
</head>
<body>
<div class="content-wrapper">
    @yield('content')
    <i class="fa fa-sign-out"></i>
</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <!-- single -->
            <div class="col-md-3">
                <div class="single p-0">
                    <img
                        src="./assets/images/logo.png"
                        class="img-fluid mb-3"
                        alt="logo"
                    />
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem a Ipsum has been the industry's standard fu
                        dummy text ever since the 1500s.
                    </p>
                </div>
            </div>
            <!-- single -->
            <div class="col-md-3">
                <div class="single">
                    <h2 class="common-subtitle text-white mb-3">Other Services</h2>
                    <ul class="list-unstyled">
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Furniture transport
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Relocations
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Storage
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Packaging service
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Assembly & disassembly
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Moving online store
                        </li>
                    </ul>
                </div>
            </div>
            <!-- single -->
            <div class="col-md-3">
                <div class="single">
                    <h2 class="common-subtitle text-white mb-3">Other Services</h2>
                    <ul class="list-unstyled">
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Furniture transport
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Relocations
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Storage
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Packaging service
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Assembly & disassembly
                        </li>
                        <li>
                            <img
                                src="./assets/images/right.png"
                                class="img-fluid me-1"
                                alt="arrow"
                            />Moving online store
                        </li>
                    </ul>
                </div>
            </div>
            <!-- single -->
            <div class="col-md-3">
                <div class="single text-center">
                    <img src="./assets/images/map.png" class="img-fluid" alt="img" />
                </div>
            </div>
        </div>
    </div>
    <div class="below-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
              <span
              >© 2023 PJH. All Rights Reserved. Design By Sumyea Afnan</span
              >
                </div>
                <div class="col-md-6">
                    <ul class="list-inline text-md-end">
                        <li class="list-inline-item">
                            <a href="#">Terms and conditions </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Privacy and cookies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bs Js -->
@yield('page_scripts')
<!-- Bs Js -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
></script>
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
</body>
</html>

