<?php

/* @var $this yii\web\View */
/* @var $model \backend\models\News */

$this->title = Yii::t('app', 'Update News: {name}', [
    'name' => $model->title_ru,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title_ru, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="news-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
