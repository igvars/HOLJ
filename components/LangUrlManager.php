<?php
namespace app\components;

use yii\web\UrlManager;
use app\models\Lang;

class LangUrlManager extends UrlManager
{
    public function createUrl($params)
    {
        if( isset($params['lang_id']) ){
            //If language indetification exists, than try to find it in db
            //else work with default language
            $lang = Lang::findOne($params['lang_id']);
            if( $lang === null ){
                $lang = Lang::getDefaultLang();
            }
            unset($params['lang_id']);
        } else {
            //If doesn't language parametr exist, than work with current language
            $lang = Lang::getCurrent();
        }

        //Get formed URL (without language indentification prefix)
        $url = parent::createUrl($params);

        //Add prefix to URL - characters indentification of language
        if( $url == '/' ){
            return '/'.$lang->url;
        }else{
            return '/'.$lang->url.$url;
        }
    }
}