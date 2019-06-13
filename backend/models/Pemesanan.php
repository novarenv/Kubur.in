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
 * @property StatusPemesanan $statusPemesanan
 * @property Lokasi $lokasi
 * @property ItemTambahan $itemTbh
 * @property MetodePembayaran $metodeBayar
 * @property User $user
 * @property Peti $peti
 * @property Pot $pot
 * @property BatuNisan $batuNisan
 * @property MetodePemakaman $metodePemakaman
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
            [['id_status_pemesanan'], 'exist', 'skipOnError' => true, 'targetClass' => StatusPemesanan::className(), 'targetAttribute' => ['id_status_pemesanan' => 'id']],
            [['id_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => Lokasi::className(), 'targetAttribute' => ['id_lokasi' => 'id']],
            [['id_item_tbh'], 'exist', 'skipOnError' => true, 'targetClass' => ItemTambahan::className(), 'targetAttribute' => ['id_item_tbh' => 'id']],
            [['id_metode_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => MetodePembayaran::className(), 'targetAttribute' => ['id_metode_bayar' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_peti'], 'exist', 'skipOnError' => true, 'targetClass' => Peti::className(), 'targetAttribute' => ['id_peti' => 'id']],
            [['id_pot'], 'exist', 'skipOnError' => true, 'targetClass' => Pot::className(), 'targetAttribute' => ['id_pot' => 'id']],
            [['id_batu_nisan'], 'exist', 'skipOnError' => true, 'targetClass' => BatuNisan::className(), 'targetAttribute' => ['id_batu_nisan' => 'id']],
            [['id_metode_pemakaman'], 'exist', 'skipOnError' => true, 'targetClass' => MetodePemakaman::className(), 'targetAttribute' => ['id_metode_pemakaman' => 'id']],
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
    public function getStatusPemesanan()
    {
        return $this->hasOne(StatusPemesanan::className(), ['id' => 'id_status_pemesanan']);
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
    public function getItemTbh()
    {
        return $this->hasOne(ItemTambahan::className(), ['id' => 'id_item_tbh']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodeBayar()
    {
        return $this->hasOne(MetodePembayaran::className(), ['id' => 'id_metode_bayar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
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
    public function getBatuNisan()
    {
        return $this->hasOne(BatuNisan::className(), ['id' => 'id_batu_nisan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodePemakaman()
    {
        return $this->hasOne(MetodePemakaman::className(), ['id' => 'id_metode_pemakaman']);
    }
}
