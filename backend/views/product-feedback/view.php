<?php

use jalyuzilar\helpers\ProductFeedbackHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductFeedback */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Feedbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-feedback-view">

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?php if ($model->isWait()):?>
            <?= Html::a(Yii::t('app', 'Active'), ['active', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php endif; ?>
        <?php if($model->isActive()): ?>
            <?= Html::a(Yii::t('app', 'Wait'), ['wait', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php endif; ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'product.title_ru',
            'full_name',
            'massage:ntext',
            [
                'attribute' => 'status',
                'value' => ProductFeedbackHelper::statusLabel($model->status),
                'format' => 'raw',
            ],
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
