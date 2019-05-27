<?php

namespace app\Models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lokasi;

/**
 * LokasiSearch represents the model behind the search form of `app\models\Lokasi`.
 */
class LokasiSearch extends Lokasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'max_kuburan', 'now_kuburan', 'id_kecamatan'], 'integer'],
            [['nama'], 'safe'],
            [['ukuran'], 'number'],
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
        $query = Lokasi::find();

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
            'ukuran' => $this->ukuran,
            'max_kuburan' => $this->max_kuburan,
            'now_kuburan' => $this->now_kuburan,
            'id_kecamatan' => $this->id_kecamatan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
