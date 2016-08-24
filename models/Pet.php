<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use app\helpers\FileHelper;
use Yii;
use yii\web\UploadedFile;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "pet".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_create
 * @property string $date_update
 * @property integer $brood_id
 * @property integer $pet_status_id
 * @property string $description
 * @property string $titles
 * @property integer $gender
 * @property integer $size
 * @property integer $mother_id
 * @property integer $is_our_pet
 * @property string $color
 * @property string $father_name
 * @property string $father_link
 *
 * @property Brood $brood
 * @property PetStatus $petStatus
 * @property PetImage[] $petImages
 */
class Pet extends ActiveRecordBehaviors
{
    const IS_OUR_PET = 1;
    const NOT_IS_OUR_PET = 0;
    /** @var integer $breed_id */
    public $breed_id;
    /** @var integer $mother_id */
    public $mother_id;

    /**
     * @var UploadedFile[] $imageFile
     */
    public $imageFiles;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'brood_id', 'pet_status_id', 'breed_id', 'size'], 'required'],
            [['date_create', 'date_update', 'description', 'titles', 'mother_id'], 'safe'],
            [['brood_id', 'pet_status_id', 'gender', 'mother_id', 'is_our_pet'], 'integer'],
            [['name', 'color', 'father_name', 'father_link'], 'string', 'max' => 255],
            [['imageFiles'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_update' => Yii::t('app', 'Date Update'),
            'brood_id' => Yii::t('app', 'Brood ID'),
            'pet_status_id' => Yii::t('app', 'Pet Status ID'),
            'description' => Yii::t('app', 'Description'),
            'titles' => Yii::t('app', 'Titles'),
            'gender' => Yii::t('app', 'Gender'),
            'size' => Yii::t('app', 'Size'),
            'mother_id' => Yii::t('app', 'Mother ID'),
            'is_our_pet' => Yii::t('app', 'Is our pet'),
            'color' => Yii::t('app', 'Color'),
            'father_name' => Yii::t('app', 'Father name'),
            'father_link' => Yii::t('app', 'Father link'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrood()
    {
        return $this->hasOne(Brood::className(), ['id' => 'brood_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMother()
    {
        return $this->hasOne(Pet::className(), ['id' => 'mother_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetStatus()
    {
        return $this->hasOne(PetStatus::className(), ['id' => 'pet_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetImages()
    {
        return $this->hasMany(PetImage::className(), ['pet_id' => 'id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            $petImage = new PetImage();
            $files = UploadedFile::getInstances($petImage,'source_url');
            foreach($files as $file) {
                $explodedImage = explode('.', $file->name);
                $extension = end($explodedImage);
                $fileName = 'images/pets/' . time() . '_' . rand(10000, 99999) . '.' . $extension;
                $file->saveAs($fileName);
                $petImage = new PetImage();
                $petImage->source_url = $fileName;
                $petImage->pet_id = $this->id;
                $petImage->alt = '';
                if(!$petImage->save()) {
                    echo '<pre>'; var_dump($petImage->getErrors()); die();
                }
            }

            return true;
        }
        return false;
    }

    public static function find()
    {
        return new PetQuery(get_called_class());
    }
}

class PetQuery extends ActiveQuery
{
    public function active()
    {
        return $this->andWhere([
            'pet_status_id' => PetStatus::ACTIVE,
        ]);
    }
}