<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 14.08.15
 * Time: 15:15
 */

namespace app\components;

use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

class ActiveRecordBehaviors extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'date_create',
                'updatedAtAttribute' => 'date_update',
                'value' => function() {
                    return date('Y-m-d H:i:s');
                },
            ],
        ];
    }

}