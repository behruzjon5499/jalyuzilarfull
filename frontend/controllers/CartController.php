<?php

namespace frontend\controllers;

use abdualiym\slider\entities\Slides;
use backend\models\Cart;
use backend\models\Orders;
use backend\models\Products;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * CartController implements the CRUD actions for Cart model.
 */
class CartController extends Controller
{
    /**
     * {@inheritdoc}
     */
    const PRODUCTSLIDER = 'productslider';

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
//                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cart models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model1 = new Orders();

        if ($model1->load(Yii::$app->request->post())) {
            $cart = Cart::find()->where(['session_id' => Yii::$app->session->id])->all();
            if ($model1) {
                foreach ($cart as $c):
                    $model = new Orders();

                    $model->count = $c->count;
                    $model->product_id = $c->product_id;

                $model->address = $model1->address;
                $model->location = $model1->location;
                $model->date = $model1->date;
                $model->phone = $model1->phone;
                $model->email = $model1->email;
                $model->description = $model1->description;
                $model->phone = $model1->phone;
                $model->created_at = time();
                $model->updated_at = time();

                $model->save();
                endforeach;
            }
//            VarDumper::dump($model, 12, true);
//            die();

            return $this->render('../products/index', [
                    'products' => Products::find()->orderBy(['created_at' => SORT_DESC])->all(),
                    'productslider' => Slides::getBySlug(self::PRODUCTSLIDER),
                ]
            );
        } else {

            $cart = Cart::find()->where(['session_id' => Yii::$app->session->id])->all();
            $session_id = Yii::$app->session->id;
            $where = 'where `cart`.session_id="' . $session_id . '"';
            $connection = Yii::$app->getDb();
            $command = $connection->createCommand("
            select SUM(products.price*cart.count) as narxi
            FROM `cart` JOIN products on products.id=cart.product_id {$where}; ");
            $total_sum = $command->queryAll();
            return $this->render('index', [
                'cards' => $cart,
                'model1' => $model1,
                'total_sum' => $total_sum,
            ]);

        }
    }


    public function actionDelete($id)
    {

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Cart::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }


}
