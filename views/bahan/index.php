<?php

use app\models\Bahan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BahanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bahans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bahan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Bahan',
            'Nama_Bahan',
            'Jumlah',
            'Tanggal_Kadaluarsa',
            'ID_Supplier',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Bahan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Bahan' => $model->ID_Bahan]);
                 }
            ],
        ],
    ]); ?>


</div>
