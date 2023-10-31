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
        <div class="formContainer container">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="formMain">
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <div class="formHead">
                                <h4 class="form-title fc-neutral-700 fs-30 fw-800 text-center lh-1-2 mb-10">Log in</h4>
                                <p class="form-sub-title fc-neutral-700 fs-12 fw-500 text-center lh-1-2 mb-10">Log in using email address</p>
                            </div>

                            <div class="cus-inputs mb-15">
                                <label for="email" class="floating-label fs-16 fw-400">Email Address</label>
                                <input type="email" name="email" id="email">
                                <span class="inputFocusLine"></span>
                            </div>

                            <div class="cus-inputs mb-15">
                                <label for="password" class="floating-label fs-16 fw-400">Password</label>
                                <input type="password" name="password" id="password">

                                <div class="showPassButton">
                                    <span class="close"><i class="ri-eye-close-line"></i></span>
                                    <span class="open"><i class="ri-eye-line"></i></span>
                                </div>
                                <span class="inputFocusLine"></span>
                            </div>

                            <div class="rememberMe mb-20 d-flex gap-15">
                                <p class="fs-12 fw-500 fc-neutral-700">Remember for 30 days</p>
                            </div>

                            <div class="formButtonContainer">
                                <button class="btn btn-blue btn-lg">Login</button>
                            </div>
                        </form>
                        <div class="form-seperator my-3 fs-14 fw-500 fc-neutral-700">
                            <span class="line"></span>
                            or
                            <span class="line"></span>
                        </div>

                        <div class="otherLoginButtons mb-20">
                            <button class="fs-14 fw-500 mb-15">
                                <img height="26px" width="26px" src="assets/images/icons/google.png">
                                Sign in with google
                            </button>
                            <button class="fs-14 fw-500 ">
                                <img height="26px" width="26px" src="assets/images/icons/apple.png">
                                Sign in with Apple ID
                            </button>
                        </div>

                        <p class="fs-12 fw-400">Need to create an account? <a href="" class="fc-blue-300 fw-600">Sign Up</a></p>
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