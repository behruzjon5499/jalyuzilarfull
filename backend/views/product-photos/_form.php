<?php

use backend\models\ProductPhotos;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ProductPhotos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-photos-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?php
            echo $form->field($model, 'photo')->widget(FileInput::class, [
                'options' => ['accept' => 'image/*'],
                'language' => 'ru',
                'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block',
                    // 'browseIcon' => ' ',
                    'browseLabel' => 'Рисунок',
                    'layoutTemplates' => [
                        'main1' => '<div class="kv-upload-progress hide"></div>{remove}{cancel}{upload}{browse}{preview}',
                    ],
                    'initialPreview' => [
                        Html::img($model->getThumbFileUrl('photo', 's32'), ['class' => 'file-preview-image', 'alt' => '', 'title' => '']),
                    ],
                ],
            ]);
            ?>

        </div>



        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(
                    \backend\models\Products::find()->all(),
                    'id',
                    'title_ru'
                )
            ) ?>
            <?= $form->field($model, 'sort')->textInput() ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>



    <?php ActiveForm::end(); ?>

</div>
