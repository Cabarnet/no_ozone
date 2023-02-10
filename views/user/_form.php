<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_role')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\AuthAssignment::find()->all(),'user_id', 'item_name')) ?>

    <?= $form->field($model, 'id_city')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\City::find()->all(),'id', 'city')) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>