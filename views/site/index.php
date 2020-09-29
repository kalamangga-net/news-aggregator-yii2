<?php
/* @var $this yii\web\View */
$this->title = 'Kalamangga.Com - News Aggregator';

use yii\data\ActiveDataProvider;
use yii\grid\GridView;

use app\models\Link;
use app\models\Kategori;

$kat1 = Kategori::findOne(4);
$kat2 = Kategori::findOne(5);
$kat3 = Kategori::findOne(3);

$dataProvider = new ActiveDataProvider([
  'query' => Link::find()->limit(10),
  'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
 ]);
?>
<div class="site-index">

  <div class="row">
    <div class="col-lg-9">
      <div class="body-content">
        <div class="row">
          <h1>Berita Teknologi dan Lawan Hoaks Terkini</h1>
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
    <div class="col-lg-3">
      <div class="row">
        <blockquote class="twitter-tweet"><p lang="in" dir="ltr"><a href="https://twitter.com/hashtag/SocialDistance?src=hash&amp;ref_src=twsrc%5Etfw">#SocialDistance</a> membuat <a href="https://twitter.com/hashtag/socialMedia?src=hash&amp;ref_src=twsrc%5Etfw">#socialMedia</a> makin ramai. Memang riskan dengan kondisi psikologi yang masih merasa kondisi perang namun tidak mengenal musuh. Siapakah <a href="https://twitter.com/hashtag/musuh?src=hash&amp;ref_src=twsrc%5Etfw">#musuh</a> kita saat ini? <a href="https://twitter.com/hashtag/covid19?src=hash&amp;ref_src=twsrc%5Etfw">#covid19</a> <a href="https://twitter.com/hashtag/corona?src=hash&amp;ref_src=twsrc%5Etfw">#corona</a> <a href="https://twitter.com/hashtag/virus?src=hash&amp;ref_src=twsrc%5Etfw">#virus</a>, kah?</p>&mdash; Redaksi Kalamangga (@kalamangga_com) <a href="https://twitter.com/kalamangga_com/status/1243739846276833280?ref_src=twsrc%5Etfw">March 28, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="row">
        <h2><?= $kat1->label ?></h2><p><?= $kat1->keterangan ?></p>
        <p><a class="btn btn-default" href="/berita/<?= $kat1->kategori ?>"><?= $kat1->label ?> &raquo;</a></p>
      </div>
      <div class="row">
        <h2><?= $kat2->label ?></h2><p><?= $kat2->keterangan ?></p>
        <p><a class="btn btn-default" href="/berita/<?= $kat2->kategori ?>"><?= $kat2->label ?> &raquo;</a></p>
      </div>
      <div class="row">
        <h2><?= $kat3->label ?></h2><p><?= $kat3->keterangan ?></p>
        <p><a class="btn btn-default" href="/berita/<?= $kat3->kategori ?>"><?= $kat3->label ?> &raquo;</a></p>
      </div>

    </div>
  </div>

</div>
