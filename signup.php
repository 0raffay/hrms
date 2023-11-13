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
    <link rel="stylesheet" href="assets/css/signup.css">
    <!--==== HEADER STYLES END ====-->
    <title>Signup | <?php echo $siteName; ?></title>
</head>

<body>

    <main>
        <div class="screen-1 ">
            <div class=" screen">
                <div class="screen-bg">
                    <img src="assets/images/signup/screen-1/bg.png" alt="">
                </div>
                <div class="screenMain signupScreen1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="d-flex h-100 flex-column justify-content-between">
                                    <div class="screenText screen-1Text pt-lg-5   mt-lg-5 fc-white">
                                        <h4 class="fs-40 fw-700 lh-1-2 mb-30 w-75">With ResourcePad HR, you will be able to:</h4>
                                        <ul class="screen1List p-0 list-unstyled sc-1list">
                                            <li class="fs-24 fw-400 lh-1-4 mb-1">
                                                <i class="ri-arrow-right-line"></i>
                                                <span class="ps-2"> Centralize employee data</span>
                                            </li>
                                            <li class="fs-22 fw-400 lh-1-4 mb-1"><i class="ri-arrow-right-line"></i>
                                                <span class="ps-2"> Simplify all HR processes</span>
                                            </li>
                                            <li class="fs-22 fw-400 lh-1-4 mb-1"><i class="ri-arrow-right-line"></i>
                                                <span class="ps-2"> Improve your team daily productivity</span>
                                            </li>
                                            <li class="fs-22 fw-400 lh-1-4 mb-1"><i class="ri-arrow-right-line"></i>
                                                <span class="ps-2"> And much more!</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="screenText onClickShow screen-1Text-2 pb-md-5 mb-md-5 fc-white">
                                        <h4 class="fs-40 fw-700 lh-1-2 mb-30 w-75">With ResourcePad HR, you will be able to:</h4>
                                        <div class="sliderContainer">
                                            <div class="signupFormTestimonialSlider">
                                                <div class="item">
                                                    <div class="signUpTestiCard">
                                                        <p class="mb-20 fs-16 text-center fc-subbed-700 fw-400">HRMS portal is a valuable tool for employees and HR professionals alike. It helps to automate tasks, improve communication, and provide a central hub for all HR-related data.</p>
                                                        <div class="d-flex gap-1 justify-content-center align-items-center starsForRating mb-20">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                        <h6 class="text-center fw-700 fc-neutral-700  fs-16 mb-0">Ahmed Raza</h6>
                                                        <p class="text-center fc-subbed-700 fs-12 fw-400 mb-0">IT Software</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="signUpTestiCard">
                                                        <p class="mb-20 fs-16 text-center fc-subbed-700 fw-400">HRMS portal is a valuable tool for employees and HR professionals alike. It helps to automate tasks, improve communication, and provide a central hub for all HR-related data.</p>
                                                        <div class="d-flex gap-1 justify-content-center align-items-center starsForRating mb-20">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                        <h6 class="text-center fw-700 fc-neutral-700  fs-16 mb-0">Ahmed Raza</h6>
                                                        <p class="text-center fc-subbed-700 fs-12 fw-400 mb-0">IT Software</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="screen-1Form">
                                    <div class="formContainer">
                                        <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
                                            <div class="formHeader">
                                                <div class="img__wrap text-center mb-30">
                                                    <img width="200" height="27" src="assets/images/logos/full-logo.png" alt="">
                                                </div>
                                                <h5 class="fs-40 fc-blue-500 fw-700 lh-1-2 mb-30 text-center">Create Account</h5>
                                                <div class="otherLoginButtons mb-20">
                                                    <button class="fs-14 btn-lg fw-500 mb-0">
                                                        <img alt="Reload Page" height="26px" width="26px" src="assets/images/icons/google.png">
                                                        Sign up with google
                                                    </button>
                                                </div>
                                                <div class="form-seperator user-select-none d-flex justify-content-center align-items-center gap-10 my-3 fs-14 fw-500 fc-neutral-700">
                                                    <span class="line"></span>
                                                    or
                                                    <span class="line"></span>
                                                </div>
                                            </div>
                                            <div class="formBody mb-30">
                                                <div class="input__wrap mb-15">
                                                    <label for="email">Professional email</label>
                                                    <input type="email" data-validate data-email id="email">
                                                </div>
                                                <div class="firstFormSecondPart onClickShow">
                                                    <div class="input__wrap mb-15">
                                                        <label for="name">Full name</label>
                                                        <input type="text" data-validate id="name">
                                                    </div>
                                                    <div class="input__wrap mb-15">
                                                        <label for="companyName">Company name</label>
                                                        <input type="text" data-validate id="companyName">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 pe-1">
                                                            <div class="input__wrap mb-15">
                                                                <label for="noOfEmployees">No. of employees</label>
                                                                <input type="number" inputmode="numeric" data-validate id="noOfEmployees">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 ps-1">
                                                            <div class="input__wrap mb-15">
                                                                <label for="companyPhone">Company phone</label>
                                                                <input type="text" data-validate data-phone id="companyPhone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input__wrap mb-15">
                                                        <label for="setPassword">Set password</label>
                                                        <input type="password" data-validate id="setPassword">
                                                    </div>
                                                    <div class="passwordStrength user-select-none pe-none mb-15">
                                                        <div class="progress">
                                                            <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
                                                        </div>
                                                        <div class="input__wrap mb-0">
                                                            <label for="">Password strength</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input readonly class="form-check-input" type="radio" name="" id="moreThan8">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Use 8 or more characters.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input readonly class="form-check-input" type="radio" name="" id="oneLetter">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Use one lowercase and one uppercase letter.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input readonly class="form-check-input" type="radio" name="" id="oneNumber">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Use atleast one digit.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input__wrap mb-0">
                                                        <label for="password">Set password</label>
                                                    </div>
                                                    <div class="input__wrap  position-relative">
                                                        <input type="password" data-validate id="password">
                                                        <p style="display: none;" class="passError fs-14 position-absolute text-danger">Passwords don't match.</p>
                                                        <button class="showPass fs-14 fw-500 position-absolute top-50 translate-middle-y end-0 pe-3 mb-0">Show password</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn bg-pink-700 btn-lg fc-white" data-sign-up type="submit">Create Account</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen-2  ">
            <div class=" screen py-5 py-xl-5 py-xxl-4">

                <!-- SCREEN 2 FORM -->
                <div class="screen-2Form w-100">
                    <div class="container">
                        <div class="row justify-content-md-end  justify-content-center">
                            <div class="col-12  col-lg-6">
                                <div class="screen-2Form">
                                    <div class="formContainer">
                                        <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
                                            <div class="formHeader">
                                                <div class="img__wrap text-center mb-30">
                                                    <img width="200" height="27" src="assets/images/logos/full-logo.png" alt="">
                                                </div>
                                                <h5 class="fs-40 fc-blue-500 fw-700 lh-1-2 mb-30 text-center">Tell us about you</h5>
                                            </div>
                                            <div class="formBody mb-30">
                                                <div class="input__wrap custom-inputs mb-30">
                                                    <div class="inputIcon">
                                                        <i class="ri-community-line"></i>
                                                    </div>
                                                    <input data-validate-user type="text" placeholder="What's your Company name?">
                                                </div>
                                                <div class="input__wrap custom-inputs mb-30">
                                                    <div class="inputIcon">
                                                        <i class="ri-mail-line"></i>
                                                    </div>
                                                    <input data-validate-user type="text" placeholder="What's Your work email address?">
                                                </div>
                                                <div class="input__wrap custom-inputs mb-30">
                                                    <div class="inputIcon">
                                                        <i class="ri-flag-line"></i>
                                                    </div>
                                                    <input data-validate-user type="text" placeholder="What's your Company name?">
                                                </div>
                                                <div class="input__wrap custom-inputs mb-30">
                                                    <div class="inputIcon">
                                                        <i class="ri-account-circle-line"></i>
                                                    </div>
                                                    <input data-validate-user type="text" placeholder="What's Your work email address?">
                                                </div>
                                                <div class="input__wrap custom-inputs mb-30">
                                                    <div class="inputIcon">
                                                        <i class="ri-building-line"></i>
                                                    </div>
                                                    <input data-validate-user type="text" placeholder="What's your Company industry?">
                                                </div>
                                                <div class="input__wrap custom-inputs mb-30">
                                                    <div class="inputIcon">
                                                        <i class="ri-bar-chart-grouped-fill"></i>
                                                    </div>
                                                    <input data-validate-user type="text" placeholder="How many employees do you have?">
                                                </div>
                                            </div>
                                            <div class="row flex-column-reverse flex-md-row">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <button class="btn   bor-clr-pink d-block w-100 py-3 bg-white fc-neutral-700" type="button" data-go-to-sc1>Back</button>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <button class="btn mb-3 mb-lg-0 bg-pink-700  d-block w-100 fc-white py-3" type="button" data-submit-user-info>Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SCREEN 2 BACKGROUNDS -->
                <!-- BLUE -->
                <div class="switchingScreen switchingScreen1 screenBackgrounds blueScreen ">
                    <img src="assets/images/signup/blue-screen/bottom-left.png" class="prop prop-bottom-left" alt="">
                    <img src="assets/images/signup/blue-screen/form-side.png" class="prop form-side-prop" alt="">
                    <div class="position-relative w-100 h-100">
                        <!-- PROPS -->
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-7">
                                    <div class="screenText fc-white d-none d-lg-block">
                                        <div class="main-img mb-10">
                                            <img src="assets/images/signup/blue-screen/main-img.png" alt="">
                                        </div>
                                        <h4 class="fs-35 fw-700 mb-30 text-center">Used by 15,000 companies
                                            from startups to enterprise</h4>
                                        <div class="img__wrap text-center">
                                            <img src="assets/images/signup/blue-screen/logos.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="switchingScreen switchingScreen2 screenBackgrounds orangeScreen ">
                    <div class="position-relative w-100 h-100">
                        <!-- PROPS -->
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="screenText fc-white d-none d-lg-block pe-4">
                                        <div class="main-img mb-10">
                                            <img src="assets/images/signup/orange-screen/main.png" alt="">
                                        </div>
                                        <h4 class="fs-35 fw-700 mb-15 text-center">Try Resource Pad HRMS</h4>
                                        <p class="fs-18 fw-500 text-center px-md-4">HRMS systems can automate many of your HR tasks, saving you time and money. HRMS systems can help to reduce errors in your HR data, such as payroll and benefits enrollment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="switchingScreen switchingScreen3 screenBackgrounds pinkScreen ">
                    <div class="position-relative w-100 h-100">
                        <!-- PROPS -->
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="screenText fc-white d-none d-lg-block pe-4">
                                        <div class="main-img mb-10">
                                            <img src="assets/images/signup/pink-screen/main.png" alt="">
                                        </div>
                                        <h4 class="fs-35 fw-700 mb-15 text-center">Try Resource Pad HRMS</h4>
                                        <p class="fs-18 fw-500 text-center px-md-4">HRMS systems can automate many of your HR tasks, saving you time and money. HRMS systems can help to reduce errors in your HR data, such as payroll and benefits enrollment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="switchingScreen switchingScreen4 screenBackgrounds greenScreen ">
                    <div class="position-relative w-100 h-100">
                        <!-- PROPS -->
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="screenText fc-white d-none d-lg-block pe-4">
                                        <div class="main-img mb-10">
                                            <img src="assets/images/signup/green-screen/main.png" alt="">
                                        </div>
                                        <h4 class="fs-35 fw-700 mb-15 text-center">Recommendation</h4>
                                        <p class="fs-18 fw-500 text-center px-md-4">HRMS systems can automate many of your HR tasks, saving you time and money. HRMS systems can help to reduce errors in your HR data, such as payroll and benefits enrollment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="switchingScreen switchingScreen5 screenBackgrounds purpleScreen">
                    <div class="position-relative w-100 h-100">
                        <!-- PROPS -->
                        <div class="container h-100 d-flex align-items-center">

                            <div class="col-12 col-sm-12 col-md-6">
                            <div class="screenText fc-white d-none d-lg-block pe-4">
                                    <div class="main-img mb-10 text-center">
                                        <img src="assets/images/signup/purple-screen/main.png" alt="">
                                    </div>
                                    <h4 class="fs-35 fw-700 mb-15 text-center">Secure Your Data</h4>
                                    <p class="fs-18 fw-500 text-center px-md-4">HRMS systems can automate many of your HR tasks, saving you time and money. HRMS systems can help to reduce errors in your HR data, such as payroll and benefits enrollment.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>


    
    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <!--==== FOOTER END ====-->

    <script src="assets/js/signup.js"></script>

</body>

</html>