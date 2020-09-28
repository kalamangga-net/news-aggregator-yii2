<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xml".
 *
 * @property int $id
 * @property string $nama
 * @property string $url
 * @property string $judul
 * @property string $link
 * @property string $img
 * @property int $fetch
 */
class Xml extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xml';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'url', 'judul', 'link', 'img'], 'required'],
            [['fetch'], 'integer'],
            [['nama', 'judul'], 'string', 'max' => 75],
            [['url', 'link', 'img'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'url' => 'Url',
            'judul' => 'Judul',
            'link' => 'Link',
            'img' => 'Img',
            'fetch' => 'Fetch',
        ];
    }
}
