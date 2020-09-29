<?php

namespace app\controllers;
use Yii;
use app\models\Link;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class NewsController extends Controller
{

  public function actionIndex()
  {
    $dataProvider = new ActiveDataProvider([
        'query' => Link::find(),
        'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
    ]);
    return $this->render('index', [
        'dataProvider' => $dataProvider,
        'judul' => 'Berita Terbaru',
    ]);
  }

  public function actionCovid()
  {
    $dataProvider = new ActiveDataProvider([
        'query' => Link::find()->where([ 'id_kategori' => '4']),
        'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
    ]);
    return $this->render('index', [
        'dataProvider' => $dataProvider,
        'judul' => 'Berita Covid-19 Terbaru',
    ]);
  }

  public function actionEkonomi()
  {
    $dataProvider = new ActiveDataProvider([
        'query' => Link::find()->where([ 'id_kategori' => '2']),
        'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
    ]);
    return $this->render('index', [
        'dataProvider' => $dataProvider,
        'judul' => 'Berita Ekonomi Terbaru',
    ]);
  }

  public function actionTeknologi()
  {
    $dataProvider = new ActiveDataProvider([
        'query' => Link::find()->where([ 'id_kategori' => '3']),
        'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
    ]);
    return $this->render('index', [
        'dataProvider' => $dataProvider,
        'judul' => 'Berita Teknologi Terbaru',
    ]);
  }

}
