<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Todolist;

/**
 * TodolistSearch represents the model behind the search form of `app\models\Todolist`.
 */
class TodolistSearch extends Todolist
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Urgency'], 'integer'],
            [['Date', 'Time', 'Description', 'Place', 'Stage'], 'safe'],
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
        $query = Todolist::find();

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
            'ID' => $this->ID,
            'Date' => $this->Date,
            'Time' => $this->Time,
            'Urgency' => $this->Urgency,
        ]);

        $query->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'Stage', $this->Stage]);

        return $dataProvider;
    }
}
