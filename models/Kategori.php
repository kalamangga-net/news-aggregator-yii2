<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property int $id
 * @property string $kategori
 * @property string $label
 * @property string $keterangan
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori', 'label', 'keterangan'], 'required'],
            [['keterangan'], 'string'],
            [['kategori'], 'string', 'max' => 30],
            [['label'], 'string', 'max' => 35],
            [['kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori' => 'Kategori',
            'label' => 'Label',
            'keterangan' => 'Keterangan',
        ];
    }
}
