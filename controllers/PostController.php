<?php

namespace app\controllers;

use Yii;
use app\models\Post;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\web\UploadedFile;

class PostController extends Controller
{
    public function actionIndex(){
        $posts = Post::find()->select(['id', 'title', 'excerpt']);
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $posts->count(),
            'pageSizeParam' => false,
            'forcePageParam' =>false
        ]);
        $posts = $posts->offset($pagination->offset)
            ->limit($pagination->limit)->all();

        return $this->render('index',compact('posts', 'pagination'));
    }

    public function actionView(){
        $id = Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if(empty($post)){
            throw new \yii\web\HttpException(404, 'Такой страницы нет');
        }
        return $this->render('view', compact('post'));
    }

}
