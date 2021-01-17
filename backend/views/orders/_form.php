<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->textInput() ?>

            <?= $form->field($model, 'count')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php
            $model->date = date('d.m.Y H:i', $model->isNewRecord ? time() : $model->date);
            echo '<label class="control-label">Время</label>' . DateTimePicker::widget([
                    'model' => $model,
                    'attribute' => 'date',
                    'name' => 'date',
                    'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
                    'value' => date('d.m.Y H:i'),
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'd.m.yyyy hh:ii'
                    ]
                ]);
            ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        </div>
    </div>




    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
