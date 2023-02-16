<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

// $id_producta = $id;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Product models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        //$dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
            'pagination' => [
                'pageSize' => 6,
            ],
            ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            "data" => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($this->request->isPost) {
            if ($this->request->isPost) {
                $model->load($this->request->post());
                $model->photo = UploadedFile::getInstance($model, 'photo');
                $model->photo->saveAs("photos/{$model->photo->baseName}.{$model->photo->extension}");
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionAddPhoto()
    {
        // $id_producta;
        // Header("Location:yii\helpers\Url::to(['/product-photo/create'])?get=$id_producta");
        //return $this->redirect(yii\helpers\Url::to(['/product-photo/create']));
    }


    public function actionRole()
    {
//        $auth = Yii::$app->authManager;
//
//        // добавляем разрешение "createPost"
//        $createPost = $auth->createPermission('createPost');
//        $createPost->description = 'Create a post';
//        $auth->add($createPost);
//
//        // добавляем разрешение "updatePost"
//        $updatePost = $auth->createPermission('updatePost');
//        $updatePost->description = 'Update post';
//        $auth->add($updatePost);
//
//        // добавляем роль "buyer"
//        $buyer = $auth->createRole('buyer');
//        $auth->add($buyer);
//
//        // добавляем роль "manager" и даём роли разрешение "createPost"
//        $manager = $auth->createRole('manager');
//        $auth->add($manager);
//        $auth->addChild($manager, $createPost);
//
//        // добавляем роль "admin" и даём роли разрешение "updatePost"
//        // а также все разрешения роли "manager"
//        $admin = $auth->createRole('admin');
//        $auth->add($admin);
//        $auth->addChild($admin, $updatePost);
//        $auth->addChild($admin, $manager);
//
//        // добавляем роль "banned"
//        $banned = $auth->createRole('banned');
//        $auth->add($banned);
//
//        // Назначение ролей пользователям.
//        // обычно реализуемый в модели User.
//        $auth->assign($banned, 0);
//        $auth->assign($buyer, 1);
//        $auth->assign($manager, 2);
//        $auth->assign($admin, 3);

        return "$(*@#$*&@*#@*@!(";
    }
}
