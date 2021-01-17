<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductFeedback */

$this->title = Yii::t('app', 'Create Product Feedback');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Feedbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-feedback-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
