<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09.05.2017
 * Time: 13:43
 */

namespace app\controllers;

use app\models\Post;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PostController extends Controller
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

    public function actionCreate($id){

        $model = new Post();

        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['topic/view', 'id' => $id]);
        }else{
            return $this->render('create', ['model' => $model, 'parent_id' => $id]);
        }
    }

}