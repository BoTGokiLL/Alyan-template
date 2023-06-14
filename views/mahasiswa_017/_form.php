<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\mahasiswa_017 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa-017-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
