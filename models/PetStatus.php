<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pet_status".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Pet[] $pets
 */
class PetStatus extends ActiveRecordBehaviors
{
    const ACTIVE = 1;
    const INACTIVE = 2;
    const IS_PROTECTED = 3;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet_status';
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
    public function getPets()
    {
        return $this->hasMany(Pet::className(), ['pet_status_id' => 'id']);
    }

    public static function getAll() {
        return ArrayHelper::map(self::find()->all(),'id','name');
    }
}
