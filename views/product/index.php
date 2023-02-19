<?php

use app\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var $data \app\models\Product[] */

$this->title = 'Каталог';
?>
<div class="product-index">

    <div class="product-upper">
        <h1 class="mt-4"><?= Html::encode($this->title) ?></h1>

        <p>
            <?php if((Yii::$app->user->identity->id_role == 3) || (Yii::$app->user->identity->id_role == 2)){?>
                <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-primary']) ?>
            <?php } ?>
        </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(Yii::$app->user->identity->id_role == 3){
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],
                'id',
                'name',
                'id_category',
                'id_photo',
                'photo',
                //'is_discount',
                'discount',
                //'flag',
                'description:ntext',
                'characteristic',
                'way_of_use',
                //'link',
                'rating',
                //'date_of_creation',
                //'date_of_update',
                'author',
                'price',
                //'id_company',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                     }
                ],
            ],
        ]);
    }?>

    <?php
    echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_show_item',
    ]);
    ?>
    <script>
        let summary = document.querySelector(".summary");
        summary.remove();
    </script>


</div>
