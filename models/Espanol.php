<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "espanol".
 *
 * @property integer $pri_bime
 * @property integer $seg_bime
 * @property integer $ter_bime
 * @property integer $cua_bime
 * @property integer $qui_bime
 * @property integer $prom_final
 */
class Espanol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'espanol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pri_bime', 'seg_bime', 'ter_bime', 'cua_bime', 'qui_bime', 'prom_final'], 'required'],
            [['pri_bime', 'seg_bime', 'ter_bime', 'cua_bime', 'qui_bime', 'prom_final'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pri_bime' => 'Pri Bime',
            'seg_bime' => 'Seg Bime',
            'ter_bime' => 'Ter Bime',
            'cua_bime' => 'Cua Bime',
            'qui_bime' => 'Qui Bime',
            'prom_final' => 'Prom Final',
        ];
    }
}
