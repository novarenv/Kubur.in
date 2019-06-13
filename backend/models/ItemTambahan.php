<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_tambahan".
 *
 * @property int $id
 * @property string $nama
 * @property double $harga
 *
 * @property Pemesanan $id0
 */
class ItemTambahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_tambahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'harga'], 'required'],
            [['harga'], 'number'],
            [['nama'], 'string', 'max' => 100],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::className(), 'targetAttribute' => ['id' => 'id_item_tbh']],
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
            'harga' => 'Harga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pemesanan::className(), ['id_item_tbh' => 'id']);
    }
}
