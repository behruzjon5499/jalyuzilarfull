<?php

use backend\models\ProductFeedback;
use jalyuzilar\helpers\ProductFeedbackHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductFeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Product Feedbacks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-feedback-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
        <div class="body-box">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'product.title_ru',
            'full_name',
            'massage:ntext',
            [
                'attribute' => 'status',
                'filter' => ProductFeedbackHelper::statusList(),
                'value' => function (ProductFeedback $model) {
                    return ProductFeedbackHelper::statusLabel($model->status);
                },
                'format' => 'raw',
            ],
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>
    </div>
</div>
