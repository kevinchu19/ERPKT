<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Customer;
use \yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'customer_id')->dropDownList(ArrayHelper::map(Customer::find()->all(),'id','name'))->label("Cliente") ?>

    <?= $form->field($model, 'type')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'time')->widget(DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'MM-dd-yyyy',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
