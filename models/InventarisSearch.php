<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventaris;

/**
 * InventarisSearch represents the model behind the search form about `app\models\Inventaris`.
 */
class InventarisSearch extends Inventaris
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_inventaris', 'id'], 'integer'],
            [['nama_barang', 'kode_barang', 'jenis_barang', 'tahun_pembelian'], 'safe'],
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
        $query = Inventaris::find();

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
            'id_inventaris' => $this->id_inventaris,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'kode_barang', $this->kode_barang])
            ->andFilterWhere(['like', 'jenis_barang', $this->jenis_barang])
            ->andFilterWhere(['like', 'tahun_pembelian', $this->tahun_pembelian]);

        return $dataProvider;
    }
}
