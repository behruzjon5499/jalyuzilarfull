<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property int $id
 * @property string $title
 * @property string $icon
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'icon'], 'required'],
            [['title', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'icon' => Yii::t('app', 'Icon'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSitesAndLinks()
    {
        return $this->hasMany(SiteAndLinks::class, ['link_id' => 'id']);
    }

}
