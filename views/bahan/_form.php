<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bahan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Bahan')->textInput() ?>

    <?= $form->field($model, 'Nama_Bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal_Kadaluarsa')->textInput() ?>

    <?= $form->field($model, 'ID_Supplier')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
