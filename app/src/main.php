<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo", "d-none d-md-block") ?>
                        <?= renderImg("logo-mobile.png", "logo", "d-md-none") ?>
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
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="d-md-none letter-spacing-n03 fw-900 text-center fs-5 pb-4">Sorry, we were not able to find a<br> suitable loan option for you just yet...</div>
                        <div class="fs-1 text-center heroHeading d-none d-md-block">Welcome to LoanOptions!<?= renderImg("brushline.png", "lib", "brushline") ?></div>
                        <div class="fs-1 text-center heroHeading d-md-none">But it's not over!<br> We have<br> great news!<?= renderImg("brushline.png", "lib", "brushline") ?></div>
                    </div>
                    <div class="col-11 col-lg-9 fs-2 line-height-1 letter-spacing-n03 fw-900 text-center pt-5 d-none d-md-block">We’re partnered with MONEYME to help find the loan you’re looking for!</div>
                </div>
            </div>
        </div>
        <div class="container">
            <?= renderImg("about-us.png", "lib", "w-100 d-xl-none py-4") ?>
            <div class="row about-us h-100">
                <div class="col h-inherit">
                    <div class="row justify-content-center justify-content-xl-end h-100 align-items-center">
                        <div class="col-12 col-lg-10">
                            <div class="fs-3 fw-900 text-italic px-3">LoanOptions.ai</div>
                            <div class="fs-1 text-italic fw-900 line-height-1 letter-spacing-n03 d-none d-md-block">Who are we?</div>
                            <div class="fs-1 fw-900 line-height-1 letter-spacing-n03 d-md-none">Partnership</div>
                            <div class="letter-spacing-n02 fs-4 fw-600 pt-3 pt-xxl-4 d-none d-md-block">We are Australia’s first AI-powered loan comparison platform. Using data-driven proprietary technology, we can pre-approve you with the most competitive loans from over 60 banks and lenders personalised to your individual circumstances.</div>
                            <div class="letter-spacing-n02 fw-700 text-dark pt-3 d-md-none">Our partner’s AI-powered technology is guaranteed to find you the best suitor for your loan application by searching over 60 lenders!</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto d-none d-xl-block"><?= renderImg("about-us.png", "lib", "about-us-img") ?></div>
            </div>
        </div>
    </div>
</header>

<section class="what-happens-now">
    <div class="container">
        <div class="d-xl-none">
            <div class="fs-1 fw-900 letter-spacing-n03 line-height-1 text-center text-white"><div class="text-secondary">Multi-Award Winning</div> LoanOptions.ai</div>
            <div class="row justify-content-center pt-5 pt-md-6">
                <div class="col-10 col-lg-12 col-xl-9">
                    <div class="row justify-content-between gy-5">
                        <div class="col-md-auto col-lg-6 col-xl-auto">
                            <div class="row gx-0 align-items-center">
                                <div class="col-5 col-md-auto"><?= renderImg("aussie-fintech.png", "logo") ?></div>
                                <div class="col text-white">
                                    <div class="fs-6 opacity-05">Australia’s first AI-powered loan marketplace start-up</div>
                                    <div class="fs-4 fw-700 line-height-1 d-none d-md-block">Turns over $2.5 million</div>
                                </div>
                                <div class="col-12 fs-6 fw-700 line-height-1 d-md-none text-white text-center pt-2">Turns over $2.5 million</div>
                            </div>
                        </div>
                        <div class="col-md-auto col-lg-6 col-xl-auto">
                            <div class="row gx-0 align-items-center">
                                <div class="col-5 col-md-auto"><?= renderImg("aussie-fintech.png", "logo") ?></div>
                                <div class="col text-white">
                                    <div class="fs-6 opacity-05">Australian intelligent comparison marketplace</div>
                                    <div class="fs-4 fw-700 line-height-1 d-none d-md-block">Complex Algorithms, Simple Loans</div>
                                </div>
                                <div class="col-12 fs-6 fw-700 line-height-1 d-md-none text-white text-center pt-2">Complex Algorithms, Simple Loans</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form" id="form">
            <div class="text-center">
                <div><?= renderImg("loanoptions.png", "logo") ?></div>
                <div class="fs-1 fw-900 letter-spacing-n03 py-4 line-height-1 d-md-none">What to expect next...</div>
                <div class="fs-1 fw-900 letter-spacing-n03 py-5 line-height-1 d-none d-md-block">What happens now?</div>
                <div class="fs-3 fw-600 letter-spacing-n02 d-md-none">Our Specialist Team will be in touch with you within the next 24 hours. Don’t miss our call!</div>
                <div class="fs-3 fw-600 letter-spacing-n02 d-none d-md-block">We’ll give you a call soon or you can select a time that suits you below</div>
            </div>
            <form action="./src/form" method="POST">
                <div class="fs-3 text-center fw-900 text-tertiary pb-4">Request for us to call you back at a more comfortable time</div>
                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                <div class="row gx-3 gy-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="input-wrapper">
                            <label>Your Name</label>
                            <input class="form-control" type="text" placeholder="Name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="input-wrapper">
                            <label>Contact Number</label>
                            <input class="form-control" type="phone" placeholder="0400 000 000" name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="input-wrapper">
                            <label>Preferred Time</label>
                            <input class="form-control" type="time" name="time" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <button type="submit" class="btn h-100 btn-primary text-white form-control rounded-6 fw-700 fs-5">
                            Request Call Back
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="py-12 d-none d-xl-block">
            <div class="fs-1 fw-900 letter-spacing-n03 line-height-1 text-center text-white">Multi-Award Winning<br> LoanOptions.ai</div>
            <div class="row justify-content-center pt-6">
                <div class="col-12 col-xl-10 col-xxl-9">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <div class="row gx-0 align-items-center">
                                <div class="col-auto"><?= renderImg("aussie-fintech.png", "logo") ?></div>
                                <div class="col text-white">
                                    <div class="fs-6 opacity-05">Australia’s first AI-powered loan marketplace start-up</div>
                                    <div class="fs-4 fw-700 line-height-1">Turns over $2.5 million</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row gx-0 align-items-center">
                                <div class="col-auto"><?= renderImg("aussie-fintech.png", "logo") ?></div>
                                <div class="col text-white">
                                    <div class="fs-6 opacity-05">Australia’s first AI-powered loan marketplace start-up</div>
                                    <div class="fs-4 fw-700 line-height-1">Turns over $2.5 million</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quick-contact-wrapper">
    <div class="container">
        <div class="row justify-content-center quick-contact h-100">
            <div class="col-auto h-inherit"><?= renderImg("quick-contact.png", "lib", "about-us-img") ?></div>
            <div class="col h-inherit">
                <div class="row align-items-center h-100 mx-2 my-3 mx-md-0 my-xl-0">
                    <div class="col-12 col-xxl-10 quick-contact-content h-inherit">
                        <div class="fs-3 fw-900 text-italic">Want to speak to our team now?</div>
                        <div class="fs-1 text-italic fw-900 line-height-1 letter-spacing-n03">Call Today</div>
                        <div class="letter-spacing-n02 fs-4 fw-600 pt-3 text-dark">We are available 8:30am-5:30pm everyday</div>
                        <div class="pt-4 pt-xxl-5 d-md-inline-block">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-primary py-3 py-md-4 px-md-5 d-block fs-5 fw-700 rounded-6">
                                Call <?= $phone_number ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>