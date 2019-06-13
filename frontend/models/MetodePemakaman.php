<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "metode_pemakaman".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Pemesanan[] $pemesanans
 */
class MetodePemakaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metode_pemakaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['id_metode_pemakaman' => 'id']);
    }
}
