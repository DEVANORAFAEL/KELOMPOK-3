<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bahan;

/**
 * BahanSearch represents the model behind the search form of `app\models\Bahan`.
 */
class BahanSearch extends Bahan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Bahan', 'ID_Supplier'], 'integer'],
            [['Nama_Bahan', 'Jumlah', 'Tanggal_Kadaluarsa'], 'safe'],
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
        $query = Bahan::find();

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
            'ID_Bahan' => $this->ID_Bahan,
            'Tanggal_Kadaluarsa' => $this->Tanggal_Kadaluarsa,
            'ID_Supplier' => $this->ID_Supplier,
        ]);

        $query->andFilterWhere(['like', 'Nama_Bahan', $this->Nama_Bahan])
            ->andFilterWhere(['like', 'Jumlah', $this->Jumlah]);

        return $dataProvider;
    }
}
