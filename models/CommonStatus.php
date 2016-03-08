<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "common_status".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Breed[] $breeds
 * @property Slide[] $slides
 */
class CommonStatus extends \yii\db\ActiveRecord
{
    const ACTIVE = 1;
    const INACTIVE = 2;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreeds()
    {
        return $this->hasMany(Breed::className(), ['common_status_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlides()
    {
        return $this->hasMany(Slide::className(), ['common_status_id' => 'id']);
    }

    public static function getAll() {
        return ArrayHelper::map(self::find()->all(),'id','name');
    }
}
