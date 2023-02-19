
<?php
/**
 *
 * @var $model Product
 * 
 */
use app\models\Product;
use yii\helpers\Html;
use web\css\site;
?>

<div class="product-card">
<div class="product_photo">
    <?php
    echo \yii\helpers\Html::img('/web/photos/'.$model->photo, ["class"=>"product_photo_img"]);
    ?>
</div>
    <p class="product_name">
        <?php
            echo $model->name;
        ?>
    </p>
    <p class="product_description">
            <?php
            echo $model->description;
            ?>
    </p>
    <div class="product_price">
        <p class="product_price_content">
            Цена:
            <?php
                echo $model->price;
            ?>
            ₽
        </p>
    <p class="product_discount">
        Скидка:
        <?php
            echo $model->discount;
        ?>
        %
    </p>
</div>
<div class="product_buttons">
        <?= Html::a('Подробнее', ['show_card'], ['class' => 'product_more_button']) ?>
        <?= Html::a('Добавить в корзину', ['show_card'], ['class' => 'product_buy_button']) ?>
        <?php if(Yii::$app->user->identity->id_role == 3){?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?php }?>
</div>
</div>






