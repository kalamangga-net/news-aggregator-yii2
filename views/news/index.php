<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = $judul;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">

    <div class="body-content">

        <div class="row">
          <div class="col-lg-12">
              <h1><?= $judul ?></h1>
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
