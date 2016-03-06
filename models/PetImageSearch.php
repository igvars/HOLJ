<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PetImage;

/**
 * PetImageSearch represents the model behind the search form about `app\models\PetImage`.
 */
class PetImageSearch extends PetImage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pet_id'], 'integer'],
            [['source_url', 'alt'], 'safe'],
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
        $query = PetImage::find();

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
            'id' => $this->id,
            'pet_id' => $this->pet_id,
        ]);

        $query->andFilterWhere(['like', 'source_url', $this->source_url])
            ->andFilterWhere(['like', 'alt', $this->alt]);

        return $dataProvider;
    }
}
