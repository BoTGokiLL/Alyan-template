<?php

namespace app\controllers;
use app\models\Obat17;
use yii\data\ActiveDataProvider;

class Obat_017Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => obat17::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
}

}

?>