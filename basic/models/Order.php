<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $number
 * @property integer $customer_id
 * @property string $type
 * @property string $time
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'customer_id', 'type', 'time'], 'required'],
            [['number', 'customer_id'], 'integer'],
            [['type'], 'string'],
            [['time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'customer_id' => 'Customer ID',
            'type' => 'Type',
            'time' => 'Time',
        ];
    }
}
