<?php

namespace frontend\controllers;

use abdualiym\slider\entities\Slides;
use backend\models\Categories;
use backend\models\Products;
use yii\helpers\VarDumper;
use yii\web\Controller;

class  CategoriesController extends Controller
{
    const CATEGORIESSLIDER = 'categoriesslider';
    const PRODUCTSLIDER = 'productslider';

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex($id)
    {
        $categories = Categories::find()->where(['parent_id' => $id])->all();
        if ($categories != null) {
            return $this->render('index', [
                'allcategories' => Categories::find()->all(),
                    'categories' => Categories::find()->where(['parent_id' => $id])->all(),
                    'categoriesslider' => Slides::getBySlug(self::CATEGORIESSLIDER),
                ]
            );
        } else {
            return $this->render('/products/index', [
                    'products' => Products::find()->where(['category_id' => $id])->all(),
                    'productslider' => Slides::getBySlug(self::PRODUCTSLIDER),
                ]
            );
        }

    }

}
