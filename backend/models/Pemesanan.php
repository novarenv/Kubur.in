<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $id
 * @property int $id_user
 * @property string $nama
 * @property int $nik
 * @property int $id_pot
 * @property int $id_peti
 * @property int $id_status_pemesanan
 * @property int $id_batu_nisan
 * @property int $id_lokasi
 * @property int $id_metode_pemakaman
 * @property int $id_item_tbh
 * @property int $id_metode_bayar
 *
 * @property BatuNisan $batuNisan
 * @property ItemTambahan $itemTambahan
 * @property Lokasi $lokasi
 * @property MetodePemakaman $metodePemakaman
 * @property MetodePembayaran $metodePembayaran
 * @property User $id0
 * @property Peti $peti
 * @property Pot $pot
 * @property StatusPemesanan $statusPemesanan
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'nama', 'nik', 'id_pot', 'id_peti', 'id_status_pemesanan', 'id_batu_nisan', 'id_lokasi', 'id_metode_pemakaman', 'id_item_tbh', 'id_metode_bayar'], 'required'],
            [['id_user', 'nik', 'id_pot', 'id_peti', 'id_status_pemesanan', 'id_batu_nisan', 'id_lokasi', 'id_metode_pemakaman', 'id_item_tbh', 'id_metode_bayar'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['id_metode_bayar'], 'unique'],
            [['id_pot'], 'unique'],
            [['id_peti'], 'unique'],
            [['id_status_pemesanan'], 'unique'],
            [['id_batu_nisan'], 'unique'],
            [['id_lokasi'], 'unique'],
            [['id_metode_pemakaman'], 'unique'],
            [['id_item_tbh'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'nama' => 'Nama',
            'nik' => 'Nik',
            'id_pot' => 'Id Pot',
            'id_peti' => 'Id Peti',
            'id_status_pemesanan' => 'Id Status Pemesanan',
            'id_batu_nisan' => 'Id Batu Nisan',
            'id_lokasi' => 'Id Lokasi',
            'id_metode_pemakaman' => 'Id Metode Pemakaman',
            'id_item_tbh' => 'Id Item Tbh',
            'id_metode_bayar' => 'Id Metode Bayar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatuNisan()
    {
        return $this->hasOne(BatuNisan::className(), ['id' => 'id_batu_nisan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemTambahan()
    {
        return $this->hasOne(ItemTambahan::className(), ['id' => 'id_item_tbh']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLokasi()
    {
        return $this->hasOne(Lokasi::className(), ['id' => 'id_lokasi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodePemakaman()
    {
        return $this->hasOne(MetodePemakaman::className(), ['id' => 'id_metode_pemakaman']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodePembayaran()
    {
        return $this->hasOne(MetodePembayaran::className(), ['id' => 'id_metode_bayar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeti()
    {
        return $this->hasOne(Peti::className(), ['id' => 'id_peti']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPot()
    {
        return $this->hasOne(Pot::className(), ['id' => 'id_pot']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPemesanan()
    {
        return $this->hasOne(StatusPemesanan::className(), ['id' => 'id_status_pemesanan']);
    }
}
