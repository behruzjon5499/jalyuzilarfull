<?php

/* @var $this yii\web\View */
/* @var $model Feedback */
/* @var $contactslider Feedback */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

use abdualiym\language\Language;
use backend\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

foreach($contactslider as $b):
endforeach;

if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"  style="background-image: url(<?=$b->getImageFileUrl('photo_0')?>)">
    <div class="container">
        <h1><?=Language::getAttribute($b,'title')?></h1>
        <div class="breadcrumbs-description">
            <?=Language::getAttribute($b,'content')?>
        </div>
    </div>
</div>

<main id="body-content">

    <section class="wide-tb-80 contact-full-shadow">
        <div class="container">
            <div class="contact-map-bg">
                <img src="/images/map-bg.png" alt="">
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                    <div class="contact-detail-shadow">
                        <h4>Room.uz</h4>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-google-map"></i> <span>Toshkent shaxar Mirzo Ulugbek ziyolilar ko'chasi</span>
                        </div>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-phone"></i> <span>+99890 951 54 99</span>
                        </div>
                        <div class="text-nowrap d-flex align-items-start items">
                            <i class="icofont-email"></i> <a href="#">germany@logzee.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <div class="contact-detail-shadow">
                        <h4>Jalyuzilar.uz</h4>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-google-map"></i> <span>Toshkent shaxar Mirzo Ulugbek ziyolilar ko'chasi</span>
                        </div>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-phone"></i> <span>+99890 951 54 99</span>
                        </div>
                        <div class="text-nowrap d-flex align-items-start items">
                            <i class="icofont-email"></i> <a href="#">spain@logzee.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-tb-100 bg-light-gray pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-8 offset-lg-2 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                    <div class="free-quote-form contact-page">
                        <!-- Heading Main -->
                        <h1 class="heading-main mb-4">
                            Get in touch
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
                    </div>

                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Contact Us From -->

    <!-- Google Map Start -->
    <section class="map-bg">
        <div id="map-holder" class="pos-rel">
            <div id="map_extended">
                <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Tashkent%20Mirzo%20Ulug'bek%20ziyolilar+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />

            </div>
        </div>
    </section>
    <!-- Google Map Start -->
</main>

