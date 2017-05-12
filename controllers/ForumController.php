<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09.05.2017
 * Time: 13:43
 */

namespace app\controllers;

use app\models\Forum;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ForumController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex(){
        $id = 0;

        $Model = new Forum();
        $data['forum_child'] = $Model->getForumChild($id);

        return $this->render('index', ['data' => $data]);
    }

    public function actionList($id = 0){
        $Model = new Forum();
        $data['forum'] = $Model->getForum($id);
        $data['forum_child'] = $Model->getForumChild($id);

        return $this->render('list', ['data' => $data]);
    }

}