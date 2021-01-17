<?php

namespace backend\models;

use backend\models\ProductPhotos;
use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property int $category_id
 * @property int $price
 * @property string $main_photo
 * @property string $description_ru
 * @property string $description_uz
 * @property string $description_en
 * @property int|null $status
 * @property int|null $view
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ProductFeedback[] $productFeedbacks
 * @property ProductPhotos[] $productPhotos
 * @property Categories $category
 */
class Products extends \yii\db\ActiveRecord
{
    public $date;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'price', 'description_ru', 'description_uz', 'description_en'], 'required'],
            [['category_id', 'price', 'status', 'view', 'created_at', 'updated_at'], 'integer'],
            [['description_ru', 'description_uz', 'description_en'], 'string'],
            [['title_ru', 'title_uz', 'title_en'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            ['main_photo', 'image', 'extensions' => 'jpeg, png, jpg, gif', 'skipOnEmpty' => true, 'checkExtensionByMimeType' => true],
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
            [
                'class' => ImageUploadBehavior::class,
                'attribute' => 'main_photo',
                'createThumbsOnRequest' => true,
                'filePath' => '@storageRoot/store/product_main_photo/[[attribute_id]]/[[filename]].[[extension]]',
                'fileUrl' => '@storageHostInfo/store/product_main_photo/[[attribute_id]]/[[filename]].[[extension]]',
                'thumbPath' => '@storageRoot/cache/product_main_photo/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbUrl' => '@storageHostInfo/cache/product_main_photo/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbs' => [
                    's16' => ['width' => 16, 'height' => 16],
                    's32' => ['width' => 32, 'height' => 32],
                    's48' => ['width' => 48, 'height' => 48],
                    's128' => ['width' => 128, 'height' => 128],
                    's160' => ['width' => 160, 'height' => 160],
                ],
            ],
        ];
    }

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->main_photo = UploadedFile::getInstance($this, 'main_photo');
            return true;
        }
        return false;
    }
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'category_id' => Yii::t('app', 'Category ID'),
            'main_photo' => Yii::t('app', 'Main Photo'),
            'price' => Yii::t('app', 'Price'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_en' => Yii::t('app', 'Description En'),
            'status' => Yii::t('app', 'Status'),
            'view' => Yii::t('app', 'View'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }


    /**
     * @return ActiveQuery
     */
    public function getProductPhotos()
    {
        return $this->hasMany(ProductPhotos::class, ['product_id' => 'id']);
    }


    public function getCart()
    {
        return $this->hasMany(Cart::class, ['product_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }


}
