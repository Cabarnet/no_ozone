
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
    <div class="product_price">
        <h4 class="product_price_content"> 
            Цена:
            <?php
                echo $model->price;
            ?>
            ₽
        </h4>
    <p class="product_discount">Скидка: <br>
        <?php
            echo $model->discount;
        ?>
        %
    </p>
</div>
<p class="product_more_button">
        <?= Html::a('Подробнее', ['show_card'], ['class' => 'btn btn-secondary']) ?>
</p>
</div>






