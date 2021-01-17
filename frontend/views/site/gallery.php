<?php

/**
 * @var $galleryslider Slides
 */

foreach ($galleryslider as $g):
endforeach;

use abdualiym\block\entities\Slides;
use abdualiym\language\Language;

?>
<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page" style="background-image: url(<?= $g->getImageFileUrl('photo_0') ?>)">
    <div class="container">
        <h1><?= Language::getAttribute($g, 'title') ?></h1>

        <div class="breadcrumbs-description">
            <?= Language::getAttribute($g, 'content') ?>
        </div>
    </div>
</div>
<section class="bg-white wide-tb-100">
    <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <span><?= Yii::t('app', 'Our Gallery') ?></span>
                    <?= Yii::t('app', ' Photo Showcase') ?>

                </h1>
            </div>
        <?php foreach ($galleries as $gallery): ?>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                    <div class="icon-box-1">
                        <img src="<?= $gallery->getImageFileUrl('photo_0') ?>"
                             style="width: 100%; height: 300px;" alt="">
                        <div class="text">
                        </div>
                    </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
