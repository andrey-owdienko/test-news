<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'description')->textInput(['value' => implode(", ", $model->getText()), 'readonly' => true]) ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date("Y-m-d H:i:s")])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
