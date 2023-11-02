<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- META TITLE AND DESCRIPTION -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- META TITLE AND DESCRIPTION -->


    <!--==== HEADER STYLES START ====-->
    <?php include('includes/header-styles.php') ?>
    <!--==== HEADER STYLES END ====-->
    <title>Home | <?php echo $siteName; ?></title>
</head>

<body>

    <!--==== HEADER START ====-->
    <?php include('includes/header.php') ?>
    <!--==== HEADER END ====-->

    <div class="introWrapper ">
        <div id="introMain" class=" d-flex align-items-center justify-content-center">
            <div class="introLoader ">
                <img src="assets/images/logos/logo.png" alt="">
            </div>
            <div class="introHeadingContainer text-center">
                <h1 class="introHeading fc-white">
                    <span class="heading-1 setHeadingTranslate">Welcome to</span>
                    <span class="heading-2 setHeadingTranslate">Our HRMS</span>
                    <span class="dot"></span>
                </h1>
                <p class="introSubHeading setHeadingTranslate fs-24 fw-500 fc-white">Your Gateway to Human Resources Management</p>
            </div>
            <div class="scrollButtonWrapper">
                <div class="introScrollDownButton">
                    <div class="scrollButtonStroke">
                    </div>
                    <div class="scrollButtonDot">
                    </div>
                </div>
                <p class="text-uppercase mt-2 fs-15 fw-500 fc-white">Scroll</p>
            </div>
        </div>
    </div>

    <main id="main">
        <!-- ==== FORM START ==== -->
        <div class="formContainer">
            <div class=" container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 text-right">
                        <button id="change" class="btn bg-blue-700 fc-white">Change Screen</button>
                    </div>
                    <div class="col-lg-6">
                        <div class="formMain">
                            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                <div class="formHead">
                                    <h4 class="form-title fc-neutral-700 fs-30 fw-800 text-center lh-1-2 mb-10">Log in</h4>
                                    <p class="form-sub-title fc-neutral-700 fs-12 fw-500 text-center lh-1-2 mb-10">Log in using email address</p>
                                </div>
                                <div class="cus-inputs mb-15">
                                    <input type="email" data-validate data-email name="email" id="email">
                                    <label for="email" class="floating-label fs-16 fw-400">Email Address</label>
                                    <span class="inputFocusLine"></span>
                                </div>
                                <div class="cus-inputs mb-15">
                                    <input type="password" data-validate name="password" id="password">
                                    <label for="password" class="floating-label fs-16 fw-400">Password</label>
                                    <span class="inputFocusLine"></span>
                                    <div class="passwordAnimation">
                                    </div>
                                    <button class="showPassButton" tabindex="0">
                                        <span class="open"><i class="ri-eye-close-line"></i></span>
                                        <span class="close"><i class="ri-eye-line"></i></span>
                                    </button>
                                </div>
                                <div class="rememberMe mb-20 d-flex align-items-center gap-10">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    </div>
                                    <label for="flexSwitchCheckDefault" class="mb-0 fs-12 fw-500 user-select-none fc-neutral-700">Remember for 30 days</label>
                                </div>
                                <div class="formButtonContainer overflow-hidden">
                                    <button class="btn btn-blue btn-lg fc-white bg-blue-700 mainFormButton" form-submit>Login</button>
                                    <button class="btn btn-blue btn-lg fc-white bg-pink-700 loadingFormButton hide">Loading</button>
                                    <button class="btn btn-blue btn-lg gap-2 fc-white bg-purple-700 doneFormButton hide"><i class="ri-checkbox-circle-line fs-22 fw-400"></i>Login</button>
                                </div>
                            </form>
                            <div class="form-seperator user-select-none d-flex justify-content-center align-items-center gap-10 my-3 fs-14 fw-500 fc-neutral-700">
                                <span class="line"></span>
                                or
                                <span class="line"></span>
                            </div>
                            <div class="otherLoginButtons mb-20">
                                <button class="fs-14 btn-lg fw-500 mb-15">
                                    <img height="26px" width="26px" src="assets/images/icons/google.png">
                                    Sign in with google
                                </button>
                                <button class="fs-14 fw-500 btn-lg">
                                    <img height="26px" width="26px" src="assets/images/icons/apple.png">
                                    Sign in with Apple ID
                                </button>
                            </div>
                            <p class="fs-12 fw-400 text-center">Need to create an account? <a href="" class="text-decoration-none fc-blue-300 fw-600">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== FORM END ==== -->

        <!-- ==== SCREEN 1 START ==== -->
        <div class="screen-1  active screenBasic">
            <div class="screenWrapper">
                <!-- <img src="assets/images/screen-1/circles.png" class="circlesBg" alt="">? -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="screen-1-text">
                                <h3 class="screenHeading fs-45 mb-15 fc-white fw-800 lh-1-3">
                                    Stay Informed with <br>
                                    the Latest Features
                                </h3>
                                <p class="screenSubHeading fs-24 fw-500 mb-15 fc-white">It's crucial to streamline HR processes, <br> enhance productivity.</p>
                            </div>
                            <div class="screen-1-img position-relative img__wrap">
                                <div class="mainImg pl-2">
                                    <img class="img-fluid img-responsive" src="assets/images/screen-1/main.png" height="605" width="474" alt="">
                                </div>
                                <div class="position-absolute img-middle-left">
                                    <img src="assets/images/screen-1/img-left.png" height="270" width="80" alt="">
                                </div>
                                <div class="position-absolute img-bottom-left">
                                    <img src="assets/images/screen-1/img-b-left.png" height="128" width="227" alt="">
                                </div>
                                <div class="position-absolute img-bottom-right">
                                    <img src="assets/images/screen-1/img-r-b.png" height="106" width="116" alt="">
                                </div>
                                <div class="position-absolute img-middle-right">
                                    <img src="assets/images/screen-1/img-right.png" height="106" width="116" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== SCREEN 1 END ==== -->

        <!-- ==== SCREEN 2 START ==== -->
        <div class="screen-2  screenBasic">
            <div class="screenWrapper position-relative">
                <!-- MORE PROPS -->
                <img src="assets/images/screen-2/top-right.png" class="position-absolute top-right" alt="">
                <img src="assets/images/screen-2/middle-prop.png" class="position-absolute  middle-prop-right" alt="">
                <img src="assets/images/screen-2/middle-prop.png" class="position-absolute  middle-prop-left" alt="">
                <img src="assets/images/screen-2/bottom-left.png" class="position-absolute  bottom-left" alt="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="screen-2-text">
                                <h3 class="screenHeading fs-45 mb-15 fc-white fw-800 lh-1-3">
                                    Unlocking the <br>
                                    Benefits of HRMS
                                </h3>
                                <p class="screenSubHeading fs-24 fw-500 mb-50 fc-white">It's crucial to streamline HR processes, <br> enhance productivity.</p>
                            </div>
                            <div class="pl-4">
                                <div class="screen-2-cards  card-pink pt-4 ">
                                    <div class="cards-back"></div>
                                    <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                        Hr Portal</h5>
                                    <img src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236" alt="">
                                </div>
                                <div class="screen-2-cards card-light-blue pt-4 ">
                                    <div class="cards-back"></div>
                                    <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                        Hr Portal</h5>
                                    <img src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236" alt="">
                                </div>
                                <div class="screen-2-cards card-dark-blue pt-4 ">
                                    <div class="cards-back"></div>
                                    <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                        Hr Portal</h5>
                                    <img src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236" alt="">
                                </div>
                                <div class="screen-2-cards active card-purple pt-4 ">
                                    <div class="cards-back"></div>
                                    <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                        Hr Portal</h5>
                                    <img src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 position-relative">
                            <!-- PROPS -->
                            <img src="assets/images/screen-2/form-prop.png" height="173.34" width="173.34" class="position-absolute form-prop" alt="">
                            <img src="assets/images/screen-2/form-top.png" height="30" width="30" class="position-absolute form-top-prop" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== SCREEN 2 END ==== -->

        <!-- ==== SCREEN 3 LOADER START ==== -->
        <div class="screen-3 loader-screen screenBasic">
            <div class="screenWrapper position-relative">
                <!-- MORE PROPS -->
                <img src="assets/images/screen-3/cloud-behind.png" class="prop position-absolute clouds behind-cloud" height="363" width="auto" alt="">
                <img src="assets/images/screen-3/forward-cloud.png" class="prop position-absolute clouds forward-cloud" height="282" width="auto" alt="">
                <img src="assets/images/screen-3/top-middle-prop.png" height="237" width="auto" alt="" class="prop position-absolute top-middle-prop">
                <img src="assets/images/screen-3/star-prop.png" alt="" class="prop position-absolute star-prop">
                <img src="assets/images/screen-3/top-right-side.png" alt="" class="prop position-absolute top-right" width="224" height="216">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="screen-3-text pt-5">
                                <h3 class="screenHeading fs-45 mb-15 fc-white fw-800 lh-1-3">
                                    USweet perks and even sweeter discounts.
                                </h3>
                                <p class="screenSubHeading fs-24 fw-500 mb-50 fc-white">Made for remote teams everywhere.</p>
                            </div>
                            <div class="screen-3-img position-relative img__wrap">
                                <div class="rocketImageContainer pl-2">
                                    <img class="rocketImage" id="rocketImage" src="assets/images/screen-3/rocket-img.png" height="622" width="507" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 position-relative">
                            <!-- Form Prop -->
                            <img src="assets/images/screen-3/form-left-prop.png" height="145" width="145" alt="" class="prop form-top-left position-absolute">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== SCREEN 3 LOADER END ==== -->

        <!-- ==== SCREEN 4 ERROR START ==== -->
        <div class="screen-4  error-screen screenBasic">
            <div class="screenWrapper position-relative">
                <!-- MORE PROPS -->
                <img src="assets/images/screen-4/top-left-side.png" class="prop position-absolute top-left" alt="">
                <img src="assets/images/screen-4/top-right-side.png" class="prop position-absolute top-right" alt="">
                <img src="assets/images/screen-4/bottom-right-sidr.png" class="prop position-absolute bottom-right" alt="">

                <!-- ROCKET -->
                <img src="assets/images/screen-4/left-side-rocket.png" class="prop position-absolute rocketImage" alt="">

                <!-- ROPE -->
                <img src="assets/images/screen-4/rope-prop.png" class="prop position-absolute rope" alt="">

                <!-- ASTRONAUT -->
                <img src="assets/images/screen-4/astronaut.png" class="prop position-absolute rocketMan" alt="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="screen-4-text error-text pt-5">
                                <h3 class="screenHeading text-center fc-white fw-900 ">
                                    Error
                                </h3>
                                <p class="screenSubHeading fs-30 fw-500 text-center fc-white">Try Again!</p>
                            </div>

                        </div>
                        <div class="col-lg-6 col-sm-12 position-relative">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== SCREEN 4 ERROR END ==== -->

    </main>


    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->
</body>

</html>