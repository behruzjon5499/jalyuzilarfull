<?php

/* @var $this yii\web\View
 * @var $about Pages
 */
/* @var $productslider Slides */

/* @var $products Products */

use abdualiym\cms\entities\Pages;
use abdualiym\language\Language;
use abdualiym\slider\entities\Slides;
use backend\models\Products;
use jalyuzilar\helpers\LanguageHelper;

foreach ($productslider as $b):
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
<section class="bg-white wide-tb-100">
    <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <?= Yii::t('app', 'Our Products') ?>
                </h1>
            </div>
            <!-- Heading Main -->

            <?php foreach ($products as $product): ?>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                    <a href="<?= yii\helpers\Url::to(['products/view', 'id' => $product->id]) ?>">
                        <div class="icon-box-1">
                            <img src="<?= $product->getImageFileUrl('main_photo') ?>"
                                 style="width: 100%; height: 300px;" alt="">
                            <div class="text">
                                <p style="color: white; font-size: 30px;">  <?= \jalyuzilar\helpers\LanguageHelper::get($product,'title')?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>