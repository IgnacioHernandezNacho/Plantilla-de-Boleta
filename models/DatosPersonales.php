<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datos_personales".
 *
 * @property string $pri_ape
 * @property string $seg_ape
 * @property string $nom
 * @property string $curp
 * @property string $grup
 * @property string $turno
 * @property string $nom_esc
 * @property string $cct
 */
class DatosPersonales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datos_personales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pri_ape', 'seg_ape', 'nom', 'curp', 'grup', 'turno', 'nom_esc', 'cct'], 'required'],
            [['pri_ape', 'seg_ape'], 'string', 'max' => 24],
            [['nom'], 'string', 'max' => 35],
            [['curp'], 'string', 'max' => 18],
            [['grup', 'cct'], 'string', 'max' => 10],
            [['turno'], 'string', 'max' => 15],
            [['nom_esc'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pri_ape' => 'Pri Ape',
            'seg_ape' => 'Seg Ape',
            'nom' => 'Nom',
            'curp' => 'Curp',
            'grup' => 'Grup',
            'turno' => 'Turno',
            'nom_esc' => 'Nom Esc',
            'cct' => 'Cct',
        ];
    }
}
