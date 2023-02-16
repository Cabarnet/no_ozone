<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Product $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Добавить фото', ['add-photo', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute'=>'photo',
                'value'=>'photos/'.$model->photo,
                'format'=>['image', ['width'=>150]],
            ],
            'id_category',
            'id_photo',
            'is_discount',
            'discount',
            'flag',
            'description:ntext',
            'characteristic',
            'way_of_use',
            'link',
            'rating',
            'date_of_creation',
            'date_of_update',
            'author',
            'price',
            'id_company',
        ],
    ]) ?>

</div>
