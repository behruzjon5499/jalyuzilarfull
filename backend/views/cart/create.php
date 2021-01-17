<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cart */

$this->title = Yii::t('app', 'Create Cart');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Carts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
