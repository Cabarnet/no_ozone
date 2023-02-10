<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserSesrch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Изменение пользователей';
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'login',
            //'auth_key',
            //'date_born',
            'id_city',
            'id_role',
            //'id_currency',
            //'id_card',
            //'gender',
            //'photo',
            //'password_hash',
            //'password_reset_token',
            //'phone',
            //'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, User $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
