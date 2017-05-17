<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09.05.2017
 * Time: 13:43
 */

namespace app\controllers;

use app\models\Topic;
use app\models\Post;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class TopicController extends Controller
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
        return $this->render('index');
    }

    public function actionView($id){
        $Model = new Topic();
        $ModelPost = new Post();

        $data['topic'] = $Model->getTopic($id);
        $data['posts'] = $ModelPost->getPostList($id);

        return $this->render('view', ['data' => $data]);
    }

}