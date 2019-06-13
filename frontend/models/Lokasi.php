<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lokasi".
 *
 * @property int $id
 * @property string $nama
 * @property double $ukuran
 * @property int $max_kuburan
 * @property int $now_kuburan
 * @property int $id_kecamatan
 *
 * @property Pemesanan[] $pemesanans
 */
class Lokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'ukuran', 'max_kuburan', 'now_kuburan', 'id_kecamatan'], 'required'],
            [['ukuran'], 'number'],
            [['max_kuburan', 'now_kuburan', 'id_kecamatan'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['id_kecamatan'], 'required'],
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
            'ukuran' => 'Ukuran',
            'max_kuburan' => 'Max Kuburan',
            'now_kuburan' => 'Now Kuburan',
            'id_kecamatan' => 'Id Kecamatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['id_lokasi' => 'id']);
    }
}
