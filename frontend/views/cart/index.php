<?php
/* @var $this yii\web\View */

$count = 0;
?>

    <style>
        body {
            background: #eee;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .clearfix {
            content: "";
            display: table;
            clear: both;
        }

        #site-header, #site-footer {
            background: #fff;
        }

        #site-header {
            margin: 0 0 30px 0;
        }

        #site-header h1 {
            font-size: 31px;
            font-weight: 300;
            padding: 40px 0;
            position: relative;
            margin: 0;
        }

        a {
            color: #000;
            text-decoration: none;

            -webkit-transition: color .2s linear;
            -moz-transition: color .2s linear;
            -ms-transition: color .2s linear;
            -o-transition: color .2s linear;
            transition: color .2s linear;
        }

        a:hover {
            color: #53b5aa;
        }

        #site-header h1 span {
            color: #53b5aa;
        }

        #site-header h1 span.last-span {
            background: #fff;
            padding-right: 150px;
            position: absolute;
            left: 217px;

            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -ms-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear;
        }

        #site-header h1:hover span.last-span, #site-header h1 span.is-open {
            left: 363px;
        }

        #site-header h1 em {
            font-size: 16px;
            font-style: normal;
            vertical-align: middle;
        }

        .container {
            font-family: 'Open Sans', sans-serif;
            margin: 0 auto;
            width: 980px;
        }

        #cart {
            width: 100%;
        }

        #cart h1 {
            font-weight: 300;
        }

        #cart a {
            color: #53b5aa;
            text-decoration: none;

            -webkit-transition: color .2s linear;
            -moz-transition: color .2s linear;
            -ms-transition: color .2s linear;
            -o-transition: color .2s linear;
            transition: color .2s linear;
        }

        #cart a:hover {
            color: #000;
        }

        .product.removed {
            margin-left: 980px !important;
            opacity: 0;
        }

        .product {
            border: 1px solid #eee;
            margin: 20px 0;
            width: 100%;
            height: 195px;
            position: relative;

            -webkit-transition: margin .2s linear, opacity .2s linear;
            -moz-transition: margin .2s linear, opacity .2s linear;
            -ms-transition: margin .2s linear, opacity .2s linear;
            -o-transition: margin .2s linear, opacity .2s linear;
            transition: margin .2s linear, opacity .2s linear;
        }

        .product img {
            width: 100%;
            height: 100%;
        }

        .product header, .product .content {
            background-color: #fff;
            border: 1px solid #ccc;
            border-style: none none solid none;
            float: left;
        }

        .product header {
            background: #000;
            margin: 0 1% 20px 0;
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 24%;
            height: 195px;
        }

        .product header:hover img {
            opacity: .7;
        }

        .product header:hover h3 {
            bottom: 73px;
        }

        .product header h3 {
            background: #53b5aa;
            color: #fff;
            font-size: 22px;
            font-weight: 300;
            line-height: 49px;
            margin: 0;
            padding: 0 30px;
            position: absolute;
            bottom: -50px;
            right: 0;
            left: 0;

            -webkit-transition: bottom .2s linear;
            -moz-transition: bottom .2s linear;
            -ms-transition: bottom .2s linear;
            -o-transition: bottom .2s linear;
            transition: bottom .2s linear;
        }

        .remove {
            cursor: pointer;
        }

        .product .content {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 140px;
            padding: 0 20px;
            width: 75%;
        }

        .product h1 {
            color: #53b5aa;
            font-size: 25px;
            font-weight: 300;
            margin: 17px 0 20px 0;
        }

        .product footer.content {
            height: 50px;
            margin: 6px 0 0 0;
            padding: 0;
        }

        .product footer .price {
            background: #fcfcfc;
            color: #000;
            float: right;
            font-size: 15px;
            font-weight: 300;
            line-height: 49px;
            margin: 0;
            padding: 0 30px;
        }

        .product footer .full-price {
            background: #53b5aa;
            color: #fff;
            float: right;
            font-size: 22px;
            font-weight: 300;
            line-height: 49px;
            margin: 0;
            padding: 0 30px;

            -webkit-transition: margin .15s linear;
            -moz-transition: margin .15s linear;
            -ms-transition: margin .15s linear;
            -o-transition: margin .15s linear;
            transition: margin .15s linear;
        }

        .qt, .qt-plus, .qt-minus {
            display: block;
            float: left;
        }

        .qt {
            font-size: 19px;
            line-height: 50px;
            width: 70px;
            text-align: center;
        }

        .qt-plus, .qt-minus {
            background: #fcfcfc;
            border: none;
            font-size: 30px;
            font-weight: 300;
            height: 100%;
            padding: 0 20px;
            -webkit-transition: background .2s linear;
            -moz-transition: background .2s linear;
            -ms-transition: background .2s linear;
            -o-transition: background .2s linear;
            transition: background .2s linear;
        }

        .qt-plus:hover, .qt-minus:hover {
            background: #53b5aa;
            color: #fff;
            cursor: pointer;
        }

        .qt-plus {
            line-height: 50px;
        }

        .qt-minus {
            line-height: 47px;
        }

        #site-footer {
            margin: 30px 0 0 0;
        }

        #site-footer {
            padding: 40px;
        }

        #site-footer h1 {
            background: #fcfcfc;
            border: 1px solid #ccc;
            border-style: none none solid none;
            font-size: 24px;
            font-weight: 300;
            margin: 0 0 7px 0;
            padding: 14px 40px;
            text-align: center;
        }

        #site-footer h2 {
            font-size: 24px;
            font-weight: 300;
            margin: 10px 0 0 0;
        }

        #site-footer h3 {
            font-size: 19px;
            font-weight: 300;
            margin: 15px 0;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .btn {
            background: #53b5aa;
            border: 1px solid #999;
            border-style: none none solid none;
            cursor: pointer;
            display: block;
            color: #fff;
            font-size: 20px;
            font-weight: 300;
            padding: 16px 0;
            width: 290px;
            text-align: center;

            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -ms-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear;
        }

        .btn:hover {
            color: #fff;
            background: #429188;
        }

        .type {
            background: #fcfcfc;
            font-size: 13px;
            padding: 10px 16px;
            left: 100%;
        }

        .type, .color {
            border: 1px solid #ccc;
            border-style: none none solid none;
            position: absolute;
        }

        .color {
            width: 40px;
            height: 40px;
            right: -40px;
        }

        .red {
            background: #cb5a5e;
        }

        .yellow {
            background: #f1c40f;
        }

        .blue {
            background: #3598dc;
        }

        .minused {
            margin: 0 50px 0 0 !important;
        }

        .added {
            margin: 0 -50px 0 0 !important;
        }
    </style>
<?php

?>

    <header id="site-header">
        <div class="container">
            <h1>Shopping cart </h1>
        </div>
    </header>

    <div class="container">

        <section id="cart">

            <?php use jalyuzilar\helpers\LanguageHelper;
            use kartik\datetime\DateTimePicker;
            use yii\helpers\Html;
            use yii\widgets\ActiveForm;

            foreach ($cards as $card):?>
                <article class="product">
                    <header>
                        <a class="remove" href="<?= yii\helpers\Url::to(['cart/delete', 'id' => $card->id]) ?>">
                            <img src="<?= $card->product->getImageFileUrl('main_photo') ?>" alt="">

                            <h3><?= Yii::t('app', 'Remove product') ?></h3>
                        </a>
                    </header>

                    <div class="content">

                        <h1> <?= \jalyuzilar\helpers\LanguageHelper::get($card->product, 'title') ?></h1>

                        <?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($card->product, 'description'), 150, '...'); ?>

                    </div>


                    <footer class="content">
                        <span class="qt-minus" data-product_id="<?= $card->product->id ?>">-</span>
                        <span class="qt" data-value="<?= $card->count ?>"><?= $card->count ?></span>
                        <span class="qt-plus" data-product_id="<?= $card->product->id ?>">+</span>

                        <h2 class="full-price">

                        </h2>

                        <h2 class="price">
                            <?=  $card->product->price ?>
                        </h2>

                    </footer>
                </article>

            <?php endforeach; ?>
        </section>

    </div>

    <footer id="site-footer">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-8">

                    <div class="left">
                        <?php $form = ActiveForm::begin([
                            'id' => 'feedback-form',
                            'options' => ['class' => 'col rounded-field'],
                        ]); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col">
                                    <?= $form->field($model1, 'address')->textInput(['maxlength' => 255, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Address')])->label(false); ?>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col">
                                    <?= $form->field($model1, 'phone')->textInput(['maxlength' => 255, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Phone')])->label(false); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col">

                                    <?= $form->field($model1, 'email')->textInput(['maxlength' => 255, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Email')])->label(false); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col">

                                </div>
                            </div>
                        </div>
                        <?= $form->field($model1, 'product_id')->textInput(['maxlength' => 255, 'class' => 'form-control', 'type' => 'hidden', 'value' => $card->product->id, 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Full Name')])->label(false); ?>


                        <div class="form-row mb-4">
                            <div class="col">
                                <?= $form->field($model1, 'description')->textarea(['rows' => 8, 'class' => 'form-control', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Description')])->label(false); ?>
                            </div>
                        </div>
                        <div class="form-row text-center">
                            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'form-btn mx-auto btn-theme bg-orange']) ?>
                        </div>

                        <?php ActiveForm::end() ?>

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="right">
                        <h1 class="total">Total: <span><?= $total_sum[0]['narxi'] ?></span></h1>
                    </div>
                </div>
            </div>


        </div>
    </footer>

    <script>
        var check = false;

        function changeVal(el) {
            var qt = parseFloat(el.parent().children(".qt").html());
            var price = parseFloat(el.parent().children(".price").html());
            var eq = Math.round(price * qt * 100) / 100;

            el.parent().children(".full-price").html(eq + "€");

            changeTotal();
        }

        function changeTotal() {

            var price = 0;

            $(".full-price").each(function (index) {
                price += parseFloat($(".full-price").eq(index).html());
            });

            price = Math.round(price * 100) / 100;
            var fullPrice = Math.round(price * 100) / 100;

            if (price == 0) {
                fullPrice = 0;
            }

            $(".total span").html(fullPrice);
        }

    </script>


<?php $this->registerJs('
$(".qt-plus").click(function (){
      $(this).parent().children(".full-price").addClass("added");
   $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
    
  var el = $(this);
            window.setTimeout(function () {
                el.parent().children(".full-price").removeClass("added");
                changeVal(el);
            }, 150);
        });




$(".qt-minus").click(function (){

   child = $(this).parent().children(".qt");

            if (parseInt(child.html()) > 1) {
                child.html(parseInt(child.html()) - 1);
            }

            $(this).parent().children(".full-price").addClass("minused");

            var el = $(this);
            window.setTimeout(function () {
                el.parent().children(".full-price").removeClass("minused");
                changeVal(el);
            }, 150);
        });
 
', 3); ?>