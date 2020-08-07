<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Todolist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="todolist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Time')->textInput() ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urgency')->textInput() ?>

    <?= $form->field($model, 'Stage')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
