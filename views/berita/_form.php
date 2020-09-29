<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

use app\models\Xml;
use app\models\Kategori;

$listXml=ArrayHelper::map(Xml::find()->all(),'id','nama');
$listKategori=ArrayHelper::map(Kategori::find()->all(),'id','label');

/* @var $this yii\web\View */
/* @var $model app\models\Link */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="link-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
          <?= $form->field($model, 'id_sindikasi')->dropDownList($listXml, ['prompt'=>'... Silakan Pilih ...']) ?>
        </div>
        <div class="col-lg-3">
          <?= $form->field($model, 'id_kategori')->dropDownList($listKategori, ['prompt'=>'... Silakan Pilih ...']) ?>
        </div>
        <div class="col-lg-3">
          <label>Tanggal</label>
          <?= DatePicker::widget([
            'name' => 'tanggal',
            'value' => $model->tanggal,
            'options' => ['placeholder' => '... Pilih Tanggal ...'],
            'pluginOptions' => [
              'format' => 'yyyy-mm-dd',
              'todayHighlight' => true
            ]
          ]) ?>
        </div>
    </div>

    <?= $form->field($model, 'judul')->textInput() ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'ringkasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'md5')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
