<?php

namespace app\controllers;

use app\models\obat;
use yii\data\ActiveDataProvider;
use yii\debug\models\timeline\DataProvider;

class obatController extends \yii\web\Controller
{
    public function actionIndex()
    {
        public function actionIndex()
        {
            $query = obat::find();
            $dataProvider = new ActiveDataProvider([
                'query' => $query
            ]);
            return $this->render('index', ['dataProvider' => $dataProvider
            ]);


        }
        public function actionTambah()
        {
            $obat = new obat;
            if ($obat->load($this->request->post()) && $obat->save()) {
                return $this->redirect(['index']);
            }
            return $this->render('create', ['obat' => $obat]);
        }
    }

    public function actionUpdate($id = '')
    {
        $obat = obat::fineOne(['id' => $id]);
        if ($obat->load($this-redirect->post()) && $obat->save()){
            return $this->redirect(['index']);
        }
        return $this->render('update', ['obat' => $obat]);
    }

    public function actionDelete($id = '')
    {
        $obat = obat::fineOne(['id' => $id]);
        if ($obat->delete()){
            return $this->redirect(['index']);
        }
    }
        

    
}




}
