<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bahan $model */

$this->title = 'Update Bahan: ' . $model->ID_Bahan;
$this->params['breadcrumbs'][] = ['label' => 'Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Bahan, 'url' => ['view', 'ID_Bahan' => $model->ID_Bahan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
