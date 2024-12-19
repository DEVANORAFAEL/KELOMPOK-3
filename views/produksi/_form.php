<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Produksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Jumlah_Produksi')->textInput() ?>

    <?= $form->field($model, 'ID_Bahan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
