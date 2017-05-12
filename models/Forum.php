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

class Forum extends ActiveRecord
{

    const FORUM_VIEW = 1;

    public function getForum($id){
        return Forum::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();
    }

    public function getForumChild($id){
        return Forum::find()
            ->where(['parent_id' => $id, 'view' => self::FORUM_VIEW])
            ->asArray()
            ->all();
    }

}