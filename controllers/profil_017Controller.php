<?php

namespace app\controllers;
use app\models\profil_017;
use yii\data\ActiveDataProvider;

class Profil_017Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => profil_017::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
}

}

?>