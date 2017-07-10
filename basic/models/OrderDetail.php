<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $qty
 * @property double $price
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'qty', 'price'], 'required'],
            [['order_id', 'product_id', 'qty'], 'integer'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'qty' => 'Qty',
            'price' => 'Price',
        ];
    }
}
