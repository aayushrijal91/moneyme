<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <?= renderImg("mcafee.png", "logo") ?>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="hero">
            <div class="container">
                <div class="fs-1 text-center heroHeading">Welcome to LoanOptions!</div>

                <div class="row justify-content-center pt-5">
                    <div class="col-11 col-lg-9 fs-2 line-height-1 letter-spacing-n03 fw-900 text-center">We’re partnered with MONEYME to help find the loan you’re looking for!</div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row about-us h-100">
                <div class="col h-inherit">
                    <div class="row justify-content-end h-100 align-items-center">
                        <div class="col-12 col-lg-10">
                            <div class="fs-3 fw-900 text-italic px-3">LoanOptions.ai</div>
                            <div class="fs-1 text-italic fw-900 line-height-1 letter-spacing-n03">Who are we?</div>
                            <div class="letter-spacing-n02 fs-4 fw-600 pt-4">We are Australia’s first AI-powered loan comparison platform. Using data-driven proprietary technology, we can pre-approve you with the most competitive loans from over 60 banks and lenders personalised to your individual circumstances.</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto"><?= renderImg("about-us.png", "lib", "about-us-img") ?></div>
            </div>
        </div>
    </div>
</header>

<section class="what-happens-now">
    <div class="container">
        <div class="form" id="form">
            <div class="text-center">
                <div><?= renderImg("loanoptions.png", "logo") ?></div>
                <div class="fs-1 fw-900 letter-spacing-n03 py-5 line-height-1">What happens now?</div>
                <div class="fs-3 fw-600 letter-spacing-n02">We’ll give you a call soon or you can select a time that suits you below</div>
            </div>
            <form action="./src/form" method="POST">
                <div class="fs-3 text-center fw-900 text-tertiary pb-4">Request for us to call you back at a more comfortable time</div>
                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                <div class="row gx-3">
                    <div class="col-md-6 col-lg-3">
                        <div class="input-wrapper">
                            <label>Your Name</label>
                            <input class="form-control" type="text" placeholder="Name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="input-wrapper">
                            <label>Contact Number</label>
                            <input class="form-control" type="phone" placeholder="0400 000 000" name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="input-wrapper">
                            <label>Preferred Time</label>
                            <input class="form-control" type="time" name="time" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <button type="submit" class="btn h-100 btn-primary text-white form-control rounded-6 fw-700 fs-5">
                            Request Call Back
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="fs-1 fw-900 letter-spacing-n03 py-5 line-height-1">What happens now?</div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>