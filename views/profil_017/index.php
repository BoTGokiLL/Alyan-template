<?php

use app\models\profil_017;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\profil_017Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profil 017s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-017-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profil 017', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_mahasiswa',
            'foto_profil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, profil_017 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
