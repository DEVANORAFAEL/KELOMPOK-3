<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DistributorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="distributor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID_Distributor') ?>

    <?= $form->field($model, 'Nama_Distributor') ?>

    <?= $form->field($model, 'Kontak_Distributor') ?>

    <?= $form->field($model, 'Alamat_Distributor') ?>

    <?= $form->field($model, 'Jumlah_Produksi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
