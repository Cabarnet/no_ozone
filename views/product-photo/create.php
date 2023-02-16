<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductPhoto $model */

$this->title = 'Добавить фото';
// $get=$_GET['get'];
// var_dump($get);
?>
<div class="product-photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
