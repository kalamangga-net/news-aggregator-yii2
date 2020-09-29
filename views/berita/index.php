<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Xml;
use app\models\Kategori;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Link', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_sindikasi',
            [
              'label' => 'Sumber',
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
            //'link',
            'tanggal',
            //'ringkasan:ntext',
            //'md5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
