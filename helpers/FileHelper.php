<?php
namespace app\helpers;

use yii\web\UploadedFile;

class FileHelper {

    /**
     * @param  $model
     *
     * @param string $attribute
     * @param string $dir
     * @param integer $remove
     * @return bool
     */
    public static function saveFile($model, $attribute, $dir, $remove = 0)
    {
        $file = UploadedFile::getInstance($model, $attribute);

        if($remove) {
            @unlink($model->$attribute);
            $model->$attribute = '';
        }
        if (!$file) {
            return false;
        }
        $extension = explode('/', $file->type)[1];

        if ($file) {
            if ($model->$attribute) {
                @unlink($model->$attribute);
            }

            $fileName = $dir . '/' . time() . '_' . rand(10000, 99999) . '.' . $extension;

            $file->saveAs($fileName);
            $model->$attribute = $fileName;
            return true;
        }
        return false;
    }
}