<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\profil_017 $model */

$this->title = 'Create Profil 017';
$this->params['breadcrumbs'][] = ['label' => 'Profil 017s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-017-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
