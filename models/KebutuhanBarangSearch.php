<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KebutuhanBarang;

/**
 * KebutuhanBarangSearch represents the model behind the search form about `app\models\KebutuhanBarang`.
 */
class KebutuhanBarangSearch extends KebutuhanBarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_barang', 'id'], 'integer'],
            [['nama_barang', 'jenis_barang', 'spesifikasi_barang', 'tanggal_permintaan_barang'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = KebutuhanBarang::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_barang' => $this->id_barang,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'jenis_barang', $this->jenis_barang])
            ->andFilterWhere(['like', 'spesifikasi_barang', $this->spesifikasi_barang])
            ->andFilterWhere(['like', 'tanggal_permintaan_barang', $this->tanggal_permintaan_barang]);

        return $dataProvider;
    }
}
