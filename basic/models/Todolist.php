<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todolist".
 *
 * @property int $ID
 * @property string $Date
 * @property string|null $Time
 * @property string $Description
 * @property string|null $Place
 * @property int|null $Urgency
 * @property string $Stage
 */
class Todolist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todolist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date', 'Description', 'Stage'], 'required'],
            [['Date', 'Time'], 'safe'],
            [['Description'], 'string'],
            [['Urgency'], 'integer'],
            [['Place'], 'string', 'max' => 50],
            [['Stage'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Date' => 'Date',
            'Time' => 'Time',
            'Description' => 'Description',
            'Place' => 'Place',
            'Urgency' => 'Urgency',
            'Stage' => 'Stage',
        ];
    }
}
