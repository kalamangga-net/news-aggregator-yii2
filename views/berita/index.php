<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = $judul;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">

    <div class="body-content">

        <div class="row">
          <div class="col-lg-9">
              <h1><?= $judul ?></h1>
              <!-- Masukkan tags berita terkini di sini -->
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
          <div class="col-lg-3">
            <blockquote class="twitter-tweet"><p lang="in" dir="ltr">Selamat Tahun Baru 2021.<br>Mari kembali fokus mengejar sesuatu yang tertunda.<br>Rilis beta, agregasi basis topik.</p>&mdash; Redaksi Kalamangga (@kalamangga_com) <a href="https://twitter.com/kalamangga_com/status/1344969244430123010?ref_src=twsrc%5Etfw">January 1, 2021</a></blockquote>
            <blockquote class="twitter-tweet"><p lang="in" dir="ltr"><a href="https://twitter.com/hashtag/SocialDistance?src=hash&amp;ref_src=twsrc%5Etfw">#SocialDistance</a> membuat <a href="https://twitter.com/hashtag/socialMedia?src=hash&amp;ref_src=twsrc%5Etfw">#socialMedia</a> makin ramai. Memang riskan dengan kondisi psikologi yang masih merasa kondisi perang namun tidak mengenal musuh. Siapakah <a href="https://twitter.com/hashtag/musuh?src=hash&amp;ref_src=twsrc%5Etfw">#musuh</a> kita saat ini? <a href="https://twitter.com/hashtag/covid19?src=hash&amp;ref_src=twsrc%5Etfw">#covid19</a> <a href="https://twitter.com/hashtag/corona?src=hash&amp;ref_src=twsrc%5Etfw">#corona</a> <a href="https://twitter.com/hashtag/virus?src=hash&amp;ref_src=twsrc%5Etfw">#virus</a>, kah?</p>&mdash; Redaksi Kalamangga (@kalamangga_com) <a href="https://twitter.com/kalamangga_com/status/1243739846276833280?ref_src=twsrc%5Etfw">March 28, 2020</a></blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>

    </div>

</div>
