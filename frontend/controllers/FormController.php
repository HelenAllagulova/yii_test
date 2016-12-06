<?php

namespace frontend\controllers;

use Yii;
use common\models\Forms;
use common\models\Fields;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class FormController extends Controller
{
    public function actionIndex($id=null)
    {
        $id = $id;
        $forms = new Forms();
        $form_name = $forms->findOne($id);

        $model_field = new Fields();
        $fields = $model_field->findAll([
            'forms_id' => $id
        ]);
        
        return $this->render('index', [
            'form_name' => $form_name,
            'fields' => $fields,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Forms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
