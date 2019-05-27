<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `app\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'nik', 'id_pot', 'id_peti', 'id_status_pemesanan', 'id_batu_nisan', 'id_lokasi', 'id_metode_pemakaman', 'id_item_tbh', 'id_metode_bayar'], 'integer'],
            [['nama'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pemesanan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_user' => $this->id_user,
            'nik' => $this->nik,
            'id_pot' => $this->id_pot,
            'id_peti' => $this->id_peti,
            'id_status_pemesanan' => $this->id_status_pemesanan,
            'id_batu_nisan' => $this->id_batu_nisan,
            'id_lokasi' => $this->id_lokasi,
            'id_metode_pemakaman' => $this->id_metode_pemakaman,
            'id_item_tbh' => $this->id_item_tbh,
            'id_metode_bayar' => $this->id_metode_bayar,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
