<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Xml;
use app\models\Kategori;

/* @var $this yii\web\View */
/* @var $model app\models\Link */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="link-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'id_sindikasi',
            [
              'label' => 'Sumber Sindikasi',
              'value' => function ($model) {
                return Xml::findOne($model->id_sindikasi)->nama;
              }
            ],
            //'id_kategori',
            [
              'label' => 'Kategori',
              'value' => function ($model) {
                return Kategori::findOne($model->id_kategori)->label;
              }
            ],
            'judul:ntext',
            'link',
            'tanggal',
            'ringkasan:ntext',
            'md5',
        ],
    ]) ?>

</div>
