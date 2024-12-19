<?php

namespace app\controllers;

use app\models\Bahan;
use app\models\BahanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BahanController implements the CRUD actions for Bahan model.
 */
class BahanController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Bahan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BahanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bahan model.
     * @param int $ID_Bahan Id Bahan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_Bahan)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_Bahan),
        ]);
    }

    /**
     * Creates a new Bahan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bahan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_Bahan' => $model->ID_Bahan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bahan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_Bahan Id Bahan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_Bahan)
    {
        $model = $this->findModel($ID_Bahan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_Bahan' => $model->ID_Bahan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bahan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_Bahan Id Bahan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_Bahan)
    {
        $this->findModel($ID_Bahan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bahan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_Bahan Id Bahan
     * @return Bahan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_Bahan)
    {
        if (($model = Bahan::findOne(['ID_Bahan' => $ID_Bahan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
