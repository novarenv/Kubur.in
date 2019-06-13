<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "metode_pembayaran".
 *
 * @property int $id
 * @property string $nama
 * @property int $range_pembayaran
 *
 * @property Pemesanan $id0
 */
class MetodePembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metode_pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'range_pembayaran'], 'required'],
            [['range_pembayaran'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::className(), 'targetAttribute' => ['id' => 'id_metode_bayar']],
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
            'range_pembayaran' => 'Range Pembayaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pemesanan::className(), ['id_metode_bayar' => 'id']);
    }
}
