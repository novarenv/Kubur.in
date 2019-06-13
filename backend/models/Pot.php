<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pot".
 *
 * @property int $id
 * @property int $nama
 * @property double $harga
 * @property string $bahan_baku
 *
 * @property Pemesanan[] $pemesanans
 */
class Pot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'harga', 'bahan_baku'], 'required'],
            [['nama'], 'integer'],
            [['harga'], 'number'],
            [['bahan_baku'], 'string', 'max' => 100],
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
        return $this->hasMany(Pemesanan::className(), ['id_pot' => 'id']);
    }
}
