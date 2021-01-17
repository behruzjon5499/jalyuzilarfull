<?php

namespace jalyuzilar\helpers;

use backend\models\ProductFeedback;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ProductFeedbackHelper
{
    public static function statusList()
    {
        return [
            ProductFeedback::STATUS_WAIT => 'Wait',
            ProductFeedback::STATUS_ACTIVE => 'Active',
        ];
    }

    public static function statusName($status)
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status)
    {
        switch ($status) {
            case ProductFeedback::STATUS_WAIT:
                $class = 'label label-default';
                break;
            case ProductFeedback::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }
}
