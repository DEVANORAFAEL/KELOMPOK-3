<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Customer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Customer')->textInput() ?>

    <?= $form->field($model, 'Nama_Customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kontak_Customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Distributor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
