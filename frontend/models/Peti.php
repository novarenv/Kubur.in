<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peti".
 *
 * @property int $id
 * @property int $dimensi
 * @property double $harga
 * @property string $bahan_baku
 *
 * @property Pemesanan[] $pemesanans
 */
class Peti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dimensi', 'harga', 'bahan_baku'], 'required'],
            [['dimensi'], 'integer'],
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
            'dimensi' => 'Dimensi',
            'harga' => 'Harga',
            'bahan_baku' => 'Bahan Baku',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['id_peti' => 'id']);
    }
}
