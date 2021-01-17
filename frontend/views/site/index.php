<?php

/* @var $productslider Slides */
/* @var $categories Categories */
/* @var $costumers Slides */
/* @var $homeslider Slides */
$this->title = Yii::t('app', 'Jalyuzilar.uz - Jalyuzi');

use abdualiym\language\Language;
use abdualiym\slider\entities\Slides;
use backend\models\Categories;
use jalyuzilar\helpers\LanguageHelper;

foreach ($homeslider as $s): endforeach;
?>

<div class="slider bg-navy-blue">
    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export"
         data-source="gallery"
         style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

        <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
                <li
                        data-index="rs-82"
                        data-transition="fade"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="Power4.easeOut"
                        data-easeout="Power4.easeOut"
                        data-masterspeed="1000"
                        data-thumb="../../assets/images/waterfal-100x50.jpg"
                        data-rotate="0"
                        data-saveperformance="off"
                        data-title="Slide"
                        data-param1=""
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description=""
                        data-slicey_shadow="0px 0px 50px 0px transparent"
                >
                    <!-- MAIN IMAGE -->
                    <img src="<?= $s->getImageFileUrl('photo_0') ?>" alt=""
                         data-bgposition="center center"
                         data-kenburns="on"
                         data-duration="7000"
                         data-ease="Linear.easeNone"
                         data-scalestart="100"
                         data-scaleend="150"
                         data-rotatestart="0"
                         data-rotateend="0"
                         data-blurstart="0"
                         data-blurend="0"
                         data-offsetstart="0 0"
                         data-offsetend="0 0"
                         class="rev-slidebg"
                         data-no-retina
                    >
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme NotGeneric-Title"

                         id="slide-82-layer-2"

                         data-blendmode=”color-dodge“
                         data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']"
                         data-voffset="['-70','-70','-70','-70']"
                         data-fontsize="['70','60','60','55']"
                         data-lineheight="['80','70','70','40']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                    >We Are LogZee
                    </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption medium_light_white tp-resizeme"
                         id="slide-82-layer-3"

                         data-blendmode=”color-dodge“
                         data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']"
                         data-voffset="['-10','-10','-10','-10']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":500,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"

                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         data-fontsize="['28','28','28','28']"
                         data-lineheight="['34','34','34','50']"

                    >From Pickup to Destination
                    </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption tp-resizeme small_light_white "
                         id="slide-82-layer-4"
                         data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']"
                         data-voffset="['60','60','60','60']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         data-fontsize="['16','16','16','13']"
                         data-lineheight="['30','30','30','20']"

                    >We deliver your products on time with pure safety. Sed ut perspiciatis unde<br> omnis iste natus
                        error sit voluptatem accusantium doloremque laudantium,
                    </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption tp-resizeme btn-theme bg-navy-blue rev-btn"
                         id="slide-82-layer-5"
                         data-x="['center','center','center','center']"
                         data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']"
                         data-voffset="['140','140','140','140']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":750,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"

                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[30,30,30,30]"

                         data-fontsize="['14','14','14','14']"
                         data-lineheight="['16','16','16','16']"

                    >Learn More <i class="icofont-rounded-right"></i></div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                    data-masterspeed="2000" data-thumb="rev-slider/assets/images/datcolor-100x50.jpg" data-rotate="0"
                    data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                    data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/images/korea.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme"
                         id="slide-3-layer-1"
                         data-x="left" data-hoffset="60"
                         data-y="center" data-voffset="-120"
                         data-width="['auto','auto','auto','auto']"
                         data-height="['auto','auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-fontsize="['70','70','70','45']"

                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="700"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 1; white-space: nowrap;"><span class="slider-small">Ready For Any</span> <br>Obstacle
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme"
                         id="slide-3-layer-2"
                         data-x="left" data-hoffset="60"
                         data-y="center" data-voffset="10"
                         data-width="['auto','auto','auto','auto']"
                         data-height="['auto','auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="1400"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 2; white-space: nowrap; font-size: 18px; line-height: 30px;">Proin gravida nibh
                        vel velit auctor aliquet. Aenean sollicitudin,<br> lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec <br>sagittis sem nibh id elit.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption BigBold-Button rev-btn "
                         id="slide-3-layer-3"
                         data-x="left" data-hoffset="60"
                         data-y="center" data-voffset="100"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255content, 255, 255, 1.00);bg:rgba(41, 46, 49, 0);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                         data-start="2100"
                         data-splitin="none"
                         data-splitout="none"
                         data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                         data-responsive_offset="on"
                         data-responsive="off"

                         style="z-index: 3; white-space: nowrap; font-weight: 800;background-color:rgba(41, 46, 49, 1.00);border-color:rgba(255, 255, 255, 0);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                        READ MORE
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"
                 style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
    </div>
</div>


<main id="body-content">

    <!-- Journey Style Start -->
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <p><img src="/images/years_img.png" alt="" class="mb-5"></p>
                    <p>Having implemented a variety of ecological, economic and social initiatives, the family-owned
                        company, which has a history going back 500 years, is considered a pioneer in terms of
                        sustainable business today.</p>
                    <p>The Corporate Movie of the transport and logistics service provider Globax Logistics. GL not only
                        moves goods and data, but also people who are connected to the orange network.</p>
                    <div class="img-icon mt-4 d-flex align-items-center">
                        <img src="/images/team/team-1.jpg">
                        <h3>
                            John Morise
                            <span>Founder & CEO</span>
                        </h3>
                    </div>
                </div>

                <!-- Spacer For Medium -->
                <div class="w-100 spacer-50 d-none d-md-block d-lg-none d-sm-none"></div>
                <!-- Spacer For Medium -->
                <div class="col-md-12 col-lg-6">

                    <div class="row">
                        <!-- Icon Box 6 -->
                        <div class="col-12 col-md-6">
                            <div class="icon-box-6">
                                <i class="icofont-box"></i>
                                <h3 class="h3-xs txt-blue">Packaging and Storage</h3>
                                <p>Praesent pellentesque diam vitae nibh aliquam faucibus.</p>
                                <a href="#" class="btn-arrow bg-navy-blue"><i class="icofont-swoosh-right"></i></a>
                            </div>
                        </div>
                        <!-- Icon Box 6 -->

                        <!-- Icon Box 6 -->
                        <div class="col-12 col-md-6">
                            <div class="icon-box-6">
                                <i class="icofont-safety"></i>
                                <h3 class="h3-xs txt-blue">Safety & Quality</h3>
                                <p>Praesent pellentesque diam vitae nibh aliquam faucibus.</p>
                                <a href="#" class="btn-arrow bg-navy-blue"><i class="icofont-swoosh-right"></i></a>
                            </div>
                        </div>
                        <!-- Icon Box 6 -->

                        <!-- Spacer For Medium -->
                        <div class="w-100 spacer-50 d-none d-lg-none d-md-block d-lg-block d-sm-none"></div>
                        <!-- Spacer For Medium -->

                        <!-- Icon Box 6 -->
                        <div class="col-12 col-md-6">
                            <div class="icon-box-6">
                                <i class="icofont-tree-alt"></i>
                                <h3 class="h3-xs txt-blue">Care for Environment</h3>
                                <p>Praesent pellentesque diam vitae nibh aliquam faucibus.</p>
                                <a href="#" class="btn-arrow bg-navy-blue"><i class="icofont-swoosh-right"></i></a>
                            </div>
                        </div>
                        <!-- Icon Box 6 -->

                        <!-- Icon Box 6 -->
                        <div class="col-12 col-md-6">
                            <div class="icon-box-6">
                                <i class="icofont-delivery-time"></i>
                                <h3 class="h3-xs txt-blue">Delivery On Time</h3>
                                <p>Praesent pellentesque diam vitae nibh aliquam faucibus.</p>
                                <a href="#" class="btn-arrow bg-navy-blue"><i class="icofont-swoosh-right"></i></a>
                            </div>
                        </div>
                        <!-- Icon Box 6 -->
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Journey Style End -->
    <section class="bg-white wide-tb-100">
        <div class="container">
            <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <!--                        <span>WELCOME TO</span>-->
                        <?= Yii::t('app', 'Our Categories') ?>
                    </h1>
                </div>
                <!-- Heading Main -->

                <?php

                foreach ($categories as $category):  ?>
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                        <a href="<?= yii\helpers\Url::to(['categories/index', 'id' => $category->id]) ?>">
                            <div class="icon-box-1">
                                <img src="<?= $category->getImageFileUrl('photo') ?>"
                                     style="width: 100%; height: 300px;" alt="">
                                <div class="text">
                                  <p style="color: white; font-size: 30px;">  <?= LanguageHelper::get($category,'title')?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="wide-tb-100 bg-scroll counter-bg pos-rel">
        <div class="bg-overlay blue opacity-50"></div>
        <div class="container">
            <div class="row">
                <!-- Counter Col Start -->
                <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0"
                     data-wow-delay="0s">
                    <p><i class="icofont-google-map"></i></p>
                    <span class="counter">15</span>
                    <div>
                        Our Locations
                    </div>
                </div>
                <!-- Counter Col End -->

                <!-- Counter Col Start -->
                <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0"
                     data-wow-delay="0s">
                    <p><i class="icofont-globe"></i></p>
                    <span class="counter">110</span>
                    <span>+</span>
                    <div>
                        Clients Worldwide
                    </div>
                </div>
                <!-- Counter Col End -->

                <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                <!-- Spacer For Medium -->

                <!-- Counter Col Start -->
                <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0"
                     data-wow-delay="0">
                    <p><i class="icofont-vehicle-delivery-van"></i></p>
                    <span class="counter">240</span>
                    <span>+</span>
                    <div>
                        Owned Vehicles
                    </div>
                </div>
                <!-- Counter Col End -->

                <!-- Counter Col Start -->
                <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0"
                     data-wow-delay="0s">
                    <p><i class="icofont-umbrella-alt"></i></p>
                    <span class="counter">2340</span>
                    <div>
                        Tonnes Transported
                    </div>
                </div>
                <!-- Counter Col End -->
            </div>
        </div>
    </section>
    <!-- Counter End -->

    <!-- Our Gallery Start -->
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span><?= Yii::t('app', 'Our Gallery') ?> </span>
                        <?= Yii::t('app', 'Photo Showcase') ?>
                    </h1>
                </div>
            </div>

            <div id="js-styl2-mosaic" class="cbp">
                <?php foreach ($galleries as $gallery): ?>
                    <div class="cbp-item design">
                        <a href="<?= $gallery->getImageFileUrl('photo_0') ?>" style="max-height: 500px;" class="cbp-caption cbp-lightbox"
                           data-title="Lorem ipsum">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?= $gallery->getImageFileUrl('photo_0') ?>"  style="height: 300px; alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- Our Gallery End -->


    <!-- Intro Video Start -->
    <section class="bg-sky-blue wide-tb-100 pb-5 why-choose">
        <div class="container pos-rel">
            <div class="row piecharts" id="pie-charts">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span>Looking for more?</span>
                        Watch Our Intro Video
                    </h1>
                </div>

            </div>
    </section>
    <section class="wide-tb-60 p-0 bg-sky-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 wow pulse animated" data-wow-duration="0"
                     data-wow-delay="0.7s">
                    <div class="bg-fixed pos-rel video-popup">
                        <div class="bg-overlay black opacity-50"></div>
                        <div class="zindex-fixed pos-rel">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/yAnESKb2WkM"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-tb-100 mb-spacer-md">
        <div class="container wide-tb-100 pb-0">
            <div class="row">
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span>     <?=Yii::t('app','Our Customers')?></span>
                     <?=Yii::t('app','Customers Saying')?>
                    </h1>
                </div>
                <div class="col-sm-12">
                    <div class="owl-carousel owl-theme" id="home-client-testimonials">
                        <?php foreach ($costumers as $costumer): ?>
                            <div class="item">
                                <div class="client-testimonial bg-wave">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                            <img src="<?= $costumer->getImageFileUrl('photo_0') ?>" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <p><?= $costumer->content_0 ?></p>
                                            <footer class="blockquote-footer"><cite
                                                        title="Source Title"><?= $costumer->title_0 ?>
                                                    </cite></footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Reviews End -->

    <!-- Callout Start -->
    <section class="wide-tb-80 bg-orange callout-style-1 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-0">
                    <h4 class="h4-xl">Interested in working with Logzee?</h4>
                </div>
                <div class="col">
                    <div class="center-text">
                        We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized
                        approach
                    </div>
                </div>
                <div class="col-sm-auto">
                    <a href="#" class="btn-theme bg-white light">Get In Touch <i class="icofont-rounded-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout End -->
    <!-- Company News Start -->
    <section class="wide-tb-100">
        <div class="container">
            <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span><?= Yii::t('app', 'news') ?></span>
                        <?= Yii::t('app', 'Latest news') ?>
                    </h1>
                </div>
                <?php foreach ($news as $new): ?>
                    <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="blog-warp">
                            <a href="<?= yii\helpers\Url::to(['news/view', 'id' => $new->id]) ?>"> <img
                                        src="<?= $new->getImageFileUrl('photo') ?>" style="height: 300px;" alt="" class="rounded"></a>
                            <div class="meta-box">   <?= date('F d, Y', $new->date) ?></div>
                            <h4 class="h4-md mb-3"><a
                                        href="#">   <?= LanguageHelper::get($new, 'title') ?></a></h4>
                            <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($new, 'description'), 150, '...'); ?></p>

                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- Company News End -->

    <!-- Clients Start -->
    <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
        <div class="bg-overlay blue opacity-80"></div>
        <div class="container">
            <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span> <?= Yii::t('app', 'SOME OF OUR') ?> </span>
                        <?= Yii::t('app', 'Partners') ?>
                    </h1>
                </div>
                <!-- Heading Main -->

                <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                    <div class="owl-carousel owl-theme" id="home-clients">

                        <?php foreach ($partner as $p): ?>
                            <div class="item">
                                <img src="<?= $p->getImageFileUrl('photo_0') ?>" style="width: 150px; height: 150px;"
                                     alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients End -->

    <!-- Google Map Start -->
    <section class="map-bg">
        <div class="contact-details row d-flex">
            <div class="col">
                <h4>Room.uz</h4>
                <p><i class="icofont-phone"></i> +99890 951 54 99</p>
                <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">room.uz@gamil.com</a></div>
            </div>
            <div class="col">
                <h4>Jalyuzilar</h4>
                <p><i class="icofont-phone"></i> +99890 951 54 99</p>
                <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">jalyuzilar@gmail.com</a></div>
            </div>
        </div>
        <div id="map-holder" class="pos-rel">
            <div id="map_extended">
                <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Tashkent%20Mirzo%20Ulug'bek%20ziyolilar+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />
            </div>
        </div>
        <!-- Google Map Start -->
    </section>

    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
</main>