<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Distributor $model */

$this->title = 'Update Distributor: ' . $model->ID_Distributor;
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Distributor, 'url' => ['view', 'ID_Distributor' => $model->ID_Distributor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="distributor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
