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

    <div id="introMain" class="d-flex align-items-center justify-content-center">
        <div class="introLoader d-none">
            <img src="assets/images/logos/logo.png" alt="">
        </div>

        <div class="introHeadingContainer text-center">
            <h1 class="introHeading fc-white">
                <span>Welcome to</span>
                <span>Our HRMS</span>
                <span class="dot"></span>
            </h1>
            <p class="introSubHeading fs-24 fw-500 fc-white">Your Gateway to Human Resources Management</p>
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

    <main id="main">
        <div class="formContainer">
            <div class=" container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <button id="change" class="btn bg-purple-700 fc-white">Change Screen</button>
                    </div>
                    <div class="col-lg-6">
                        <div class="formMain">
                            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                <div class="formHead">
                                    <h4 class="form-title fc-neutral-700 fs-30 fw-800 text-center lh-1-2 mb-10">Log in</h4>
                                    <p class="form-sub-title fc-neutral-700 fs-12 fw-500 text-center lh-1-2 mb-10">Log in using email address</p>
                                </div>
                                <div class="cus-inputs mb-15">
                                    <input type="email" name="email" id="email">
                                    <label for="email" class="floating-label fs-16 fw-400">Email Address</label>
                                    <span class="inputFocusLine"></span>
                                </div>
                                <div class="cus-inputs mb-15">
                                    <input type="password" name="password" id="password">
                                    <label for="password" class="floating-label fs-16 fw-400">Password</label>
                                    <span class="inputFocusLine"></span>
                                    <div class="passwordAnimation">
                                    </div>
                                    <button class="showPassButton" onclick="showPass(e)">
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
                                <div class="formButtonContainer">
                                    <button class="btn btn-blue btn-lg fc-white bg-blue-700" onclick="(e)=>{e.preventDefault();}">Login</button>
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

        <div class="screen-1 active screenBasic">
            <div class="screenWrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="screen-1-text">
                                <h3 class="fs-45 mb-15 fc-white fw-800 lh-1-3">
                                    Stay Informed with <br>
                                    the Latest Features
                                </h3>
                                <p class="fs-24 fw-500 mb-15 fc-white">It's crucial to streamline HR processes, <br> enhance productivity.</p>
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
        <div class="screen-2  screenBasic">
            <div class="screenWrapper position-relative">
                <!-- MORE PROPS -->
                <img src="assets/images/screen-2/top-right.png" class="position-absolute top-right" alt="">
                <img src="assets/images/screen-2/middle-prop.png" class="position-absolute  middle-prop-right" alt="">
                <img src="assets/images/screen-2/middle-prop.png" class="position-absolute  middle-prop-left" alt="">
                <img src="assets/images/screen-2/bottom-left.png" class="position-absolute      " alt="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="screen-2-text">
                                <h3 class="fs-45 mb-15 fc-white fw-800 lh-1-3">
                                    Unlocking the <br>
                                    Benefits of HRMS
                                </h3>
                                <p class="fs-24 fw-500 mb-50 fc-white">It's crucial to streamline HR processes, <br> enhance productivity.</p>
                            </div>
                            <div class="pl-4">
                                <div class="screen-2-cards active card-pink pt-2 ">
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
        </div>

    </main>


    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->
</body>

</html>