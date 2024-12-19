<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Distributor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="distributor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Distributor')->textInput() ?>

    <?= $form->field($model, 'Nama_Distributor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kontak_Distributor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Distributor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jumlah_Produksi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
