<?php

/* @var $this yii\web\View
 * @var $about Pages
 */
/* @var $aboutslider Feedback */
/* @var $model Feedback */

use abdualiym\cms\entities\Pages;
use abdualiym\language\Language;
use backend\models\Feedback;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

foreach ($aboutslider as $b):
endforeach;

?>

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page" style="background-image: url(<?= $b->getImageFileUrl('photo_0') ?>)">
    <div class="container">
        <h1><?= Language::getAttribute($b, 'title') ?></h1>
        <div class="breadcrumbs-description">
            <?= Language::getAttribute($b, 'content') ?>
        </div>
    </div>
</div>
<!-- Page Breadcrumbs End -->

<!-- Main Body Content Start -->
<main id="body-content">

    <!-- What Makes Us Special Start -->
    <section class="wide-tb-80">
        <div class="container pos-rel">
            <div class="row align-items-center">

                <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <h2 class="mb-4 fw-7">
                        <?= Yii::t('app', 'About') ?> <span
                                class="fw-3 txt-orange"><?= Yii::t('app', 'Jalyuzilar') ?></span>
                    </h2>
                    <p><?= \abdualiym\language\Language::get($about, 'content') ?></p>
                </div>


                <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                    <img src="/images/map-bg-orange.jpg" alt="">
                </div>

            </div>

        </div>
    </section>
    <!-- What Makes Us Special End -->

    <section class="wide-tb-60 p-0 bg-sky-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 wow pulse animated" data-wow-duration="0"
                     data-wow-delay="0.7s">
                    <div class="bg-fixed pos-rel video-popup">
                        <div class="bg-overlay black opacity-50"></div>
                        <div class="zindex-fixed pos-rel">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/yAnESKb2WkM"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Start -->
    <section class="wide-tb-100 mb-spacer-md">
        <div class="container wide-tb-100 pb-0">
            <div class="row d-flex align-items-center">
                <!-- Counter Col Start -->
                <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0s">
                    <div class="counter-style-1 light-bg">
                        <p class="mb-1"><i class="icofont-google-map"></i></p>
                        <span class="counter">15</span>
                        <div>
                            Our Locations
                        </div>
                    </div>
                </div>
                <!-- Counter Col End -->

                <!-- Counter Col Start -->
                <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
                    <div class="counter-style-1 light-bg">
                        <p class="mb-1"><i class="icofont-globe"></i></p>
                        <span class="counter">110</span>
                        <span>+</span>
                        <div>
                            Clients Worldwide
                        </div>
                    </div>
                </div>
                <!-- Counter Col End -->

                <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                <!-- Spacer For Medium -->

                <!-- Counter Col Start -->
                <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.6s">
                    <div class="counter-style-1 light-bg">
                        <p class="mb-1"><i class="icofont-vehicle-delivery-van"></i></p>
                        <span class="counter">240</span>
                        <span>+</span>
                        <div>
                            Owned Vehicles
                        </div>
                    </div>
                </div>
                <!-- Counter Col End -->

                <!-- Counter Col Start -->
                <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.9s">
                    <div class="counter-style-1 light-bg">
                        <p class="mb-1"><i class="icofont-umbrella-alt"></i></p>
                        <span class="counter">2340</span>
                        <div>
                            Tonnes Transported
                        </div>
                    </div>
                </div>
                <!-- Counter Col End -->
            </div>
        </div>
    </section>
    <!-- Counter End -->


    <!-- Our Team Start -->
    <section class="wide-tb-100 pb-0 team-section-bottom pos-rel">
        <div class="container">
            <!-- Heading Main -->
            <div class="col-sm-12">
                <h1 class="heading-main">
                    <span>Face Behind Logzee</span>
                    Our Team
                </h1>
            </div>

            <div class="row pb-4">
                <?php foreach ($members

                as $member): ?>
                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                    <div class="team-section-two">
                        <img src="<?= $member->getImageFileUrl('photo_0') ?>" style="width: 100%; height: 350px;" alt="" class="rounded">
                        <h4 class="h4-md txt-orange"><?= $member->title_0 ?></h4>
                        <h5 class="h5-md txt-ligt-gray"><?= $member->content_0 ?></h5>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <!-- Our Team End -->

    <!-- Free Quote Start -->
    <section class="bg-white wide-tb-100 mb-s>pacer-md">
        <div class="container">
            <!-- Heading Main -->
            <div class="col-sm-12">
                <h1 class="heading-main">
                    <span>Request a </span>
                    Free Quote
                </h1>
            </div>
            <!-- Heading Main -->

            <div class="row">
                <!-- Right Text Start -->
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.2s">
                    <div class="align-self-stretch h-100 align-items-center d-flex bg-with-text">
                        Whether you require distribution or fulfillment, defined freight forwarding, or a complete
                        supply chain solution, we are here for you.
                    </div>
                </div>
                <!-- Right Text Start -->

                <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                <!-- Spacer For Medium -->

                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">

                        <h1 class="heading-main mb-4">
                        <?=Yii::t('app','Feedback')?>
                            <?php
                            if (Yii::$app->session->hasFlash('success')): ?>
                                <div class="alert alert-success">
                                    <?= Yii::$app->session->getFlash('success') ?>
                                </div>
                            <?php endif; ?>
                        </h1>
                        <?php $form = ActiveForm::begin([
                            'id' => 'feedback-form',
                            'options' => ['class' => 'col rounded-field'],
                        ]); ?>
                        <div class="form-row mb-4">

                            <div class="col">
                                <?= $form->field($model, 'full_name')->textInput(['maxlength' => 255, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Full Name')])->label(false); ?>
                            </div>
                            <div class="col">
                                <?= $form->field($model, 'phone_email')->textInput(['maxlength' => 255, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Phone or Email')])->label(false); ?>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <?= $form->field($model, 'massage')->textarea(['rows' => 8, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Message')])->label(false); ?>
                            </div>
                        </div>
                        <div class="form-row text-center">
                            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'form-btn mx-auto btn-theme bg-orange']) ?>
                        </div>
                        <?php ActiveForm::end() ?>
                    </div>
            </div>
        </div>
    </section
            <!-- Free Quote End -->

            <!-- Clients Start -->
    <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
        <div class="bg-overlay blue opacity-80"></div>
        <div class="container">
            <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span> <?= Yii::t('app', 'SOME OF OUR') ?> </span>
                        <?= Yii::t('app', 'Partners') ?>
                    </h1>
                </div>
                <!-- Heading Main -->

                <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                    <div class="owl-carousel owl-theme" id="home-clients">

                        <?php foreach ($partner as $p): ?>
                            <div class="item">
                                <img src="<?= $p->getImageFileUrl('photo_0') ?>" style="width: 150px; height: 150px;" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients End -->

</main>


<div class="video-box">
    <!-- close-video -->
    <div class="close-video">
        <i class="fa fa-times"></i>
    </div><!-- /close-video -->
</div><!-- /video-box -->

<div class="overlay overlay-hugeinc">
    <form class="form-inline mt-2 mt-md-0">
        <div class="form-inner">
            <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                <div class="col-md-1">
                    <i class="icofont-search"></i>
                </div>
                <div class="col-10">
                    <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-md-1">
                    <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                </div>
            </div>
        </div>
    </form>
</div>