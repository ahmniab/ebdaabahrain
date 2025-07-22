<!DOCTYPE html>

<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&amp;display=swap" rel="stylesheet"/> <!-- تحميل خط Tajawal -->
<link href="main.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet"/>
<title>Ebdaa Bahrain</title>
<link href="assets/css/main.css" rel="stylesheet"/>
</head>
<body style="margin:0;padding:0;width:100%;box-sizing:border-box;">
<?php include "includes/header.php";?>
<style>
.collapsible {
  background-color: #d9d9d9;
  color: white;
  cursor: pointer;
  padding: 8px;
  width: 100%;
  border: 4px;
  text-align: right;
  outline: 3px;
  font-size: 20px;
  margin: 4px 2px;
  border-radius: 15px;
  width: 650px;
  border-style: solid;
  border-color: #00e6ac;
  border-width: 1px;
}

.active, .collapsible:hover {
  background-color: #ccffe6;
}

.content {
  padding: 1 18px;
  display: none;
  overflow: hidden;
  background-color: white;
  font-size: 12px;
}
.job1 {border-radius: 6px;}
.job2 {border-radius: 6px;}
</style>
<body class="ar-font" style="margin:0;padding:0;width:100%;box-sizing:border-box;">
<!-- Header Section Start -->
<header data-stellar-background-ratio="0.5" id="hero-area">
<!-- Language switch Start -->
<div class="ar" id="lang-switch">
<ul>
<li><i class="fa fa-globe fa-lg fa-3x"></i><span style="font-size:25px;margin-top: -42px;margin-left: 14px;display: block;">En</span></li>
<li><a href="en.php">English</a></li>
<li class="active"><a href="index.php">العربية</a></li>
</ul>
</div>
<!-- Language switch end -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav w-75 justify-content ar-dir">
<li class="nav-item"><a class="nav-link page-scroll" href="#about_us">من نحن </a></li>
<li class="nav-item"><a class="nav-link page-scroll" href="#services">منتجاتنا</a></li>
<li class="nav-item"><a class="nav-link page-scroll" href="#application">ترغب في الحصول على قرض؟</a></li>
<li class="nav-item"><a class="nav-link page-scroll" href="#portfolios">قصص النجاح </a></li>
<li class="nav-item"><a class="nav-link page-scroll" href="#team">فريق العمل </a></li>
<li class="nav-item"><a class="nav-link page-scroll" href="#blog">اخبارنا</a></li>
<!--   <li class="nav-item"><a class="nav-link page-scroll" href="Ebdaamail.php">تأجيل القسط</a></li>-->
<li class="nav-item"><a class="nav-link page-scroll" href="#contact">اتصل بنا</a></li>
</ul>
</div>
</div>
<!-- Mobile Menu Start -->
<ul class="mobile-menu">
<li><a class="page-scroll" href="#about_us">من نحن</a></li>
<li><a class="page-scroll" href="#services">منتجاتنا</a></li>
<li><a class="page-scroll" href="#application">ترغب في الحصول على قرض؟</a></li>
<li><a class="page-scroll" href="#portfolios">قصص النجاح</a></li>
<li><a class="page-scroll" href="#team">فريق العمل</a></li>
<li><a class="page-scroll" href="#blog">اخبارنا</a></li>
<li><a class="page-scroll" href="#contact">اتصل بنا</a></li>
<li><a class="page-scroll" href="en.php">ENGLISH</a></li>
</ul>
<!-- Mobile Menu End -->
<div class="navbar-header">
<a class="navbar-brand" href="index.php"><img alt="" class="img-fulid" id="logo" src="assets/img/logo_arabic_white.png"/></a>
<button aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#main-navbar" data-toggle="collapse" type="button">
<i class="lnr lnr-menu"></i>
</button>
</div>
</nav>
<!-- Navbar End  -->
<div class="carousel slide" data-ride="carousel" id="slides">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides"></li>
<li data-slide-to="1" data-target="#slides"></li>
<li data-slide-to="2" data-target="#slides"></li>
<li data-slide-to="3" data-target="#slides"></li>
<li data-slide-to="4" data-target="#slides"></li>
<li data-slide-to="5" data-target="#slides"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-100" src="assets/img/slide/slide1.jpg"/>
<div class="carousel-caption d-none d-md-block">
<h1 class="wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1000ms">تمويل المشاريع الصغيرة ومتناهية الصغر</h1>
<p class="lead wow fadeIn" data-wow-delay="400ms" data-wow-duration="1000ms">تمويل يصل الى 7000 دينار </p>
<a class="btn btn-common wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" href="#application">تقدم بطلبك الان</a>
</div>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-100" src="assets/img/slide/slide2.jpg"/>
<div class="carousel-caption d-none d-md-block">
<h5>تعرف على الناجحين</h5>
<p>إكتشف تجارب  الناجحين ... معنا</p>
<a class="btn btn-common wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" href="#portfolios">قصص النجاح</a>
</div>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-100" src="assets/img/slide/slide3.jpg"/>
<div class="carousel-caption d-none d-md-block">
<h1 class="wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1000ms">استفد من منتجات أبداع البحرين لبدء وتطوير مشروعك</h1>
<p class="lead wow fadeIn" data-wow-delay="400ms" data-wow-duration="1000ms"> عليك الفكرة ...وعلينا التمويل  </p>
<a class="btn btn-common wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" href="#services">تعرف على منتجاتنا</a>
</div>
</div>
<div class="carousel-item">
<img alt="Forth slide" class="d-block w-100" src="assets/img/slide/slide4.jpg"/>
<div class="carousel-caption d-none d-md-block">
<h1 class="wow fadeInDown counters" data-wow-delay="0.3s" data-wow-duration="1000ms">
<div class="ar-dir" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-3 col-lg-3 hoverable">
<div class="facts-item normal">
<div class="icon">
<i class="lnr lnr-user"></i>
</div>
<div class="fact-count">
<h3><span class="counter">20,704</span></h3>
<h4>عميل</h4>
</div>
</div>
<div class="facts-item hover">
<div class="icon">
<i class="fa fa-male"></i>
</div>
<div class="fact-count">
<h3><span class="counter">11,585</span></h3>
<h4>رجال </h4>
</div>
<div class="icon">
<i class="fa fa-female"></i>
</div>
<div class="fact-count">
<h3><span class="counter">9,119</span></h3>
<h4>نساء</h4>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 hoverable">
<div class="facts-item normal">
<div class="icon">
<i class="lnr lnr-briefcase"></i>
</div>
<div class="fact-count">
<h3><span class="counter">20,704</span></h3>
<h4>قرض </h4>
</div>
</div>
<div class="facts-item hover">
<div class="icon">
<i class="fa fa-folder-open"></i>
</div>
<div class="fact-count">
<h3><span class="counter">2,697</span></h3>
<h4>القائمة  </h4>
</div>
<div class="icon">
<i class="fa fa-folder"></i>
</div>
<div class="fact-count">
<h3><span class="counter">18,007</span></h3>
<h4>المسددة</h4>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 hoverable">
<div class="facts-item normal">
<div class="icon">
<i class="lnr lnr-layers"></i>
</div>
<div class="fact-count">
<h3><span class="counter">23312,089</span></h3>
<h4>قيمة القروض المصروفة</h4>
</div>
</div>
<div class="facts-item hover">
<div class="icon">
<i class="fa fa-folder-open"></i>
</div>
<div class="fact-count">
<h3><span class="counter">1,566,396</span></h3>
<h4>القائمة </h4>
</div>
<div class="icon">
<i class="fa fa-folder"></i>
</div>
<div class="fact-count">
<h3><span class="counter">21,745,693</span></h3>
<h4>المسددة</h4>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3">
<div class="facts-item">
<div class="icon">
<i class="lnr lnr-pie-chart"></i>
</div>
<div class="fact-count">
<h3><span class="counter"> 94 </span>  %</h3>
<h4>نسبة السداد</h4>
</div>
</div>
</div>
</div>
</div>
</div>
</h1>
<!-- end of counter -->
<p class="lead wow fadeIn" data-wow-delay="400ms" data-wow-duration="1000ms">أبداع البحرين ... خطوة بخطوة معك  </p>
<a class="btn btn-common wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" href="#contact">تفضل بزيارتنا</a>
</div>
</div>
<div class="carousel-item">
<img alt="Fifth slide" class="d-block w-100" src="assets/img/slide/slide5.jpg"/>
<div class="carousel-caption d-none d-md-block">
<h1 class="wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1000ms"> فريق عمل أبداع البحرين </h1>
<p class="lead wow fadeIn" data-wow-delay="400ms" data-wow-duration="1000ms">خدمتكم  شرف  ... ورضاكم هدفنا   </p>
<a class="btn btn-common wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" href="#team">فريق العمل </a>
</div>
</div>
<div class="carousel-item">
<img alt="sixth slide" class="d-block w-100" src="assets/img/slide/slide6.jpg"/>
<div class="carousel-caption d-none d-md-block">
<h1 class="wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1000ms"> تعاون مشترك بين أبداع البحرين ومكتب الأمم المتحدة لدعم التنمية المستدامة</h1>
<p class="lead wow fadeIn" data-wow-delay="400ms" data-wow-duration="1000ms">لتفاصيل الخبر  </p>
<a class="btn btn-common wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" href="#blog">اخبارنا</a>
</div>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</header>
<!-- Header Section End -->
<!-- About Us Section Start -->
<section class="section" id="about_us">
<div class="container">
<div class="section-header">
<h2 class="section-title wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1000ms">من نحن </h2>
<hr class="lines wow zoomIn" data-wow-delay="0.3s"/>
<p class="section-subtitle wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1000ms">ندعم مشاريع التمويل الأصغر بفلسفة تمكين وتنمية مهارات الفئات الأقل حظاً، وخصوصاً النساء، لتحسين ظروف حياتهن </p>
</div>
<div class="row" style="width: 100%;">
<div id="aboutUsTab">
<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<li class="col-sm-3 col-xs-6"><a href="#tabs-1">من نحن  </a></li>
<li class="col-sm-3 col-xs-6"><a href="#tabs-2">اعضاء مجلس الادارة</a></li>
<li class="col-sm-3 col-xs-6"><a href="#tabs-3">شركاؤنا</a></li>
<li class="col-sm-3 col-xs-6"><a href="#tabs-4">التقارير الماليه </a></li>
<li class="col-sm-3 col-xs-6"><a href="#tabs-5">تقارير الحوكمة </a></li>
</ul>
<!--start of tab 1-->
<div class="ar-txt" id="tabs-1">
<h2> عن إبداع البحرين </h2>
<hr/>
<p style="text-align:center;">تعرف علينا أكثر من خلال هذا <a href="#Ebdaa_video" style="color:#61D2B4"><b>الفيديو القصير</b></a></p>
<div class="box_shadow_flex col-lg-12 col-md-12 col-sm-12 col-xs-12 ar-dir">
<div class="col-lg-5 col-md-5 col-sm-10 col-xs-6 box_shadow">
<h1>رسالتنا</h1>
<hr/>
<p>دعم ذوي الدخل المحدود أصحاب المشاريع متناهية الصغر من خلال توفير حزمة من الخدمات التمويلية والاستشارية المميزة والمستدامة.</p>
</div>
<div class="col-lg-5 col-md-5 col-sm-10 col-xs-6 box_shadow">
<h1>رؤيتنا</h1>
<hr/>
<p>خدمات اقراضية ميسرة تدعم جهود توسعة الطبقة المتوسطة في مملكة البحرين.</p>
</div>
<div class="col-lg-11 col-md-11 col-sm-10 col-xs-6 box_shadow">
<h1>نبذة عن ابداع البحرين </h1>
<hr/>
<p>تأسس إبداع البحرين للتمويل متناهي الصغر في الحادي عشر من فبراير 2009 كأول بنك متخصص في التمويل الاصغر في مملكة البحرين وذلك برعاية ومباركة كريمة من صاحبة السمو الملكي الاميرة سبيكة بنت ابراهيم آل خليفة قرينة ملك مملكة البحرين رئيسة المجلس الأعلى للمرأة حفظها الله , و المغفور له "بإذن الله" الأمير طلال بن عبد العزيز آل سعود رئيس برنامج الخليج العربي للتنمية "أجند"، وذلك إيمانا من الجميع بدور هذه البنوك في دعم محدودي الدخل، ومساهمتها في إطلاق إبداعاتهم وتحقيق طموحاتهم عن طريق توفير القروض الصغيرة بشروط سهله ومسيرة , هذا وقد تغيرت الصفة القانونية من بنك الى شركة في منتصف عام 2021م.</p>
<p>عمل إبداع البحرين منذ تأسيسه على تقديم كافة سبل الدعم لذوي الدخل المحدود وأصحاب المشاريع الصغيرة سعياً من الإبداع لزيادة دخل المواطنين وتحسين مستوى معيشتهم وذلك بتحويل المواهب والحرف التي يمتلكونها الى مشاريع ناجحة من خلال توفير القروض متناهية الصغر والصغيرة، مع التركيز على المرأة والشباب، إضافة إلى إدارة الإبداع للمحفظة المالية لصاحبة السمو الملكي الاميرة سبيكة بنت ابراهيم آل خليفة لدعم المرأة وتمكينها اقتصاديا بالتعاون مع المجلس الأعلى للمرأة وصندوق العمل "تمكين".</p>
<p>يقدم إبداع البحرين التمويل بصيغته الإسلامية والتقليدية على حد سواء، وقد حصل الإبداع على جائزة "أفضل تمكين للمرأة على مستوى دول مجلس التعاون الخليجي" من قبل حكومة دبي، في مايو 2017 تقديراً لدوره في دعم المرأة البحرينية وتمكينها اقتصاديا.</p> </div>
<div class="col-lg-11 col-md-11 col-sm-10 col-xs-6 box_shadow">
<h1>اهدافنا</h1>
<hr/>
<p>
<ul style="list-style-type :circle;">
<li style="list-style-type :circle;">المساهمة في تنمية الاقتصاد الوطني لمملكة البحرين في إطار الرؤية الوطنية 2030.</li>
<li style="list-style-type :circle;">توسعة شريحة الطبقة المتوسطة في المجتمع البحريني.</li>
<li style="list-style-type :circle;">تحسين الظروف المعيشية للفئة المستهدفة من خلال تقديم التمويل للمشاريع متناهية الصغر ذات الجدوى الاقتصادية وذلك لتعزيز الروح الريادية وثقافة الاعتماد على الذات.</li>
<li style="list-style-type :circle;">عقد شراكات فاعلة ومثمرة مع جميع أصحاب المصلحة من مؤسسات وأفراد في المجتمع البحريني.</li>
</ul></p>
</div>
<!-- <div class="col-lg-5 col-md-5 col-sm-10 col-xs-6 box_shadow" >
            			<h1>انجازاتنا</h1>
            			<hr>
            			<p>
                    اول بنك متخصص في صناعة التمويل الاصغر في مملكة البحرين
            			يقدم البنك التمويل الاسلامي والتقليدي على حد سواء
            				حصل البنك على جائزة "أفضل تمكين للمرأة على مستوى دول مجلس التعاون الخليجي"من قبل حكومة دبي، في مايو 2017 تقديراً لدوره في دعم المرأة البحرينية وتمكينها أقتصاديا.
            			</p>
  				      </div> -->
</div>
</div>
<!-- end of tab 1 -->
<!--start of tab 2-->
<div class="ar-txt" id="tabs-2">
<h2>اعضاء مجلس الإدارة</h2>
<hr/>
<div class="row ar-dir" style="margin: 20px;">
<div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Mona" data-toggle="modal" href="#"><img alt="" src="assets/img/board/Mona.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Mona" data-toggle="modal" href="#"><h4 class="team-title">السيدة منى يوسف المؤيد</h4>
<p>رئيسة مجلس الإدارة</p></a>
<a class="btn btn-link" data-target="#Mona" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
</div>
<div class="row ar-dir" style="margin: 20px;">
<div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Naser" data-toggle="modal" href="#"><img alt="" src="assets/img/board/Naser.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Naser" data-toggle="modal" href="#"><h4 class="team-title">السيد ناصر بكر القحطاني</h4>
<p>نائب رئيس مجلس الإدارة</p></a>
<a class="btn btn-link" data-target="#Naser" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Samar" data-toggle="modal" href="#"><img alt="" class="img-fulid" src="assets/img/board/Samar.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Samar" data-toggle="modal" href="#"><h4 class="team-title">	 السيدة سمر ويصا عجايبي</h4>
<p>عضو مجلس إدارة </p></a>
<a class="btn btn-link" data-target="#Samar" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Dalal" data-toggle="modal" href="#"><img alt="" class="img-fulid" src="assets/img/board/Dalal.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Dalal" data-toggle="modal" href="#"> <h4 class="team-title">	السيدة دلال أحمد الغيص</h4>
<p>عضو مجلس ادارة </p></a>
<a class="btn btn-link" data-target="#Dalal" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Abed" data-toggle="modal" href="#"><img alt="" src="assets/img/board/Abed.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Abed" data-toggle="modal" href="#"><h4 class="team-title">السيد عبد الحميد ديواني </h4>
<p>عضو مجلس إدارة</p></a>
<a class="btn btn-link" data-target="#Abed" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Adel" data-toggle="modal" href="#"><img alt="" class="img-fulid" src="assets/img/board/Adel.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Adel" data-toggle="modal" href="#"> <h4 class="team-title">السيد عادل محمد بله</h4>
<p>عضو مجلس إدارة </p></a>
<a class="btn btn-link" data-target="#Adel" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Bader" data-toggle="modal" href="#"><img alt="" class="img-fulid" src="assets/img/board/Bader.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Bader" data-toggle="modal" href="#"><h4 class="team-title">	د. بدر الدين عبدالرحيم</h4>
<p>عضو مجلس إدارة </p></a>
<a class="btn btn-link" data-target="#Bader" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- board popup start -->
<div aria-hidden="true" class="modal fade ar-dir" id="Mona" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/board/Mona.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>السيدة منى المؤيد</h4>
<hr/>
<div class="box_shadow">
<p>منى يوسف المؤيد عضو مجلس الشورى البحريني ورئيسة مجلس إدارة أبداع البحرين والمدير التنفيذي لمجموعة يوسف خليل المؤيد وأولاده، إحدى أعرق الشركات العائلية بمملكة البحرين والخليج العربي، وتدير السيدة المؤيد وتشرف على أكثر من ألف موظف من مختلف الجنسيات ونحو مئة علامة تجارية من السلع الفاخرة والاجهزة الالكترونية المنزلية والمعدات الثقيلة والتقنيات الطبية.</p>
<p>جرى انتخاب السيدة المؤيد كأول امرأة عضوة في مجلس إدارة غرفة تجارة وصناعة البحرين عام 2001، كما أصبحت أول امرأة يتم انتخابها كعضو في مجلس إدارة شركة عامة (شركة البحرين للملاحة والتجارة الدولية ش.م.ب)، وأسهمت في لجنة سيدات الاعمال بالغرفة وترأستها، كما أصبحت في وقت لاحق نائب رئيس لجنة سيدات الاعمال الخليجيات لاتحاد غرف دول مجلس التعاون وعضو في لجنة اتحاد العرب لشؤون المرأة.</p>
<p>لفتت مسيرة نجاح السيدة المؤيد انتباه مجلة فوربس العربية، حيث حلت السيدة المؤيد في المرتبة الاولى بحرينيا والتاسعة عربيا حسب تصنيف فوربس لقائمة أقوى السيدات العربيات لعام 2017، كما أن اهتمام السيدة المؤيد بالمسؤولية الاجتماعية جعلتها تشغل المرتبة الرابعة لقائمة أهم 50 شخصية في مملكة البحرين لمجله الأعمال البحرينية، كما أنها حصلت على المرتبة 130 ضمن قائمة أقوى 500 سيدة حسب تصنيف المجلة العربية للأعمال لعام 2012، وتبوأت مرة أخرى في العام 2013 الترتيب الثالث لأكثر النساء العربيات تأثيرا في الشركات العائلية وذلك بحسب تصنيف مجلة فوربس العربية، وصنفت بالمرتبة 74 ضمن قائمة أقوى 100 امرأة أيضا ضمن قائمة مجلة الأعمال العربية .</p>
<p>إضافة إلى ذلك, جرى انتخاب السيدة المؤيد لمنصب رئيسة جمعية سيدات الاعمال البحرينية لثلاث دورات خلال الفترة من 2006 وحتى 2012، وساهمت في تأسيس جمعية حماية العمال الوافدين، وترأست الجمعية لثلاث دورات من 2005 حتى 2011، كما ترأس حاليا جمعية المنتدى والتي تعتبر منصة لتبادل الافكار من أجل الوحدة الوطنية في مملكة البحرين.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Naser" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/board/Naser.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>الأستاذ ناصر القحطاني</h4>
<hr/>
<div class="box_shadow">
<p> الأستاذ ناصر القحطاني هو المدير التنفيذي لبرنامج الخليج العربي للتنمية (أجفند) ومقره الرياض بالمملكة العربية السعودية، والذي أنشئ في عام 1980م بمبادرة من المغفور له صاحب السمو الملكي الأمير طلال بن عبد العزيز، ومباركة من قادة دول مجلس التعاون الخليجي، الأجفند منظمة رائدة عالمياً في مجال التنمية البشرية. قام أجفند بتمويل 1.472مشروعاً تنموياً في 133 بلداً، بجانب إنشائهه لتسع بنوك للشمول المالي وأربع منظمات إقليمية متخصصة في مجال تمكين المرأة وتنمية الطفولة المبكرة وتعزيز قدرات المجتمع المدني والتعليم العالي المفتوح.</p>
<p> الأستاذ القحطاني حائز على شهادة الماجستير من جامعة ميامي بالولايات المتحدة الأمريكية في العام 1989م، وهو يشغل حاليا منصب عضو مجالس أمناء كل من (الجامعة العربية المفتوحة، مركز المرأة العربية للتدريب والبحوث(كوتر)، المجلس العربي للطفولة والتنمية, والشبكة العربية للمنظمات الأهلية). بالإضافة إلى رئاسته لبنكين للتمويل الأصغر وعضويته في سبع من مجالس إداراتها على مستوى العالم العربي وإفريقيا.</p>
<p> حاز الأستاذ القحطاني على ثقة العديد من المجالس التنفيذية في قطاع التنمية، ويعد أحد أكثر القيادات تأثيراً في هذا المجال في الوطن العربي من خلال توليه عدد من المناصب التنفيذية والاستشارية وعضويات مجالس الإدارة. </p>
			     يتمتع الأستاذ القحطاني بسيرة مهنية عالية في مجال التنمية البشرية وإنشاء بنوك الشمول المالى من خلال تطبيق مبدأ الاعمال الاجتماعية.
              ويقود الآن فريق عمل لتنفيذ المرحلة الثانية من مبادرة المغفور له صاحب السمو الملكي الأمير طلال بن عبد العزيز لإنشاء بنوك الشمول المالي في أفريقيا وفق أفضل الممارسات ببناء شراكات ناجحة مع القطاع الخاص والمعنيين بقضايا التنمية البشرية بمفهوم شامل لتمكين الفقراء من الوصول للخدمات المالية وغير المالية.
			   كما قام ببناء شراكات ناجحة بين القطاع الخاص ومؤسسات التمويل لخدمة القضايا التنموية على المستوى العربي والإفريقي. شارك في تنظيم عدد من المؤتمرات والندوات وورش العمل المتخصصة في قضايا التنمية.
			  </div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Adel" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/board/Adel.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>السيد عادل بله</h4>
<hr/>
<div class="box_shadow">
<p>يشغل السيد عادل بله منصب رئيس  لجنة المخاطر واللجنة الفنية لشركة الابداع .
إضافة إلى ذلك يشغل السيد بله منصب المدير العام لبنك الإبداع للتمويل متناهي الصغر في السودان، وعضو مجالس إدارة بنوك وشركات الإبداع للتمويل متناهي الصغر في موريتانيا، الأردن, سوريا, ولبنان. ويمتلك السيد بله خبرة طويلة في التمويل متناهي الصغر حيث تقلد العديد من المناصب في المؤسسات المختصة بالتمويل الاصغر في السودان، ويحمل السيد عادل درجة البكالوريوس في المحاسبة التجارية منذ عام 1987 من جامعة الخرطوم.
 </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Abed" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/board/Abed.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>السيد عبد الحميد دواني</h4>
<hr/>
<div class="box_shadow">
<p>يشغل السيد عبد الحميد دواني منصب عضو مجلس إدارة أبداع البحرين وعضو لجنة المخاطر.
وهو يشغل كذلك عضوية العديد من مجالس إدارات شركات بحرينية، كما أنه عضو تنفيذي في مجموعة شركات الجزيرة وعضو في مصنع المنامة للأغذية، ويحمل السيد دواني درجة جامعية في الهندسة المدنية من جامعة الاسكندرية.
 </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Samar" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/board/Samar.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>السيدة سمر عجايبي</h4>
<hr/>
<div class="box_shadow">
<p>تتمتع السيدة عجايبي بخبرة تزيد عن خمسة وعشرين عامًا في مجال الخدمات المالية، حيث انضمت إلى بنك الإسكان منذ عام 1989، وهي حاصلة على درجة البكالوريوس في الاقتصاد من الجامعة الأمريكية في القاهرة (1988)، محاسب الإدارة (CMA) من الولايات المتحدة الأمريكية في عام 1998، ودبلوم معتمد في المحاسبة والمالية (CDipAF) عام 1995 من المملكة المتحدة، وشهادات مصرفية متنوعة من معهد البحرين للدراسات المصرفية والمالية، إضافة إلى عدد من المؤهلات الرفيعة. </p>
<p> شغلت السيدة عجايبي العديد من المناصب في بنك الإسكان خلال مسيرتها المهنية، وذلك في إدارة المخاطر والجودة والتمويل وإدارة المشاريع وتطوير الأعمال الاستراتيجية، وعملت في مجالس إدارة العديد من الشركات، وتركز أعمالها حاليًا على المشاريع الكبرى مع الهيئات الحكومية ذات الصلة لتطوير وتنفيذ خدمات تمويل الإسكان المستدامة بأسعار معقولة من خلال المشاركة لأول مرة بين القطاعين العام والخاص في مملكة البحرين.</p>
<p> و تشغل السيدة عجايبي  منصب عضو في لجنة التدقيق في أبداع البحرين.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Bader" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/board/Bader.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4> د. بدر الدين عبدالرحيم</h4>
<hr/>
<div class="box_shadow">
<p>حصل البروفيسور بدر الدين عبد الرحيم إبراهيم على مرتبة الشرف الثانية العليا في الاقتصاد بجامعة الخرطوم، ثم نال درجتي الماجستير والدكتوراه في الاقتصاد من جامعة مانشستر بإنجلترا في بداية التسعينات , وهو يشغل حاليا منصب رئيس الجامعة العربية المفتوحة في البحرين.</p>
<p>يعمل البروفيسور إبراهيم حاليا عضو في اللجنة الاستشارية لبرنامج الخليج العربي للتنمية "أجفند" في المملكة العربية السعودية، وعضو اللجنة الفنية للبرنامج، وعضو اللجان الفنية لشركة الابداع للتمويل متناهي الصغرموريتانيا، ورئيس اللجنة الفنية وعضو مجلس إدارة أبداع البحرين والشراكة بسيراليون، وعضو مجلس الإدارة أبداع البحرين للتمويل الأصغر السودان، وهو عضو سابق في مجالس إدارات مؤسسات التمويل الأصغر من بينها بنك الأسرة للتمويل الأصغر بالسودان، ومؤسسة التنمية الريفية بالسودان، والمؤسسة الوطنية للتمويل الأصغر بالسودان. </p>
<p>لدى البروفيسور إبراهيم خبرة طويلة في مجال التمويل الأصغر، وقام بتأليف مجموعة من الكتب في موضوعات التمويل الأصغر والشمول المالي والمشروعات الصغيرة طبعت بإنجلترا وأمريكا وألمانيا والمملكة العربية السعودية والسودان، ولديه مجموعه كبيرة من الأوراق المحكمة في مجلات عالمية في إنجلترا وألمانيا وكندا، ومصر، والهند وباكستان والسودان. </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Dalal" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/board/Dalal.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>السيدة دلال أحمد الغيص</h4>
<hr/>
<div class="box_shadow">
<p>تعتبر دلال الغيص مصرفية متمكنة حيث تمتلك أكثر من 19 عاماً من الخبرة المهنية في مجال الخدمات المصرفية والمالية تشمل الخدمات المصرفية للأفراد وتمويل الشركات الصغيرة والمتوسطة والخدمات المصرفية الرقمية وإدارة المخاطر من خلال عملها في بنوك إسلامية وتقليدية ودولية</p>
<p>قبل تعيينها رئيساً تنفيذياً لبنك البحرين للتنمية في ديسمبر 2021 كانت الغيص تشغل منصب الرئيس التنفيذي للخدمات المصرفية للأفراد وإدارة الثروات في بنك البحرين الإسلامي. كما شغلت عدة مناصب قيادية في "بنك ستاندرد تشارترد" منها: رئيس قطاع الخدمات المصرفية للأفراد، ورئيس التوزيع المتكامل، ورئيس قسم التوزيع والقنوات الإقليمية ومركز الاتصال.</p>
<p>تحمل الغيص درجة البكالوريوس في الإدارة والتسويق من جامعة البحرين ودرجة الماجستير في التمويل. كما أكملت برنامج أكسفورد للتكنولوجيا المالية من جامعة أكسفورد في العام 2020 وتعمل حالياً للحصول على درجة الدكتوراه في الأعمال من كلية الأعمال السويسرية. </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- board popup end -->
<!-- end of tab 2 -->
<!--start of tab 3-->
<div class="ar-txt" id="tabs-3">
<h2>شركاؤنا</h2>
<hr/>
<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-right:10px;">
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:20px;">
<div class="portfolio-item">
<div class="shot-item">
<a href="http://www.agfund.org/" target="_blank"><img alt="" src="assets/img/partners/agfund.png"/></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:20px;">
<div class="portfolio-item">
<div class="shot-item">
<a href="http://www.bdb-bh.com/en/home" target="_blank"><img alt="" src="assets/img/partners/bdb.png"/></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:20px;">
<div class="portfolio-item">
<div class="shot-item">
<a href="http://www.cbb.gov.bh/" target="_blank"><img alt="" src="assets/img/partners/cbb.png"/></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:20px;">
<div class="portfolio-item">
<div class="shot-item">
<a href="http://www.eskanbank.com/" target="_blank"><img alt="" src="assets/img/partners/eskanbank.png"/></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:20px;">
<div class="portfolio-item">
<div class="shot-item">
<a href="https://www.tamkeen.bh/" target="_blank"><img alt="" src="assets/img/partners/tamkeen.png"/></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:25px;">
<div class="portfolio-item">
<a data-target="#women" data-toggle="modal" href="#"><img alt="" src="assets/img/partners/woman.png"/></a>
<div class="team-details">
<div class="team-inner">
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:20px;">
<div aria-hidden="true" class="modal fade ar-dir" id="women" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/partners/sabika.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>المجلس الاعلى للمرأة</h4>
<hr/>
<div class="box_shadow">
<p>بمبادرة ودعم من المجلس الأعلى للمرأة وبتمويل من صندوق العمل "تمكين" وبمباركة من لدن صاحبة السمو الملكي الأميرة سبيكة بنت إبراهيم ال خليفة قرينة ملك مملكة البحرين المعظم حفظها الله، وصاحب السمو الملكي المغفور له "باذن الله" الأمير طلال بن عبد العزيز ال سعود مؤسس برنامج الخليج العربي للتنمية "اجفند"،</p>
<p> وقعت الشركة وبتاريخ 26 أبريل من عام 2010 اتفاقية مع المجلس وتمكين لإنشاء محفظة صاحبة السمو الملكي الأميرة سبيكة بنت ابراهيم آل خليفة وبقيمة (١) مليون دينار بحريني وذلك بغية تقديم قروض صغيرة مخصصة للمرأة البحرينية لتمكينها من إطلاق مشاريع متناهية الصغر تديرها المرأة البحرينية او تطوير مشروعها القائم بالفعل وجعلها قادرة على المنافسة على المستوى المحلي والإقليمي والدولي.</p>
<p> وتتراوح فية القروض الممنوحة للمرأة البحرينية بين 200 دينار و7000 دينار بحريني تسدد على فترات متفاوتة تمتد حتى ٣ سنوات<p></p> .

			  </p></div>
</div>
</div>
</div>
<div class="modal-footer" style="justify-content: space-between;">
<a class="btn btn-common fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1000ms" href="https://www.scw.bh/" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms; -webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" target="_blank">الموقع الالكتروني</a>
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms; -webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- end of tab 3 -->
<!--start of tab 4-->
<div class="ar-txt" id="tabs-4">
<div class="container">
<h2>القوائم المالية المدققة الى إبداع البحرين</h2>
<hr/>
<ul class="timeline">
<li>
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2024" rel="tooltip" title="2024"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2024EN.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_3.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2024</p>
</div>
</a>
</div>
</li>
<li class="timeline-inverted">
<div class="timeline-badge info"><i class="lnr lnr-history" id="2023" rel="tooltip" title="2023"></i></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2023EN.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_3.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2023</p>
</div>
</a>
</div>
</li>
<li>
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2022" rel="tooltip" title="2022"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2022EN.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_6.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2022</p>
</div>
</a>
</div>
</li>
<li class="timeline-inverted">
<div class="timeline-badge info"><i class="lnr lnr-history" id="2021" rel="tooltip" title="2021"></i></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2021EN.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_3.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2021</p>
</div>
</a>
</div>
</li>
<li>
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2020" rel="tooltip" title="2020"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2020EN.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_1.jpeg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2020</p>
</div>
</a>
</div>
</li>
<li class="timeline-inverted">
<div class="timeline-badge info"><i class="lnr lnr-history" id="2019" rel="tooltip" title="2019"></i></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2019AR.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_3.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2019</p>
</div>
</a>
</div>
</li>
<li>
<div class="timeline-badge info"><i class="lnr lnr-history" id="2018" rel="tooltip" title="2018"></i></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/Audited Financial Statement arabic 2018.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_6.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2018</p>
</div>
</a>
</div>
</li>
<li class="timeline-inverted">
<div class="timeline-badge info"><i class="lnr lnr-history" id="2017" rel="tooltip" title="2017"></i></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2017 Al Ebdaa Bank.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_2.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2017</p>
</div>
</a>
</div>
</li>
<li>
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2016" rel="tooltip" title="2016"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/FS2016 Al Ebdaa Bank.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_1.jpeg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2016</p>
</div>
</a>
</div>
</li>
<li class="timeline-inverted">
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2015" rel="tooltip" title="2015"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/fs2015.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_3.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2015</p>
</div>
</a>
</div>
</li>
<li>
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2014" rel="tooltip" title="2014"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/fs2014.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_1.jpeg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2014</p>
</div>
</a>
</div>
</li>
<li class="timeline-inverted">
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2013" rel="tooltip" title="2013"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/fs2013.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_4.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2013</p>
</div>
</a>
</div>
</li>
<li>
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2012" rel="tooltip" title="2012"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/fs2012.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_5.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2012</p>
</div>
</a>
</div>
</li>
<li class="timeline-inverted">
<div class="timeline-badge info"><i class="lnr lnr-history" id="2011" rel="tooltip" title="2011"></i></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/fs2011.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_3.jpg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2011</p>
</div>
</a>
</div>
</li>
<li>
<div class="timeline-badge primary"><a><i class="lnr lnr-history" id="2010" rel="tooltip" title="2010"></i></a></div>
<div class="timeline-panel">
<a href="assets/fainancial _report/fs2010.pdf" target="_blank">
<div class="timeline-heading">
<img class="img-responsive" src="assets/fainancial _report/report_1.jpeg">
</img></div>
<div class="timeline-body">
<p>البيانات المالية التابعة الى ابداع البحرين للسنة المنتهية في 31 ديسمبر 2010</p>
</div>
</a>
</div>
</li>
</ul>
</div>
</div>
<!--start of tab 5-->
<div class="ar-txt" id="tabs-5">
<h2>تقرير الحوكمة</h2>
<hr/>
<div class="container">
<p>فيما يلي التقارير السنوية المتعلقة بالحوكمة لشركة إبداع البحرين:</p>
<ul style="list-style-type: disc; padding-right: 20px;">
<li><a href="assets/governance_reports/GovernanceReport2024.pdf" style="color:#61D2B4;" target="_blank">تقرير الحوكمة لسنة 2024</a></li>
<!-- يمكنك إضافة المزيد من الروابط هنا -->
</ul>
</div>
</div>
<!--end of tab 5-->
<!-- end of tab 6-->
</div>
</div>
</div>
</div></div></div></section>
<!-- About Us Section End  -->
<!-- Start Video promo Section -->
<section class="video-promo section" id="Ebdaa_video">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="video-promo-content text-center">
<h2 class="wow zoomIn" data-wow-delay="100ms" data-wow-duration="1000ms">تعرف على إبداع البحرين من خلال هذا الفيديو القصير</h2>
<p class="wow zoomIn" data-wow-delay="100ms ar-dir" data-wow-duration="1000ms">تأسس إبداع البحرين للتمويل متناهي الصغر في الحادي عشر من فبراير 2009 كأول بنك متخصص في التمويل الاصغر في مملكة البحرين وذلك برعاية ومباركة كريمة من صاحبة السمو الملكي الاميرة سبيكة بنت ابراهيم آل خليفة قرينة ملك مملكة البحرين رئيسة المجلس الأعلى للمرأة حفظها الله والمغفور له صاحب السمو الملكي الأمير طلال بن عبد العزيز آل سعود رئيس برنامج الخليج العربي للتنمية. </p>
<a class="video-popup wow fadeInUp" data-target="#Bank_Video" data-toggle="modal" data-wow-delay="0.3s" data-wow-duration="1000ms"><i class="lnr lnr-film-play"></i></a>
<!--	<a  data-toggle="modal" data-target="#Bank_Video1" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>-->
</div>
</div>
</div>
</div>
</section>
<div aria-hidden="true" class="modal fade ar-dir" id="Bank_Video" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="600px" src="https://www.youtube.com/embed/cuUJuoUZz8U" width="100%"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
<!--	<div class="modal fade ar-dir" id="Bank_Video1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body ar-txt">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                <span aria-hidden="true">&times;</span>
              </button>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
				 <iframe width="100%" height="600px" src="https://www.youtube.com/embed/Nk90TvNe4c8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
<!-- End Video Promo Section -->
<!-- Services Section Start -->
<section class="section" id="services">
<div class="container">
<div class="section-header">
<h2 class="section-title wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1000ms">خدمات الإبداع</h2>
<hr class="lines wow zoomIn" data-wow-delay="0.3s"/>
<p class="section-subtitle wow fadeIn" data-wow-delay="0.3s ar-dir" data-wow-duration="1000ms">.قروضنا صممت لتلائم إحتياجات مشاريعكم
          <br/> .خدمتكم شرف ورضاكم هدفنا</p>
</div>
<div class="row ar-dir">
<div class="col-md-6 col-sm-6">
<div class="item-boxes wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="icon">
<i class="fa fa-female"></i>
</div>
<h4>قرض سيدتي</h4>
<p>قرض مخصص للمرأة المنتجة والعاملة من المنزل، وتتراوح قيمته بين 200 إلى 1000 دينار بحريني، ويساعد هذا القرض السيدات اللاتي يعملن من المنزل على تطوير مشاريعهن ومنتجاتهن بدون الحاجة إلى أي ضمانات تقليدية.</p>
<a class="btn btn-link" data-target="#sayedaty" data-toggle="modal" href="#" style="color:#61D2B4"> التفاصيل و الشروط  </a>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="item-boxes wow fadeInDown animated" data-wow-delay="0.8s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
<div class="icon">
<i class="lnr lnr-magic-wand"></i>
</div>
<h4>قرض الإبداع</h4>
<p>يدعم المشاريع المنزلية للرجال ويساعد في تطويرها دون الحاجة إلى الضمانات التقليدية، تتراوح قيمة هذا القرض ما بين 200 إلى 1000 دينار بحريني ويسدد على اقساط شهرية خلال فترة زمنية تصل لعام كامل.</p>
<a class="btn btn-link" data-target="#ebdaaLoan" data-toggle="modal" href="#" style="color:#61D2B4"> التفاصيل و الشروط  </a>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="item-boxes wow fadeInDown animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
<div class="icon">
<i class="lnr lnr-heart"></i>
</div>
<h4>قرض الأمل </h4>
<p>مخصص للعملاء الذين يملكون مشروعاً تجارياً أو صناعياً أو خدمياً بغض النظر عن كونه منزلي أو متنقل أو مرخص لكنه جاهز للانتقال من القطاع المنزلي الى القطاع التجاري، وتتراوح قيمة هذا القرض ما بين 1000 إلى 2400 دينار بحريني.</p>
<a class="btn btn-link" data-target="#hopeLoan" data-toggle="modal" href="#" style="color:#61D2B4"> التفاصيل و الشروط  </a>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="item-boxes wow fadeInDown animated" data-wow-delay="1.6s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.6s;">
<div class="icon">
<i class="lnr lnr-diamond"></i>
</div>
<h4>قرض التميز</h4>
<p>يمنح للمشاريع التي تمتلك سجلات تجارية بهدف مساعدة هذه المشاريع على شراء بضائع إضافية أو معدات، وتتراوح قيمة القرض ما بين 1500 الى 7000 دينار بحريني.</p>
<a class="btn btn-link" data-target="#exellenceLoan" data-toggle="modal" href="#" style="color:#61D2B4"> التفاصيل و الشروط  </a>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="item-boxes wow fadeInDown animated" data-wow-delay="2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 2s;">
<div class="icon">
<i class="lnr lnr-sun"></i>
</div>
<h4>القرض الموسمي </h4>
<p>يمنح للمشاريع المنزلية أو التجارية المرخصة بسجل تجاري أو غير المرخصة، وذلك في فترات المناسبات مثل الاعياد وشهر رمضان الكريم والعودة للمدارس، وتتراوح قيمة القرض من 100 الى 800 دينار بحريني، ويسدد خلال فترة زمنية تصل لـ 10 أشهر.</p>
<a class="btn btn-link" data-target="#seasonalLoan" data-toggle="modal" href="#" style="color:#61D2B4"> التفاصيل و الشروط  </a>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="item-boxes wow fadeInDown animated" data-wow-delay="2.4s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 2s;">
<div class="icon">
<i class="lnr lnr-star"></i>
</div>
<h4>قرض التفوق </h4>
<p>يمتاز هذا القرض بالمرونة من ناحية السداد حيث تم تصميم هذا القرض ليتناسب واحتياجات أصحاب المشاريع التجارية المرخصة خارج المنزل من كلا الجنسين، كما يمكن منحه لأصحاب المشاريع المتنقلة مثل حافلات التوزيع والتوصيل أو سيارات الأجرة، ويتسم هذا القرض بفترة سداد مرنة بما يمكن العميل من السداد خلال 6، 12، 18 أو 24 شهراً.</p>
<a class="btn btn-link" data-target="#TafawoqLoan" data-toggle="modal" href="#" style="color:#61D2B4"> التفاصيل و الشروط  </a>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="item-boxes wow fadeInDown animated" data-wow-delay="2.8s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 2s;">
<div class="icon">
<i class="lnr lnr-rocket"></i>
</div>
<h4>قرض النجاح </h4>
<p>تم تصميم قرض النجاح خصيصا لأصحاب المشاريع المنزلية من الجنسين ممن يرغبون في تطوير مشاريعهم لتصبح مشاريع تجارية مرخصة، ويمنح هذا القرض مبالغ تمويل متنوعة تلبي احتياجات العملاء المختلفة، ويبدأ مبلغ التمويل في هذا القرض من 600 دينار ويصل كحد أقصى الى 1400 دينار تسدد خلال 18 شهراً.</p>
<a class="btn btn-link" data-target="#NajahLoan" data-toggle="modal" href="#" style="color:#61D2B4"> التفاصيل و الشروط  </a>
</div>
</div>
</div>
</div>
</section>
<!-- Services popup start -->
<!-- Services 1 -->
<div aria-hidden="true" class="modal fade ar-dir" id="sayedaty" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img src="assets/img/loan/syedaty-new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>قرض سيدتي </h4>
<hr/>
<p>الان إبداع البحرين يقدم قروض صغيرة مخصصة للسيدات المنتجات في المنزل لغايات دعم مشاريعهن وتطويرها. تتراوح قيمة القرض بين 200 و 1000 دينار تسدد على مدة 12 شهر.</p> <div class="box_shadow">
<p><b> شروط القرض: </b></p>
<li>  أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.</li>
<li> يجب أن يكون للمقترضة مشروع قائم أو لديها فكرة مشروع.</li>
<li>أن لا يقل عمر المقترضة عن 20 عام ولا يزيد عن 65 عام.</li>
</div>
<div class="box_shadow">
<p><b> المستندات المطلوبة: </b></p>
<li> نسخة من البطاقة الذكية سارية المفعول. </li>
<li> نسخة من الجواز أو رخصة القيادة. </li>
<li>إثبات دخل المشروع أو شهادة راتب للموظفات الاتي يرغبن ببدء مشاريعهن.</li>
<li>اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA). </li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Services 2 -->
<div aria-hidden="true" class="modal fade ar-dir" id="ebdaaLoan" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img src="assets/img/loan/ebdaa-new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>قرض الابداع </h4>
<hr/>
<p> الأن إبداع البحرين يقدم قروض صغيرة مخصصة للذكور الذين لديهم مشاريع تدار من المنزل لغاية دعم مشاريعهم وتطويرها.</p>
<p>تتراوح قيمة القرض بين 200 و 1000 دينار تسدد على مدة 12 شهر.</p>
<div class="box_shadow">
<p><b> شروط القرض: </b></p>
<li> أن يستغل القرض لغايات دعم المشاريع المنزلية  أو المتنقلة.</li>
<li> يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.</li>
<li>أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام.</li>
</div>
<div class="box_shadow">
<p><b> المستندات المطلوبة: </b></p>
<li> نسخة من البطاقة الذكية سارية المفعول. </li>
<li> نسخة من الجواز أو رخصة القيادة. </li>
<li>إثبات دخل المشروع أو شهادة راتب للموظفين الذين يرغبون ببدء مشاريعهم</li>
<li>اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA). </li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Services 3 -->
<div aria-hidden="true" class="modal fade ar-dir" id="hopeLoan" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img src="assets/img/loan/hope-new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>قرض الامل </h4>
<hr/>
<p>الان إبداع البحرين يقدم قرض الامل المخصص لدعم المشاريع التجارية والخدماتية والصناعية بشروط ميسرة.</p>
<p>تتراوح قيمة القرض بين 1000 و 2400 دينار تسدد على مدة 24 شهر. </p>
<div class="box_shadow">
<p><b> شروط القرض: </b></p>
<li>أن يستغل القرض لغايات دعم المشاريع الصغيرة أو المتنقلة.</li>
<li> يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.</li>
<li>أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام. </li>
</div>
<div class="box_shadow">
<p><b> المستندات المطلوبة: </b></p>
<li> نسخة من البطاقة الذكية سارية المفعول. </li>
<li> نسخة من الجواز أو رخصة القيادة. </li>
<li>إثبات دخل المشروع أو شهادة راتب للموظفين الذين يرغبون ببدء مشاريعهم</li>
<li>اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA). </li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Services 4 -->
<div aria-hidden="true" class="modal fade ar-dir" id="exellenceLoan" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img src="assets/img/loan/excell-new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>قرض التميز</h4>
<hr/>
<p>الان يقدم إبداع البحرين قرض التميز لدعم المشاريع التجارية والصناعية والخدماتية المرخصة وبشروط ميسرة.</p>
<p>تتراوح  قيمة القرض  بين 1500 و 7000 دينار تسدد على مدة 36 شهرا.</p>
<div class="box_shadow">
<p><b> شروط القرض: </b></p>
<li>يجب أن يكون للمقترض مشروعا مرخصا.</li>
<li>أن يستغل القرض لغايات دعم رأس المال أو شراء معدات.</li>
<li> أن لا يقل عمر المشروع عن 3 سنوات.</li>
<li>أن لا يقل عمر المقترض عن 25 عام ولا يزيد عن 65 عام. </li>
</div>
<div class="box_shadow">
<p><b> المستندات المطلوبة: </b></p>
<li> نسخة من البطاقة الذكية سارية المفعول. </li>
<li> نسخة من الجواز أو رخصة القيادة. </li>
<li>نسخة من السجل التجاري أو ترخيص المشروع. </li>
<li>إثبات دخل المشروع.</li>
<li>كشف الحساب البنكي للمشروع لاخر ستة شهور.</li>
<li>أن لا تقل صلاحية السجل التجاري عن 6 أشهر. </li>
<li>اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA). </li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Services 5 -->
<div aria-hidden="true" class="modal fade ar-dir" id="seasonalLoan" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img src="assets/img/loan/madares-new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>القرض الموسمي  </h4>
<hr/>
<p>برسوم إدارية بسيطة و إجراءات سريعة و ميسرة شركة إبداع البحرين للتمويل متناهي الصغر يمنح اصحاب المشاريع الصغيرة فرصة شراء بضاعة اضافية للمدارس و تقسيطها على 24 شهر بحيث يبدأ السداد بعد نهاية الشهر</p>
<div class="box_shadow">
<p><b> شروط القرض: </b></p>
<li>  ان لا يقل عم المقترض عن 23 عام و لا يزيد عن 60 عام. </li>
<li> يجب أن يكون للمقترض مصدر دخل ثابت و مستمر. </li>
<li>ايستغل القرض لغايات قيام التاجر بشراء المستلزمات الدراسية من قرطاسية و الزي المدرسي و توابعها. </li>
</div>
<div class="box_shadow">
<p><b> المستندات المطلوبة: </b></p>
<li> نسخة من البطاقة الذكية سارية المفعول. </li>
<li> نسخة من الجواز أو رخصة القيادة. </li>
<li>اخر سلب راتب لموظفي القطاع الحكومي. </li>
<li>شهادة راتب لموظفي القطاع الخاص. </li>
<li>كشف حساب البنك ( اخر ثلاث شهور). </li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Services 6 -->
<div aria-hidden="true" class="modal fade ar-dir" id="TafawoqLoan" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img src="assets/img/loan/tafawoq-new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>قرض التفوق  </h4>
<hr/>
<p>الان يقدم إبداع البحرين قرض التفوق لدعم المشاريع التجارية والصناعية والخدماتية المرخصة و بشروط ميسرة.</p>
<p>تتراوح  قيمة القرض  بين 1000 و 7000 دينار تسدد بشكل مرن على فترة من 6 الى 24 شهرا.</p>
<div class="box_shadow">
<p><b> شروط القرض: </b></p>
<li>يجب أن يكون للمقترض مشروعا مرخصا</li>
<li>أن يستغل القرض لغايات دعم رأس المال أو شراء معدات.</li>
<li> أن لا يقل عمر المشروع عن 3 سنوات.</li>
<li>أن لا يقل عمر المقترض عن 25 عام ولا يزيد عن 65 عام. </li>
</div>
<div class="box_shadow">
<p><b> المستندات المطلوبة: </b></p>
<li> نسخة من البطاقة الذكية سارية المفعول. </li>
<li> نسخة من الجواز أو رخصة القيادة. </li>
<li>نسخة من السجل التجاري أو ترخيص المشروع. </li>
<li>إثبات دخل المشروع.</li>
<li>كشف الحساب البنكي للمشروع لاخر ستة شهور.</li>
<li>أن لا تقل صلاحية السجل التجاري عن 6 أشهر. </li>
<li>اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA). </li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Services 7 -->
<div aria-hidden="true" class="modal fade ar-dir" id="NajahLoan" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img src="assets/img/loan/najah-new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>قرض النجاح  </h4>
<hr/>
<p>الان يقدم إبداع البحرين قروض صغيرة لأصحاب المشاريع المنزلية والمتنقلة لغايات تطويرها وزيادة رأس مالها العامل.</p>
<p>ويبدأ مبلغ التمويل في هذا القرض من 600 دينار ويصل كحد أقصى الى 1400 دينار تسدد خلال 18 شهراً.</p>
<div class="box_shadow">
<p><b> شروط القرض: </b></p>
<li>أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.</li>
<li> يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.</li>
<li>أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام. </li>
</div>
<div class="box_shadow">
<b> المستندات المطلوبة: </b>
<li> نسخة من البطاقة الذكية سارية المفعول. </li>
<li> نسخة من الجواز أو رخصة القيادة. </li>
<li>إثبات دخل المشروع أو شهادة راتب للموظفين الذين يرغبون ببدء مشاريعهم.</li>
<li>اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA). </li>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Services popup End -->
<!-- Services Section End -->
<!-- application Section Start  -->
<section class="section" data-stellar-background-ratio="0.09" id="application">
<div class="container">
<div class="section-header">
<h2 class="section-title"> ترغب في الحصول على قرض؟ </h2>
<hr class="lines"/>
<p class="section-subtitle"> ألرجاء ترك الاسم و رقم الهاتف وسيقوم أحد <br/> موضفي خدمة العملاء بالتواصل معكم في أسرع <br/> وقت ممكن لأستكمال أجرءات طلب القرض</p>
</div>
<div class="row ar-dir">
<div class="col-lg-12 col-sm-12 col-xs-12">
<div class="contact-block">
<form action="php/application-process.php" id="applicationForm" method="post">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input class="form-control application-input" data-error="الرجاء قم بادخال الاسم كامل " id="name_apply" name="name_apply" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF\s]{3,30}" placeholder="الاسم الرباعي" required="" type="text"/>
<div class="help-block with-errors"></div>
</div>
</div>
<!--
                <div class="col-md-6">
                   <div class="form-group">
                      <input type="text" class="form-control application-input" id="project_apply" name="project_apply" placeholder="الغاية من القرض" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]{3,40}"  data-error="الرجاء ادخال الغاية من القرض">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>-->
<div class="col-md-6">
<div class="form-group">
<input class="form-control application-input" data-error="الرجاء ادخال رقم المحمول " id="mobile_apply" name="mobile_apply" pattern="[0-9-]{8,15}" placeholder="رقم المحمول" required="" type="text"/>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<select data-error="الرجاء اختيار نوع القرض" hidden="" id="type_apply" name="type_apply" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
<option value="">اختر نوع القرض المطلوب</option>
<option value="Sayedati">قرض سيدتي</option>
<option value="Ebdaa">قرض الابداع</option>
<option value="AlNajah">قرض النجاح</option>
<option value="AlAmal">قرض الامل</option>
<option value="AlTamayoz">قرض التميز</option>
<option value="AlTafawoq">قرض التفوق</option>
</select>
<div class="help-block with-errors"></div>
</div>
</div>
<!--  
				   <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="cpr_apply" name="cpr_apply" placeholder="رقم البطاقة الشخصية" pattern="[0-9-]{9}"  data-error="الرجاء ادخال الرقم الشخصي ">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
						<select name="subcategory" id="subcategory" data-error="الرجاء اختيار قيمة القرض">
							<option value="">قم باختيار قيمة القرض</option>
						</select>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>

				   <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="address_apply" name="address_apply" placeholder="عنوان  السكن" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF1-9-\s\,]{3,50}" data-error="الرجاء ادخال  العنوان كامل">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="job_apply" name="job_apply" placeholder="الوظيفه الحاليه " pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF\s]{3,30}"  data-error="الرجاء ادخال المسمى الوظيفي ">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>


                  <div class="col-md-12">
                      <p class="ar-txt"><b>الضمانات المقترحة (إختر كل ما ينطبق)</b></p>
                  </div>



                  <div class="col-md-12">
            				<div class="form-check form-check-inline" style="float:right">
            					<input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee1" value="guarantee1">
                      <label class="form-check-label" for="guarantee1"> كفيل واحد/عدة كفلاء ذوي وضع مادي مناسب ومرفق طيه صورة عن بطاقاتهم الشخصية وإثباتات دخولهم </label>
                    </div>
                  </div>

				          <div class="col-md-12">
				  			    <div class="form-check form-check-inline" style="float:right">
                			<input class="form-check-input" type="checkbox" name="guarantee" id="guarantee2" value="guarantee2">
                			<label class="form-check-label" for="guarantee2"> شيكات ضمان / سداد مقدمة من :</label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options1" value="option1">مني شخصيا </label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options2" value="option2">كفيل / الكفلاء  </label>
                     <label><input class="form-check-input" type="radio" name="Options" id="Options3" value="option3">طرف ثالث </label>
				            </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline" style="float:right">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee3" value="guarantee3">
                    <label class="form-check-label" for="guarantee3">تحويل شهري من راتبي في بنك</label>
                    <input type="text" class="form-check-input" id="bankname1" name="bankname1">
                    <label class="form-check-label" for="bankname1">وقيمة الراتب الصافي:</label>
                    <input type="text" class="form-check-input" id="salaryvalue1" name="salaryvalue1">
					<label class="form-check-label" for="bankname1">دينار</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline" style="float:right">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee4" value="guarantee4">
                    <label class="form-check-label" for="guarantee">تحويل دوري من راتب الكفيل / الكفلاء في بنك</label>
                    <input type="text" class="form-check-input" id="bankname2" name="bankname2">
                    <label class="form-check-label" for="bankname2">حسب النموذج المقرر.</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline" style="float:right">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee5" value="option5">
                    <label class="form-check-label col-sm-5" for="guarantee5">الضمانات الأخرى التالية:</label>
                    <input type="text" class="form-check-input col-sm-10" id="others" name="others">
                  </div>
                </div>
			-->
<div class="col-md-12">
<p class="ar-txt"><br/><b> لمعرفة شروط تقديم الطلب  </b><a class="btn-link" data-target="#conditions" data-toggle="modal" href="#" style="color:#61D2B4"><b>يرجى الضغط هنا </b></a>.</p>
</div>
<div class="col-md-12">
<div class="form-check form-check-inline" style="float:right">
<input class="form-check-input" id="invalidCheck" type="checkbox" value=""/>
<label class="form-check-label" for="invalidCheck">أقر أننى قرأت وتفهمت كافة شروط تقديم الطلب وتعتبر موافقتي عليها بمثابة إقرار نهائي غير قابل للطعن أو الرجوع فيه  مستقبلا . </label>
</div>
<br/>
</div>
<div class="col-md-12">
<div class="help-block with-errors" id="check_text"></div>
</div>
<div class="col-md-10">
<div class="submit-button text-center">
<button class="btn btn-common" id="submit" type="submit">تقدم بطلبك</button>
<div class="h3 text-center hidden" id="msgSubmit-apply"></div>
<div class="clearfix"></div>
</div>
</div>
</div></form>
</div>
</div>
</div>
</div>

</section>
<!-- conditions Modal -->
<div aria-hidden="true" class="modal fade ar-dir" id="conditions" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body" style="color:black;">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row ar-txt">
<div class="col-sm-12">
<h4>إقرار</h4>
<hr/>
</div>
<div class="container">
<p><b>أولا </b></p>
<p>أن كامل المعلومات في ملف هذا الطلب وعلى كل صفحة من صفحاته (قبل هذه الصفحة وبعدها) صحيحة وتمثل الواقع وأن تقديم أي معلومات مغلوطة بقصد أو بغير قصد, سوف تؤدي إلى رفض الطلب مع احتفاظ الإبداع "في جميع الأحوال" بحق الموافقة على القرض كما هو أو تخفيض أو رفض القرض دون ان يكون لنا حق الاعتراض على ذلك .</p>
<p><b>ثانيا</b></p>
<p> نفوض شركة ابداع البحرين للتمويل متناهي الصغر بالتحقق من صحة المعلومات المقدمة في هذا الطلب أو مسار التمويل الممنوح لنا لاحقا ومن أي مصدر كان دون
أن يحق لنا الاعتراض على ذلك اتجاه الإبداع و/أو أي جهة كانت ونتنازل عن السرية المصرفية بهذا الخصوص ويشمل هذا التفويض الاستفسار عنا من
شركة "بنفت" أو من أي جهة أمنية و/أو حكومية و/أو مدنية و/أو خاصة و/أو عامة سواءا أكانت داخلية أم خارجية وكما ونسمح لموظفي الإبداع أو من يفوضهم
بذلك بزيارتي و/أو زيارة الكفلاء في أماكن تواجدهم في أي وقت قبل منح القرض و/أو بعد ذلك..
<p><b>ثالثا </b></p>
<p>نوافق  على دفع رسوم لتقديم الطلب -غير قابلة للاسترداد- حتى في حال رفض الطلب إضافة للرسوم الإدارية ورسوم تمرير الطلب  Processing Fees التي سيقتطعها الإبداع مقدما وغير القابلة للاسترداد بمجرد صرف القرض لنا بموجب شيك صادر من الإبداع. كما ونقر بأنه  لا يحق  لنا المطالبة باسترجاع أي من المستندات المرتبطة بهذا الطلب حتى لو تم رفض الطلب.</p>
<p><b>رابعا </b></p>
<p>في حال الموافقة على التمويل, نوافق على الالتزام بجميع السياسات والإجراءات المتبعة من قبل الإبداع بما فيها السداد على الوقت, ودفع غرامات التأخير بواقع
(6 دينار بحريني) عن كل يوم تأخير في سداد أي دفعة من دفعات القرض المقررة في الأوقات المحددة من قبل البنك.</p>
<p><b>خامسا </b></p>
<p>نقر في حال الرغبة بالحصول على أية خدمات من الإبداع مرتبطة بهذا القرض, أن نسدد الرسوم المحددة من قبل البنك (والمنشورة داخل الفرع بشكل واضح) دون أي اعتراض على ذلك.</p>
<p><b>سادسا </b></p>
<p>نعطي شركة ابداع البحرين للتمويل متناهي الصغر و/او المؤسسات التابعة له و/أو المؤسسات المتعاونة معه و/أو الجهات التي تملك الحق في استخدام المعلومات
والوثائق التي قدمناها في هذا الطلب في أية نشرات تسويقية و/أو ترويجية لنشاطات الإبداع و/أو تلك المؤسسات والجهات حتى بعد انتهاء القرض وسداد كافة
دفعاته. وكما ونعطي الإبداع الحق في الحصول على صور تخصنا و/أو تخص المشروع لغايات استخدامها في التسويق والترويج لحساب الإبداع و/أو تلك
المؤسسات والجهات. ونقر بأنه يحق للبنك و/او تلك المؤسسات والجهات الاستمرار في استخدام تلك الصور والبيانات وقصص نجاحاتنا في أية مواد تسويقية
و/أو دعائية و/أو وثائقية و/أو أي طريقة أخرى مهما كانت وبدون تحديد لمدة حق هذا الاستخدام قبل و/او أثناء و/او بعد انتهاء هذا القرض.</p>
<p><b>سابعا </b></p>
<p> تعطي شركة الإبداع البحرين للتمويل متناهي الصغر الحق في تزويد أي جهة رسمية أو خاصة سواء أكانت محلية أو خارجية بأية معلومات وردت في هذا الطلب,
ونخص بالذكر أحقية الإبداع المطلقة في تزويد شركة "بنفت" و/أو أي جهة حكومية و/أو شبه حكومية و/أو جهة متعاونة و/أو جهة ممولة و/او غيرها من الجهات
بتلك المعلومات ونتحمل أي تبعات في حال تبين أن هذه المعلومات غير حقيقية أو متضاربة مع تلك المعلومات الموجودة لدى تلك الجهات.</p>
<p><b>ثامنا </b></p>
<p>للتعرف على رسوم تقديم طلبات القروض ورسوم الخدمات الاخرى التي يقدمها الإبداع الرجاء<a href="UserFiles/files/Service%20Fees_new%202020-Ar22.pdf#toolbar=0&amp;navpanes=0scrollbar=0" target="_blank" type="application/pdf">الضغط هنا</a> </p>
</p></div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>

<!-- Application Section End -->
<!-- Success  Stories Section -->
<section class="section" id="portfolios">
<!-- Container Starts -->
<div class="container">
<div class="section-header">
<h2 class="section-title">قصص النجاح</h2>
<hr class="lines"/>
<p class="section-subtitle">تعرف على الناجحين <br/> اكتشف تجارب الناجحين معنا</p>
</div>
<div class="ar-dir">
<!-- Success  Stories Controller/Buttons -->
<div class="controls text-center">
<a class="filter active btn btn-common" data-filter="all">
              الكل
            </a>
<a class="filter btn btn-common" data-filter=".stories">
              قصص النجاح
            </a>
<a class="filter btn btn-common" data-filter=".stories_video">
              قصص النجاح المصورة
            </a>
</div>
<!-- Success  Stories Controller/Buttons Ends-->
<!--  Recent Success  Stories -->
<div class="row" id="portfolio">
<ul class="clearfix story-list">
<!--  Story_1 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_1.jpg">
<a class="overlay lightbox" data-target="#story_1" data-toggle="modal" href="#"><h1> وهيبه خليل</h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story 1  End-->
<!--  Story_4 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_4.jpg">
<a class="overlay lightbox" data-target="#story_4" data-toggle="modal" href="#"><h1> محمد عباس </h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_4  End-->
<!--  Story_3 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_3.jpg">
<a class="overlay lightbox" data-target="#story_3" data-toggle="modal" href="#"><h1>  فاطمة محمد علي</h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_3  End-->
<!--  Story_5 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_5.jpg">
<a class="overlay lightbox" data-target="#story_5" data-toggle="modal" href="#"><h1> سوسن محمد </h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_5  End-->
<!--  Story_7 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_7.jpg">
<a class="overlay lightbox" data-target="#story_7" data-toggle="modal" href="#"><h1> عيسى علي</h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_7 End -->
<!--  Story_9 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_9.jpg">
<a class="overlay lightbox" data-target="#story_9" data-toggle="modal" href="#"><h1>حميد عيد  </h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_9 End -->
<!--  Story_10 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_10.jpg">
<a class="overlay lightbox" data-target="#story_10" data-toggle="modal" href="#"><h1> حمد شبيب  </h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_10 End -->
<!--  Story_6 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_6.JPG">
<a class="overlay lightbox" data-target="#story_6" data-toggle="modal" href="#"><h1> أحمد جوهر</h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_6 End -->
<!--  Story_2 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_2.jpg">
<a class="overlay lightbox" data-target="#story_2" data-toggle="modal" href="#"><h1> ساهرة إبراهيم </h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_2  End-->
<!--  Story_8 -->
<div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
<div class="portfolio-item">
<div class="shot-item">
<li>
<img alt="" src="assets/img/story/story_8.png">
<a class="overlay lightbox" data-target="#story_8" data-toggle="modal" href="#"><h1>حسن محمد</h1></a>
</img></li>
</div>
</div>
</div>
<!--  Story_8  End-->
</ul>
</div>
</div>
<button class="btn btn-common more-stories" style="pointer-events: all; cursor: pointer;font-size: 18px; font-weight: bold; display:block; margin: 2px auto;">مزيد من القصص</button>
</div>

</section>
<!-- Container Ends -->
<!-- STORIES POPUP START -->
<!--  Story 1  popup-->
<div aria-hidden="true" class="modal fade ar-dir" id="story_1" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>أشهى الحلويات  من  وهيبه خليل </h4>
<hr/>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="500px" src="https://www.youtube.com/embed/isdSslF8FMI" width="100%"></iframe>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
</div>
<!--  Story 1  popup end-->
<!-- srory_2 popup  -->
<div aria-hidden="true" class="modal fade ar-dir" id="story_2" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>تحويل الموهبة إلى مشروع ناجح</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_story_2">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/story/story_2.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>السيدة ساهرة إبراهيم اختارت طريق العمل الحر لتحقيق أحلامها في إنشاء مشروعها الخاص. كانت ساهرة مولعة بالطبخ منذ صغرها، وبمرور الوقت تمكنت من تطوير الشغف بالطبخ إلى مهنة، فبعد تخرجها عملت على تأسيس مشروع تجاري قائم على تجهيز طبخات متميزة والترويج لها بين الأهل والأصدقاء.</p>
<p>ساهرة الآن معروفة بشكل واسع في أوساط المجتمع البحريني بطبخها الشعبي ذو المذاق الفريد من نوعه، وهي صاحبة حساب رشة وبهار rashat_bharr على الإنستغرام الذي تروج من خلاله لأشهى المأكولات الشعبية.</p>
<p>اقترضت ساهرة من أبداع البحرين 600 دينار لتطوير مشروعها من خلال شراء التجهيزات اللازمة للتوسع في المشروع وتنمية أرباحه، ومن بين تلك التجهيزات فرن جديد وأجهزة كهربائية.</p> </div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!--  Story 2  popup end-->
<!--  Story_3  popup-->
<div aria-hidden="true" class="modal fade ar-dir" id="story_3" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>قصة نجاح  فاطمة</h4>
<hr/>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="500px" src="https://www.youtube.com/embed/XjfWo_Qwgz8" width="100%"></iframe>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
</div>
<!--  Story 3  popup end-->
<!--  Story_5  popup-->
<div aria-hidden="true" class="modal fade ar-dir" id="story_5" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>قصة نجاح  سوسن محمد </h4>
<hr/>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="500px" src="https://www.youtube.com/embed/DSyqpqr-P38" width="100%"></iframe>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
</div>
<!--  Story 5  popup end-->
<!-- srory_4 popup  -->
<div aria-hidden="true" class="modal fade ar-dir" id="story_4" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>شراكة في الانجاز</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_story_4">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_story_4"></li>
<li data-slide-to="1" data-target="#slides_story_4"></li>
<li data-slide-to="2" data-target="#slides_story_4"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/story/story_4.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/story/story_4.1.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-75" src="assets/img/story/story_4.2.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_story_4" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_story_4" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>محمد ماهر عباس شاب بحريني لديه طموح كبير لتحسين أوضاعه المادية والارتقاء بمستواه المعيشي، ففكر بإنشاء مشروع خاص يدعم الراتب الذي يحصل عليه محمد من وظيفته الأساسية في إحدى شركات القطاع الخاص.</p>
<p>في العام 2016, بدأ محمد مشروع بيع حقائب وأحذية بشكل متنقل في الأسواق التجارية، وأدرك أهمية توفير سيولة لتنفيذ فكرة المشروع أولا، ثم التوسع فيه ثانيا، فكان أن حصل على ثلاثة قروض من أبداع البحرين على فترات زمنية مختلفة بقيمة 300 دينار و400 دينار و600 دينار.</p>
<p>وقد أسهم التزام محمد بسداد دفعات القروض في موعدها في زيادة اعتماديته وموثوقيته لدى البنك، لتتحول العلاقة من علاقة بنك وعميل إلى علاقة شراكة ونجاح تتطور باستمرار.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!--  Story_4 popup End-->
<!-- srory_6 popup  -->
<div aria-hidden="true" class="modal fade ar-dir" id="story_6" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>نادي رياضي في المنزل</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_story_6">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/story/story_6.JPG"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>أحمد غانم جوهر شاب بحريني آخر استفاد من شغفه وخبراته وإمكانياته في مجال الرياضة في افتتاح نادي رياضي في منزله بمدينة حمد، حيث يقوم بتدريب منتسبي المركز على الملاكمة وبناء الأجسام.</p>
<p>يستقبل احمد في النادي مختلف الشرائح العمرية خاصة الشباب، ويؤمن أنه يسهم بذلك في تعزيز الصحة العامة وملئ الوقت بما هو نافع للجسم والعقل، إضافة إلى تكريس التنافسية والأخلاق.</p>
<p>أثبت مشروع أحمد الرياضي نجاحه، ويسعى أحمد إلى تطوير هذا المشروع من مختلف النواحي، فيما شِركة ابداع البحرين جاهزة على الدوام لدعم عملائه المتميزين.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!--  Story_6  End-->
<!-- srory_7 popup  -->
<div aria-hidden="true" class="modal fade ar-dir" id="story_7" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4> قصة نجاح عيسى علي</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_story_7">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_story_7"></li>
<li data-slide-to="1" data-target="#slides_story_7"></li>
<li data-slide-to="2" data-target="#slides_story_7"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/story/story_7.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/story/story_7.1.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-75" src="assets/img/story/story_7.2.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_story_7" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_story_7" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>مواصلة نجاح المشروع تتطلب التطوير الدائم في الأدوات والمعدات، وهذا ما يدركه تماما عيسى ناجي محمد علي الذي يسكن في مدينة حمد ويملك كراج في منطقة الهملة لتصليح السيارات والدراجات النارية، وصاحب الخبرة التي تفوق الخمس سنوات في تصليح وبرمجة كمبيوترات السيارات. </p>
<p>وقد رغب عيسى في توسعة مشروعة وإضافة نوع جديد من المعدات المتعلقة بسيارات الهونداي، لذلك أعرب عن رغبته في تمويل هذه التوسعة من خلال قروض أبداع البحرين ، فكان له ما أراد بحصوله على 2000 دينار بحرنيي يعمل الآن على سدادها للبنك وفق أقساط مريحة وبالتزام تام.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!--  Story_7  End-->
<!--  Story_8  popup-->
<div aria-hidden="true" class="modal fade ar-dir" id="story_8" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>قصة نجاح حسن محمد</h4>
<hr/>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="500px" src="https://www.youtube.com/embed/g5VhG1_LWbA" width="100%"></iframe>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
</div>
<!--  Story_8  End-->
<!-- srory_9 popup  -->
<div aria-hidden="true" class="modal fade ar-dir" id="story_9" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>عندما تصبح هوايتك مهنتك</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_story_9">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_story_9"></li>
<li data-slide-to="1" data-target="#slides_story_9"></li>
<li data-slide-to="2" data-target="#slides_story_9"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/story/story_9.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/story/story_9.1.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-75" src="assets/img/story/story_9.2.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_story_9" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_story_9" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>هل كل أنواع المشروعات الخاصة تتطلب أفكار وخطط عمل ورأس مال كبير وموظفين ومعقبين و...؟! قطعاً لا.</p>
<p>حميد حسن علي عيد أحد عملاء أبداع البحرين يعمل في تربية الطيور وتفريخها وبيعها، وهذا عمل لا يعني الربح فقط، وإنما يتضمن كما كبيرا من المتعة أيضا، فلا أجمل من التعامل مع الطيور، وقليل من الناس الذين تمكنوا من تحويل هواياتهم إلى عمل.</p>
<p>احتاج حسن إلى مبلغ من المال من أجل توسعة مشروعه وشراء المزيد من الطيور، وتقدم بطلب قرض من أبداع البحرين الذي ساهم في توفير التمويل اللازم له.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!--  Story_9  End-->
<!-- srory_10 popup  -->
<div aria-hidden="true" class="modal fade ar-dir" id="story_10" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<h4>إضافة نشاط</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_story_10">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/story/story_10.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>حمد عباس شبيب يسكن في عالي ويملك مزرعة لتأجير الخيول وتربية المواشي في منطقة كرانة، مستثمرا بذلك خبرته في مجال الخيول تحديدا حيث يدرب الأطفال على ركوبها ويزودهم بالتعليمات والإرشادات الأساسية اللازمة.</p>
<p>مؤخرا أراد حسن توسعة مشروعه وإضافة نشاط جديد له وهو تربية الأغنام، وهو ممتن الآن لمبادرة أبداع البحرين في دعمه بجزء من المبلغ اللازم للانطلاق في النشاط الجديد ومساعدته في تحقيق أهدافه وزيادة إنتاجيته.</p> </div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!--  Story_10  End-->
<!-- Success  Stories Section Ends -->
<!-- Counter Section Start -->
<div class="counters section ar-dir" data-stellar-background-ratio="0.5">
<div class="container">
<p style="bottom: 0;color: white;font-size:11px;text-align: center;"> اخر تحديث لهذه الأرقام تم ب 05\09\2023 </p>
<div class="row">
<div class="col-sm-6 col-md-3 col-lg-3 hoverable">
<div class="facts-item normal">
<div class="icon">
<i class="lnr lnr-user"></i>
</div>
<div class="fact-count">
<h3><span class="counter">20,704</span></h3>
<h4>عميل</h4>
</div>
</div>
<div class="facts-item hover">
<div class="icon">
<i class="fa fa-male"></i>
</div>
<div class="fact-count">
<h3><span class="counter">11,585</span></h3>
<h4>رجال </h4>
</div>
<div class="icon">
<i class="fa fa-female"></i>
</div>
<div class="fact-count">
<h3><span class="counter">9,119</span></h3>
<h4>نساء</h4>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 hoverable">
<div class="facts-item normal">
<div class="icon">
<i class="lnr lnr-briefcase"></i>
</div>
<div class="fact-count">
<h3><span class="counter">20,704</span></h3>
<h4>قرض </h4>
</div>
</div>
<div class="facts-item hover">
<div class="icon">
<i class="fa fa-folder-open"></i>
</div>
<div class="fact-count">
<h3><span class="counter">2,697</span></h3>
<h4>القائمة  </h4>
</div>
<div class="icon">
<i class="fa fa-folder"></i>
</div>
<div class="fact-count">
<h3><span class="counter">18,007</span></h3>
<h4>المسددة</h4>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 hoverable">
<div class="facts-item normal">
<div class="icon">
<i class="lnr lnr-layers"></i>
</div>
<div class="fact-count">
<h3><span class="counter">23,312,089</span></h3>
<h4>قيمة القروض المصروفة</h4>
</div>
</div>
<div class="facts-item hover">
<div class="icon">
<i class="fa fa-folder-open"></i>
</div>
<div class="fact-count">
<h3><span class="counter">1,566,396</span></h3>
<h4>القائمة </h4>
</div>
<div class="icon">
<i class="fa fa-folder"></i>
</div>
<div class="fact-count">
<h3><span class="counter">21,745,693</span></h3>
<h4>المسددة</h4>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3">
<div class="facts-item">
<div class="icon">
<i class="lnr lnr-pie-chart"></i>
</div>
<div class="fact-count">
<h3><span class="counter"> 94 </span>  %</h3>
<h4>نسبة السداد</h4>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Counter Section End -->
<!-- Team section Start -->
<section class="section" id="team">
<div class="container">
<div class="section-header">
<h2 class="section-title">فريق الإبداع</h2>
<hr class="lines"/>
<p class="section-subtitle ar-dir">نكون معا، هذه هي البداية، والبقاء معا هو التقدم، والعمل معا هو النجاح. </p>
</div>
<div class="row ar-dir">
<div class="col-lg-3 col-md-6 col-xs-12" style="padding-bottom: 20px;">
<div class="single-team">
<a data-target="#Khaled" data-toggle="modal" href="#"> <img alt="" src="assets/img/team/Khaled.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Khaled" data-toggle="modal" href="#"><h4 class="team-title">خالد الغزاوي</h4>
<p>الرئيس التنفيذي</p></a>
<a class="btn btn-link" data-target="#Khaled" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="single-team">
<a data-target="#Yousef" data-toggle="modal" href="#"> <img alt="" class="img-fulid" src="assets/img/team/Yousef.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Yousef" data-toggle="modal" href="#"><h4 class="team-title">يوسف قمبر</h4>
<p>مسؤول موارد بشرية وإدارية</p></a>
<a class="btn btn-link" data-target="#Yousef" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="single-team">
<a data-target="#ali" data-toggle="modal" href="#"> <img alt="" class="img-fulid" src="assets/img/team/ali.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#ali" data-toggle="modal" href="#"><h4 class="team-title"> علي عيسى محمد  </h4>
<p>مسؤول تكنولوجيا المعلومات</p></a>
<a class="btn btn-link" data-target="#ali" data-toggle="modal" href="#" style="color:#61D2B4"> السيرة الذاتية </a>
</div>
</div>
</div>
</div>
<!--	<div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#Ghaith"><img class="img-fulid" src="assets/img/team/Ghaith.jpg" alt="">
              <div class="team-details"></a>
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#Ghaith"><h4 class="team-title"> غيث المنعم </h4>
                  <p>مدير العمليات</p></a>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Ghaith" style="color:#61D2B4">السيرة الذاتية </a>
                </div>
              </div>
            </div>
		</div> -->
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="single-team">
<a data-target="#hana" data-toggle="modal" href="#"><img alt="" src="assets/img/team/hana.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#hana" data-toggle="modal" href="#"><h4 class="team-title"> هناء سلمان </h4>
<p> مسؤول أول أتمان </p></a>
<a class="btn btn-link" data-target="#hana" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
<!--    <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#ِAhmed"><img src="assets/img/team/ِAhmad2.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#ِAhmed"><h4 class="team-title"> أحمد العرادي </h4>
                  <p> مسؤل مخاطر </p></a>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#ِAhmed" style="color:#61D2B4">السيرة الذاتية </a>
                </div>
              </div>
            </div>
          </div> -->
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="single-team">
<a data-target="#Mashael" data-toggle="modal" href="#"><img alt="" src="assets/img/team/Mashael.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#Mashael" data-toggle="modal" href="#"> <h4 class="team-title">مشاعل صالح</h4>
<p>مدير مالي</p></a>
<a class="btn btn-link" data-target="#Mashael" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="single-team">
<a data-target="#hamza_new" data-toggle="modal" href="#"><img alt="" class="img-fulid" src="assets/img/team/hamza_new.jpg"/></a>
<div class="team-details">
<div class="team-inner">
<a data-target="#hamza_new" data-toggle="modal" href="#"><h4 class="team-title">حمزة القطيشات</h4>
<p>مسؤول أول تحصيل </p></a>
<a class="btn btn-link" data-target="#hamza_new" data-toggle="modal" href="#" style="color:#61D2B4">السيرة الذاتية </a>
</div>
</div>
</div>
</div>
</div>
</div>

</section>
<!--Team Popup Start -->
<div aria-hidden="true" class="modal fade ar-dir" id="Khaled" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/Khaled.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4> خالد الغزاوي</h4>
<hr/>
<div class="box_shadow">
<p>في 2014/04/01، انضم د. خالد وليد الغزاوي كرئيس تنفيذي لشركة الإبداع للتمويل متناهي الصغر في البحرين حاملاً معه ما يزيد عن 19 عاماً من الخبرة في مجال التمويل الأصغر وأكثر من ثمانية سنوات من الخبرة في القطاع المالي والمصرفي.</p>
<p>د. الغزاوي يحمل شهادة دكتوراه مهنية في إدارة الأعمال الدولية من الولايات المتحدة الأمريكية، ودرجتي الماجستير والبكالوريوس في إدارة الأعمال والتمويل من الأردن، مدرّب مجاز في عدة مجالات في علم التمويل الأصغر، مثل التخطيط للأعمال، إدارة التعثر، ضبط معدل الفائدة، المحاسبة، إدارة الأخطار التشغيلية والتحليل المالي. </p>
<p> قبل انضمامه لأسرة أبداع البحرين ، شغل د. الغزاوي منصب المدير العام لشركة جرامين-جميل للتمويل الأصغر محدودة المسؤولية في دبي – الإمارات العربية المتحدة، وقبلها كمستشار مقيم لصندوق الخليج العربي للتنمية (الأجفند) في لبنان، حيث قاد هناك الجهود الرامية لإنشاء شركة الابداع للتمويل الأصغر في لبنان، واستطاع تدريب وبناء كفاءة فريق من العاملين وإطلاق أنشطة البنك التمويلية للفقراء ومحدودي الدخل خلال فترة لم تتجاوز 90 يومًا. </p>
<p>قبل ذلك مباشرة، وبين عامي 2009 و2012، عمل د. الغزاوي كرئيس تنفيذي للمؤسسة الأولى للتمويل متناهي الصغر في مصر والتي تتبع لوكالة الأغا خان للتمويل متناهي الصغر ومقرها جنيفا – سويسرا، ومستشار لشركة جودة التمويل الدولية والتي تعمل من القاهره في الفترة بين 2007 و2009، وفي الفترة من بداية عام 2006 وحتى منتصف 2007، عمل د. الغزاوي في الولايات المتحدة الأمريكية كمدير لبرنامج الشرق الأوسط الكبير في بنوك القرية العالمية (فينكا)، وقبلها مباشرة وبين عامي 1999 و 2005، كان د. الغزاوي أحد المؤسسين والرئيس التنفيذي للشركة الأردنية لتمويل المشاريع الصغيرة (تمويلكم) وهي إحدى الشركات الرائدة في مجال التمويل الأصغر في الأردن تملكها بالكامل مؤسسة الملكة نور الحسين ومولتها الوكالة الأميركية للتنمية الدولية، وفي عهده أصبحت (تمويلكم) واحدة من أهم الشركات المقدمة لخدمات التمويل الأصغر في الأردن، وحازت جوائز عالمية مرموقة في مناسبات مختلفة نظير شفافيتها وتفانيها في الحدّ من الفقر والحاكمية الرشيدة.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Ghaith" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/Ghaith.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4> غيث المنعم</h4>
<hr/>
<div class="box_shadow">
<p>يعمل السيد غيث في صناعة التمويل الأصغر منذ بدايات العام 2011 عندما انضم لأسرة الإبداع للتمويل متناهي الصغر في سوريا في 1 أبريل 2011، وتدرج في عدة مناصب وظيفية حتى وصل إلى منصب مدير فرع بداية عام 2016. </p>
<p>بدأ غيث مسيرته في البنك كأخصائي قروض، ثم جرى ترفيعه إلى موقع مسؤول مجموعة في فرع البنك في مجمع "ريادات" بمنطقة عالي، حيث كان الفرع قيد التأسيس، ثم تولى إدارة الفرع عند افتتاحه نهاية عام 2016، وأخيراً تولى منصب مدير أقليمي مسؤول عن فرعي ريادات ومدينة حمد منذ ديسمبر 2017. </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="hana" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/hana.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>هناء سلمان</h4>
<h4>مسؤول أول أتمان</h4>
<hr/>
<div class="box_shadow">
<p> 
		   انضمت الآنسة هناء سلمان لشركة ابداع البحرين في اغسطس 2016 كأخصائية اقراض في دائرة العمليات، وسرعان ما أثبتت نفسها للعمل بكل اخلاص وتفاني، وبدأت هناء بالتدرج في عملها لتتسلم مهام مشرف مجموعة في مايو 2017 حيث تميزت بإتقانها للمهارات القيادية واستمرت في التدرج وبذل ما في وسعها في نفس الدائرة إلى أن وصلت إلى منصب مدير فرع في مايو 2018، ولكونها متميزة وحريصة على تحقيق أهدافها تشغل اليوم هناء منصب مسئول أول للائتمان حيث قد عينت بذلك المنصب منذ أكتوبر 2019. 
		   </p>
<p>
           هناء من الفئة المخلصة والمثابرة لعملها كما تطمح دائماً لتحقيق اهدافها من خلال تميزها وحرصها على أن تكون دائماً لأفضل مستوى، حيث أنها اضافت الكثير لهذه الشركة لكونها من الاشخاص الذين لديهم ولاء كبير لعملائهم
		   </p>
<p>
		   الآنسة هناء تحمل شهادة البكالوريوس في إدارة الاعمال من الجامعة العربية المفتوحة تخصص النظم الادارية، وحصلت أيضا على العديد من الشهادات التدريبية التي تهتم بشكل أساسي في التمويل الأصغر، وخدمات الزبائن والادارة ومهارات القيادة. شاركت هناء في العديد من المحافل الدولية والعديد من الفعاليات التي تخدم الشركة والمجتمع البحريني كافة
		   </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Firas" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/Firas.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>فراس اسماعيل</h4>
<hr/>
<div class="box_shadow">
<p>السيد فراس  اسماعيل أردني الجنسية وحاصل على درجة البكالوريوس في الاقتصاد والعلوم الإدارية تخصص محاسبة من جامعة عمان الأهلية في المملكة الاردنية الهاشمية، وعلى درجة الماجستير في المحاسبة من جامعة عمان العربية والعديد من الشهادات، الدورات والورشات التدريبية في مجال المحاسبة والادارة والتدقيق والتدريب.</p>
<p>تدرج السيد فراس في العديد من المناصب خلال حياته المهنية، ففي بداية 1996 عمل كمحاسب أول في أحدى شركات الهندسة المرموقة  في دولة الامارات العربية المتحدة، وبين عامي 1999 و 2003 عمل كمدقق خارجي ومحاسب أول في شركة طلال ابو غزالة لتدقيق الحسابات. بين عامي 2003 وحتى 2006، شغل منصب مدقق داخلي في صندوق اقراض المرأة (وهي احدى اكبر شركات التمويل الاصغر في الأردن) ثم كمدير مالي لاحدى شركات الاستشارات المالية بين عامي 2006 و 2007، واخيرا ومنذ عام 2007 وحتى انضمامه الى اسرة الابداع، كان فراس المدير التنفيذي للشؤون المالية والادارية في احدى شركات تمويل المشاريع الصغيرة في الاردن "تمويلكم".</p>
<p>ان الخبرة الطويلة التي يملكها السيد فراس سواء في مجال التدريب، التدقيق الداخلي والخارجي او المحاسبة وفي القطاع المالي بشكل عام ستكون بلا ادنى شك مهمة للتطوير والتجديد واكتساب المهارات والخبرات التي ستغني الدائرة المالية والبنك ككل. </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Yousef" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/Yousef.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>يوسف قمبر</h4>
<hr/>
<div class="box_shadow">
<p>انضم السيد يوسف قمبر لأسرة أبداع البحرين منذ تأسيسه في يوليو 2009 كمنسق إداري في قسم الموارد البشرية والشئون الإدارية، ليتسلم في يوليو 2011 مهام سكرتير تنفيذي بمكتب الرئيس التنفيذي، وسكرتير لمجلس الإدارة، ثم تدرج في مكتب الرئيس التنفيذي حتى استلم مهام مدير مكتب الرئيس التنفيذي، وقد أظهر السيد يوسف مهارات متميزة في العمل واستمر في التدرج في الوظائف حتى استلامه منصب مشرف أول لقسم الموارد البشرية والشئون الإدارية في البنك في ابريل 2016. </p>
<p>يحمل السيد يوسف دبلوم متخصص من معهد البحرين للتدريب ويدرس حالياً في الجامعة العربية المفتوحة للحصول على درجة البكالوريوس في إدارة الأعمال، كما حضر العديد من المؤتمرات والدورات الاحترافية وحصل على العديد من الشهادات في مجال صناعة التمويل الأصغر وشهادات متخصصة في الموارد البشرية والشئون الإدارية. </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="ali" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/ali.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>علي عيسى محمد </h4>
<h4>مسؤول تكنولوجيا المعلومات</h4>
<hr/>
<div class="box_shadow">
<p>
			   يعمل السيد علي محمد في شركة ابداع البحرين منذ عام 2018 ويحمل شهادة دبلوم الوطنية من معهد البحرين في تخصص نظم المعلومات.
			   </p>
<p>
                عمل السيد علي قبل انضمامه الى اسرة أبداع البحرين في شركة المؤيد للمقاولات في قسم تقنية المعلومات لمدة تسع سنوات قبل ان ينظم الى اسرة أبداع البحرين بوظيفة داعم نظم معلومات، ثم تسلق السلم الوظيفي الى ان وصل الى منصب مسؤول اول تقنية المعلومات. كما حضر العديد من المؤتمرات والدورات الاحترافية وحصل على أكثر من رخصة عالمية في مجال تقنية المعلومات. 
			   </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="ِAhmed" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/ِAhmed.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4> أحمد العرادي </h4>
<h4> ضابط المخاطر والامتثال والقائم بأعمال M2RO </h4>
<div class="box_shadow">
<p>
			   يمتلك أحمد الخبرة الواسعة في مجال إدارة المخاطر، فقد عمل قبل انضمامه إلى أسرة أبداع البحرين
               في S2M Transaction GCC بمنصب ضابط مخاطر. كما شغل وظيفة ضابط مخاطر في
               Bahrain National Insurance Company (BNI) من 2015 حتى 2019. 
			   </p>
<p>
             السيد أحمد العرادي خريج بوليتكنك البحرين بدرجة بكالوريوس في العلوم المصرفية والمالية. كما ويدرس السيد
             أحمد حاليا للحصول على شهادة تخصصية في Professional Risk Manager (PRM) وهو
             حاصل على شهادة تخصصية في Associate Professional Risk Manager و
             Foundation of Financial Risk
			   </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="Mashael" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/Mashael.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>مشاعل صالح</h4>
<hr/>
<div class="box_shadow">
<p>تحمل الآنسة مشاعل عدنان صالح شهادة البكالوريوس في المحاسبة من جامعة بوليتكنيك البحرين، وقد عملت في بنك سيتي الاسلامي الاستثماري لمدة سنتين قبل ان تنضم لأسرة أبداع البحرين بوظيفة محاسب، وما لبثت أن ترقت خلال فترة وجيزة نظراً لكفائتها وعملها المتميز إلى منصب المحاسب الرئيسي للبنك اعتباراً من الربع الأول من عام 2018، وقد حضرت الآنسة مشاعل دورات متعددة في العمل المصرفي والإدارة المالية والتخطيط المالي.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade ar-dir" id="hamza_new" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<img alt="" src="assets/img/team/hamza_new.jpg" style="width:100%;"/>
</div>
<div class="col-sm-12 col-md-12 col-lg-6">
<h4>حمزة القطيشات</h4>
<hr/>
<div class="box_shadow">
<p>يعمل السيد حمزه القطيشات في بتك الأبداع منذ مارس 2015، وتدرج في عدة مناصب وظيفية حتى وصل إلى منصب مسؤول تحصيل اول بداية عام 2018.</p>
<p>بدأ حمزه مسيرته في البنك كأخصائي قروض (ضابط قروض)، ثم تم تحويله الى قسم التحصيل (ضابط تحصيل داخلي)، وقد أظهر السيد حمزه مهارات متميزة في العمل حتى استلامه مسؤول تحصيل في فرع عالي ثم جرى ترفيعه إلى مسؤول تحصيل اول. كما حضر العديد من المؤتمرات والدورات الاحترافية وحصل على العديد من الشهادات في مجال صناعة التمويل الأصغر.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Team Popup End -->
<!-- Team section End -->
<!-- testimonial Section Start -->
<div class="section" data-stellar-background-ratio="0.1 ar-dir" id="testimonial" style="direction:ltr !important;">
<div class="container">
<div class="row justify-content-md-center">
<div class="col-md-12">
<div class="touch-slider owl-carousel owl-theme">
<div class="testimonial-item">
<img alt="Client Testimonoal" src="assets/img/team/Khaled.jpg">
<div class="testimonial-text">
<p>الهدف من إنشاء أبداع البحرين خدمة البحرينيين الشرفاء ممن يمتلكون مشاريع صغيرة  <span class="fa fa-quote-right"></span><br/> أو ينوون بدء مشاريعهم وكل ذلك بهدف المساعدة على تحقيق رؤية البحرين الاقتصادية<br/> وأهداف التنمية المستدامة السبعة عشر والتي أقرتها الأمم المتحدة وتطوعت البحرين <br/> <span class="fa fa-quote-left"></span>  لتطبيقها   </p>
<h3>د. خالد الغزاوي</h3>
<span>الرئيس التنفيذي</span>
</div>
</img></div>
<div class="testimonial-item">
<img alt="Client Testimonoal" src="assets/img/board/Mona.jpg">
<div class="testimonial-text">
<p> تنعم كل امرأة بإمكانيات غير محدودة لتحقيق المستحيل   <span class="fa fa-quote-right"></span> <br/> <span class="fa fa-quote-left"></span>    إذا كان عندها الارادة والإيمان بقدراتها </p>
<h3>منى المؤيد</h3>
<span>رئيسة مجلس الادارة</span>
</div>
</img></div>
<!--     <div class="testimonial-item ">
                <img src="assets/img/team/Eman.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text ">
                  <p>خلال سنوات عملي في أبداع البحرين وجدت ان المرأة البحرينية &nbsp <span class="fa fa-quote-right"></span> <br><span class="fa fa-quote-left"></span>  &nbspخير مثال للعمل الجاد و المتميز و تسعى دائما للاعتماد على نفسها و إدارة عملها </p>
                  <h3>إيمان بوفرسن</h3>
                  <span>مسؤول إمتثال و رقابة </span>
                </div>
              </div>-->
<div class="testimonial-item">
<img alt="Client Testimonoal" src="assets/img/team/mohd_alhadad.png">
<div class="testimonial-text">
<p>نحرص دائما على الإرتقاء بخدماتنا إلى المستوى  <span class="fa fa-quote-right"></span> <br/> <span class="fa fa-quote-left"></span>    الذي يساعد عملائنا على تطوير مشاريعهم وزيادة دخلهم</p>
<h3>محمد الحداد</h3>
<span> مدير فرع </span>
</div>
</img></div>
</div>
</div>
</div>
</div>
</div>
<!-- testimonial Section End -->
<!-- News Section -->
<section class="section" id="blog">
<!-- Container Starts -->
<div class="container">
<div class="section-header">
<h2 class="section-title">اخبار الإبداع</h2>
<hr class="lines"/>
<!--<p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p> -->
</div>
<div class="row ar-dir ar-txt">
<ul class="clearfix news-list">
<!-- News23 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News23" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_23.jpg"/></a>
</div>
<div class="blog-item-text">
<br/><br/>
<p> الثلاثاء 7 يونيو 2022 </p>
<h3><a data-target="#News23" data-toggle="modal" href="#">الأمير عبد العزيز بن طلال آل سعود يزور شركة "الابداع البحرين"</a></h3>
<p>
	               زار صاحب السمو الملكي الأمير عبد العزيز بن طلال بن عبد العزيز آل سعود، رئيس مجلس إدارة برنامج الخليج العربي للتنمية "أجفند"؛ يرافق سمو
                    </p>
<a class="btn btn-link" data-target="#News23" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News21 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News21" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_21.jpg"/></a>
</div>
<div class="blog-item-text">
<br/><br/>
<p> الاثنين 30 اغسطس 2021 </p>
<h3><a data-target="#News21" data-toggle="modal" href="#">د. خالد الغزاوي: تطور سياسات الإئتمان لدى «الابداع» لتسريع الانتعاش الاقتصادي بالبحرين</a></h3>
<p>
	                كشف الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر الدكتور خالد وليد الغزاوي أن الشركة قامت مؤخرا بتطوير سياسات الإئتمان لديها وذلك بما يواكب مرحلة الانتعاش الاقتصادي والتجاري الذي تشهده مملكة البحرين بوادره حاليا بعد جائحة كورونا
                    </p>
<a class="btn btn-link" data-target="#News21" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News20 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News20" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_22.jpg"/></a>
</div>
<div class="blog-item-text">
<p> الاحد 8 اغسطس 2021 </p>
<h3><a data-target="#News20" data-toggle="modal" href="#">" د.خالد الغزاوي: تهيئة كوادر "الابداع" لمرحلة ما بعد الجائحة"</a></h3>
<p>قال الدكتور خالد وليد الغزاوي الرئيس التنفيذي لشركة "الابداع للتمويل متناهي الصغير" إن الشركة بدأت خطة طموحة لتدريب كوادرها على مساعدة العملاء البحرينيين أصحاب الشركات الصغيرة ومتناهية الصغر على استعادة أنشطة شركاتهم وحصتهم السوقية</p>
<a class="btn btn-link" data-target="#News20" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News19 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News19" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_20.jpg"/></a>
</div>
<br/><br/>
<div class="blog-item-text">
<p> الخميس 20 مايو 2021</p>
<h3><a data-target="#News19" data-toggle="modal" href="#">" &lt;&lt;الابداع للتمويل متناهي الصغر&gt;&gt; يعزز من الخدمات التمويلية بعد الجائحة  "</a></h3>
<p>
                  قال الرئيس التنفيذي لـ "الابداع للتمويل متناهي الصغر" الدكتور خالد وليد الغزاوي إنه يجري العمل حاليا على تطوير منظومة العمل الداخلي من أجل التأكد من الجاهزية لتقديم خدمات تمويلية تواكب الاحتياجات المستجدة للبحرينيين والبحرينيات أصحاب المشروعات متناهية الصغر</p>
<a class="btn btn-link" data-target="#News19" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News18 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News18" data-toggle="modal" href="#"><img alt="" src="assets/img/news/mona-khaled-nasser.jpg"/></a>
</div>
<br/><br/>
<div class="blog-item-text">
<p>السبت 6 فبراير 2021 </p>
<h3><a data-target="#News18" data-toggle="modal" href="#">"أبداع البحرين يهنئ السيدة منى المؤيد بمواصلة تصدرها قائمة "فوربس"</a></h3>
<p>
                  هنَّا أبداع البحرين للتمويل متناهي الصغر - البحرين رئيسة مجلس إدارته، منى يوسف المؤيد، بمناسبة حلولها في المرتبة الأولى بحرينيا والتاسعة عالميا ضمن قائمة فوربس لأقوى 100 سيدة أعمال بالشرق الأوسط،                    </p>
<a class="btn btn-link" data-target="#News18" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News17 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News17" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_17.jpg"/></a>
</div>
<div class="blog-item-text">
<p>الثلاثاء 27 مارس ٢٠١٩ </p>
<h3><a data-target="#News17" data-toggle="modal" href="#">أبداع البحرين يحقق أرباحا بلغت 306 آلاف دينار عام 2018 </a></h3>
<p>
	                أعلن أبداع البحرين للتمويل متناهي الصغر – البحرين تجاوز الأرباح الصافية للبنك 306 آلاف دينار عن السنة المالية المنتهية في 31 ديسمبر 2018 مقارنة بأرباح بقيمة 94 ألف دينار عام 2017 وبزيادة تجاوزت 227%، وذلك لعدة أسباب من بينها زيادة حجم الانتشار والعمليات التشغيلية، والتوسع في عدد وقيمة القروض المصروفة. وأوضح البنك أنه سيجري إعادة ضخ هذه الأرباح في رأس مال البنك بما يسهم في رفع عدد وقيمة القروض الممنوحة لذوي الدخل المحدود، وبما يساعد مزيدا من البحرينيين على إطلاق مشروعاتهم متناهية الصغر والصغيرة، ويخدم الاقتصاد الوطني وفقا لرؤية البحرين 2030.
                    </p>
<a class="btn btn-link" data-target="#News17" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News16 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News16" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_16.jpg"/></a>
</div>
<br/>
<div class="blog-item-text">
<p>السبت 23 مارس  2019 </p>
<h3><a data-target="#News16" data-toggle="modal" href="#">الغزاوي يستعرض تجربة البحرين في تطبيق التكنولوجيا في الخدمات المالية</a></h3>
<p>
                    استعرض الرئيس التنفيذي لشركة الإبداع للتمويل متناهي الصغر – البحرين الدكتور خالد وليد الغزاوي تجربة مملكة البحرين في مجال تطبيق التكنولوجيا المالية الحديثة في القطاع المصرفي البحريني، مضيفا أن أبداع البحرين يسعى للاستفادة من موقع البحرين كمركز إقليمي للتكنولوجيا المالية في تطبيق الحلول التقنية المبتكرة لتوفير خدمات مالية لعملائه بطريقة تضمن أعلى درجات اليسر والشفافية والفاعلية.
				    </p>
<a class="btn btn-link" data-target="#News16" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News15 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News15" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_vacancies.jpg"/></a>
</div>
<br/>
<div class="blog-item-text">
<p>الاثنين ٢٥ فبراير ٢٠١٩ - 01:15</p>
<h3><a data-target="#News15" data-toggle="modal" href="#"> «أبداع البحرين» يقدم فرصا وظيفية في «معرض التدريب والتعليم»</a></h3>
<p>
               شاركت شركة الإبداع للتمويل المتناهي الصغر في معرض البحرين للتدريب والتعليم ما قبل العمل 2019 الذي أقيم تحت رعاية جميل بن علي حميدان وزير العمل والتنمية الاجتماعية، إلى جوار نحو ستين جهة من القطاعين العام والخاص تعمل في مجال التعليم والتدريب والتوظيف.
                    </p>
<a class="btn btn-link" data-target="#News15" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News14 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News14" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_Sanjev.jpg"/></a>
</div>
<br/>
<div class="blog-item-text">
<p>الجمعة ١٥ فبراير ٢٠١٩ - 01:15</p>
<h3><a data-target="#News14" data-toggle="modal" href="#">الرئيس التنفيذي لبنك البحرين للتنمية عضوًا في مجلس إدارة ِشركة ابداع البحرين </a></h3>
<p>
                   إدارة ِشركة ابداع البحرين للتمويل المتناهي الصغر انضمام سانجيف بول الرئيس التنفيذي لبنك البحرين للتنمية إلى عضوية مجلس إدارته لما تبقى من دورة المجلس الحالية. يأتي انضمام بول إلى عضوية المجلس خلفًا للسيدة دلال اسماعيل التي مثلت بنك البحرين للتنمية على مجلس إدارة أبداع البحرين لأكثر من 5 سنوات.
					</p>
<a class="btn btn-link" data-target="#News14" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News13 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News13" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_shomol.jpg"/></a>
</div>
<br/>
<div class="blog-item-text">
<h3><a data-target="#News13" data-toggle="modal" href="#">"الإبداع" يستعرض بجنيف تجربة البحرين في تمكين المرأة والشباب اقتصادياً</a></h3>
<p>
                    شارك وفد من أبداع البحرين - البحرين للتمويل متناهي الصغر برئاسة رئيسة مجلس إدارة البنك منى المؤيد، وعضوية الرئيس التنفيذي د.خالد الغزاوي، بالمنتدى التنموي السابع لبرنامج الخليج العربي للتنمية "أجفند"، الذي أقيم في جنيف بسويسرا، حيث تم استعراض تجربة البحرين في تمكين المرأة والشباب اقتصادياً.
					</p>
<a class="btn btn-link" data-target="#News13" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News12 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News12" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_12.jpg"/></a>
</div>
<br/>
<div class="blog-item-text">
<h3><a data-target="#News12" data-toggle="modal" href="#">ممثلون عن 10 مؤسسات تمويل أصغر عربية يشاركون في ورشة عمل بالبحرين</a></h3>
<p>
                    استضافت مملكة البحرين ورشة عمل حول أحدث تقنيات صناعة التمويل الأصغر، بحضور 20 مشاركاً يمثلون عشرة مؤسسات تمويل أصغر عربية تمثل في أغلبها البنوك التابعة لبرنامج الخليج العربي للتنمية (أجفند) في كل من الأردن ولبنان وموريتانيا والسودان وسوريا والبحرين وسيراليون، إضافة إلى ممثلين عن مؤسسات تمويل مشاريع صغيرة لا تتبع للأجفند في الاردن والعراق.30.
                    </p>
<a class="btn btn-link" data-target="#News12" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News0 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News0" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_0.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News0" data-toggle="modal" href="#">تعاون مشترك بين أبداع البحرين ومكتب الأمم المتحدة لدعم التنمية المستدامة</a></h3>
<p>
                    وقَّع مكتب الأمم المتحدة بمملكة البحرين خطاب نوايا مع شركة الابداع للتمويل المتناهي الصغر، بهدف العمل بشكل مشترك في مجالات تعزيز أهداف التنمية المستدامة وأجندة الأمم المتحدة 2030.
                    </p>
<a class="btn btn-link" data-target="#News0" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News1 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News1" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_1.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News1" data-toggle="modal" href="#">"القصيبي القابضة" تقدم 100 ألف دينار بحريني دعما الى أبداع البحرين</a></h3>
<p>
                    أعلنت شركة الإبداع للتمويل متناهي الصغر – البحرين عن تقديم مجموعة القصيبي القابضة مبلغ 100 ألف دينار بحريني كتمويل اجتماعي من المجموعة وبدون أرباح، لدعم قدرة البنك على تقديم قروض لذوي الدخل المحدود من البحرينيين أصحاب المشروعات الناشئة.
					</p>
<a class="btn btn-link" data-target="#News1" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News2 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News2" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_2.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News2" data-toggle="modal" href="#">أبداع البحرين للتمويل متناهي الصغر يطلق قرضي "النجاح" و"التفوق"</a></h3>
<p>
                    أعلنت شركة الإبداع للتمويل متناهي الصغر – البحرين عن إطلاق منتجين إقراضيين جديدين تحت مسمى قرض "النجاح" وقرض "التفوق" ليضافا إلى قائمة المنتجات التمويلية التي يقدمها البنك للمواطنين البحرينيين ذوي الدخل المحدود وأصحاب المشاريع المنزلية والناشئة دون تعقيدات الضمانات التقليدية.
                    </p>
<a class="btn btn-link" data-target="#News2" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News3 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News3" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_3.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News3" data-toggle="modal" href="#"> أبداع البحرين " يعيد افتتاح فرعه بمدينة حمد بعد تطويره خدمةً للعملاء"</a></h3>
                    أعلنت شركة الإبداع للتمويل متناهي الصغر عن إعادة افتتاح فرعه في مدينة حمد بعد إجراء عملية صيانة وتطوير شاملة له، وبما يضمن تكامل خدماته، ومزيدا من التواصل الفعال مع المقترضين والمراجعين من أصحاب المشاريع الصغيرة.
                    
<a class="btn btn-link" data-target="#News3" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News4 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News4" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_4.3.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News4" data-toggle="modal" href="#"> أبداع البحرين للتمويل متناهي الصغر يحتفي بكوادره</a></h3>
<p>
	                   احتفى أبداع البحرين - البحرين للتمويل متناهي الصغر بكوادره في لقاء مميز حضره الرئيس التنفيذي للبنك الدكتور خالد وليد الغزاوي والموظفين من مختلف أقسام البنك. وتضمن اللقاء فقرات وبرامج ترفيهية نظمها عدد من موظفي البنك أنفسهم إضافة إلى مسابقات وهدايا، وذلك في جو عائلي يحفز على مواصلة الإنتاجية والعطاء.
					   </p>
<a class="btn btn-link" data-target="#News4" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News5 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News5" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_5.1.JPG"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News5" data-toggle="modal" href="#">د. الغزاوي يدعو من القاهرة لتكامل صناعة التمويل الأصغر بالوطن العربي</a></h3>
<p>
                    دعا الدكتور خالد وليد الغزاوي، الرئيس التنفيذي لبنك الإبداع للتمويل متناهي الصغر- البحرين، إلى ضرورة حدوث "تكامل أكبر في مجال صناعة التمويل الأصغر في الوطن العربي"، بما يسهم في تعزيز تطور هذه الصناعة التي توفر التمويل والتدريب لعشرات آلاف المشاريع متناهية الصغر والناشئة بالمنطقة، خاصة في دول مثل مصر والسودان وموريتانيا والأردن.
                    </p>
<a class="btn btn-link" data-target="#News5" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News 6 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News6" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_6.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News6" data-toggle="modal" href="#"> أبداع البحرين راعيا حصريا لحملة "نعين ونتعاون" في جامعة البحرين</a></h3>
<p>
                    أعلن أبداع البحرين للتمويل متناهي الصغر عن رعايته الحصرية لحملة "نعين ونتعاون" التي ينفذها عدد من طلاب جامعة البحرين برعاية رئيس الجامعة د. رياض حمزة، وتهدف إلى تعزيز السلوكيات الإيجابية بالمجتمع، وتشجيع الأفراد على المساهمة الإيجابية والمشاركة الفاعلة.
                    </p>
<a class="btn btn-link" data-target="#News6" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News7 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News7" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_7.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News7" data-toggle="modal" href="#"> يتبنى أبداع البحرين استراتيجية جديدة متوافقة مع أهداف التنمية المستدامة في البحرين</a></h3>
<p>
                    أكد الرئيس التنفيذي الى أبداع البحرين الدكتور خالد وليد الغزاوي أن أبداع البحرين للتمويل متناهي الصغر – البحرين يقوم حالياً بمراجعة كاملة لاستراتيجيته الحالية لتتوافق -في كل جوانبها- مع أهداف التنمية المستدامة، وبما يدعم جهود التنمية والازدهار وخدمة المجتمع والاقتصاد في مملكة البحرين.
                    </p>
<a class="btn btn-link" data-target="#News7" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News8 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News8" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_8.2.JPG"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News8" data-toggle="modal" href="#">د. الغزاوي: نقل تجربة البحرين في التمويل الأصغر للعراق</a></h3>
<p>
                      عقد الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر- البحرين الدكتور خالد وليد الغزاوي اجتماعا مع وفد كبير من رابطة المصارف العراقية الخاصة برئاسة السيد وديع حنظل جرى خلاله بحث سبل استفادة العراق من تجربة التمويل الأصغر في مملكة البحرين ممثلة ببنك الإبداع.
                    </p>
<a class="btn btn-link" data-target="#News8" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News9 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News9" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_9.1.JPG"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News9" data-toggle="modal" href="#">د. الغزاوي يدعو لتبني مفهوم التمويل الأصغر في المؤسسات الخيرية الخليجية</a></h3>
<p>
	                    قال الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر – البحرين الدكتور خالد وليد الغزاوي إن تبني مفهوم التمويل الأصغر من قبل المؤسسات الخيرية يضمن استدامة عملها وتنمية مواردها المالية، ويرفع من مقدرتها على تحقيق أهدافها في دعم الأسر المحتاجة ومحدودي الدخل، خاصة في ظل شح التبرعات من جهة وارتفاع عدد محتاجي الدعم من جهة أخرى.
						</p>
<a class="btn btn-link" data-target="#News9" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
<!-- News10 Item Starts -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
<div class="blog-item-wrapper">
<li>
<div class="blog-item-img">
<a data-target="#News10" data-toggle="modal" href="#"><img alt="" src="assets/img/news/news_10.1.jpg"/></a>
</div>
<div class="blog-item-text">
<h3><a data-target="#News10" data-toggle="modal" href="#">أبداع البحرين يحتفي بموظفيه الأكثر إنتاجية</a></h3>
<p>
                   كرَّم الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر ، الدكتور خالد وليد الغزاوي، عددا من كوادر البنك الذين أظهروا مستويات أداء متميزة خلال الآونة الأخيرة، وذلك ضمن برنامج البنك الرامي لتحفيز كوادره وتشجيعهم على تعزيز مستويات الأداء وزيادة الانتاجية وبما يعزز من خدمة عملاء البنك من البحرينيين والبحرانيات أصحاب المشاريع الصغيرة وتقديم التمويل اللازم لهم بطريقة ميسرة وفعالة.
                  </p>
<a class="btn btn-link" data-target="#News10" data-toggle="modal" href="#" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
</div>
</li>
</div>
</div>
<!-- News Item Wrapper Ends-->
</ul>
</div>
<button class="btn btn-common more-news" style="pointer-events: all; cursor: pointer;font-size: 18px; font-weight: bold; display:block; margin: 2px auto;">لمزيد من الاخبار</button>
</div>
</section>
<!-- News Section End -->
<!-- popup start -->
<!-- News23 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News23" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> زيارة صاحب السمو الملكي الأمير عبدالعزيز بن طلال ال سعود</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News23">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News23"></li>
<li data-slide-to="1" data-target="#slides_News23"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_23.jpg"/>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News23" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News23" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>زار صاحب السمو الملكي الأمير عبد العزيز بن طلال بن عبد العزيز آل سعود، رئيس مجلس إدارة برنامج الخليج العربي للتنمية "أجفند"؛ يرافق سموه المدير التنفيذي لبرنامج "أجفند" السيد ناصر القحطاني؛ (اليوم الثلاثاء) مقر شركة "الابداع" للتمويل متناهي الصغر - البحرين، حيث كان في استقبال سموه عدد من أعضاء مجلس إدارة الشركة وهم السيد عبد الحميد دواني والسيدة دلال الغيص والسيدة سمر عجايبي، والرئيس التنفيذي للشركة الدكتور خالد الغزاوي، وعدد من كبار موظفي الشركة.</p>
<p>وتجول صاحب السمو الملكي الأمير عبد العزيز بن طلال بن عبد العزيز آل سعود في مقر "الابداع"، مطلعا سموه على مسيرة التطور التي شهدها الابداع منذ تأسيسه في مملكة البحرين في العام 2009 كأول بنك متخصص في التمويل الاصغر في مملكة البحرين وذلك برعاية ومباركة كريمة من صاحبة السمو الملكي الاميرة سبيكة بنت ابراهيم آل خليفة قرينة ملك مملكة البحرين رئيسة المجلس الأعلى للمرأة حفظها الله، والمغفور له بإذن الله تعالى الأمير الراحل طلال بن عبد العزيز آل سعود الرئيس السابق لبرنامج الخليج العربي للتنمية "أجفند".</p>
<p>كما تعرف سموه على إسهامات الابداع في تحقيق رؤية مملكة البحرين 2030، ودعم أصحاب المشروعات متناهية الصغر، ومساهمتها في إطلاق إبداعاتهم وتحقيق طموحاتهم عن طريق توفير القروض الصغيرة بشروط سهله ومسيرة، مع التركيز على المرأة والشباب بشكل خاص.</p>
<p>واستمع صاحب السمو الملكي الأمير عبد العزيز بن طلال بن عبد العزيز آل سعود إلى شرح مفصل قدمه الرئيس التنفيذي الدكتور الغزاوي حول التطور النوعي في أداء الشركة، وتنوع منتجاتها من القروض، وما تسجله من مستويات مرتفعة على صعيد التمويل ونسب التحصيل. كما كرَّم سموه خلال الزيارة عددا من البحرينيين أصحاب المشروعات متناهية الصغر الذين استثمروا خدمات شركات الابداع المالية من أجل تنمية مشروعاتهم وزيادة كفاءتها وانتاجيتها</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News22 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News22" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>د. خالد الغزاوي: تطور سياسات الإئتمان لدى «الابداع» لتسريع الانتعاش الاقتصادي بالبحرين</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News22">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News22"></li>
<li data-slide-to="1" data-target="#slides_News22"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_21.jpg"/>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News22" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News22" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>كشف الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر الدكتور خالد وليد الغزاوي أن الشركة قامت مؤخرا بتطوير سياسات الإئتمان لديها وذلك بما يواكب مرحلة الانتعاش الاقتصادي والتجاري الذي تشهده مملكة البحرين بوادره حاليا بعد جائحة كورونا، ولمساعدة المزيد من العملاء الحاليين والمستقبليين على استعادة معدلات تشغيل مشروعاتهم متناهية الصغر وأدائها وتنافسيتها وربحيتها</p>
<p>وقال د. الغزاوي خلال زيارة عمل تفقدية قام بها لفروع الشركة إن تطوير سياسة الإئتمان جاء بناء بعد مراجعات طويلة وبناء على استطلاع رأي كثير من العملاء والموظفين، وأضاف أن هذه التطويرات من شأنها إتاحة المزيد من المرونة في منح القروض وزيادة عدد القروض الممنوحة، إضافة إلى مساعدة العملاء على السداد في الأوقات المحددة، وتقليل تكاليف منح القرض بالنسبة للشركة والعميل في آن واحد، وزيادة وتيرة التحصيل، والتخلص نهائيا من الديون المعدومة</p>
<p>وأوضح أن سياسة التحصيل تخضع لعملية مراقبة وتقييم بشكل دائم، وذلك لزيادة كفائتها وضمان التدفقات النقدية بما يمكن الشركة من تدوير القروض بالسرعة الكافية لإفادة المزيد من المقترضين البحرينيين أصحاب المشروعات متناهية الصغر، وكشف أنه من خلال تحليل الإئتمان تبين لدى إدارة الشركة ارتفاعا في عدد العملاء القادرين على السداد في المواعيد المتفق عليها، وهذا يؤشر على استعادة التعافي الاقتصادي لدى قطاعات واسعة من المنشآت الصغيرة والأعمال التجارية الفردية.</p>
<p>وأكد حرص إدارة الشركة على تحقيق التوازن بين العائد و المخاطر في إدارة حسابات القبض، خاصة وأن ما يميز قروض شركة الابداع للتمويل متناهي الصغر هو أنها تعطى للعميل دون أية ضمانات، وذلك لمساعدته على إطلاق مشروعه الخاص وتنميته، وضمن توجهات الشركة الرئيسية القائمة على دعم البحرينيين ذوي الدخل المحدود وزيادة حجم الطبقة الوسطى في البحرين في إطار رؤية البحرين الاقتصادية 2030.</p>
<p>على صعيد ذي صلة نوه الدكتور الغزاوي خلال الجولة التفقدية على الفروع بالجهود الكبيرة التي تبذلها كوادر شركة الإبداع للتمويل متناهي الصغر على اختلاف مستوياتها ومهامها في إطار العمل ضمن استراتيجية مجلس الإدارة وتحقيق الأهداف المرسومة وتلبية تطلعات العملاء والشركاء والداعمين، مشيرا في هذا الإطار إلى أن "الابداع" ومنذ تأسيسه في مملكة البحرين في العام 2009 تمكن من صرف أكثر من 16300 قرض متناهي الصغر لرياديات ورياديي الأعمال البحرينيين تقارب في مجموعها 19.4 مليون دينار، منها ما يقارب 63% موجهة للشابات والشباب البحرينيين تحت سن 45 عاما</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News20 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News20" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> د.خالد الغزاوي: تهيئة كوادر "الابداع" لمرحلة ما بعد الجائحة</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News20">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News20"></li>
<li data-slide-to="1" data-target="#slides_News20"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_22"/>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News20" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News20" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> قال الدكتور خالد وليد الغزاوي الرئيس التنفيذي لشركة "الابداع للتمويل متناهي الصغير" إن الشركة بدأت خطة طموحة لتدريب كوادرها على مساعدة العملاء البحرينيين أصحاب الشركات الصغيرة ومتناهية الصغر على استعادة أنشطة شركاتهم وحصتهم السوقية، إضافة إلى مواكبة خطط تشغيل مشروعاتهم مع التطورات الكبيرة التي أحدثتها جائحة كورونا على الاقتصاد والأعمال والأسواق بشكل عام</p>
<p>وأضاف الدكتور الغزاوي في تصريح له عقب اجتماع مع عدد من كوادر شركة الابداع أن هذا التدريب يشمل تقديم خدمات الإرشاد والتوجيه ودراسة الجدوى للبحريني صاحب المشروع الراغب بالحصول على قرض مالي من الشركة، وذلك بغية مساعدته على استدامة مشروعه وتسريع نموه وزيادة تنافسيته وربحيته، والتقليل من احتمالية تعثره إلى أقصى حد</p>
<p>وأثنى الرئيس التنفيذي للشركة على ما قامت وتقوم به كوادر "الابداع" من جهود لتلبية لتطلعات وتوجيهات مجلس الإدارة وتنفيذ خطة العمل المرسومة من الإدارة التنفيذية، وتحقيق النتائج والأهداف المرسومة لعمل الشركة، وفي مقدمتها مساعدة العملاء من البحرينيين ذوي الدخول المنخفضة وخاصة شريحة النساء والشباب على إطلاق مشروعات خاصة تسهم في توفير مصدر دخل مستدام لهم، وتدعم الناتج المحلي الإجمالي والاقتصاد الوطني لمملكة البحرين</p>
<p>ونوه بشكل خاص خلال الاجتماع بالمبادرات الاستثنائية لكوادر البنك في مواجهة التحديات التي فرضتها جائحة كورونا على بيئة العمل، منوها بالاقتراحات المبدعة التي طرحها عدد منهم لتطوير العمل في ظل الجائحة وجعله أكثر مرونة وفاعلية بالنسبة للموظفين والعملاء على حد سواء، مشيرا إلى أن إدارة الشركة ستدرس تلك الاقتراحات بجدية تمهيدا لتنفيذها بأفضل طريقة</p>
<p>يذكر أن شركة الابداع للتمويل متناهي الصغر تأسست في مملكة البحرين في العام 2009 تحت اسم "بنك الابداع للتمويل متناهي الصغر"، كأول بنك متخصص في التمويل الأصغر، وذلك برعاية ومباركة كريمة من صاحبة السمو الملكي الاميرة سبيكة بنت ابراهيم آل خليفة قرينة ملك مملكة البحرين رئيسة المجلس الأعلى للمرأة حفظها الله، و المغفور له "بإذن الله" الأمير طلال بن عبد العزيز آل سعود رئيس برنامج الخليج العربي للتنمية "أجند"، وذلك إيمانا من الجميع بدور هذه البنوك في دعم محدودي الدخل، ومساهمتها في إطلاق إبداعاتهم وتحقيق طموحاتهم عن طريق توفير القروض الصغيرة بشروط سهله ومسيرة، ويقدم "إبداع البحرين" التمويل بصيغته الإسلامية والتقليدية على حد سواء</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News19 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News19" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> يعزز من الخدمات التمويلية بعد الجائحة &lt;&lt;الابداع للتمويل متناهي الصغر&gt;&gt;</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News19">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News19"></li>
<li data-slide-to="1" data-target="#slides_News19"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_20.jpg"/>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News19" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News19" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> قال الرئيس التنفيذي لـ "الابداع للتمويل متناهي الصغر" الدكتور خالد وليد الغزاوي إنه يجري العمل حاليا على تطوير منظومة العمل الداخلي من أجل التأكد من الجاهزية لتقديم خدمات تمويلية تواكب الاحتياجات المستجدة للبحرينيين والبحرينيات أصحاب المشروعات متناهية الصغر، وتلافي الآثار السلبية لجائحة كورونا على مشروعاتهم، خاصة تلك المتعلقة بالقطاعات الأكثر تضررا مثل الضيافة والنقل.</p>
<p>وأشار د. الغزاوي إلى أن "الابداع للتمويل متناهي الصغر" يعمل بالتوازي مع ذلك على استكمال إجراءات تحويل ترخيصه من "بنك" إلى "شركة"، وذلك امتثالا لتعليمات مصرف البحرين المركزي، مشيرا إلى أن ذلك التحويل مجرد إجراء قانوني داخلي لن يؤثر على طبيعة العمل والخدمات المقدمة، ويأتي في إطار تلبية اشتراطات منظومة العمل المالي في مملكة البحرين وبنيتها التشريعية.</p>
<p>وأوضح أن "الابداع للتمويل متناهي الصغر" سيعمل من خلال اسمه الجديد على تعزيز هويته التسويقية وحضوره في مجال توفير تمويل ميسر بدون ضمانات معقدة للبحرينيين الراغبين بإحياء مشاريعهم القائمة وتنميتها أو إطلاق مشاريع جديدة تسهم في تنويع مصادر الدخل ودعم النمو الاقتصادي وخلق فرص العمل وتحقيق رؤية البحرين 2030.</p>
<p>وقال د. الغزاوي "نعتقد أن البحرين ستكون من أوائل الدول حول العالم التي تعيد فتح اقتصادها من جديد نظرا لسرعة توزيع التطعيمات، ونرى أنه من واجبنا أن نكون على أهبة الاستعداد لتحمل مسؤوليتنا الوطنية والنهوض بدورنا في المساهمة الفاعلة بجهود الحكومة الموقرة من أجل إعادة القطاع الاقتصادي في مملكة البحرين إلى سكة النمو السريع"، وأضاف: سيبقى فريق عملنا ملتزما بأعلى معايير الجودة في تقديم الخدمة، ومتابعا نشطا لاحتياجات العملاء التمويلية ومرشدا لهم في مجال تنمية مشروعاتهم وتطويرها، انطلاقا من حرصنا على الشراكة مع العملاء وتحقيق النجاح المشترك المنشود".</p>
<p>يشار إلى ان "الابداع للتمويل متناهي الصغر" قد تأسس تحت مسمى "بنك" في مملكة البحرين العام ٢٠٠٩ كأول جهة متخصصة في التمويل الأصغر برأس مال خمسة ملايين دولار تم رفعه لاحقا عام ٢٠١٤،  وذلك برعاية ومباركة كريمة من صاحبة السمو الملكي الاميرة سبيكة بنت ابراهيم آل خليفة قرينة ملك مملكة البحرين رئيسة المجلس الأعلى للمرأة حفظها الله، والمغفور له "بإذن الله" الأمير طلال بن عبد العزيز آل سعود رئيس برنامج الخليج العربي للتنمية "أجفند"، ويركز على دعم تحقيق رؤية مملكة البحرين الاقتصادية للعام ٢٠٣٠ عبر مساعدة ذوي الدخل المحدود للانخراط في مشاريع اقتصادية جديدة ومبتكرة، وقد تمكن البنك منذ تأسيسه من صرف أكثر من 16300 قرض متناهي الصغر لرياديات ورياديي الأعمال البحرينيين تقارب في مجموعها 19.4 مليون دينار، منها ما يقارب 63% موجهة للشابات والشباب البحرينيين تحت سن 45 عاما.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News18 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News18" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> أبداع البحرين يهنئ السيدة منى المؤيد بمواصلة تصدرها قائمة "فوربس</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News18">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News18"></li>
<li data-slide-to="1" data-target="#slides_News18"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/mona-khaled-nasser.jpg"/>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News18" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News18" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> هنَّئت شركة البحرين للتمويل متناهي الصغر - البحرين رئيسة مجلس إدارته، منى يوسف المؤيد، بمناسبة حلولها في المرتبة الأولى بحرينيا والتاسعة عالميا ضمن قائمة فوربس لأقوى 100 سيدة أعمال بالشرق الأوسط، محافظةً بذلك على مكان بارز في صدارة هذه القائمة التي تضم قيادات نسائية ترأسن عددًا من كبريات الشركات الأكثر تأثيراً في الشرق الأوسط.</p>
<p> وأعرب أبداع البحرين عن فخره بأن ترأس مجلس إدارته سيدة بحجم السيدة منى يوسف المؤيد، كشخصية قيادية استثنائية في البحرين والشرق الأوسط بإقرار منصات عالمية مرموقة مثل مجلة فوربس التي منحت السيدة المؤيد هذا الترتيب وفقاً للترشيحات والبحث العميق وفقاً لعدد من المعايير شملت حجم الأعمال التي تديرها الشخصيات النسائية، إضافة إلى الإنجازات المحققة خلال العام الماضي، وحجم المبادرات وإجمالي الخبرة العملية. </p>
<p>ونوه الأستاذ ناصر القحطاني نائب رئيس مجلس إدارة البنك والمدير التنفيذي لبرنامج الخليج العربي للتنمية "أجفنذ" بالإنجازات المتواصلة للسيدة المؤيد على مدى أعوام طويلة، ما يجعل منها قدوة للمرأة البحرينية والخليجية القادرة على العطاء والتميز وقيادة المؤسسات التجارية والاجتماعية إلى أفق أرحب من النمو والتطور.</p>
<p>ولفت الأستاذ القحطاني إلى أن السيدة المؤيد تجمع في شخصيتها تميز بارز في إدارة العمل التجاري من جهة والاجتماعي الخيري من جهة أخرى من خلال العديد من المبادرات التي تنفذها لخدمة المجتمع، وهو ما يجعل منها قيمة مضافة حقيقة لبرنامج "أجفند" الذي يقوم على مفهوم توفير تمويلات مالية ميسرة لمساعدة الشرائح الأكثر ضعفا على إطلاق مشاريع متناهية الصغر تسهم في رفع معدلات التنمية الوطنية.</p>
<p>وأكد أن قيادة السيدة المؤيد لبنك الإبداع – البحرين بثبات ونجاح تؤكد صوابية توجه برنامج "أجفند" نحو دمج المزيد من السيدات في صناعة التمويل الأصغر على اختلاف المستويات المهنية والإدارية من خلال البنوك التسعة التي يديرها البرنامج في المنطقة العربية وإفريقيا، خاصة وأن المرأة تمثل شريحة مهمة من المستفيدين من خدمات تلك البنوك. </p>
<p> بدوره قال الرئيس التنفيذي لبنك الإبداع خالد الغزاوي "تواصل السيدة المؤيد تصدر قائمة فوربس لأقوى سيدات الأعمال في منطقة الشرق الأوسط، وهذا مصدر فخر واعتزاز لنا، وحافز مهم لنواصل عملنا بحماس على تنفيذ استراتيجية مجلس إدارة البنك ومواجهة التحديات وتطوير الأداء".</p>
<p>وأكد الدكتور الغزاوي أن وجود السيدة المؤيد على رأس مجلس إدارة البنك ومتابعتها لأعماله وتوجيهاتها السديدة يعتبر أحد أهم عوامل ثبات أبداع البحرين في مواجهة الصعوبات والتحديات، وقال "لا شك أن السمعة الطيبة والمكانة المرموقة التي تحظى بها المؤيد لدى جميع الأوساط يعزز قوة وحضور البنك في مملكة البحرين ومساهمته في تحقيق الرؤية الاقتصادية 2030".</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News17 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News17" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> أبداع البحرين يحقق أرباحا بلغت 306 آلاف دينار عام 2018 </h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News17">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News17"></li>
<li data-slide-to="1" data-target="#slides_News17"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_17.jpg"/>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News17" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News17" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> أعلنت شركة الإبداع للتمويل متناهي الصغر – البحرين تجاوز الأرباح الصافية للبنك 306 آلاف دينار عن السنة المالية المنتهية في 31 ديسمبر 2018 مقارنة بأرباح بقيمة 94 ألف دينار عام 2017 وبزيادة تجاوزت 227%، وذلك لعدة أسباب من بينها زيادة حجم الانتشار والعمليات التشغيلية، والتوسع في عدد وقيمة القروض المصروفة. وأوضح البنك أنه سيجري إعادة ضخ هذه الأرباح في رأس مال البنك بما يسهم في رفع عدد وقيمة القروض الممنوحة لذوي الدخل المحدود، وبما يساعد مزيدا من البحرينيين على إطلاق مشروعاتهم متناهية الصغر والصغيرة، ويخدم الاقتصاد الوطني وفقا لرؤية البحرين 2030.</p>
<p>وفي بيانه حول أداء عام 2018، بيَّن البنك أن موجوداته قد ارتفعت من 2,45 مليون دينار في عام 2017 إلى ما يتجاوز 3,05 مليون دينار مع نهاية عام 2018 وبزيادة تجاوزت 24%، كما ارتفعت قيمة محفظة القروض الصافية من 1,6 مليون دينار عام 2017 إلى ما يقارب 2,1 مليون عام 2018 وبزيادة 31%. وفيما ارتفعت إيرادات البنك التشغيلية في عام 2018 بنسبة تقارب 40%، تمكن البنك من السيطرة على نفقاته التشغيلية التي لم ترتفع سوى بنسبة 10,7% مقارنة بعام 2017. </p>
<p>وأشار البيان إلى أن البنك قد نجح في استعادة ما يقارب من 64 ألف دينار من مخصصات الديون المشكوك في تحصيلها كنتيجة طبيعية للجهود الكبيرة في تحصيل القروض المتأخرة والمتعثرة من سنوات سابقة. ووجه البنك شكره إلى كل كوادره على اختلاف مواقعهم لجهودهم المميزة في تطوير أداء البنك.</p>
<p> رئيسة مجلس إدارة أبداع البحرين ، منى يوسف المؤيد، أعربت عن ارتياحها للتطور المتواصل في أداء البنك على مستوى العمليات والتشغيل والالتزام بخدمة العملاء من البحرينيين محدودي الدخل، مشيدة بالجهاز التنفيذي للبنك، وقالت إن تعزيز أداء شركة ابداع البحرين للتمويل متناهي الصغر وقدرته على الإقراض مهم جدا في وقت تبذل فيه جهودا وطنية من أجل تشجيع متقاعدي برنامج التقاعد الاختياري على إطلاق مشاريعهم الخاصة، إضافة إلى تحفيز المؤسسات متناهية الصغر والصغيرة والمتوسطة على توليد المزيد من فرص العمل استجابة لمتطلبات البرنامج الوطني للتوظيف.</p>
<p>على صعيد ذي صلة، أعربت المؤيد عن تقديرها إزاء القيادة البحرينية الرشيدة لجهود البنك في خدمة محدودي الدخل، وأكدت في تعليقها على النتائج المالية للبنك امتنان المساهمين ومجلس الإدارة لرجال وسيدات الأعمال البحرينيين الذين قدموا للبنك هذا العام تمويلات معدومة الفائدة ساعدت البنك على تطوير أنشطته وأعماله. وفي بيانها، قدرت المؤيد دعم مصرف البحرين المركزي لصناعة التمويل الأصغر في مملكة البحرين، وقراره الأخير بتخفيض الحد الأدنى لرأس مال بنوك التمويل الأصغر من خمسة ملايين دينار إلى مليوني دينار، وذلك بما يسهم في توسيع قاعدة التمويل الأصغر، إضافة إلى رفع الحد الأقصى للقرض من خمسة آلاف إلى سبعة آلاف دينار. كما قدمت شكرها الكبير لصندوق العمل «تمكين» على دعمه المتواصل لبرامج البنك وأدائه وموظفيه وخصوصًا في مجال التطوير التقني والتدريب ودعم الأجور. وأكدت أنها تتطلع للعمل مع «تمكين» هذا العام على مبادرتين الأولى مرتبطة بتوسعة قاعدة المقترضات من النساء من خلال رفد محفظة القروض بمنحة رأسمالية بقيمة نصف مليون دينار، بالإضافة إلى إطلاق المرحلة الأولى من برنامج دعم الشباب بقيمة مماثلة. </p>
<p> من جانبه أكد الرئيس التنفيذي للبنك الدكتور خالد وليد الغزاوي أن النتائج المثمرة التي يواصل البنك تحقيقها على مدى الأعوام الأربعة الفائتة ترجع بشكل أساسي إلى الحرص على تطبيق منهجيات ومعايير برنامج الخليج العربي للتنمية «أجفند» في مجال التمويل الأصغر، معربا عن سعادته بأن تجربة أبداع البحرين باتت مثالا يحتذى في مجال نجاح مؤسسات التمويل الأصغر في المنطقة.</p>
<p>وقال د. الغزاوي إن أبداع البحرين تمكن في عام 2018 من صرف ما يزيد عن 2,600 قرض لعملائه المكررين والجدد بقيمة تجاوز 2,6 مليون دينار. وأوضح الرئيس التنفيذي أن خطة البنك للسنوات الخمس القادمة تركز على خدمة عشرة آلاف مقترض من العملاء الحاليين والجدد بقروض تتجاوز قيمتها 10 مليون دينار، وأوضح أن الخطة تتضمن أيضا افتتاح فروع للبنك في كل من المحرق وسار وسترة.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News16 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News16" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>الغزاوي يستعرض تجربة البحرين في تطبيق التكنولوجيا في الخدمات المالية</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News16">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News16"></li>
<li data-slide-to="1" data-target="#slides_News16"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_16.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_16.1.jpg"/>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News16" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News16" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> استعرض الرئيس التنفيذي لشركة الإبداع للتمويل المتناهي الصغر – البحرين الدكتور خالد وليد الغزاوي تجربة مملكة البحرين في مجال تطبيق التكنولوجيا المالية الحديثة في القطاع المصرفي البحريني، مضيفا أن أبداع البحرين يسعى للاستفادة من موقع البحرين كمركز إقليمي للتكنولوجيا المالية في تطبيق الحلول التقنية المبتكرة لتوفير خدمات مالية لعملائه بطريقة تضمن أعلى درجات اليسر والشفافية والفاعلية.</p>
<p>وخلال ترؤسه جلسة بعنوان «دور التكنولوجيا المالية في خدمة المؤسسات الصغيرة والمتوسطة» في النسخة الثالثة من مؤتمر اتحاد المصارف العربية الذي عقد مؤخرا في الأردن، تحدث د. الغزاوي عن توجه برنامج الخليج العربي للتنمية «أجفند» لدعم تحول جميع بنوكه للشمول المالي في المنطقة العربية نحو بيئة خالية من الورق وتعمل وفق أحدث أدوات التكنولوجيا، وذلك بعد نجاح البرنامج في تحويل بنوكه في الأردن والسودان إلى استخدام التكنولوجيا بالكامل في عمليات الإقراض والتحصيل والتأمين، وحتى تقديم النصح والإرشاد لأصحاب المشاريع المتناهية الصغر.</p>
<p>وقال الدكتور الغزاوي إن مملكة البحرين باتت رائدة في استخدام التكنولوجيا المالية في العمل المصرفي بفضل جهود ومساعي مصرف البحرين المركزي نحو تفعيل مسيرة التحول الرقمي والابتكار في القطاع المالي والمصرفي، ولفت إلى أن النجاحات التي تسجلها البيئة الرقابية التجريبية منذ إطلاقها منتصف عام 2017 تعتمد على مقومات عديدة من بينها قاعدة متينة من النظم والتشريعات، وكفاءات ماهرة لديها خبرة طويلة في قطاع الخدمات المالية، وتنافسية عالية في الكلفة.</p>
<p>وتحدث د. الغزاوي أيضا عن تجربة البحرين في مجال منصات الدفع الإلكتروني التي تتنافس على تقديم أفضل الخدمات للعملاء، مشيرا في الوقت ذاته إلى وجود العديد من حاضنات ومسرعات الأعمال، ومن بينها ما هو مختص بالأعمال التقنية والمالية، مشيدا بدور صندوق العمل تمكين في دعم هذه الحاضنات.</p>
<p>ومن واقع خبرته التي تمتد لأكثر من عشرين عاما في مجال التمويل الأصغر عمل خلالها في مناطق مختلفة من العالم من بينها الولايات المتحدة الأمريكية ومصر ولبنان والأردن والإمارات العربية المتحدة وغيرها، تحدث د. الغزاوي خلال المؤتمر عن تجارب تلك الدول في مجال دمج التقنية في التمويل الأصغر، مؤكدا أن برنامج الخليج العربي للتنمية «أجفند» يسعى دائما من خلال بنوكه المنتشرة في 9 دول في المنطقة إلى اختبار تقنيات جديدة في توفير الدعم المالي للعملاء، ومن ذلك استقبال وتحليل و دراسة طلبات القروض عبر تطبيقات معدة لذلك ثم صرف القروض وتحصيلها عبر محافظ الكترونية للعملاء، بالإضافة إلى تقنية الفيديو للتواصل مع العميل، و تفحص نشاط المشروع وتطوره عن طريق خدمات «خرائط جوجل» وغيرها.</p>
<p>وأعرب عن اعتقاده بأن مصارف الأجفند في طريقها عاجلا أم آجلا الى التحول نحو بنوك رقمية من خلال استخدامها تقنية البلوك تشين وغيرها، وبما يسهم في تقليل تكاليف التشغيل، مؤكدا أهمية الاستعداد لتوفير متطلبات هذه المرحلة من تدريب واستثمار في التقنيات الحديثة، والحماية ضد الهجمات السيبرانية، وغير ذلك.</p>
<p>ولفت إلى أن الأجفند، وفي إطار تطبيقه لمفهوم الشمول المالي، يحرص أيضا على تشجيع عملاء بنوكه على التحول نحو المعاملات المصرفية الرقمية، وخاصة في المناطق الفقيرة التي لا يتوافر لقاطنيها دراية كاملة بالتعامل مع التقنيات الحديثة.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News15 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News15" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>« أبداع البحرين » يقدم فرصا وظيفية في «معرض التدريب والتعليم»</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News15">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News15"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_vacancies.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>  شاركت شركة الإبداع للتمويل المتناهي الصغر في معرض البحرين للتدريب والتعليم ما قبل العمل 2019 الذي أقيم تحت رعاية جميل بن علي حميدان وزير العمل والتنمية الاجتماعية، إلى جوار نحو ستين جهة من القطاعين العام والخاص تعمل في مجال التعليم والتدريب والتوظيف.
                   </p>
<p>وأوضح الرئيس التنفيذي للبنك د. خالد وليد الغزاوي أن البنك عرض خلال مشاركته في المعرض عددا من الوظائف الشاغرة لديه في أقسام ومجالات مختلفة، وتلقى الكثير من طلبات التوظيف، وهو الآن بصدد دراسة هذه الطلبات ومقابلة الأشخاص المرشحين تمهيدا لدمجهم في الدورات التدريبية التي يقدمها البنك للموظفين المحتملين. وأكد حرص أبداع البحرين على المشاركة في مثل هذه المعارض من أجل استقطاب الكفاءات البحرينية الشابة، وتوفير فرص التدريب والتوظيف النوعية أمامها، وبما يواكب حرص البنك على المضي قدما في رفع نسبة البحرنة في جميع أقسامه، والتي وصلت حاليا إلى أكثر من 80%.</p>
<p>وأشار إلى أن هذه المشاركة تأتي أيضا في إطار مساهمة أبداع البحرين في البرامج والأنشطة الهادفة إلى دعم الشباب البحريني في مختلف المجالات بما فيها قطاع التدريب والتوظيف، ورفع كفاءة وقدرات الموارد البشرية الوطنية بما يتماشى مع رؤية البحرين الاقتصادية 2030، وتقديم منتجات تمويلية متطورة لمحدودي الدخل في مملكة البحرين ومساعدتهم على إطلاق مشاريع متناهية الصغر توفر لهم سبل العيش الكريم. ولفت الغزاوي إلى أهمية معرض البحرين للتدريب والتعليم في تعريف الطلبة المتوقع تخرجهم من المرحلتين الثانوية والجامعية بالفرص التعليمية والتدريبية والوظيفية المتاحة وطبيعة متطلبات سوق العمل، والمهارات العلمية والوظيفية التي تتطلبها كل مهنة بمختلف القطاعات، مشيدا بجهود وزارة العمل والتنمية الاجتماعية والمنظمين.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News14 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News14" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> الرئيس التنفيذي لشركة ابداع البحرين للقروض متناهية الصغر للتنمية عضوًا في مجلس إدارة ألبنك </h4> <hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News14">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News14"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_Sanjev.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>  أعلت شركة ابداع البحرين للتمويل المتناهي الصغر انضمام سانجيف بول الرئيس التنفيذي لبنك البحرين للتنمية إلى عضوية مجلس إدارته لما تبقى من دورة المجلس الحالية. يأتي انضمام بول إلى عضوية المجلس خلفًا للسيدة دلال اسماعيل التي مثلت بنك البحرين للتنمية على مجلس إدارة أبداع البحرين لأكثر من 5 سنوات.</p>
<p>ورحبت رئيسة مجلس إدارة أبداع البحرين -البحرين منى يوسف المؤيد بانضمام بول إلى عضوية مجلس الإدارة، حاملاً معه ما يزيد على 30 سنة من الخبرة في القطاع المصرفي حول العالم، مؤكدة أن ذلك من شأنه أن يسهم في تعزيز التعاون بين البنكين اللذين يعملان على توفير قروض ميسرة لأصحاب المشاريع الناشئة ودعم الاقتصاد الوطني لمملكة البحرين.</p>
<p>وأشارت المؤيد إلى أن وجود بول في مجلس إدارة أبداع البحرين سيتيح له فرصة التعرف عن كثب على الممارسات الفضلى في مجال التمويل الأصغر وربطها بأهداف التنمية المستدامة السبعة عشر والتي يتبناها برنامج الخليج العربي للتنمية «الاجفند» من خلال بنوكه المنتشرة في تسع دول عربية وإفريقية، وبما يساعده على تبني مفاهيم التنمية في العمل المصرفي في موقعه الحالي كرئيس تنفيذي لبنك البحرين للتنمية.</p>
<p>وفي السياق ذاته أكدت المؤيد حرص أبداع البحرين على التنسيق مع بنك البحرين للتنمية من خلال بول، وخاصة في مجال نقل عملاء أبداع البحرين من المقترضين الذين توسعت مشاريعهم وباتت تتطلب قروضا أعلى من سقف قروض أبداع البحرين وهو خمسة آلاف دينار إلى بنك البحرين للتنمية.</p>
<p>يشار إلى أن مجلس إدارة أبداع البحرين برئاسة منى يوسف المؤيد يضم في عضويته كلا من ناصر بكر القحطاني -الرئيس التنفيذي للأجندة- كنائب لرئيسة المجلس، سمر ويصا عجائبي من بنك الإسكان، عبدالحميد ديواني ممثلاً عن القطاع الخاص، عادل محمد بله ممثلاً عن بنوك أجند، ود. بدر الدين عبدالرحيم كعضو مستقل.</p> </div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News13 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News13" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>"الإبداع" يستعرض بجنيف تجربة البحرين في تمكين المرأة والشباب اقتصادياً </h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News13">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News13"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_shomol.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> شارك وفد من شركة أبداع البحرين للتمويل متناهي الصغر برئاسة رئيسة مجلس إدارة البنك منى المؤيد، وعضوية الرئيس التنفيذي د.خالد الغزاوي، بالمنتدى التنموي السابع لبرنامج الخليج العربي للتنمية "أجفند"، الذي أقيم في جنيف بسويسرا، حيث تم استعراض تجربة البحرين في تمكين المرأة والشباب اقتصادياً.</p>
<p>وأكد د. الغزاوي أن تجربة البحرين في تمكين المرأة والشباب اقتصادياً تحظى باهتمام عالمي، مشيرا إلى هذه التجربة تواكب تماما عدد من أهداف التنمية المستدامة 2030.</p>
<p>وشدد على أهمية تعميم هذه التجربة أمام مختلف دول العالم الساعية إلى توسعة الطبقة المتوسطة وتوفير المزيد من فرص عمل لمواطنيها في القطاع الخاص، وتفعيل طاقاتهم وزيادة مساهمتهم في الناتج المحلي الإجمالي.</p>
<p>واستعرض دالغزاوي أمام الحضور من العديد من دول العالم جهود البحرين في مجال "الشمول المالي"، والذي يعني دمج أكبر شريحة ممكنة من المواطنين في العملية الإنتاجية والحراك الاقتصادي للدولة، من خلال تيسير خدمات الدعم الفني والمالي والإرشاد والتوجيه لهم، وتحفيزهم على إطلاق مشاريع خاصة بهم سواء أكانت مشاريع منزلية مثل شريحة الأسر المنتجة، أو مشاريع ناشئة من ذات طابع قانوني عبر حصولها على سجل افتراضي أو سجل مؤسسة تجارية عادي.</p>
<p>واستعرض جوانب من نجاح أبداع البحرين في توفير قروض ميسرة لأكثر من 2670 عميلا من البحرينيين أصحاب المشاريع متناهية الصغر، حصلوا على مبالغ قروض تصل قيمتها الإجمالية إلى نحو 3 ملايين دينار، مشيرا إلى أن هذا النجاح ما كان ليتحقق لولا أن البنك يعمل في بيئة مواتية ومحفزة.</p>
<p>وأشار الغزاوي إلى أن البحرين توفر منظومة متكاملة لدعم النساء والشباب، وخص بالذكر برامج التمكين الاقتصادي للمجلس الأعلى للمرأة، ومن بينها محفظة صاحبة السمو الملكي الأميرة سبيكة بنت إبراهيم آل خليفة قرينة عاهل البلاد المفدى رئيس المجلس الأعلى للمرأة لتمكين المرأة، والتي تستطيع من خلالها رائدات الأعمال البحرينيات الحصول على تمويل ميسر لمشاريعهن، مستعرضا نماذج عن مشاريع تجارية رائدة في البحرين تملكها وتديرها نساء.</p>
<p>وتحدث عن جهود صندوق العمل "تمكين" في دعم الكوادر البحرينية بدءا من المراحل العمرية المبكرة عبر تنفيذ برامج مثل "أصيل في المدرسة"، مرورا ببرامج مثل "مشروعي" لدعم أصحاب المشاريع الناشئة، وكذلك برامج التمويل ودعم المؤسسات وغيرها.</p>
<p>وأوضح الغزاوي أنه جرى عقد العديد من اللقاءات مع جهات دولية كثيرة مشاركة في المنتدى، أبدت رغبتها في الاستفادة من تجربة البحرين في صناعة التمويل الأصغر، مؤكدا أن ذلك يزيد من عزم الأجفند تحويل البحرين إلى مركز لانطلاق هذه الصناعة ضمن منظومة مجلس التعاون الخليجي.</p>
<p>وتضمن برنامج المنتدى، تنظيم مؤتمر صحافي بقصر الأمم المتحدة، عرض فيه مسؤولو أجفند توصيات الندوة الدولية، كما جرى في قاعة الجمعية العامة في قصر الأمم بجنيف احتفالية تسليم جائزة أجفند الدولية للفائزين بها في مجال "التعليم الجيد"، بحضور الملكة صوفيا، والمدير العام لمكتب الأمم المتحدة في جنيف، مايكل مولر، وأعضاء لجنة جائزة أجفند، والبعثات الدبلوماسية المعتمدة في جنيف.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News12 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News12" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>ممثلون عن 10 مؤسسات تمويل أصغر عربية يشاركون في ورشة عمل بالبحرين</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News0">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News0"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_12.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>استضافت مملكة البحرين ورشة عمل حول أحدث تقنيات صناعة التمويل الأصغر، بحضور 20 مشاركاً يمثلون عشرة مؤسسات تمويل أصغر عربية تمثل في أغلبها البنوك التابعة لبرنامج الخليج العربي للتنمية (أجفند) في كل من الأردن ولبنان وموريتانيا والسودان وسوريا والبحرين وسيراليون، إضافة إلى ممثلين عن مؤسسات تمويل مشاريع صغيرة لا تتبع للأجفند في الاردن والعراق.</p>
<p>ونظَّم الورشة برنامج الخليج العربي للتنمية (أجفند) بالتعاون مع شركة ابداع البحرين للتمويل متناهي الصغر، ويسّر جلسات الورشة على مدى احدى عشر يوماً متواصلة الرئيس التنفيذي للبنك د.خالد وليد الغزاوي</p>
<p>وهدفت الورشة إلى مساعدة ممارسي التمويل الأصغر في المنطقة العربية على إعداد خطط لإدارة مؤسساتهم من ناحية مالية وتشغيلية لمدة خمس سنوات، وكيفية التخطيط الاستراتيجي لمؤسسات التمويل الأصغر، وتحويل الاستراتيجية إلى خطط عملياتية تتضمن أرقاما قابلة للقياس والمراجعة والتقييم وتصويب الأداء، ودراسة البيئة المحيطة بالمؤسسة، والعثور على مصادر التمويل اللازمة وشروطها، وغير ذلك من المحاور المهمة.</p>
<p>واستعرضت فعاليات الورشة أساليب التحليل المالي المتقدم لمؤسسات التمويل الاصغر بما فيه وضع نسب قياس فعاله لأداء محفظة القروض والاداء المالي، وأخيراً كيفية تسعير منتجات القروض بطريقه تحقق للمؤسسة الاستدامة المطلوبة.</p>
<p>وفي الجانب العملي من هذه الورشة، قام مندوبو مؤسسات التمويل الأصغر بتطبيق عملي لجميع محاورها، وذلك من خلال اجتماعهم مع فرق عمل وتطوير استراتيجية مؤسستهم، ورؤيتها وقيمها ورسالتها، ووضع الخطط التشغيلية بناء على المعطيات الجديدة، وتحديد نقاط قوة المؤسسة من أجل العمل على تعزيزها، ونقاط الضعف وتلافيها، والاستثمار في التدريب وزيادة عدد الموظفين، والانتشار الجغرافي، ودراسة السوق وصولا إلى تصميم منتجات جديدة تستجيب لاحتياجات المقترضين.</p>
<p>يشار إلى أن هذه الورشة تأتي في إطار حرص برنامج الخليج العربي للتنمية (الأجفند) على تعزيز صناعة التمويل الأصغر في المنطقة العربية ليس لدى بنوكه فحسب، وإنما لدى مختلف مؤسسات التمويل الأصغر في العالم العربي، وبناء القدرات في هذا المجال الحيوي، ومواكبة الخطط الوطنية الرامية لدعم شريحة أوسع من محدودي الدخل والتشجيع على إنشاء المزيد من المؤسسات الناشئة والصغيرة والمتوسطة، ودعم الاقتصاد الوطني.</p>
<p>كما ويأتي اختيار برنامج الأجفند لمملكة البحرين لإقامة مثل هذه الورش نظرا لما يتمتع به القطاع المصرفي البحريني من تطور وتنوع وقدرة على احتضان الأفكار والتطورات الجديدة في صناعة الصيرفة على اختلاف مستوياتها، وتطوير التشريعات اللازمة لها، وذلك بقيادة حكيمة من مصرف البحرين المركزي. </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News0 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News0" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>تعاون مشترك بين أبداع البحرين ومكتب الأمم المتحدة لدعم التنمية المستدامة</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News0">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News0"></li>
<li data-slide-to="1" data-target="#slides_News0"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_0.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_0.1.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News0" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News0" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>وقَّع مكتب الأمم المتحدة بمملكة البحرين خطاب نوايا مع شركة أبداع البحرين للتمويل متناهي الصغر، بهدف العمل بشكل مشترك في مجالات تعزيز أهداف التنمية المستدامة وأجندة الأمم المتحدة 2030. وسيعمل المكتب بالاشتراك مع منظمات الامم المتحدة وبرامجها ومكاتبها ووكالاتها المتخصصة وبرنامج الأمم المتحدة الإنمائي على تقديم الدعم الفني لإدماج أهداف التنمية المستدامة «SDGs» ضمن خطط البنك الاستراتيجية المستقبلية.</p>
<p>ومن المقرر أن يسعى مكتب الأمم المتحدة لتقديم المعرفة والخبرة الفنية اللازمة في هذا المجال وتنظيم عدد من المحاضرات من خلال مجموعة من الخبراء الدوليين بهدف مواءمة استراتيجية البنك وخدماته مع أهداف التنمية المستدامة.</p>
<p> فيما يتطلع أبداع البحرين إلى عرض هذه التجربة الرائدة في مملكة البحرين في مواءمة استراتيجيته وأنشطته مع أهداف التنمية المستدامة اثناء انعقاد مؤتمر الأجفند التنموي وحفل جائزة الاجفند الدولية والمقرر منتصف أكتوبر المقبل في مدينة جنيف في سويسرا.</p>
<p>وفي تعليق له على هامش توقيع خطاب النوايا، أثنى السيد الشرقاوي على جهود البنك في التحرك نحو استراتيجية تركز على مفاهيم الاستدامة وتقود البنك إلى العمل في المجالات التي تشجع الشركات الناشئة والشركات الصغيرة على تبني مفاهيم الاستدامة مثل الطاقة النظيفة والابتكار، وأوضح: «نحن في الأمم المتحدة مسرورون بهذه المبادرة مع أبداع البحرين، حيث ستفتح آفاقا جديدة للعمل مع القطاع الخاص في دمج أهداف التنمية المستدامة في الخطط الاستراتيجية للمؤسسات».</p>
<p>وقال الشرقاوي: «لدينا عديد من المجالات التي نود بدء العمل فيها، من أهمها التعاون في مجالات الطاقة النظيفة عن طريق العمل المشترك مع وحدة الطاقة المستدامة في البحرين لكونها الجهة المسؤولة عن قيادة وتعزيز ممارسات كفاءة الطاقة، والتي تعد واحدة من المجالات التي يمكن للبنك تحقيق تقدم ملحوظ فيها في فترة قصيرة من الزمن».</p>
<p>من جانبه، أعرب الرئيس التنفيذي لـبنك الإبداع د. خالد الغزاوي عن سعادته بالعمل في مكتب الأمم المتحدة في البحرين، والذي يمتلك الخبرة الواسعة في مجالات التنمية المستدامة، وأوضح د. الغزاوي أن خطاب النوايا يأتي لتتناغم استراتيجية وأنشطة البنك مع جهود الجهاز المؤسس له وهو برنامج الخليج العربي للتنمية «أجفند»، حيث قام الأخير بربط كل أهدافه الاستراتيجية وبرامجه المختلفة في التنمية والتمويل الأصغر ودعم الطفولة والمرأة والتعليم بمراحله المختلفة وجائزة الأجفند الدولية بأهداف التنمية المستدامة.</p>
<p>وقال: «إن خطاب النوايا هذا يأتي في إطار سعي البنك لتطوير استراتيجيته الجديدة التي تستند بشكل كبير إلى محورين أساسيين هما الاستراتيجية التي تبناها برنامج الخليج العربي للتنمية (أجفند) بتوجيه ومباركة من صاحب السمو الملكي الأمير طلال بن عبدالعزيز آل سعود رئيس البرنامج، والخطة الوطنية لتحقيق أهداف التنمية المستدامة التي تتبناها حكومة مملكة البحرين طوعًا».</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News1 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News1" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>"القصيبي القابضة" تمول أبداع البحرين بمبلغ 100 ألف دينار</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News1">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News1"></li>
<li data-slide-to="1" data-target="#slides_News1"></li>
<li data-slide-to="2" data-target="#slides_News1"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_1.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_1.1.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-75" src="assets/img/news/news_1.2.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News1" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News1" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> أعلنت شركة أبداع البحرين للتمويل متناهي الصغر – البحرين عن تقديم مجموعة القصيبي القابضة مبلغ 100 ألف دينار بحريني كتمويل اجتماعي من المجموعة وبدون أرباح، لدعم قدرة البنك على تقديم قروض لذوي الدخل المحدود من البحرينيين أصحاب المشروعات الناشئة.</p>
<p>ووقع الرئيس التنفيذي للبنك الدكتور خالد الغزاوي اتفاقية التمويل المقدم من المجموعة مع رئيسها التنفيذي السيد فواز القصيبي، وذلك في المقر الرئيسي لشركة ابداع البحرين.</p>
<p>وأكد الدكتور الغزاوي في تصريح له على هامش توقيع الاتفاقية أهمية هذا التمويل الاجتماعي السخي من قبل مجموعة القصيبي في تعزيز الملاءة المالية الى أبداع البحرين وزيادة مقدرته على توسعة قائمة المقترضين التي تضم حاليا نحو 2500 مقترض.</p>
<p>وأوضح د. الغزاوي: " نقدم في أبداع البحرين خمسة أنواع من القروض التي تتناسب واحتياجات محدودي الدخل منها قرض سيدتي المخصص لتمويل المشاريع التي تديرها النساء من المنزل، بالإضافة إلى منتجات تمويلية مثل الإبداع والأمل والتميز والتفوق والنجاح، وكلها قروض متخصصة وتتناسب وطبيعة كل مشروع من مشاريع عملاء البنك". وأضاف: "يمنح البنك قروضه بدون ضمانات لذوي الدخل المحدود من البحرينيين، حيث أن القروض الممنوحة تتراوح بين 200 و5000 دينار بينما يبلغ متوسط القرض الواحد القائم مبلغ 893 دينار فقط. لذلك يمكن لهذا التمويل من مجموعة القصيبي إحداث تطوير كبير في عملنا، خاصة وأننا نرصد نسب عالية من الاستدامة والتوسع في المشروعات المقترِضة".</p>
<p> ورحب الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر بانضمام مجموعة القصيبي القابضة لقائمة المؤسسات ورجال الأعمال الداعمين للبنك، والتي تضم حتى الآن كل من السيدة منى المؤيد، والوجيه خالد كانو، والسيد عبد الحميد دواني، إضافة إلى برنامج الخليج العربي للتنمية "أجفند" وكل من بنكي الإسكان والبحرين للتنمية، مشيدا في هذا الإطار بمجموعة القصيبي القابضة كواحدة من المؤسسات البحرينية الرائدة في مجال النهوض بالاقتصاد الوطني ودعم المجتمع البحريني.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News2 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News2" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> أبداع البحرين للتمويل متناهي الصغر يطلق قرضي "النجاح" و"التفوق"</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News2">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_2.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> أعلنت شركة أبداع البحرين للتمويل متناهي الصغر – البحرين عن إطلاق منتجين إقراضيين جديدين تحت مسمى قرض "النجاح" وقرض "التفوق" ليضافا إلى قائمة المنتجات التمويلية التي يقدمها البنك للمواطنين البحرينيين ذوي الدخل المحدود وأصحاب المشاريع المنزلية والناشئة دون تعقيدات الضمانات التقليدية.</p>
<p> وقال الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر الدكتور خالد وليد الغزاوي إن إطلاق هذين القرضين الجديدين يأتي في سياق عمل البنك الدائم على توفير المزيد من الحلول التمويلية لعملائه، وضمن مساعي البنك لتوسعة قائمة المقترضين لديه التي تضم حاليا نحو 2500 مقترض، تتراوح قيمة القروض الممنوحة لهم بين 200 و5000 دينار، فيما يبلغ متوسط القرض الواحد القائم مبلغ 893 دينار.</p>
<p>وأكد الدكتور الغزاوي أن تلك المساعي تأتي في إطار تحقيق رؤية البنك القائمة على المساهمة في تنمية الاقتصاد الوطني لمملكة البحرين في إطار الرؤية الوطنية 2030، وتحقيقاً لأهداف التنمية المستدامة 2030 التي أقرتها الأمم المتحدة وتساهم البحرين في تنفيذها طوعاً. كما تؤكد على رسالة البنك في توسعة شريحة الطبقة المتوسطة في المجتمع البحريني، وتحسين الظروف المعيشية للفئة المستهدفة من خلال الاستثمار في مشاريع مجدية متناهية الصغر وصغيرة تعزيز الروح الريادية وثقافة الاعتماد على الذات.</p>
<p>وأوضح الدكتور الغزاوي إلى أن تصميم كل من قرض "التفوق" وقرض "النجاح" يأتي منسجما مع التطورات التي يشهدها الاقتصاد الوطني، وتبدل طرق ممارسة الأعمال، والتطورات الاقتصادية والتشريعية والإجرائية، وقال "نحن في أبداع البحرين جزء من المنظومة الاقتصادية في مملكة البحرين، ولا بد من أن نواكب التطور الذي تشهده هذه المنظومة، وأن نكون روادا في مجال عملنا على تقديم قروض متناهية الصغر دون ضمانات معقدة لدعم النمو الاقتصادي".</p>
<p>هذا وقد جرى تصميم "قرض النجاح" خصيصا لأصحاب المشاريع المنزلية من الجنسين ممن يرغبون في تطوير مشاريعهم لتصبح مشاريع تجارية مرخصة، ويمنح هذا القرض مبالغ تمويل متنوعة تلبي احتياجات العملاء المختلفة، ويبدأ مبلغ التمويل في هذا القرض من 600 دينار ويصل كحد أقصى الى 1400 دينار تسدد خلال 18 شهراً.</p>
<p>فيما يمتاز "قرض التفوق" بالمرونة من ناحية السداد، حيث تم تصميم هذا القرض ليتناسب مع احتياجات أصحاب المشاريع التجارية المرخصة خارج المنزل من كلا الجنسين، ويمنح لأصحاب المشاريع المتنقلة مثل حافلات التوزيع والتوصيل أو سيارات الأجرة، ويتسم هذا القرض بالمرونة التي تمكن العميل من سداده خلال مدة زمنية تبدأ من ستة أشهر وتصل إلى ثلاث سنوات.</p>
<p>وبهذين المنتجين الجديدين، يرفع أبداع البحرين عدد المنتجات الإقراضية التي يقدمها إلى سبعة، وهي قرض سيدتي المخصص للمرأة المنتجة والعاملة من المنزل، وقرض الإبداع لدعم المشاريع المنزلية للرجال، وقرض الأمل المخصص لأصحاب المشاريع التجارية أو الصناعية أو الخدمية، وقرض التميز للمشاريع التي تمتلك سجلات تجارية، والقرض الموسمي الذي يمنح للمشاريع المنزلية أو التجارية المرخصة بسجل تجاري أو غير المرخصة، وذلك في فترات المناسبات مثل الاعياد وشهر رمضان الكريم والعودة للمدارس.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News3 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News3" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>" أبداع البحرين " يعيد افتتاح فرعه بمدينة حمد بعد تطويره خدمةً للعملاء</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News3">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News3"></li>
<li data-slide-to="1" data-target="#slides_News3"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_3.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_3.1.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News3" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News3" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> أعلنت شركة أبداع البحرين للتمويل متناهي الصغر عن إعادة افتتاح فرعه في مدينة حمد بعد إجراء عملية صيانة وتطوير شاملة له، وبما يضمن تكامل خدماته، ومزيدا من التواصل الفعال مع المقترضين والمراجعين من أصحاب المشاريع الصغيرة.</p>
<p>وشملت عملية التطوير إدخال تحسينات على البنية الإنشائية للمقر، وإعادة تأثيثه من جديد، إضافة إلى أنظمة إنارة وشبكة انترنت خارجية وداخلية متطورة، مع اهتمام خاص بالنظام الإلكتروني الخاص بتنظيم المراجعين، وأماكن انتظارهم، وإتاحة مساحات أوسع للتواصل فيما بينهم وبين موظفي البنك.</p>
<p> الدكتور خالد وليد الغزاوي الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر أكد أن فرع البنك في مدينة حمد يمثل أهمية كبيرة كونه يخدم تجمعات سكانية كبيرة هناك، وقال إن جزءا كبيرا من مقترضي البنك البالغ عددهم حاليا أكثر من ألفي مقترض يتمركزون في مدينة حمد والقرى القريبة منها، وأضاف أن إعادة افتتاح فرع أبداع البحرين في مدينة حمد تأتي بعد عملية تأهيل شاملة له، وذلك في إطار حرص البنك على توفير أقصى درجات الراحة للمراجعين.</p>
<p>يشار إلى أن أبداع البحرين للتمويل متناهي الصغير يخدم عملائه حاليا من خلال ثلاثة مكاتب رئيسية هي مقره الرئيسي في السنابس، وفرعه في مجمع "ريادات" بمنطقة عالي، وفرع مدينة حمد، فيما يسعى البنك إلى تأسيس فرعين آخرين في كل من منطقتي المحرق وسترة، وذلك ضمن خطة طموحة ترمي لتوسيع شبكة فروع البنك في مملكة البحرين إلى خمسة فروع متكاملة الخدمات.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News4 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News4" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> أبداع البحرين للتمويل متناهي الصغر يحتفي بكوادره</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News4">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News4"></li>
<li data-slide-to="1" data-target="#slides_News4"></li>
<li data-slide-to="2" data-target="#slides_News4"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_4.1.jpg"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_4.2.jpg"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-75" src="assets/img/news/news_4.3.jpg"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News4" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News4" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> احتفى أبداع البحرين - البحرين للتمويل متناهي الصغر بكوادره في لقاء مميز حضره الرئيس التنفيذي للبنك الدكتور خالد وليد الغزاوي والموظفين من مختلف أقسام البنك. وتضمن اللقاء فقرات وبرامج ترفيهية نظمها عدد من موظفي البنك أنفسهم إضافة إلى مسابقات وهدايا، وذلك في جو عائلي يحفز على مواصلة الإنتاجية والعطاء.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News5 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News5" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>د. الغزاوي يدعو من القاهرة لتكامل صناعة التمويل الأصغر بالوطن العربي</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News5">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News5"></li>
<li data-slide-to="1" data-target="#slides_News5"></li>
<li data-slide-to="2" data-target="#slides_News5"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_5.1.JPG"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_5.2.JPG"/>
</div>
<div class="carousel-item">
<img alt="Third slide" class="d-block w-75" src="assets/img/news/news_5.3.JPG"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News5" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News5" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p>دعا الدكتور خالد وليد الغزاوي، الرئيس التنفيذي لبنك الإبداع للتمويل متناهي الصغر- البحرين، إلى ضرورة حدوث "تكامل أكبر في مجال صناعة التمويل الأصغر في الوطن العربي"، بما يسهم في تعزيز تطور هذه الصناعة التي توفر التمويل والتدريب لعشرات آلاف المشاريع متناهية الصغر والناشئة بالمنطقة، خاصة في دول مثل مصر والسودان وموريتانيا والأردن.</p>
<p>وخلال مشاركته في إحدى جلسات "مؤتمر الاستثمار في الشرق الأوسط" الذي نظمته الجمعية المصرية لخبراء الاستثمار CFA بالقاهرة مؤخرا، أكد الدكتور الغزاوي إيلاء اهتمام أكبر من قبل الحكومات وصناع القرار بالمشاريع متناهية الصغر، والتي توفر فرص عمل لأصحابها، وتسهم إلى حد كبير في تحقيق الاكتفاء الذاتي للفقراء محدودي الدخل، وقال "دون أن نقلل من أهمية جذب الاستثمارات الخارجية الكبيرة، يجب أن نتنبه أيضا إلى تحفيز وتشجيع ما يمكن تسميتهم بصغار المستثمرين المحليين من خلال توفير التمويل الميسر وفرص التأهيل والتدريب".</p>
<p>واستعرض الدكتور الغزاوي خلال المشاركة جوانب من "تجربة مملكة البحرين المتقدمة في مجال دعم المشروعات متناهية الصغر والصغيرة والمتوسطة، وخلق بيئة مواتية للابتكار وريادة الأعمال من خلال مؤسسات مثل مجلس التنمية الاقتصادية وتمكين وبنك البحرين للتنمية والمجلس الأعلى للمرأة وغيرها".</p>
<p>وقال "تشكل المؤسسات متناهية الصغر والصغيرة والمتوسطة أكثر من 80% من عدد المؤسسات الخاصة في معظم دول المنطقة، لكنها لا تسهم بأكثر من 40% من الناتج المحلي، لذلك نحن في تحد دائم حول كيفية تمويل وتطوير تلك المؤسسات وزيادة فعالياتها وقدراتها التنافسية".</p>
<p>د. الغزاوي الذي عمل لأكثر من عشرين عاما في مجال التمويل الأصغر حول العالم خاصة في الدول النامية، أشار إلى أهمية التمييز بين التمويل الأصغر المستدام الذي تقدمه مؤسسات مالية تعمل وفقا لمعايير إدارية واضحة، وبين المنح الخيرية التي تقدمها مؤسسات العمل الخيري، وقال إن الخلط بين المفهومين لا زال يؤثر سلبا على جهود التنمية.</p>
<p>وأوضح أنه رغم تشابه الهدف النهائي المتمثل في دعم الفقراء والشرائح الأكثر ضعفا، إلا أن ضمان الاستدامة هو أهم ما يميز بين النوعين من التمويل، وقال "رغم أن رأس مال مؤسسة التمويل الأصغر يأتي أساسا من متبرعين إلا أن عملنا يقتضي إقراض رياديو الاعمال من محدودي الدخل والفقراء وضمان نجاح مشاريعهم واسترجاع القرض لمنحه لريادين آخرين، وهذا طبعا يختلف عن المنح أو الزكاة أو العطاء الخيري".</p>
<p>على صعيد ذي صلة، أكد الدكتور الغزاوي أهمية مبادرة مؤسسات التمويل الأصغر العربية لتطوير أدواتها، وضمان استدامة عملها، وتنمية رأس مالها، ومواكبة أساليب العمل المصرفي المتطورة في التشريعات وإدارة المخاطر، وتقنيات البلوك تشين والفنتك وغيرها، إضافة إلى الابتكار في تقديم قروض تناسب احتياجات أصحاب المشاريع بالضبط، والدخول معهم كشركاء في النجاح عبر تقديم الاستشارة والدعم اللازمين وبما يتناسب مع طبيعية الأعمال في كل بلد عربي.</p>
<p>واعتبر أن قياس نجاح مؤسسة التمويل الأصغر يجب ألا يكون في عدد القروض أو المستفيدين فقط، وإنما في العائد من تلك القروض، وقياس عدد المشاريع التي استطاعت بالفعل التحول إلى مؤسسات صغيرة ومتوسطة قادرة على النهوض بنفسها دون دعم خارجي، وبما يسهم في التوسع في تقديم الخدمات المالية للمشروعات متناهية الصغر وللفئات المستهدفة من العملاء للتقليل من الفجوة التمويلية بهذا القطاع، وتشجيع وتنظيم التأسيس والترخيص لشركات التمويل متناهي الصغر وإتاحة موارد التمويل لها.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News6 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News6" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> أبداع البحرين راعيا حصريا لحملة "نعين ونتعاون" في جامعة البحرين</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News5">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_6.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> أعلن أبداع البحرين للتمويل متناهي الصغر عن رعايته الحصرية لحملة "نعين ونتعاون" التي ينفذها عدد من طلاب جامعة البحرين برعاية رئيس الجامعة د. رياض حمزة، وتهدف إلى تعزيز السلوكيات الإيجابية بالمجتمع، وتشجيع الأفراد على المساهمة الإيجابية والمشاركة الفاعلة.</p>
<p> وصرح الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر الدكتور خالد وليد الغزاوي أن هذا الدعم يأتي في طار حرص أبداع البحرين على النهوض بمسؤوليته الاجتماعية تجاه المجتمع البحريني، وتشجيع العمل التطوعي والجهود الرامية إلى زيادة الشراكة المجتمعية والتكافل بين جميع أفراد المجتمع.</p>
<p>وأشاد الدكتور الغزاوي بمثل هذه المبادرات التطوعية للشباب البحريني، والتي تعكس حرصهم الكبير على تنمية مجتمعهم، وتبني المواقف الإيجابية، وتطوير أنماط حياتهم بشكل عصري دون التخلي عن الأعراف والقيم الأصيلة.</p>
<p>ولفت في هذا الإطار إلى حرص أبداع البحرين التواصل الفعال مع مختلف شرائح المجتمع، خاصة شريحة الشباب المقبلين على سوق العمل والراغبين بتحويل أفكارهم إلى مشاريع قائمة، مؤكدا أن أبداع البحرين موجود دائما لخدمتهم ومساندتهم من خلال تقديم تمويل ميسر إضافة إلى إرشاد وتوجيه نوعي يضمن نجاح الأعمال متناهية الصغر وتنميتها.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News7 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News7" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>د. الغزاوي: أبداع البحرين يتبنى استراتيجية جديدة متوافقة مع أهداف التنمية المستدامة في البحرين</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News7">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_7.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> أكد الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر الدكتور خالد وليد الغزاوي أن أبداع البحرين للتمويل متناهي الصغر – البحرين يقوم حالياً بمراجعة كاملة لاستراتيجيته الحالية لتتوافق -في كل جوانبها- مع أهداف التنمية المستدامة، وبما يدعم جهود التنمية والازدهار وخدمة المجتمع والاقتصاد في مملكة البحرين.</p>
<p>وفي تصريح صحفي، أشار الغزاوي إلى أن الاستراتيجية الجديدة ستستند بشكل كبير إلى محورين: الاستراتيجية التي تبناها برنامج الخليج العربي للتنمية "أجفند" بتوجيه ومباركة من صاحب السمو الملكي الأمير طلال بن عبد العزيز آل سعود رئيس البرنامج، والخطة الوطنية لتحقيق أهداف التنمية المستدامة التي تتبناها حكومة مملكة البحرين.</p>
<p>وأضاف الغزاوي "على الرغم من الإطار التشريعي الضيق الذي يعمل شركة الابداع من خلاله، إلا أن البنك سيسعى إلى تطوير وتعديل استراتيجيته في المنتجات الإقراضية، إجراءات وسياسات منح القروض، طريقة اختيار العملاء، وحتى حملاته التسويقية عبر قنوات التواصل الاجتماعي لتحقق أهداف التنمية الاجتماعية المستدامة السبعة عشر 2030 والتي أقرتها الأمم المتحدة وتبنت مملكة البحرين تطبيقها طوعاً"</p>
<p> وأشار د. الغزاوي إلى أن أبداع البحرين يحقق حالياً وبشكل واضح عدداً كبيرا من أهداف التنمية المستدامة -حتى قبل هذه المراجعة الشاملة-، فالبنك يدعم الشرائح الأكثر حاجة في البحرين من خلال توفير قروض ميسرة ودون ضمانات إضافة إلى خدمات الدعم والإرشاد الاختياري، موضحا أن التزام البنك بتحقيق تلك الأهداف هو التزام طوعي ينبع من شعور عالي بالمسؤولية في أن يكون جزءا فاعلا من الجهود الوطنية والإقليمية والعالمية الساعية إلى تحقيق أهداف التنمية المستدامة.</p>
<p> وقال "عندما نتحدث عن منح أبداع البحرين - منذ تأسيسه- قروضا ميسرة لأكثر تسعة ألاف مقترض ويخدم حالياً أكثر من ألفين وثلاثمائة مقترض، فهذا يعني أننا اسهامه في إنشاء أو تطوير ألفين وثلاثمائة مشروع متناهي الصغر في مملكة البحرين، ونعمل على تحقيق تنمية تفضي إلى الازدهار الاقتصادي الشامل الذي يراعي البيئة، ويضمن إرساء السلام وتحقيق الازدهار، وإتاحة العلوم والتكنولوجيا والابتكار للجميع بغية التوصّل إلى تنمية ذات بعد إنساني.</p>
<p> وأكد د. الغزاوي أن تحقيق أبداع البحرين للهدف الخامس من أهداف التنمية المستدامة الذي ينص على "المساواة بين الجنسين" يتجلى من خلال الممارسات الحصيفة التي يتبعها البنك داخليا من خلال عدم التمييز نهائيا بين الموظفين من الجنسين في التوظيف والرواتب والعلاوات والترقية وغيرها من الامتيازات الوظيفية، كما يتجلى أيضا في عدم التمييز نهائيا بين المقترضين على أساس الجنس، الدين، اللون، أو العرق.</p>
<p>وخص د. الغزاوي بالذكر أيضا الهدف الثامن الذي ينص على "العمل اللائق ونمو الاقتصاد"، وقال إن أبداع البحرين يحرص على توفير بيئة مواتية لعمل موظفيه بما يناسب كفاءاتهم وطموحاتهم، كما أنه يسهم في تنمية الاقتصاد الوطني من خلال منحه قروضا لمشاريع متناهية الصغر.</p>
<p>وخص د. الغزاوي بالذكر أيضا الهدف الثامن الذي ينص على "العمل اللائق ونمو الاقتصاد"، وقال إن أبداع البحرين يحرص على توفير بيئة مواتية لعمل موظفيه بما يناسب كفاءاتهم وطموحاتهم، كما أنه يسهم في تنمية الاقتصاد الوطني من خلال منحه قروضا لمشاريع متناهية الصغر.</p>
<p>وأوضح أن عمل البنك على إن توفير مصدر رزق مستدام يضمن تحقيق جزء كبير من أهداف التنمية المستدامة، مثل الصحة الجيدة والرفاهية، والتعليم الجيد، والحماية الاجتماعية، وتوفير فرص العمل، وانشاء مدن ومجتمعات محلية مستدامة.</p>
<p>واختتم د. الغزاوي تصريحه بالتأكيد على حرص أبداع البحرين على التشاور الدائم مع جميع الجهات الفاعلة في المجتمع المدني والقطاع الخاص والسلطات المحلية من أجل ضمان تحقيق أهداف التنمية المستدامة بأقصى فاعلية ممكنة.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News8 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News8" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>د. الغزاوي: نقل تجربة البحرين في التمويل الأصغر للعراق</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News8">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News8"></li>
<li data-slide-to="1" data-target="#slides_News8"></li>
<li data-slide-to="2" data-target="#slides_News8"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_8.1.JPG"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_8.2.JPG"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News8" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News8" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> عقد الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر للتمويل متناهي الصغر البحرين الدكتور خالد وليد الغزاوي اجتماعا مع وفد كبير من رابطة المصارف العراقية الخاصة برئاسة السيد وديع حنظل جرى خلاله بحث سبل استفادة العراق من تجربة التمويل الأصغر في مملكة البحرين ممثلة ببنك الإبداع.</p>
<p>وخلال الاجتماع الذي جرى في المقر الرئيسي التابع الى أبداع البحرين في البحرين ، أكد الدكتور الغزاوي استعداد البنك ومن خلفه برنامج الخليج العربي للتنمية (أجفند) لتوفير ما يلزم من خبرات واستشارات من أجل دعم صناعة تمويل أصغر حقيقية في العراق، لافتا إلى أن التجارب التي راكمها أبداع البحرين في البحرين على مدى السنوات التسع السابقة وما حققه الاجفند ضمن شبكة بنوكه التسعة في المنطقة العربية وافريقيا من نجاح خلال آخر ثلاث سنوات تجعله مؤهلا لتقديم دليل عمل كامل حول ما يجب وما لا يجب عمله عند إنشاء مؤسسات التمويل الأصغر.</p>
<p>وأشار الدكتور الغزاوي إلى أن العراق يعتبر من البلدان المثالية لإطلاق عدد كبير من مؤسسات التمويل الاصغر، خاصة مع الحاجة الماسة لتسريع عمليات التنمية في مختلف القطاعات هناك، وارتفاع نسبة المحتاجين إلى عمل، وإمكانية توفير قروض صغيرة ميسرة تساعد المواطنين على تخطي الصعوبات الاقتصادية من جهة، وترفع من مساهمتهم في التنمية الشاملة والمستدامة من جهة أخرى.</p>
<p>وأكد أن من شأن نشر عدد أكبر من مؤسسات التمويل الأصغر في العراق أن تتيح للعراقيين قنوات اقتراض رسمية داخل القطاع المالي المنظم، مع توفير الاستشارات حول كيفية استخدام هذه القروض في إطلاق المشاريع الصغيرة الخاصة والانتقال بها إلى مشاريع صغيرة ومتوسطة، وليس مجرد إنفاق القروض على الحاجات الشخصية والبقاء في دوامة الفقر.</p>
<p>لكنه أكد في نفس الوقت على ضرورة تبني مصرف العراق المركزي لحزمة من القوانين والتشريعات التي تنظم عمل مؤسسات وبنوك التمويل الاصغر وأكد على استعداد أبداع البحرين في البحرين ومن وراءه برنامج الخليج العربي للتنمية (أجفند) على تقديم يد العون للمصرف المركزي في العراق لتطوير هذه القوانين والتشريعات لتسهم في تطوير قطاع التمويل الاصغر بشكل صحيح وتعزز من تطبيق معايير ومؤشرات التنمية المستدامة الشاملة التي أصدرتها الامم المتحدة وتبناها العراق كسائر دول العالم المختلفة.</p>
<p>من جانبه أكد رئيس رابطة المصارف العراقية الخاصة وديع حنظل حرصه على الاستفادة من تجربة ِركة أبداع البحرين والاجفند عموماً، ووجه دعوة للدكتور الغزاوي لزيارة بغداد، وقال إن رابطته ستتولى تنظيم عدة لقاءات وسلسلة محاضرات للدكتور الغزاوي مع المؤسسات المالية المعنية والمصرف المركزي وغيرها من الجهات التشريعية والرقابية المختلفة والتي تعنى بالتمويل الأصغر في العراق.</p>
<p>وأشار إلى جملة من الفوائد المرتقبة للتعاون مع أبداع البحرين ، ومنها نشر ثقافة التمويل الأصغر في العراق، وبناء قدرات العاملين في مجال التمويل الأصغر، خاصة في ظل محدودية عدد مؤسسات التمويل الأصغر في العراق، وزيادة الطلب على القروض التي تقدمها، والحاجة الماسة إلى تطوير آليات عمل تضمن استدامة عملها.</p>
<p>وأضاف أن نشر ثقافة التمويل الأصغر في العراق يعود بالفائدة على القطاع المصرفي ككل، وذلك من خلال تشجيع الشرائح الأقل دخلا على التعامل مع المصارف بشكل عام، في وقت يشهد فيه العراق نسبة متدنية جدا من السكان البالغين الذين لديهم حساب في مؤسسة مالية رسمية.</p>
<p>هذا وقد شملت زيارة وفد رابطة المصارف العراقية الخاصة الى ابداع البحرين الاطلاع على آلية عمل البنك وأقسامه، والاطلاع على قصة انشاء البنك وقصص نجاح عملاءه.</p> </div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News9 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News9" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>د. الغزاوي يدعو لتبني مفهوم التمويل الأصغر في المؤسسات الخيرية الخليجية</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News9">
<ol class="carousel-indicators">
<li class="active" data-slide-to="0" data-target="#slides_News9"></li>
<li data-slide-to="1" data-target="#slides_News9"></li>
<li data-slide-to="2" data-target="#slides_News9"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_9.1.JPG"/>
</div>
<div class="carousel-item">
<img alt="Second slide" class="d-block w-75" src="assets/img/news/news_9.2.JPG"/>
</div>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#slides_News9" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" data-slide="next" href="#slides_News9" role="button">
<span aria-hidden="true" class="carousel-control-next-icon"></span>
</a>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> قال الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر الدكتور – البحرين الدكتور خالد وليد الغزاوي إن تبني مفهوم التمويل الأصغر من قبل المؤسسات الخيرية يضمن استدامة عملها وتنمية مواردها المالية، ويرفع من مقدرتها على تحقيق أهدافها في دعم الأسر المحتاجة ومحدودي الدخل، خاصة في ظل شح التبرعات من جهة وارتفاع عدد محتاجي الدعم من جهة أخرى.</p>
<p>وأكد الدكتور الغزاوي خلال استقباله وفدا من مؤسسة المجدوعي الخيرية من المملكة العربية السعودية حاجة دول الخليج العربي إلى التوسع أكثر في مفهوم التمويل الأصغر والاستفادة من أموال العمل الخيري في ذلك، وبما يسهم في تحويل المزيد من المواطنين إلى أصحاب مؤسسات متناهية الصغر أو صغيرة بدلاً من الاتكال على المنح المستمرة وبشكل يخلق المزيد من فرص العمل، ويرفع من قدرة القطاع الخاص الوطني على تلبية احتياجات السوق المحلي من خدمات ومنتجات</p>
<p> وأعرب د. الغزاوي عن استعداد أبداع البحرين لتوفير الخبرات اللازمة للمؤسسات والجمعيات الخيرية من أجل تطوير عملها، لافتا إلى أن نجاح تجربة التمويل الأصغر في البحرين تعتبر نموذجا في مجال ما يمكن تسميته مأسسة العمل الخيري والانتقال به إلى مراحل متقدمة.</p>
<p>وأوضح في هذا الصدد "تقوم سياسة التمويل الأصغر على مفهوم بسيط يدور حول المثل القائل: لا تعط الجائع سمكة، سيأكلها ويأتي غدا يريد واحد أخرى، بل علمه كيف يصطاد ويعتمد على نفسه"، وتابع أن التمويل الأصغر يقوم على استكشاف الاحتياجات الفعلية للمحتاج –الذي يتحول إلى متعامل لدى البنك-، ثم مساعدته على إطلاق مشروعه الخاص عبر تقديم المشورة والتدريب والمتابعة، إلى أن يتمكن من تولي زمام أمور مشروعه بنفسه".</p>
<p>هذا وطلبت مؤسسة المجدوعي الخيرية من أبداع البحرين – البحرين المساعدة على اطلاق مشروعها الرائد "بسطة" بشكل كامل بعد ان مر بمرحلة اختبار دامت 6 شهور، وذلك من خلال رسم خطة العمل للسنوات الخمس القادمة، وتطوير استراتيجيات وسياسات مستدامة مناسبة لخدمة الفقراء ومحدودي الدخل وذلك من خلال مساعدتهم على نقل مشاريعهم المتنقلة والمرخصة الى اكشاك مرخصة ومجهزة بكافة وسائل الأمان ومثبتة في اماكن مختارة في المنطقة الشرقية. </p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- News10 -->
<div aria-hidden="true" class="modal fade ar-dir" id="News10" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body ar-txt">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4> أبداع البحرين يحتفي بموظفيه الأكثر إنتاجية</h4>
<hr/>
<div class="carousel slide" data-ride="carousel" id="slides_News10">
<div class="carousel-inner">
<div class="carousel-item active">
<img alt="First slide" class="d-block w-75" src="assets/img/news/news_10.1.jpg"/>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="box_shadow">
<p> كرَّم الرئيس التنفيذي لشركة الابداع للتمويل متناهي الصغر ، الدكتور خالد وليد الغزاوي، عددا من كوادر البنك الذين أظهروا مستويات أداء متميزة خلال الآونة الأخيرة، وذلك ضمن برنامج البنك الرامي لتحفيز كوادره وتشجيعهم على تعزيز مستويات الأداء وزيادة الانتاجية وبما يعزز من خدمة عملاء البنك من البحرينيين والبحرينيات أصحاب المشاريع الصغيرة وتقديم التمويل اللازم لهم بطريقة ميسرة وفعالة.</p>
<p>وحظيت بالتكريم كل من الموظفة مريم حسن سلطان من فرع البنك في مدينة حمد، والموظف على الكامل من فرع البنك في مجمع ريادات وذلك لقاء تحقيقهم أعلى معدلات الإنتاجية، أما جائزة الفرع   الأكثر إنتاجية فقد حظي بها موظفو فرع البنك في ريادات.</p>
<p>الدكتور الغزاوي، وفي تصريح له على هامش التكريم، أشاد بالدور المتميز الذي تنهض به كوادر أبداع البحرين على جميع المستويات من أجل تحقيق أفضل النتائج، وما يشهده البنك من فعالية تشغيلية كبيرة وإدارة حصيفة للموارد في وقت تشهد فيه المصارف على مستوى العالم بشكل عام تراجعا في إيراداتها وارتفاعاً في نفقاتها التشغيلية</p>
<p>وقال إن هذا التكريم يأتي كعربون شكر لعطاء كوادر أبداع البحرين ، وبما يحقق مزيد من الارتقاء بمفاصل العمل داخل البنك من خلال الاعتماد على الثروة الأساسية التي يملكها وهي رأس المال البشري.</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
<!-- Contact Us Section Start -->
<section class="section" id="contact" style="background-image: linear-gradient(#b1e9da, #ffffff);">
<div class="container">
<div class="section-header">
<h2 class="section-title wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1000ms">اتصل بنا  </h2>
<hr class="lines wow zoomIn" data-wow-delay="0.3s"/>
<p class="section-subtitle wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1000ms">اذا كانت لديكم اي استفسار أو اقتراح أو شكوى حول خدمات أبداع البحرين ، الرجاء التواصل معنا <br/>.رأيكم يهمنا وخدمتكم هدفنا</p>
</div>
<div class="contact-form" id="contactUs">
<div class="container" style="text-align:right !important;">
<div class="row ar-dir">
<div class="col-lg-6 col-sm-12 col-xs-12">
<div id="contact-address">
<div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-bottom: 2px solid #61D2B4; border-left: 2px solid #61D2B4">
<p style="text-align:right"> <b>الادارة العامة </b> </p>
<hr/>
<ul style="text-align:right; padding-bottom:10px;direction:rtl;">
<li><a href="tel:+973 17381000" style=" padding: 7px 0px; color: #999; text-transform: capitalize;"><span class="fa fa-phone" style="padding-left:5px;"></span>973 17381000+</a></li>
<li><a class="btn-rm" href="mailto:info@ebdaabahrain.com"> <span class="fa fa-envelope" style="padding-left:5px;"></span>info@ebdaabahrain.com </a></li>
<li> <a class="btn-rm" href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-left:5px;"></i> المنامة- البحرين</a></li>
</ul>
</div>
<div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-bottom: 2px solid #61D2B4">
<p style="text-align:right"> <b>فرع العاصمة</b></p>
<hr/>
<ul style="text-align:right ;padding-bottom:10px;">
<li> <a href="tel:+973 17381003" style=" padding: 7px 0px; color: #999; text-transform: capitalize;"><span class="fa fa-phone" style="padding-left:5px;"></span>973 17381003+</a></li>
<li> <a class="btn-rm" href="mailto:almanama@ebdaabahrain.com"> <span class="fa fa-envelope" style="padding-left:5px;"></span>almanama@ebdaabahrain.com </a></li>
<li> <a class="btn-rm" href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-left:5px;"></i> المنامة- البحرين</a></li>
</ul>
</div>
<div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-left: 2px solid #61D2B4">
<p style="text-align:right;"> <b>فرع عالي</b> </p>
<hr/>
<ul style="text-align:right ;padding-bottom:10px;">
<li> <a href="tel:+973 17381013" style=" padding: 7px 0px; color: #999; text-transform: capitalize;"><span class="fa fa-phone" style="padding-left:5px;"></span>973 17381013+</a></li>
<li><a class="btn-rm" href="mailto:aali@ebdaabahrain.com"> <span class="fa fa-envelope" style="padding-left:5px;"></span>aali@ebdaabahrain.com </a></li>
<li> <a class="btn-rm" href="https://goo.gl/maps/Xgobw4hn6qM2" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-left:5px;"></i> عالي - البحرين</a></li>
</ul>
</div>
<div class="col-lg-6 col-sm-6 col-xs-12 contactBox">
<p style="text-align:right"> <b>فرع سار </b></p>
<hr/>
<ul style="text-align:right;padding-bottom:10px;">
<li> <a href="tel:+973 17381018" style=" padding: 7px 0px; color: #999; text-transform: capitalize;"><span class="fa fa-phone" style="padding-left:5px;"></span>973 17381012+</a></li>
<li> <a class="btn-rm" href="mailto:ٍsaar@ebdaabahrain.com"> <span class="fa fa-envelope" style="padding-left:5px;"></span>Saar@ebdaabahrain.com </a></li>
<li> <a class="btn-rm" href="https://goo.gl/maps/azWzNzyXwCNmLyEv7" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-left:5px;"></i> سار -البحرين</a></li>
</ul>
</div>
<div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-Top: 2px solid #61D2B4; border-left: 2px solid #61D2B4">
<p style="text-align:right"> <b>فرع مدينة حمد</b></p>
<hr/>
<ul style="text-align:right;padding-bottom:10px;">
<li> <a href="tel:+973 17381018" style=" padding: 7px 0px; color: #999; text-transform: capitalize;"><span class="fa fa-phone" style="padding-left:5px;"></span>973 17381018+</a></li>
<li> <a class="btn-rm" href="mailto:hamad.town@ebdaabahrain.com"> <span class="fa fa-envelope" style="padding-left:3px;"></span>hamad.town@ebdaabahrain.com</a></li>
<li> <a class="btn-rm" href="https://goo.gl/maps/qShfUw1tMhk" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-left:5px;"></i> مدينة حمد - البحرين</a></li>
</ul>
</div>
<div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-Top: 2px solid #61D2B4; border-left: 0px solid #61D2B4">
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12 col-xs-12" style="direction:rtl;">
<div class="contact-block">
<form id="contactForm">
<div class="">
<div class="col-md-12">
<div class="form-group">
<input data-error="الرجاء ادخال الاسم الرباعي " id="name_contact" name="name_contact" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF\s]{3,30}" placeholder="الاسم الرباعي" required="" type="text"/>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input data-error="الرجاء ادخال رقم المحمول " id="mobile_contact" name="mobile_contact" pattern="[0-9-]{8,15}" placeholder="رقم المحمول" required="" type="text"/>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input data-error="الرجاء ادخال بريدك االإلكتروني " id="email_contact" name="email_contact" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="البريد الإلكتروني" required="" type="email"/>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<select form="contactForm" id="subject_contact" name="subject_contact">
<option value="">اختر الغاية من الرساله</option>
<option value="Enquiry">استفسار</option>
<option value="Suggestion">اقتراح</option>
<option value="Complaint">شكوى</option>
</select>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea data-error="الرجاء ادخل رسالتك" id="message_contact" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF1-9-\,\.\?\!\@\s]{3,200}" placeholder="الرساله" required="" rows="8"></textarea>
<div class="help-block with-errors"></div>
</div>
<div class="submit-button text-center">
<button class="btn btn-common" id="submit_contact" type="submit"> إرسال الرساله</button>
<div class="h3 text-center hidden" id="msgSubmit-form"></div>
<div class="clearfix"></div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<p class="ar-txt ar-dir">**اذا كان لديك شكوى يمكنك  إرسال رسالة عن طريق<a class="btn-link" href="#contact" style="color:#61D2B4"><b> النموذج اعلاه </b></a>أو اتباع <a class="btn-link" data-target="#complain" data-toggle="modal" href="#" style="color:#61D2B4"><b>إجراءات الشكاوى</b></a> لنقوم بمساعدتك .</p>
<p class="ar-txt ar-dir">** لعرض الوظائف الشاغرة يرجى <a class="btn-link" data-target="#jobModal" data-toggle="modal" href="#" style="color:#61D2B4"><b>الضغط هنا </b></a>.
        <!-- complain Modal -->
<div aria-hidden="true" class="modal fade ar-dir" id="complain" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row ar-txt">
<div class="col-sm-12">
<h4>إجراءات في التعامل مع الشكاوى</h4>
<hr/>
<p> تتعهد شركة ابداع البحرين للتمويل متناهي الصغر بتقديم أعلى مستويات الخدمة لعملائه، نرجو إعلامنا إذا لم تلبي خدماتنا مستوى ‏توقعاتك بأي شكل من الأشكال حتى نتمكن من إرضائك.</p>
<div class="box_shadow">
<p><b> اتبع هذه الخطوات الثلاث لتوصيل وجهة نظرك للمعنيين:</b></p>
</div>
</div>
<div class="col-sm-12 col-md-6">
<div class="box_shadow">
<p><b>أولا - أطلع الشخص المسئول على مشكلتك</b></p>
<p>   أعلمنا بمشكلتك ومقترحاتك بالاتصال بالانسة ايمان بوفرسن المسئولة عن الشكاوى:</p>
<p> على هاتف رقم 973 38712712+</p>
<p>  أو البريد الالكتروني complaints@ebdaabahrain.com </p>
</div>
</div>
<div class="col-sm-12 col-md-6">
<div class="box_shadow">
<p><b>ثانيا – تابع معنا</b></p>
<p>إذا لم تكن راضيا عن الإجراءات المتخذة من قبل الشخص المسئول </p>
<p> فسوف يتم رفع الشكوى إلى ادارة العمليات في أبداع البحرين.</p>
</div>
</div>
<div class="col-sm-12">
<div class="box_shadow">
<p><b>ثالثا – إدارة المتابعة بمصرف البحرين المركزي</b></p>
<p>في حال عدم التوصل إلى حل في موضوع الشكوى من خلال أبداع البحرين بإمكانك إحالة الأمر ‏إلى إدارة المتابعة بمصرف البحرين المركزي..</p>
<p>إدارة الشكاوى</p>
<p>مصرف البحرين المركزي</p>
<p>شارع الملك فيصل</p>
<p>المنطقة الدبلوماسية، مبنى رقم 96، طريق 1702، مجمع 317</p>
<p>المنامة – مملكة البحرين</p>
<p>البريد الإلكتروني: compliance@cbb.gov.bh</p>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-common fadeInUp animated" data-dismiss="modal" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" type="button">إغلاق</button>
</div>
</div>
</div>
</div>
</p></div>
</section>
<!-- Contact us end-->
<!-- social-icons  start-->
<div class="social-widget social-icons">
<ul>
<li class="facebook" id="facebook-share-btn">
<a href="https://www.facebook.com/Ebdaabahrain/" target="_blank" title="تابعنا على فيسبوك">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="twitter" id="twitter-share-btn">
<a href="https://twitter.com/ebdaabahrain" target="_blank" title="تابعنا على تويتر">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="instagram" id="instagram-btn">
<a href="https://www.instagram.com/ebdaabahrain/" target="_blank" title="تابعنا على إنستغرام">
<i class="fa fa-instagram"></i>
</a>
</li>
<li class="youtube" id="youtube-btn">
<a href="https://www.youtube.com/channel/UCE5TCNCvV9D86TLo4nwFyrQ?view_as=subscriber" target="_blank" title="شاهدنا على يوتيوب">
<i class="fa fa-youtube"></i>
</a>
</li>
<li class="tiktok" id="tiktok-btn">
<a href="https://www.tiktok.com/@ebdaabahrain" target="_blank" title="تابعنا على تيك توك">
<i class="fab fa-tiktok"></i>
</a>
</li>
<li class="call-us" id="call-us-btn">
<a href="tel:+97317381000" title="اتصل بنا الآن">
<i class="lnr lnr-phone"></i>
</a>
</li>
<li class="call-us" id="call-us-btn">
<a href="#application" title="قدّم الآن">
<i class="lnr lnr-file-add"></i>
</a>
</li>
</ul>
</div>
<!-- social-icons  End-->
<!-- Footer Section Start -->
<footer>
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-6 col-xs-12">
<div class="copyright">
<p>جميع الحقوق محفوظة © 2021 - تصميم و تطوير  <a href="index.php" rel="nofollow"> إبداع البحرين </a><br/>مرخص من قبل مصرف البحرين المركزي كمؤسسة تمويل أصغر تقليدية</p>
</div>
</div>
<!-- Footer Links -->
<div class="col-lg-6 col-sm-6 col-xs-12">
<ul class="footer-links ar-dir">
<li><a href="index.php">الصفحه الرئيسيه</a></li>
<li><a href="#services">خدماتنا</a></li>
<li><a href="#about_us">من نحن</a></li>
<li><a data-target="#jobModal" data-toggle="modal" href="#">الوظائف </a></li>
</ul>
</div>
</div>
</div>
</footer>
<!-- Footer Section End -->
<!-- Jobs Modal -->
<div class="modal fade ar-dir" id="jobModal" role="dialog" tabindex="-1" zaria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
<span aria-hidden="true">×</span>
</button>
<div class="row ar-txt">
<div class="col-sm-12 col-md-12 col-lg-12">
<h4>تقدم بطلب وظيفه</h4>
<div class="row ar-txt">
<div class="col-sm-12 col-md-6 col-lg-6">
<div class="row">
<div id="accordion">
<button class="collapsible" name="job1" type="button">أخصائي تحصيل</button>
<div class="content">
<p>الهدف العام 
				  <br/>المحصل هو الشخص المعني بزيارة العملاء المتأخرين عن السداد لمتابعة تحصيل ما يستحق عليهم لصالح البنك.</p>
<p>المهام والمسؤوليات
				  <ol>
<li> التحري عن صحة المعلومات المقدمة الى ضباط الاقراض.</li>
<li>متابعة العملاء المتأخرين عن السداد بصورة مستمرة الى حين تحصيل المستحقات.</li>
<li>التنسيق مع مشرفي وضابط الاقراض المعنيين فيما يخص العميل المتأخر عن السداد لايجاد الوسائل اللازمة لحل الاشكال مع هذا العميل.</li>
<li>متابعة القروض المجدولة للتأكد من انها تسدد في موعدها حسب اجراءات الجدولة.</li>
<li>اعداد انذارات المحامي الموجهة الى العملاء المتأخرين عن السداد وكفلائهم.</li>
<li>المتابعة مع المستشار القانوني بخصوص الملفات المحولة اليه.</li>
<li>متابعة أي إجراء قانوني تم اتخاذه بما فيها متابعة التحصيلات لدى دائرة الاجراء.</li>
<li>التنسيق مع العمليات فيما يخص تحصيل الدفعات والغرامات المتأخرة.</li>
<li>اعداد كافة التقارير والكشوف المتعلقة بالاقساط المستحقة.</li>
<li>القيام باية واجبات اخرى تناط به من قبل مسؤوله المباشر.</li>
</ol>
</p>
<p>المؤهلات الأكاديمية: <br/>بكالوريوس او دبلوم في تخصصات العلوم الإدارية أو ما يعادلها</p>
<p>الخبرة العملية:
				  <ol>
<li>معرفة في القوانين المرعية والمتعلقة بهذا الخصوص.</li>
<li>معرفة بإجراءات المتابعة والتحصيل.</li>
</ol>
</p>
<p>المهارات المطلوبة:
				  <ol>
<li>أن يتمتع بمهارات قيادية.</li>
<li>إتقان اللغتين العربية والإنجليزية كتابة وقراءة ومحادثة وإتقان استخدام الحاسوب.</li>
</ol>
</p>
</div>
<button class="collapsible" name="job2" type="button">أخصائي إقراض</button>
<div class="content">
<p>الهدف العام:
					<br/> الترويج للحصول على عملاء ودراسة الطلبات والزيارة الميدانية بالإضافة إلى التحصيل والمحافظة على جودةالمحفظة الإئتمانية. </p>
<p>المهام والمسؤوليات:
                   <ol>
<li>ترويج خدمات ومنتجات البنك للحصول على طلبات الإقراض والوصول الى العدد المطلوب من العملاء حسب ما يحدده البنك.</li>
<li>الزيارة الميدانية للعملاء حسب الخطط والسياسات المعدة من قبل البنك.</li>
<li>مراجعة طلبات الإقراض للتأكد من صحتها وصحة الإجراءات المتبعة.</li>
<li>التأكد من كون العملاء قد استكملوا جميع الوثائق اللازمة والمتعلقة بطلباتهم.</li>
<li>عمل دراسة متكاملة تبين القدرة المالية للعملاء المتقدمين للحصول على قرض.</li>
<li>تقديم تقارير دورية إلى مسئوله المباشر تتعلق بمحفظته الائتمانية.</li>
<li>المتابعة المستمرة للمحفظة الائتمانية والتركيزعلى السداد في الوقت المحدد وإدارة المتأخرات إن وجدت.</li>
<li>القيام بأية واجبات أخرى تناط به من قبل مسؤوله المباشر.</li>
</ol>
</p>
<p>المؤهلات الأكاديمية:<br/> بكالوريوس أو دبلوم في تخصصات العلوم الإدارية والعلوم المالية والمصرفية.</p>
<p>الخبرة العملية : <br/>لايحتاج الخبره </p>
<p>المهارات المطلوبة :
				  <ol>
<li>أن يتمتع بمهارات قيادية.</li>
<li>إتقان اللغتين العربية والإنجليزية كتابة وقراءة ومحادثة و إتقان استخدام الحاسوب.</li>
<li>القدرة على تدريب الموظفين.</li>
</ol>
</p>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-6">
<div class="contact-form">
<div class="container">
<div class="col-lg-12 col-sm-12 col-xs-12" style="direction:rtl;">
<div class="contact-block">
<form action="php/jobs-process.php" id="jobsForm" method="POST" role="form">
<div class="">
<div class="col-md-12">
<div class="form-group row">
<label class="col-sm-3 col-form-label" for="name_job">الإسم</label>
<div class="col-sm-9">
<input data-error="الرجاء ادخال الاسم الرباعي " id="name_job" name="name_job" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF\s]{3,30}" placeholder="الاسم" required="" type="text"/>
</div>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group row">
<label class="col-sm-3 col-form-label" for="email_job">البريد الإلكتروني</label>
<div class="col-sm-9">
<input data-error="الرجاء ادخال بريدك الالكتروني" id="email_job" name="email_job" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="البريد الالكتروني" required="" type="email"/>
</div>
<div class="help-block with-errors">
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group row">
<label class="col-sm-3 col-form-label" for="cv_job">السيرة الذاتية</label>
<div class="col-sm-9">
<input accept=".doc, .docx, .txt, application/pdf" data-error="الرجاء رفع السيره الذاتيه" id="cv_job" name="file_attach[]" placeholder="رفع السيره الذاتيه" required="" type="file"/>
</div>
<div class="help-block with-errors"></div>
</div>
<div class="col-md-12">
<div class="form-group row">
<label class="col-sm-3 col-form-label" for="job_type">الوظيفة</label>
<div class="col-sm-9">
<select form="contact_body" id="job_type" name="job_type">
<option value="">قم باختيار الوظيفة المتقدم لها</option>
<option value="job1">أخصائي تحصيل </option>
<option value="job2">أخصائي إقراض</option>
<option value="job3">أخرى</option>
</select>
</div>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-19">
<div class="form-group row">
<textarea data-error="الرجاء كتابه الرسالة" id="message_job" name="message_job" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF1-9-\,\.\?\!\@\s]{3,200}" placeholder="الرساله" rows="8"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="alert alert-danger" id="alert" role="alert" style="display:none">
<p>الرجاء الضغظ على زر التحقق الامني ادناه</p>
</div>
<div class="g-recaptcha" data-callback="verifyRecaptchCallback" data-expired-callback="expiredRecaptchaCallback" data-sitekey="6LetsOQZAAAAANG2gbEt7vMzNEFNHMry4QKYdVJ5" data-size="visible"></div>
<div class="from-group">
</div>
<div class="submit-button text-left">
<button class="btn btn-common" id="submit_job" type="submit">تقدم للوظيفه</button>
<div class="h3 text-left hidden" id="msgSubmit-job"></div>
<div class="clearfix"></div>
</div>
</div>
</div></form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Go To Top Link -->
<a class="back-to-top" href="#">
<i class="lnr lnr-arrow-up"></i>
</a>
<div id="loader">
<div class="spinner">
<div class="double-bounce1"></div>
<div class="double-bounce2"></div>
</div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<?php include "includes/footer.php";?>
<script>
    // كود التعامل مع الأزرار القابلة للطي
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
</script>
<script>
    // كود تفعيل وظيفة الأكوردين باستخدام jQuery
    $(document).ready(function() {
        $("#accordion").accordion(); // تفعيل وظيفة الأكوردين
    });
</script>
<script>
  document.querySelectorAll(".tabAnchor li a").forEach(tab => {
    tab.addEventListener("click", function(e) {
      e.preventDefault();
      document.querySelectorAll(".tabAnchor li").forEach(li => li.classList.remove("active"));
      document.querySelectorAll(".tabContent").forEach(content => content.style.display = "none");
      this.parentElement.classList.add("active");
      const target = this.getAttribute("href");
      const targetEl = document.querySelector(target);
      if (targetEl) targetEl.style.display = "block";
    });
  });

  document.addEventListener("DOMContentLoaded", () => {
    const firstTab = document.querySelector(".tabAnchor li:first-child");
    const firstContent = document.querySelector(".tabContent");
    if (firstTab) firstTab.classList.add("active");
    if (firstContent) firstContent.style.display = "block";
  });
</script>
</body>

<a href="https://wa.me/97333539666" style="position: fixed; bottom: 90px; left: 20px; background-color: #25D366; color: white; 
   padding: 10px 16px; border-radius: 30px; font-weight: bold; text-decoration: none; 
   box-shadow: 0 4px 10px rgba(0,0,0,0.3); z-index: 9999;" title="تحتاج لتمويل لبدء/تطوير مشروعك؟ استفد من عروض الابداع واتساب">
<i class="fab fa-whatsapp" style="margin-left: 8px;"></i> واتساب مباشر
</a>

<button onclick="toggleDarkMode()" style="position: fixed; bottom: 30px; left: 20px; background-color: #333; color: white;
   padding: 8px 14px; border: none; border-radius: 20px; font-size: 14px; z-index: 9999; cursor: pointer;">
   🌙 الوضع الليلي
</button>
<script>
  function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");
  }
</script>
</body></html>
