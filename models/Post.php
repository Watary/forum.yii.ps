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

class Post extends ActiveRecord
{
    const STATUS_ACTIVE = 1;

    public static function tableName()
    {
        return 'post';
    }

    public function rules()
    {
        return [
            [['text', 'parent_id'], 'required'],
            [['text'], 'string'],
            [['parent_id'], 'integer'],
        ];
    }

    public function getTopic($id){
        return Post::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();
    }

    public function getPostList($id){
        return Post::find()
            ->where(['parent_id' => $id, 'status' => self::STATUS_ACTIVE])
            ->asArray()
            ->all();
    }

}