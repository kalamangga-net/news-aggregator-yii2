<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property int $id
 * @property int $id_sindikasi
 * @property string $judul
 * @property string $link
 * @property string $tanggal
 * @property string $ringkasan
 * @property string|null $md5
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sindikasi', 'id_kategori', 'judul', 'link', 'ringkasan', 'tanggal'], 'required'],
            [['id_sindikasi', 'id_kategori'], 'integer'],
            [['judul', 'ringkasan'], 'string'],
            [['tanggal'], 'safe'],
            [['link'], 'string', 'max' => 300],
            [['md5'], 'string', 'max' => 32],
            [['link'], 'unique'],
            [['md5'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_sindikasi' => 'Sindikasi',
            'id_kategori' => 'Kategori',
            'judul' => 'Judul',
            'link' => 'Link',
            'tanggal' => 'Tanggal',
            'ringkasan' => 'Ringkasan',
            'md5' => 'Md5',
        ];
    }
}
