<?php

use app\models\mahasiswa_017;
use app\models\Mahasiswa_017Search;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa_44Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-017-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
        $searchModel = new Mahasiswa_017Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => null,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan',
            [
                'attribute' => 'profil_017.foto_profil',
                'value' => function ($model){
                    return $model->profil_017 ? $model->profil_017->foto_profil : '';
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, mahasiswa_017 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>