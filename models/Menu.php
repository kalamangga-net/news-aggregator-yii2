<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id_menu
 * @property string $label
 * @property string $url
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['label', 'url'], 'required'],
            [['label'], 'string', 'max' => 35],
            [['url'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'id_menu' => 'Id Menu',
            'label' => 'Label',
            'url' => 'Url',
        ];
    }
}
