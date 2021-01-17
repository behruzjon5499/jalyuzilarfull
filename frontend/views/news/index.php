<?php
/* @var $news \abdualiym\cms\entities\Articles */

use abdualiym\language\Language;
use abdualiym\slider\entities\Slides;
use jalyuzilar\helpers\LanguageHelper;

/* @var $topnews \abdualiym\cms\entities\Articles */
/* @var $topnew \abdualiym\cms\entities\Articles */
/* @var $newsslider Slides */

foreach ($newsslider as $b):
endforeach;
?>
<style>

    /*for news-page*/

    .big.news-block {
        height: 600px;
        margin: 0;
    }

    .news-block {
        height: 290px;
        border-radius: 10px;
    }

    .news-item {
        height: 100%;
        position: relative;
        width: 100%;
    }

    .news-block:first-child {
        margin-bottom: 20px;
    }

    .news-item .img {
        width: 100%;
        height: 100%;
    }

    .news-item .img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .news-item .caption-text, .big .news-item .caption-text {
        position: absolute;
        /*  top: 0; */
        bottom: 0px;
        right: 0;
        left: 0;
        margin: auto;
        padding: 0 20px;
        color: #fff;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6));
    }

    .news-item .caption-text .title-text {
        font-size: 16px;
    }

    .news-item .caption-text .date-text {
        font-size: 18px;
    }

    .big .news-item .caption-text .title-text {
        font-size: 25px;
    }

    .big .news-item .caption-text .date-text {
        font-size: 22px;
    }

    ul.nav-pagination {
        display: inline-block;
        list-style-type: none;
        padding: 10px 0;
    }

    ul.nav-pagination li {
        display: inline-block;
    }

    ul.nav-pagination li a {
        padding: 10px;
    }

    a.news-block-link:hover .grad {
        height: 100%;
        width: 100%;
        position: absolute;
        background: rgb(60, 0, 0, 0.5);
    }

    span.color {
        padding: 5px 10px;
        font-size: 14px;
        border-radius: 5px;
        position: absolute;
        margin-top: -40px;
    }

    span.color.green {
        background-color: #05af05;
    }

    span.color.orange {
        background-color: #f1860d;
    }

    span.color.red {
        background-color: #f1280d;
    }

    span.color.yellow {
        background-color: #f1ce02;
    }

    span.color.blue {
        background-color: #2453ea;
    }


    @media (max-width: 768px) {
        .big.news-block {
            height: 400px;
        }

        .big .news-item .caption-text .title-text {
            font-size: 20px;
        }

        .big .news-item .caption-text .date-text {
            font-size: 18px;
        }
    }
</style>

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page" style="background-image: url(<?= $b->getImageFileUrl('photo_0') ?>)">
    <div class="container">
        <h1><?= Language::get($b, 'title') ?></h1>
        <div class="breadcrumbs-description">
            <?= Language::get($b, 'content') ?>
        </div>
    </div>
</div>

<div class="container">
<section class="ftco-section testimony-section tour" id="testimonial">
    <div class="ff">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-4 heading-section ftco-animate">
                <h2 class="mb-4"><?= Yii::t('app', 'Latest News') ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <?php foreach ($topnew as $t): ?>
                    <div class="big news-block">
                        <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $t->id]) ?>" class="news-block-link">
                            <div class="news-item">
                                <div class="grad"></div>
                                <div class="img">
                                    <img src="<?= $t->getImageFileUrl('photo') ?>" alt="">
                                </div>
                                <div class="caption-text">
                                    <div class="title-text">
                                        <?= \jalyuzilar\helpers\LanguageHelper::get($t, 'title') ?>
                                    </div>
                                    <div class="date-text">
                                        <i class="fa fa-clock"></i>
                                        <?= date('F d, Y', $t->date) ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12">
                <?php foreach ($topnews as $tt): ?>
                    <div class="news-block">

                        <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $tt->id]) ?>" class="news-block-link">
                            <div class="news-item">
                                <div class="grad"></div>
                                <div class="img">
                                    <img src="<?= $tt->getImageFileUrl('photo') ?>" alt="">
                                </div>
                                <div class="caption-text">
                                    <div class="title-text">
                                        <?= LanguageHelper::get($tt, 'title') ?>
                                    </div>
                                    <div class="date-text">
                                        <i class="fa fa-clock"></i>
                                        <?= date('F d, Y', $tt->date) ?>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <?php foreach ($news as $n): ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="news-block">

                        <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $n->id]) ?>" class="news-block-link">
                            <div class="news-item">
                                <div class="grad"></div>
                                <div class="img">
                                    <img src="<?= $n->getImageFileUrl('photo') ?>" alt="">
                                </div>
                                <div class="caption-text">
                                    <div class="title-text">
                                        <?= LanguageHelper::get($n, 'title') ?>
                                    </div>
                                    <div class="date-text">
                                        <i class="fa fa-clock"></i>
                                        <?= date('F d, Y', $n->date) ?>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</div>
<!-- Start Contact Section -->