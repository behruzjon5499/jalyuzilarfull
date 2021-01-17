<?php

use backend\models\Orders;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

<!---->
<!--    <p>-->
<!--        --><?//= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
        <div class="body-box">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            [
                'attribute' => 'product_id',
                'value' => function (Orders $model) {
                    return Html::a($model->product->title_ru, ['orders/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],

            'count',
            [
                'attribute' => 'address',
                'value' => function (Orders $model) {
                    return Html::a($model->address, ['orders/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>

    </div>


</div>
