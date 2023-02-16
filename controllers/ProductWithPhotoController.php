<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Product;
use app\models\ProductPhoto;

class ProductWithPhotoController extends Controller
{
    public function actionCreate($id)
    {
        $product = Product::findOne($id);
        $productphoto = ProductPhoto::findOne($id);
        
        if (!isset($product, $productphoto)) {
            throw new NotFoundHttpException("The product was not found.");
        }
        
        $product->scenario = 'create';
        $productphoto->scenario = 'create';
        
        if ($product->load(Yii::$app->request->post()) && $productphoto->load(Yii::$app->request->post())) {
            $isValid = $product->validate();
            $isValid = $productphoto->validate() && $isValid;
            if ($isValid) {
                $product->save(false);
                $productphoto->save(false);
                return $this->redirect(['product-with-photo/view', 'id' => $id]);
            }
        }
        
        return $this->render('create', [
            'product' => $product,
            'productphoto' => $productphoto,
        ]);
    }
}