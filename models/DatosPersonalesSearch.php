<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DatosPersonales;

/**
 * DatosPersonalesSearch represents the model behind the search form about `app\models\DatosPersonales`.
 */
class DatosPersonalesSearch extends DatosPersonales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pri_ape', 'seg_ape', 'nom', 'curp', 'grup', 'turno', 'nom_esc', 'cct'], 'safe'],
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
        $query = DatosPersonales::find();

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
        $query->andFilterWhere(['like', 'pri_ape', $this->pri_ape])
            ->andFilterWhere(['like', 'seg_ape', $this->seg_ape])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'curp', $this->curp])
            ->andFilterWhere(['like', 'grup', $this->grup])
            ->andFilterWhere(['like', 'turno', $this->turno])
            ->andFilterWhere(['like', 'nom_esc', $this->nom_esc])
            ->andFilterWhere(['like', 'cct', $this->cct]);

        return $dataProvider;
    }
}
