<?php

namespace app\models;

use Yii;
use app\helpers\FileHelper;

/**
 * This is the model class for table "slide".
 *
 * @property integer $id
 * @property string $source_url
 * @property string $alt
 * @property integer $common_status_id
 *
 * @property CommonStatus $commonStatus
 */
class Slide extends \yii\db\ActiveRecord
{
    /** @var integer $removeImage */
    public $removeImage;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slide';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['common_status_id'], 'required'],
            [['common_status_id', 'removeImage'], 'integer'],
            [['alt'], 'string', 'max' => 255]
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
            'common_status_id' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonStatus()
    {
        return $this->hasOne(CommonStatus::className(), ['id' => 'common_status_id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            FileHelper::saveFile($this, 'source_url', 'images/slide', $this->removeImage);

            return true;
        }
        return false;
    }

    public function beforeDelete() {
        if (parent::beforeDelete()) {
            if ($this->source_url) {
                @unlink($this->source_url);
            }
            return true;
        } else return false;
    }
}
