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
        <div class="screen-1 screen">
            <div class="screen-bg">
                <img src="assets/images/signup/screen-1/bg.png" alt="">
            </div>
            <div class="screenMain">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="d-flex flex-column justify-content-between">
                                <div class="screenText screen-1Text pt-md-5 mt-md-5 fc-white">
                                    <h4 class="fs-40 fw-700 lh-1-2 mb-30 w-75">With ResourcePad HR, you will be able to:</h4>
                                    <ul class="p-0  list-unstyled sc-1list">
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
                                <div class="screenText screen-1Text-2 pb-md-5 mb-md-5 fc-white">

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
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
                                                <input type="email" data-validate id="email">
                                            </div>
                                            <div class="firstFormSecondPart">
                                                <div class="input__wrap mb-15">
                                                    <label for="name">Full name</label>
                                                    <input type="text" data-validate id="name">
                                                </div>
                                                <div class="input__wrap mb-15">
                                                    <label for="companyName">Company name</label>
                                                    <input type="text" data-validat id="companyName">
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 pe-1">
                                                        <div class="input__wrap mb-15">
                                                            <label for="noOfEmployees">No. of employees</label>
                                                            <input type="text" id="noOfEmployees">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 ps-1">
                                                        <div class="input__wrap mb-15">
                                                            <label for="companyPhone">Company phone</label>
                                                            <input type="text" id="companyPhone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input__wrap mb-15">
                                                    <label for="setPassword">Set password</label>
                                                    <input type="password" id="setPassword">
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
                                                    <input type="password" id="password">
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
    </main>


    <!--==== FOOTER START ====-->
    <?php include('includes/footer-scripts.php') ?>
    <!--==== FOOTER END ====-->
</body>

</html>