<?php

/* @var $this yii\web\View
 * @var $about Pages
 */
/* @var $categoriesslider Slides */
/* @var $categories Categories */

/* @var $allcategories Categories */

use abdualiym\block\entities\Slides;
use abdualiym\cms\entities\Pages;
use abdualiym\language\Language;
use backend\models\Categories;
use jalyuzilar\helpers\LanguageHelper;

foreach ($categoriesslider as $b):
endforeach;

?>

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
     style="background-image: url(<?= $b->getImageFileUrl('photo_0') ?>)">
    <div class="container">
        <h1><?= Language::getAttribute($b, 'title') ?></h1>
        <div class="breadcrumbs-description">
            <?= Language::getAttribute($b, 'content') ?>
        </div>
    </div>
</div>

<?php if (isset($categories)): { ?>
    <section class="bg-white wide-tb-100">
        <div class="container">
            <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <?= Yii::t('app', 'Our Categories') ?>
                    </h1>
                </div>
                <?php foreach ($categories as $category): ?>
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                        <a href="<?= yii\helpers\Url::to(['categories/index', 'id' => $category->id]) ?>">
                            <div class="icon-box-1">
                                <img src="<?= $category->getImageFileUrl('photo') ?>"
                                     style="width: 100%; height: 300px;" alt="">
                                <div class="text">
                                    <p style="color: white; font-size: 30px;">  <?= LanguageHelper::get($category, 'title') ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php } endif;  ?>
<?php if (!isset($categories)): { ?>
<section class="bg-white wide-tb-100">
    <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <?= Yii::t('app', 'Our Categories') ?>
                </h1>
            </div>
            <?php foreach ($allcategories as $c): ?>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                    <a href="<?= yii\helpers\Url::to(['categories/index', 'id' => $c->id]) ?>">
                        <div class="icon-box-1">
                            <img src="<?= $c->getImageFileUrl('photo') ?>"
                                 style="width: 100%; height: 300px;" alt="">
                            <div class="text">
                                <p style="color: white; font-size: 30px;">  <?= LanguageHelper::get($c, 'title') ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php } endif;  ?>