<?php

namespace backend\models;

use himiklab\yii2\recaptcha\ReCaptchaValidator2;
use common\models\User;
use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $full_name
 * @property string $phone_email
 * @property string $massage
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 */
class Feedback extends \yii\db\ActiveRecord
{
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 10;
    public $date;
    public $reCaptcha;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['massage', 'phone_email'], 'required'],
            [['massage'], 'string'],
//            [['reCaptcha'], ReCaptchaValidator2::class,
//                'secret' => '6LdIOdgUAAAAAK5vmi8Y8ZzHw0ZmnmR1gmZqK4nM', // unnecessary if reСaptcha is already configured
//                'uncheckedMessage' => 'Please confirm that you are not a bot.'],
            [['full_name', 'phone_email'], 'string', 'max' => 255],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date'],
                ],
                'value' => function ($event) {
                    return strtotime($this->date);
                },
            ],
            TimeStampBehavior::class,

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'phone_email' => Yii::t('app', 'Phone Email'),
            'massage' => Yii::t('app', 'Massage'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function isWait()
    {
        return $this->status === self::STATUS_WAIT;
    }
    public function isActive()
    {
        return $this->status === self::STATUS_ACTIVE;
    }

}
