<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "batu_nisan".
 *
 * @property int $id
 * @property string $nama
 * @property double $harga
 * @property string $bahan_baku
 *
 * @property Pemesanan[] $pemesanans
 */
class BatuNisan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'batu_nisan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'harga', 'bahan_baku'], 'required'],
            [['harga'], 'number'],
            [['nama', 'bahan_baku'], 'string', 'max' => 100],
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
            'bahan_baku' => 'Bahan Baku',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['id_batu_nisan' => 'id']);
    }
}
