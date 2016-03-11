<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use app\helpers\FileHelper;
use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "pet".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_create
 * @property string $date_update
 * @property integer $brood_id
 * @property integer $pet_status_id
 *
 * @property Brood $brood
 * @property PetStatus $petStatus
 * @property PetImage[] $petImages
 */
class Pet extends ActiveRecordBehaviors
{
    /** @var integer $breed_id */
    public $breed_id;

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
            [['name', 'brood_id', 'pet_status_id', 'breed_id'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['brood_id', 'pet_status_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
                $extension = explode('/', $file->type)[1];
                $fileName = 'images/pets/' . time() . '_' . rand(10000, 99999) . '.' . $extension;
                $file->saveAs($fileName);
                $petImage = new PetImage();
                $petImage->source_url = $fileName;
                $petImage->pet_id = $this->id;
                if(!$petImage->save()) {
                    echo '<pre>'; var_dump($petImage->getErrors()); die();
                }
            }

            return true;
        }
        return false;
    }
}
