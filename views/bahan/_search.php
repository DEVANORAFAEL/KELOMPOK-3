<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BahanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Bahan') ?>

    <?= $form->field($model, 'Nama_Bahan') ?>

    <?= $form->field($model, 'Jumlah') ?>

    <?= $form->field($model, 'Tanggal_Kadaluarsa') ?>

    <?= $form->field($model, 'ID_Supplier') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
