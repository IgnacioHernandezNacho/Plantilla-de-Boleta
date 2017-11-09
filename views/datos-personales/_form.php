<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatosPersonales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-personales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pri_ape')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seg_ape')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'turno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_esc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cct')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
