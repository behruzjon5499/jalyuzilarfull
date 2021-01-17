<?php

/* @var $news \abdualiym\cms\entities\Articles */
/* @var $newsslider Slides */
/* @var $topnews \abdualiym\cms\entities\Articles */
/* @var $topnew \abdualiym\cms\entities\Articles */
/* @var $newsviewslider Slides */
use abdualiym\block\entities\Slides;
use abdualiym\language\Language;
use jalyuzilar\helpers\LanguageHelper;

foreach ($newsviewslider as $b):
endforeach;

?>
<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page" style="background-image: url(<?= $b->getImageFileUrl('photo_0') ?>)">
    <div class="container">
        <h1><?= Language::get($b, 'title') ?></h1>

        <div class="breadcrumbs-description">
            <?= Language::get($b, 'content') ?>
        </div>
    </div>
</div>

<main id="body-content">

    <section class="wide-tb-80">
        <div class="container pos-rel">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="h4-md mb-3"><?= LanguageHelper::get($new, 'title') ?></h2>
            </div>
                <div class="col-md-4">
                    <h2><?= Yii::t('app', 'Like this News') ?></h2>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <!-- Blog Items -->
                        <div class="col-md-12">
                            <div class="text-left">
                                <img src="<?= $new->getImageFileUrl('photo') ?>" style="width: 100%; height: 400px;"
                                     alt="" class="rounded mb-4">
                                <div class="meta-box"><h3>  <?= date('F d, Y', $new->date) ?></h3></div>
                                <h4 class="h4-md mb-3"><?= LanguageHelper::get($new, 'title') ?></h4>
                                <p><?= LanguageHelper::get($new, 'description') ?></p>
                                <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($new, 'description'), 150, '...'); ?></p>
                            </div>
                            <div class="w-100 d-none d-sm-block spacer-70"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <aside class="sidebar-spacer row">
                        <?php foreach ($news as $n): ?>
                            <div class="col-sm-12 col-md-12 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                                <div class="blog-warp">
                                    <a href="<?=yii\helpers\Url::to(['news/view','id'=>$n->id])?>">  <img src="<?=$n->getImageFileUrl('photo')?>" alt="" class="rounded"></a>
                                    <div class="meta-box">   <?= date('F d, Y', $n->date) ?></div>
                                    <h4 class="h4-md mb-3"><a href="#">   <?= LanguageHelper::get($n, 'title') ?></a></h4>
                                    <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($n, 'description'), 150, '...'); ?></p>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>