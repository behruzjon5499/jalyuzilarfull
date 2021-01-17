<?php
/* @var $productslider Slides */

/* @var $product Products */

use abdualiym\language\Language;
use abdualiym\slider\entities\Slides;
use backend\models\Products;
use jalyuzilar\helpers\LanguageHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

foreach ($productslider as $b):
endforeach;

?>
    <style>
        body {
            padding-top: 80px;
        }

        .show-cart li {
            display: flex;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-img-top {
            width: 200px;
            height: 200px;
            align-self: center;
        }
    </style>

    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url(<?= $b->getImageFileUrl('photo_0') ?>)">
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

        <!-- What We Offer Start -->
        <section class="wide-tb-80">
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-md-8"><h4>
                            <?= LanguageHelper::get($product, 'title') ?></h4></div>
                    <div class="col-md-4"><h4><?= Yii::t('app', 'Photo of this Product: ') ?></h4></div>
                </div>
                <div class="row align-items-start">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <!-- Blog Items -->
                            <div class="col-md-12">
                                <div class="text-left">
                                    <img src="<?= $product->getImageFileUrl('main_photo') ?>"
                                         style="width: 100%; height: 400px;" alt="" class="rounded mb-4">

                                    <div class="meta-box">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3 style="display: inline-block;"><a
                                                            href="#"><?= Yii::t('app', 'Price: ') ?>   <?= $product->price ?> </a>
                                                </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <?php $form = ActiveForm::begin([
                                                    'id' => 'cart-form',
                                                ]) ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <?= $form->field($model1, 'product_id')->textInput(['maxlength' => 255, 'class' => 'form-control', 'type' => 'hidden', 'value' => $product->id, 'style' => 'widht:10px;', 'heidht:200px !important;', 'display: inline-block;', 'placeholder' => Yii::t('app', 'Full Name')])->label(false); ?>
                                                        <?= $form->field($model1, 'count')->textInput(['maxlength' => 255, 'class' => 'form-control', 'value' => 1, 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Count')])->label(false); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'form-btn mx-auto btn-theme bg-orange','style'=>'margin:10px 0;']) ?>

                                                    </div>
                                                </div>



                                                <?php ActiveForm::end() ?>

                                            </div>
                                        </div>


                                    </div>
                                    <p> <?= LanguageHelper::get($product, 'description') ?></p>
                                </div>

                                <!-- Comments List -->
                                <div class="commnets-reply">
                                    <div class="heading-left-border">
                                        <?= Yii::t('app', 'Comments') ?>
                                    </div>
                                    <?php foreach ($productfeedbacks as $productfeedback): ?>

                                        <div class="media pb-5">
                                            <div class="media-body">
                                                <div class="border-style d-md-flex justify-content-between">
                                                    <h4 class="h4-xs txt-orange"><?= $productfeedback->full_name ?></h4>
                                                    <div class="">    <?= date('F d, Y', $productfeedback->created_at) ?></div>
                                                </div>
                                                <p><?= $productfeedback->massage ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Comments List -->

                                <!-- Reply Comment Form -->
                                <div class="heading-left-border">
                                    Leave a reply
                                </div>
                                <?php $form = ActiveForm::begin([
                                    'id' => 'product-feedback-form',
                                    'options' => ['class' => 'col rounded-field'],
                                ]); ?>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <?= $form->field($model, 'full_name')->textInput(['maxlength' => 255, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Full Name')])->label(false); ?>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <?= $form->field($model, 'product_id')->textInput(['maxlength' => 255, 'class' => 'form-control', 'type' => 'hidden', 'value' => $product->id, 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Full Name')])->label(false); ?>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <?= $form->field($model, 'massage')->textarea(['rows' => 8, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Message')])->label(false); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'form-btn mx-auto btn-theme bg-orange']) ?>
                                </div>
                                <?php ActiveForm::end() ?>
                                <div class="w-100 d-none d-sm-block spacer-70"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <aside class="sidebar-spacer row">
                            <?php foreach ($products as $p): ?>
                                <?php if ($p->category_id == $product->category_id): ?>
                                    <div class="col-sm-12 col-md-12 wow fadeInLeft" data-wow-duration="0"
                                         data-wow-delay="0.1s">
                                        <div class="blog-warp">
                                            <a href="<?= yii\helpers\Url::to(['news/view', 'id' => $p->id]) ?>"> <img
                                                        src="<?= $p->getImageFileUrl('main_photo') ?>" alt=""
                                                        class="rounded"></a>
                                            <div class="meta-box"></div>
                                            <!--                                    <h4 class="h4-md mb-3"><a href="#">   -->
                                            <? //= Language::getAttribute($p, 'title') ?><!--</a></h4>-->
                                            <!--                                    <p>-->
                                            <? //= \yii\helpers\StringHelper::truncate(Language::getAttribute($p, 'content'), 150, '...'); ?><!--</p>-->
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </aside>
                    </div>

                </div>

            </div>
        </section>
    </main>

    <!---->
<?php //$this->registerJs('
//$(".add-plus.product_add_index").click(function (){
//    var input_value = $(this).parent().find("input.card-count");
//    var value = Number.parseInt(input_value.val());
//
//    input_value.val(value + 1);
//    $(this).parent().find(".add-count").text(input_value.val());
//});
//
//$(".add-min.product_add_index").click(function (){
//
//    var input_value = $(this).parent().find("input.card-count");
//    var value = Number.parseInt(input_value.val());
//    value --;
//
//    if (value < 0) value = 0;
//    input_value.val(value);
//    $(this).parent().find(".add-count").text(input_value.val());
//});
//', 3); ?>