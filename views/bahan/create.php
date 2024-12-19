<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bahan $model */

$this->title = 'Create Bahan';
$this->params['breadcrumbs'][] = ['label' => 'Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
