<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pet;

/**
 * PetSearch represents the model behind the search form about `app\models\Pet`.
 */
class PetSearch extends Pet
{
    var $breed_id;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'brood_id', 'pet_status_id', 'gender', 'is_our_pet'], 'integer'],
            [['name', 'date_create', 'date_update', 'description', 'titles', 'color', 'mother_name', 'mother_link', 'father_name', 'father_link', 'size', 'breed_id'], 'safe'],
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
        $query = Pet::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('brood', true, "INNER JOIN");
        $query->andFilterWhere([
            'id' => $this->id,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
            'gender' => $this->gender,
            'is_our_pet' => $this->is_our_pet,
            'size' => $this->size,
            'brood_id' => $this->brood_id,
            'breed_id' => $this->breed_id,
            'pet_status_id' => $this->pet_status_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);
        $query->andFilterWhere(['like', 'description', $this->description]);
        $query->andFilterWhere(['like', 'titles', $this->titles]);
        $query->andFilterWhere(['like', 'color', $this->color]);
        $query->andFilterWhere(['like', 'mother_name', $this->father_name]);
        $query->andFilterWhere(['like', 'mother_link', $this->father_link]);
        $query->andFilterWhere(['like', 'father_name', $this->father_name]);
        $query->andFilterWhere(['like', 'father_link', $this->father_link]);

        return $dataProvider;
    }
}
