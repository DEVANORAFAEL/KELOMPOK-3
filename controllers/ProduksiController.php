<?php

namespace app\controllers;

use app\models\Produksi;
use app\models\ProduksiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProduksiController implements the CRUD actions for Produksi model.
 */
class ProduksiController extends Controller
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
     * Lists all Produksi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProduksiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produksi model.
     * @param int $Jumlah_Produksi Jumlah Produksi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Jumlah_Produksi)
    {
        return $this->render('view', [
            'model' => $this->findModel($Jumlah_Produksi),
        ]);
    }

    /**
     * Creates a new Produksi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Produksi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Jumlah_Produksi' => $model->Jumlah_Produksi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Produksi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Jumlah_Produksi Jumlah Produksi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Jumlah_Produksi)
    {
        $model = $this->findModel($Jumlah_Produksi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Jumlah_Produksi' => $model->Jumlah_Produksi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Produksi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Jumlah_Produksi Jumlah Produksi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Jumlah_Produksi)
    {
        $this->findModel($Jumlah_Produksi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Produksi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Jumlah_Produksi Jumlah Produksi
     * @return Produksi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Jumlah_Produksi)
    {
        if (($model = Produksi::findOne(['Jumlah_Produksi' => $Jumlah_Produksi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
