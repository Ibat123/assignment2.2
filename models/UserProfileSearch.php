<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserProfile;

/**
 * UserProfileSearch represents the model behind the search form of `app\models\UserProfile`.
 */
class UserProfileSearch extends UserProfile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Full_Name', 'Gender', 'Date_of_Birth', 'years_of_experience', 'Industry', 'Location', 'About_Me', 'Profile_Picture', 'Professioal_Title', 'Career_Level', 'Communication_Level', 'Organizational_Level', 'Job_Related_Level', 'Address', 'Phone_Number', 'website', 'E_Mail'], 'safe'],
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
        $query = UserProfile::find();

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
            'Date_of_Birth' => $this->Date_of_Birth,
        ]);

        $query->andFilterWhere(['like', 'Full_Name', $this->Full_Name])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'years_of_experience', $this->years_of_experience])
            ->andFilterWhere(['like', 'Industry', $this->Industry])
            ->andFilterWhere(['like', 'Location', $this->Location])
            ->andFilterWhere(['like', 'About_Me', $this->About_Me])
            ->andFilterWhere(['like', 'Profile_Picture', $this->Profile_Picture])
            ->andFilterWhere(['like', 'Professioal_Title', $this->Professioal_Title])
            ->andFilterWhere(['like', 'Career_Level', $this->Career_Level])
            ->andFilterWhere(['like', 'Communication_Level', $this->Communication_Level])
            ->andFilterWhere(['like', 'Organizational_Level', $this->Organizational_Level])
            ->andFilterWhere(['like', 'Job_Related_Level', $this->Job_Related_Level])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Phone_Number', $this->Phone_Number])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'E_Mail', $this->E_Mail]);

        return $dataProvider;
    }
}
