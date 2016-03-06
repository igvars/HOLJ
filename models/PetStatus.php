<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use Yii;

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
}
