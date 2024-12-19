<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Produksi $model */

$this->title = 'Update Produksi: ' . $model->Jumlah_Produksi;
$this->params['breadcrumbs'][] = ['label' => 'Produksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Jumlah_Produksi, 'url' => ['view', 'Jumlah_Produksi' => $model->Jumlah_Produksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
