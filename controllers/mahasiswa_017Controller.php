<?php

namespace app\controllers;
use app\models\mahasiswa_017;
use yii\data\ActiveDataProvider;

class Mahasiswa_017Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => mahasiswa_017::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
}

}

?>