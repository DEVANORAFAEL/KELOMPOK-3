<?php

use app\models\Distributor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\DistributorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Distributors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distributor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Distributor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Distributor',
            'Nama_Distributor',
            'Kontak_Distributor',
            'Alamat_Distributor',
            'Jumlah_Produksi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Distributor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Distributor' => $model->ID_Distributor]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
