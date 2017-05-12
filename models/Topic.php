<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09.05.2017
 * Time: 13:52
 */

namespace app\models;

use yii;
use yii\db\ActiveRecord;

class Topic extends ActiveRecord
{

    public function getTopic($id){
        return Topic::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();
    }

}