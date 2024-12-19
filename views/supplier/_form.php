<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Supplier $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Supplier')->textInput() ?>

    <?= $form->field($model, 'Nama_Supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email_Supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kontak')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
