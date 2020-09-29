<?php
/* @var $this yii\web\View */
$this->title = 'Kalamangga.Com - News Aggregator';

use yii\data\ActiveDataProvider;
use yii\grid\GridView;

use app\models\Link;
use app\models\Kategori;
$dataProvider = new ActiveDataProvider([
  'query' => Link::find(),
  'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
 ]);
?>
<div class="site-index">

  <div class="jumbotron">
      <h1>News-Manager</h1>
      <p class="lead">Yii2-powered application.</p>
  </div>

  <div class="body-content">

      <div class="row">
          <div class="col-lg-4">
              <h2><?= Kategori::findOne(4)->label ?></h2>
              <p><?= Kategori::findOne(4)->keterangan ?></p>
              <p><a class="btn btn-default" href="/news/<?= Kategori::findOne(4)->kategori ?>"><?= Kategori::findOne(4)->label ?> &raquo;</a></p>
          </div>
          <div class="col-lg-4">
              <h2><?= Kategori::findOne(2)->label ?></h2>
              <p><?= Kategori::findOne(2)->keterangan ?></p>
              <p><a class="btn btn-default" href="/news/<?= Kategori::findOne(2)->kategori ?>"><?= Kategori::findOne(2)->label ?> &raquo;</a></p>
          </div>
          <div class="col-lg-4">
              <h2><?= Kategori::findOne(3)->label ?></h2>
              <p><?= Kategori::findOne(3)->keterangan ?></p>
              <p><a class="btn btn-default" href="/news/<?= Kategori::findOne(3)->kategori ?>"><?= Kategori::findOne(3)->label ?> &raquo;</a></p>
          </div>
      </div>

  </div>

</div>
