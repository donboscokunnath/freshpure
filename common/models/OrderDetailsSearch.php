<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrderDetails;

/**
 * OrderDetailsSearch represents the model behind the search form about `common\models\OrderDetails`.
 */
class OrderDetailsSearch extends OrderDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'order_id', 'product_id', 'user_id', 'price', 'quantity', 'status'], 'integer'],
            [['date', 'unit'], 'safe'],
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
        $query = OrderDetails::find();

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
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'user_id' => $this->user_id,
            'date' => $this->date,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'unit', $this->unit]);

        return $dataProvider;
    }
}
