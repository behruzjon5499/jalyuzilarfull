<?php

namespace frontend\controllers;

use abdualiym\slider\entities\Slides;
use abdualiym\cms\entities\Articles;
use backend\models\News;
use yii\web\Controller;

class  NewsController extends Controller
{
    const NEWSSLIDER = 'newsslider';
    const NEWSVIEWSLIDER = 'newsviewslider';
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $news = News::find()->all();
        $topnews = News::find()->orderBy(['date' =>SORT_DESC])->limit(2)->all();
        $topnew = News::find()->orderBy(['date' =>SORT_DESC])->limit(1)->all();
        return $this->render('index', [
                'news' => $news,
                'topnews' => $topnews,
                'topnew' => $topnew,
                'newsslider' => Slides::getBySlug(self::NEWSSLIDER),
            ]
        );
    }

    /**
     * Creates a new Feedback model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param $id
     * @return mixed
     */


    public function actionView($id)
    {
        $new = News::find()->where(['id' => $id])->one();
        return $this->render('view', [
                'new' => $new,
                'news' => News::find()->all(),
                'newsviewslider' => Slides::getBySlug(self::NEWSVIEWSLIDER),
            ]
        );
    }

}
