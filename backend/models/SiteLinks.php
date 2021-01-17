<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "site_links".
 *
 * @property int $id
 * @property int $link_id
 * @property string $url
 *
 * @property Links $link
 */
class SiteLinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link_id', 'url'], 'required'],
            [['link_id'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['link_id'], 'exist', 'skipOnError' => true, 'targetClass' => Links::className(), 'targetAttribute' => ['link_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'link_id' => Yii::t('app', 'Link ID'),
            'url' => Yii::t('app', 'Url'),
        ];
    }

    /**
     * Gets query for [[Link]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLink()
    {
        return $this->hasOne(Links::className(), ['id' => 'link_id']);
    }
}
