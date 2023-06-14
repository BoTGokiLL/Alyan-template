<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\mahasiswa_017 $model */

$this->title = 'Create Mahasiswa 017';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa 017s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-017-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
