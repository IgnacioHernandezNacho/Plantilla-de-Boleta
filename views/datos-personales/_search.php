<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatosPersonalesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-personales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pri_ape') ?>

    <?= $form->field($model, 'seg_ape') ?>

    <?= $form->field($model, 'nom') ?>

    <?= $form->field($model, 'curp') ?>

    <?= $form->field($model, 'grup') ?>

    <?php // echo $form->field($model, 'turno') ?>

    <?php // echo $form->field($model, 'nom_esc') ?>

    <?php // echo $form->field($model, 'cct') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
