<?php

use app\models\mahasiswa_017;
use app\models\Mahasiswa_017Search;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => null,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_obat',
            'harga',
            'stork_obat',
        ],
    ]);