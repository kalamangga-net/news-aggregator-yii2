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

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2><?= Kategori::findOne(1)->label ?></h2>
                <p><?= Kategori::findOne(1)->keterangan ?></p>
                <p><a class="btn btn-default" href="/news/<?= Kategori::findOne(1)->kategori ?>"><?= Kategori::findOne(1)->label ?> &raquo;</a></p>
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

        <div class="row">
          <div class="col-lg-12">
              <h2>Feed terkini</h2>
              <!-- Masukkan tags berita terini di sini -->
              <!-- Pilihan adalah php atau js -->
              <!-- Lebih prefer js, silakan pelajari -->
              <?php
              foreach ($dataProvider->models as $model) {
              ?>
              <div class="col-lg-11">
                <?= "<h4><a href='{$model->link}'>{$model->judul}</a></h4>"; ?>
                <?= "<p>{$model->tanggal}</p>"; ?>
                <?= "{$model->ringkasan}"; ?>
              </div>
              <?php
              };
              ?>
          </div>
        </div>
    </div>

</div>