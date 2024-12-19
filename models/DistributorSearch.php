<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Distributor;

/**
 * DistributorSearch represents the model behind the search form of `app\models\Distributor`.
 */
class DistributorSearch extends Distributor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Distributor', 'Jumlah_Produksi'], 'integer'],
            [['Nama_Distributor', 'Kontak_Distributor', 'Alamat_Distributor'], 'safe'],
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
        $query = Distributor::find();

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
            'ID_Distributor' => $this->ID_Distributor,
            'Jumlah_Produksi' => $this->Jumlah_Produksi,
        ]);

        $query->andFilterWhere(['like', 'Nama_Distributor', $this->Nama_Distributor])
            ->andFilterWhere(['like', 'Kontak_Distributor', $this->Kontak_Distributor])
            ->andFilterWhere(['like', 'Alamat_Distributor', $this->Alamat_Distributor]);

        return $dataProvider;
    }
}
