
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

<div style="width: 300px; display: flex; flex-direction: column; border: 1px solid #426664;
border-radius: 5px; padding: 10px; margin-right: 50px; margin-bottom: 50px;
">
<?php
echo \yii\helpers\Html::img('/web/photos/'.$model->photo, ["class"=>"product_photo"]);

?>
    <h2 class="product_name">
        <?php
            echo $model->name;
        ?>
    </h2>
    <div class="product_price">
        <h4 class="product_price_content"> Цена:<br>
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






