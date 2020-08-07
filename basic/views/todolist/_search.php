<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TodolistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="todolist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Time') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Place') ?>

    <?php // echo $form->field($model, 'Urgency') ?>

    <?php // echo $form->field($model, 'Stage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
