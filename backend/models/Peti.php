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
 * @property Pemesanan $id0
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
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::className(), 'targetAttribute' => ['id' => 'id_peti']],
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
    public function getId0()
    {
        return $this->hasOne(Pemesanan::className(), ['id_peti' => 'id']);
    }
}
