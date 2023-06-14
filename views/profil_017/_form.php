<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\profil_017 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="profil-017-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mahasiswa')->textInput() ?>

    <?= $form->field($model, 'foto_profil')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
