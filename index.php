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
    <link rel="stylesheet" href="assets/css/login.css">
    <!--==== HEADER STYLES END ====-->
    
    <title>Login | <?php echo $siteName; ?></title>
</head>

<body>

    <!--==== HEADER START ====-->
    <?php include('includes/header.php') ?>
    <!--==== HEADER END ====-->
    <div id="fullpage">
        <div class="introWrapper section">
            <div id="introMain" class=" d-flex align-items-center justify-content-center">
                <div class="introLoader ">
                    <img alt="Reload Page" width="207" height="225px" src="assets/images/logos/logo.png">
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

        <main id="main" class="section">
            <!-- ==== FORM START ==== -->
            <div class="formContainer">
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-end">
                        <div class="col-lg-6 text-right">
                            <!-- <button id="change" class="btn bg-blue-700 fc-white">Change Screen</button> -->
                        </div>
                        <div class="col-lg-6 col-md-12">
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
                                        <button class="btn btn-blue btn-lg fc-white bg-pink-700 prevDef loadingFormButton hide">Loading</button>
                                        <button class="btn btn-blue btn-lg gap-2 fc-white bg-purple-700 prevDef doneFormButton hide"><i class="ri-checkbox-circle-line fs-22 fw-400"></i>Login</button>
                                    </div>
                                </form>
                                <div class="form-seperator user-select-none d-flex justify-content-center align-items-center gap-10 my-3 fs-14 fw-500 fc-neutral-700">
                                    <span class="line"></span>
                                    or
                                    <span class="line"></span>
                                </div>
                                <div class="otherLoginButtons mb-20">
                                    <button class="fs-14 btn-lg fw-500 mb-15">
                                        <img alt="Reload Page" height="26px" width="26px" src="assets/images/icons/google.png">
                                        Sign in with google
                                    </button>
                                    <button class="fs-14 fw-500 btn-lg">
                                        <img alt="Reload Page" height="26px" width="26px" src="assets/images/icons/apple.png">
                                        Sign in with Apple ID
                                    </button>
                                </div>
                                <p class="fs-12 fw-400 text-center">Need to create an account? <a href="signup.php" class="text-decoration-none fc-blue-300 fw-600">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== FORM END ==== -->

            <!-- ==== SCREEN 1 START ==== -->
            <div class="screen-1  active screenBasic">
                <div class="screenWrapper">
                    <!-- ROTATING CICLES -->
                    <div class="circle_container">
                        <canvas id="rotatingCircles"></canvas>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 customHide">
                                <div class="screen-1-text ">
                                    <h3 class="screenHeading fs-45 mb-15 fc-white fw-800 lh-1-3">
                                        Stay Informed with <br>
                                        the Latest Features
                                    </h3>
                                    <p class="screenSubHeading fs-24 fw-500 mb-15 fc-white">It's crucial to streamline HR processes, <br> enhance productivity.</p>
                                </div>
                                <div class="screen-1-img position-relative img__wrap">
                                    <div class="mainImg pl-2">
                                        <img alt="Reload Page" class="img-fluid img-responsive " src="assets/images/screen-1/main.png" height="605" width="474">
                                    </div>
                                    <div class="secondImg position-absolute img-middle-left">
                                        <img alt="Reload Page" src="assets/images/screen-1/img-left.png" height="270" width="80">
                                    </div>
                                    <div class="thirdImage position-absolute img-bottom-left">
                                        <img alt="Reload Page" src="assets/images/screen-1/img-b-left.png" height="128" width="227">
                                    </div>
                                    <div class="fourthImage position-absolute img-bottom-right">
                                        <img alt="Reload Page" src="assets/images/screen-1/img-r-b.png" height="106" width="116">
                                    </div>
                                    <div class="fifthImage position-absolute img-middle-right">
                                        <img alt="Reload Page" src="assets/images/screen-1/img-right.png" height="106" width="116">
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
                    <img alt="Reload Page" src="assets/images/screen-2/top-right.png" width="119" height="133" class="position-absolute   top-right">
                    <img alt="Reload Page" src="assets/images/screen-2/middle-prop.png" width="42" height="45" class="position-absolute  middle-prop-right">
                    <img alt="Reload Page" src="assets/images/screen-2/middle-prop.png" width="42" height="45" class="position-absolute  middle-prop-left">
                    <img alt="Reload Page" src="assets/images/screen-2/bottom-left.png" width="178" height="42" class="position-absolute  bottom-left">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 customHide ">
                                <div class="screen-2-text">
                                    <h3 class="screenHeading fs-45 mb-15 fc-white fw-800 lh-1-3">
                                        Unlocking the <br>
                                        Benefits of HRMS
                                    </h3>
                                    <p class="screenSubHeading fs-24 fw-500 mb-50 fc-white">It's crucial to streamline HR processes, <br> enhance productivity.</p>
                                </div>
                                <div class="pl-4 cardsContainer">
                                    <div class="screen-2-cards  card-pink">
                                        <div class="cards-back"></div>
                                        <div class="cards-front pt-4">
                                            <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                                Hr Portal</h5>
                                            <img alt="Reload Page" src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236">
                                        </div>
                                    </div>
                                    <div class="screen-2-cards card-light-blue">
                                        <div class="cards-back"></div>
                                        <div class="cards-front pt-4">
                                            <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                                Hr Portal</h5>
                                            <img alt="Reload Page" src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236">
                                        </div>
                                    </div>
                                    <div class="screen-2-cards card-dark-blue">
                                        <div class="cards-back"></div>
                                        <div class="cards-front pt-4">
                                            <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                                Hr Portal</h5>
                                            <img alt="Reload Page" src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236">
                                        </div>
                                    </div>
                                    <div class="screen-2-cards  card-purple">
                                        <div class="cards-back"></div>
                                        <div class="cards-front pt-4">
                                            <h5 class="fs-40 fw-800 fc-white lh-1-1 mb-25 text-center">Responsive <br>
                                                Hr Portal</h5>
                                            <img alt="Reload Page" src="assets/images/screen-2/card-img.png" class="d-block mx-auto" height="272" width="236">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 position-relative">
                                <img alt="Reload Page" src="assets/images/screen-2/form-top.png " height="30" width="30" class="position-absolute form-top-prop randomMovement">
                                <!-- PROPS -->
                                <img alt="Reload Page" src="assets/images/screen-2/form-prop.png" height="173.34" width="173.34" class="position-absolute form-prop">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== SCREEN 2 END ==== -->
            <!-- MOBILE PROPS -->
            <img alt="Reload Page" src="assets/images/screen-3/phone-left-prop.png" width="331" height="339" class="mobileProps prop position-absolute mobile-left">
            <img alt="Reload Page" src="assets/images/screen-3/phone-rocket-img.png" width="216" height="258" class="mobileProps prop position-absolute mobile-rocket " id="rocketImage2">


            <!-- ==== SCREEN 3 LOADER START ==== -->
            <div class="screen-3 loader-screen screenBasic">
                <div class="screenWrapper position-relative">

                    <!-- MORE PROPS -->
                    <img alt="Reload Page" src="assets/images/screen-3/cloud-behind.png" class="prop position-absolute clouds  customHide behind-cloud" height="363" width="auto">
                    <img alt="Reload Page" src="assets/images/screen-3/forward-cloud.png" class="prop position-absolute clouds  customHide forward-cloud" height="282" width="auto">
                    <img alt="Reload Page" src="assets/images/screen-3/top-middle-prop.png" height="237" width="auto" class="prop customHide position-absolute top-middle-prop">
                    <img alt="Reload Page" src="assets/images/screen-3/star-prop.png" width="46" height="46" class="prop position-absolute customHide star-prop">
                    <img alt="Reload Page" src="assets/images/screen-3/top-right-side.png" class="prop position-absolute top-right" width="224" height="216">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 customHide">
                                <div class="screen-3-text pt-5 ">
                                    <h3 class="screenHeading fs-45 mb-15 fc-white fw-800 lh-1-3">
                                        USweet perks and even sweeter discounts.
                                    </h3>
                                    <p class="screenSubHeading fs-24 fw-500 mb-50 fc-white">Made for remote teams everywhere.</p>
                                </div>
                                <div class="screen-3-img position-relative img__wrap">
                                    <div class="rocketImageContainer pl-2">
                                        <img alt="Reload Page" class="rocketImage" id="rocketImage" src="assets/images/screen-3/rocket-img.png" height="622" width="507">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 position-relative">
                                <!-- Form Prop -->
                                <img alt="Reload Page" src="assets/images/screen-3/form-left-prop.png" height="145" width="145" class="prop customHide form-top-left position-absolute">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== SCREEN 3 LOADER END ==== -->

            <!-- ==== SCREEN 4 ERROR START ==== -->
            <div class="screen-4  error-screen screenBasic">
                <div class="screenWrapper customHide position-relative">
                    <!-- MORE PROPS -->
                    <img alt="Reload Page" src="assets/images/screen-4/top-left-side.png" width="240" height="222" class="prop position-absolute top-left">
                    <img alt="Reload Page" src="assets/images/screen-4/top-right-side.png" width="123" height="148" class="prop position-absolute top-right">
                    <img alt="Reload Page" src="assets/images/screen-4/bottom-right-sidr.png" width="170" height="169" class="prop position-absolute bottom-right">

                    <!-- ROCKET -->
                    <img alt="Reload Page" src="assets/images/screen-4/left-side-rocket.png" width="340" height="442" class="prop position-absolute rocketImage">

                    <!-- ROPE -->
                    <img alt="Reload Page" src="assets/images/screen-4/rope-prop.png" height="504" width="622" class="prop position-absolute rope">

                    <!-- ASTRONAUT -->
                    <img alt="Reload Page" src="assets/images/screen-4/astronaut.png"  width="492" height="280" class="prop position-absolute rocketMan">

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
    </div>

    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->

    <link rel="stylesheet" href="assets/js/login.js">
</body>

</html>