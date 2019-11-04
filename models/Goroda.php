<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goroda".
 *
 * @property int $ID
 * @property string $Gorod
 */
class Goroda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goroda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Gorod'], 'required'],
            [['Gorod'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Gorod' => 'Gorod',
        ];
    }
}
