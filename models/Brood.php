<?php

namespace app\models;

use Yii;
use app\components\ActiveRecordBehaviors;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "brood".
 *
 * @property integer $id
 * @property string $name
 * @property string $date
 * @property string $date_create
 * @property string $date_update
 * @property integer $breed_id
 * @property integer $common_status_id
 *
 * @property Breed $breed
 * @property CommonStatus $commonStatus
 * @property Pet[] $pets
 * @property Pet[] $puppies
 */
class Brood extends ActiveRecordBehaviors
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brood';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'date', 'breed_id', 'common_status_id'], 'required'],
            [['date_create', 'date_update', 'date'], 'safe'],
            [['breed_id', 'common_status_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
            'date' => Yii::t('app', 'Date of birth'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_update' => Yii::t('app', 'Date Update'),
            'breed_id' => Yii::t('app', 'Breed ID'),
            'common_status_id' => Yii::t('app', 'Common Status ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreed()
    {
        return $this->hasOne(Breed::className(), ['id' => 'breed_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonStatus()
    {
        return $this->hasOne(CommonStatus::className(), ['id' => 'common_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPets()
    {
        return $this->hasMany(Pet::className(), ['brood_id' => 'id'])
            ->onCondition('pet.is_our_pet = '. Pet::IS_OUR_PET);;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuppies()
    {
        return $this->hasMany(Pet::className(), ['brood_id' => 'id'])
            ->onCondition('pet.is_our_pet = '. Pet::NOT_IS_OUR_PET);
    }

    public static function getAll($breed_id = 0) {
        return ArrayHelper::map(self::find()->where(['breed_id'=>$breed_id])->all(),'id','name');
    }
}
