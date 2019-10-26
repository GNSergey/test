<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goroda".
 *
 * @property int $ID
 * @property string $name
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
            [['ID', 'name'], 'required'],
            [['ID'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
        ];
    }
}
