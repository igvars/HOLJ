<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use Yii;

/**
 * This is the model class for table "pet_image".
 *
 * @property integer $id
 * @property string $source_url
 * @property string $alt
 * @property integer $pet_id
 *
 * @property Pet $pet
 */
class PetImage extends ActiveRecordBehaviors
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['source_url', 'alt', 'pet_id'], 'required'],
            [['pet_id'], 'integer'],
            [['source_url', 'alt'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'source_url' => Yii::t('app', 'Source Url'),
            'alt' => Yii::t('app', 'Alt'),
            'pet_id' => Yii::t('app', 'Pet ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPet()
    {
        return $this->hasOne(Pet::className(), ['id' => 'pet_id']);
    }
}
