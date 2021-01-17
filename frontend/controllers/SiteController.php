<?php

namespace frontend\controllers;

use abdualiym\cms\entities\Articles;
use abdualiym\cms\entities\Pages;
use abdualiym\slider\entities\Slides;
use backend\models\Cart;
use backend\models\Categories;
use backend\models\Feedback;
use backend\models\News;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    const GALLERY = 'gallery';
    const GALLERYSLIDER = 'galleryslider';
    const PARTNER = 'partner';
    const MEMBERS = 'members';
    const ABOUTSLIDER = 'galleryslider';
    const COSTUMERS = 'costumers';
    const HOMESLIDER = 'homeslider';
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout= "main1.php";
        return $this->render('index', [
                'categories' => Categories::find()->where(['parent_id' => 0])->all(),
                'partner' => Slides::getBySlug(self::PARTNER),
                'galleries' => Slides::getBySlug(self::GALLERY),
                'costumers' => Slides::getBySlug(self::COSTUMERS),
                'news' => News::find()->all(),
                'homeslider' => Slides::getBySlug(self::HOMESLIDER),
            ]
        );
    }

    public function actionGallery()
    {
        return $this->render('gallery', [
                'galleries' => Slides::getBySlug(self::GALLERY),
                'galleryslider' => Slides::getBySlug(self::GALLERYSLIDER),
            ]
        );
    }

    public function actionAbout()
    {
        $model = new Feedback();
        $about = Pages::find()->one();
        $members = Slides::getBySlug(self::MEMBERS);
        if (Yii::$app->request->post() && $model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Your request has been successfully delivered'));
            return $this->redirect(['site/about']);
        }

        return $this->render('about', [
                'partner' => Slides::getBySlug(self::PARTNER),
                'aboutslider' => Slides::getBySlug(self::ABOUTSLIDER),
                'about' => $about,
                'members' => $members,
                'model' => $model,
            ]
        );
    }



}
