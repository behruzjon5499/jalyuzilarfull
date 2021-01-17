<?php

namespace frontend\controllers;

use abdualiym\slider\entities\Slides;
use backend\models\Cart;
use backend\models\ProductFeedback;
use backend\models\Products;
use medin\entities\Distributors;
use Yii;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 10;
    const PRODUCTSLIDER = 'productslider';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {

        $query = Products::find();

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'pages' => $pages,
            'products' => $products,
            'productslider' => Slides::getBySlug(self::PRODUCTSLIDER),
        ]);
    }

    public function beforeAction($action)
    {
        if ($action->id == 'add-to-cart') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    public function actionView($id)
    {

        $model1 = new Cart();

        if ($model1->load(Yii::$app->request->post())) {
            $model = new Cart();
            $model->session_id = Yii::$app->session->id;
            $model->product_id = $model1->product_id;
            $model->count = $model1->count;
            $model->created_at = time();
            $model->created_at = time();

            $model->save();
            return $this->render('index', [
                    'products' => Products::find()->orderBy(['created_at' => SORT_DESC])->all(),
                    'productslider' => Slides::getBySlug(self::PRODUCTSLIDER),
                ]
            );
        } else
            $model = new ProductFeedback();
        if (Yii::$app->request->post() && $model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['site/index']);
        }

        return $this->render('view', [
            'productfeedbacks' => ProductFeedback::find()->where(['product_id' => $id])->andWhere(['status' => self::STATUS_ACTIVE])->all(),
            'model' => $model,
            'model1' => $model1,
            'products' => Products::find()->with('category')->all(),
            'product' => Products::find()->where(['id' => $id])->one(),
            'productslider' => Slides::getBySlug(self::PRODUCTSLIDER),
        ]);
    }


    public function actionAddToCart($product_id, $count = null)
    {
        $this->enableCsrfValidation = false;

        $product_id = (int)$product_id;

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new Cart;
        $session = Yii::$app->session;

        $query = $model->find()->where(['product_id' => $product_id]);

        $query->andWhere(['session_id' => $session->id]);

        $query = $query->one();

        if ($query && count($query) > 0 && $count === null) {
            $query->delete();
        } else {
            if (count($query) > 0) {
                $model = $query;
                $model->count = $count;
            } else {
                if (Yii::$app->user->isGuest) {
                    $model->session_id = $session->id;
                }
                $model->product_id = $product_id;
                $model->count = $count;
            }
//            VarDumper::dump($query,12,true);
//            die( );
            $model->save();
        }

        $cart = Cart::find();

        $cart->orWhere(['session_id' => Yii::$app->session->id]);
        $card_counts = Cart::find()->where(['product_id' => $product_id])->one();

        $where = 'where `products`.id="' . $product_id . '"';
        $card_count = $card_counts->count;
        $count = $cart->sum("count");
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand("
            select SUM(products.price*cart.count) as narxi
            FROM `cart` JOIN products on products.id=cart.product_id {$where}; ");
        $total_sum = $command->queryAll();
        //return $count;
        return [
            'status' => 1,
            'count' => $count,
            'total_summa' => $total_sum,
            'card_count' => $card_count
        ];

    }


}
