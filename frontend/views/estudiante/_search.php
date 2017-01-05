<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EstudianteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estudiante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['create'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Cedula') ?>

    <?= $form->field($model, 'Nombres') ?>

    <?= $form->field($model, 'Apellidos') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
