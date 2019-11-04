<?php

namespace app\controllers;

use models\Goroda;

class GorodaController extends \yii\web\Controller
{
    public function actionAdminka()
    {
        $GorodaList = Goroda :: find()->all();
        return $this->render('adminka',[
           'gorodaList' => $gorodaList,     
        ]);
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
