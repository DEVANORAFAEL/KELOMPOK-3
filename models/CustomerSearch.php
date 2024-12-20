<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;

/**
 * CustomerSearch represents the model behind the search form of `app\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Customer', 'ID_Distributor'], 'integer'],
            [['Nama_Customer', 'Alamat_Customer', 'Kontak_Customer'], 'safe'],
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
        $query = Customer::find();

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
            'ID_Customer' => $this->ID_Customer,
            'ID_Distributor' => $this->ID_Distributor,
        ]);

        $query->andFilterWhere(['like', 'Nama_Customer', $this->Nama_Customer])
            ->andFilterWhere(['like', 'Alamat_Customer', $this->Alamat_Customer])
            ->andFilterWhere(['like', 'Kontak_Customer', $this->Kontak_Customer]);

        return $dataProvider;
    }
}
