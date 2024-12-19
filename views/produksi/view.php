<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Produksi $model */

$this->title = $model->Jumlah_Produksi;
$this->params['breadcrumbs'][] = ['label' => 'Produksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produksi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Jumlah_Produksi' => $model->Jumlah_Produksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Jumlah_Produksi' => $model->Jumlah_Produksi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Jumlah_Produksi',
            'ID_Bahan',
        ],
    ]) ?>

</div>
