<?php

namespace frontend\controllers;

use abdualiym\slider\entities\Slides;
use backend\models\Feedback;
use Yii;
use yii\web\Controller;

class FeedbackController extends Controller
{
    const CONTACTSLIDER = 'contactslider';

    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Creates a new Feedback model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Feedback();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Your request has been successfully delivered'));
            return $this->redirect(['../feedback/create', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'contactslider' =>  Slides::getBySlug(self::CONTACTSLIDER),
        ]);
    }

}
