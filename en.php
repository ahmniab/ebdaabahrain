<!DOCTYPE html>
<?php include "includes/header_en.php";?>
<!-- style for the Jobs Modal Buttons --> 
<style>
.collapsible {
  background-color: #d9d9d9;
  color: white;
  cursor: pointer;
  padding: 8px;
  width: 100%;
  border: 4px;
  text-align: left;
  outline: 3px;
  font-size: 20px;
  margin: 4px 2px;
  border-radius: 15px;
  width :650px;
  border-style:  solid;
  border-color: #00e6ac;
  border-width:1px;
}

.active, .collapsible:hover 
{
  background-color: #ccffe6;
}

.content {
  padding: 1 18px;
  display: none;
  overflow: hidden;
  background-color:white;
  font-size: 12px;
}
.job1 {border-radius: 6px;}
.job2 {border-radius: 6px;}
</style>
 
  <body class="">

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">

      <!-- Language switch Start -->
      <div id="lang-switch">
        <ul>
            <li><i class="fa fa-globe fa-lg fa-3x"></i><span style="font-size:25px;margin-top: -48px;margin-left: 20px;display: block;">ع</span></li>
            <li class="active"><a href="en.php">English</a></li>
            <li ><a href="index.php">العربية</a></li>
        </ul>
      </div>
      <!-- Language switch end -->

      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container-fluid">

           <div class="navbar-header">
              <a href="en.php" class="navbar-brand"><img id="logo" class="img-fulid" src="assets/img/LOGO_ENG_WHITE.PNG" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lnr lnr-menu"></i>
              </button>
            </div>

          <div class="collapse navbar-collapse" id="main-navbar" >
            <ul class="navbar-nav mr-auto w-100 justify-content ">
              <li class="nav-item"><a class="nav-link page-scroll" href="#about_us">ABOUT US</a></li>
              <li class="nav-item"><a class="nav-link page-scroll" href="#services">PRODUCTS</a></li>
              <li class="nav-item"><a class="nav-link page-scroll" href="#application">APPLY NOW</a></li>
              <li class="nav-item"><a class="nav-link page-scroll" href="#portfolios">SUCCESS STORIES</a></li>
              <li class="nav-item"><a class="nav-link page-scroll" href="#team">OUR TEAM</a></li>
              <li class="nav-item"><a class="nav-link page-scroll" href="#blog">NEWS</a></li>
			<!--  <li class="nav-item"><a class="nav-link page-scroll" href="Ebdaamail.php">Loan Postponement</a></li>-->
              <li class="nav-item"><a class="nav-link page-scroll" href="#contact">CONTACT US</a></li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
			    <li><a class="page-scroll" href="#about_us">ABOUT US</a></li>
          <li><a class="page-scroll" href="#services">PRODUCTS</a></li>
          <li><a class="page-scroll" href="#application">APPLY NOW</a></li>
          <li><a class="page-scroll" href="#portfolios">SUCCESS STORIES</a></li>
          <li><a class="page-scroll" href="#team">OUR TEAM</a></li>
          <li><a class="page-scroll" href="#blog">NEWS</a></li>
          <li><a class="page-scroll" href="#contact"> CONTACT US</a></li>
		  <li><a class="page-scroll" href="index.php"> العربية</a></li>

        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End  -->

      <div id="slides" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
          <li data-target="#slides" data-slide-to="3"></li>
          <li data-target="#slides" data-slide-to="4"></li>
		  <li data-target="#slides" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/slide/slide1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">“Financing Micro Businesses is our Speciality.” </h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Up to 7,000 BD. </p>
              <a href="#application" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Apply Now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slide/slide2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>“Read their success stories.” </h5>
              <p>Discover how you can make your dreams come true.  </p>
              <a href="#portfolios" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Success Stories</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slide/slide3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">“We have the right product mix that will help grow your business!” </h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Easy apply ... Easy supply. </p>
              <a href="#application" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Apply Now</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slide/slide4.jpg" alt="Forth slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="wow fadeInDown counters " data-wow-duration="1000ms" data-wow-delay="0.3s" >




			  <div  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3 hoverable">
            <div class="facts-item normal">
              <div class="icon">
                <i class="lnr lnr-user"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">20,704</span></h3>
                <h4>Customers</h4>
              </div>
            </div>
			<div class="facts-item hover ">
               <div class="icon">
                <i class="fa fa-male"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">11,585</span></h3>
                <h4>Men </h4>
              </div>
			   <div class="icon">
                <i class="fa fa-female"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">9,119</span></h3>
                <h4>Women</h4>
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
                <h4>Loans </h4>
              </div>
            </div>
			<div class="facts-item hover ">
               <div class="icon">
                <i class="fa fa-folder-open"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">2,697</span></h3>
                <h4>Active Loans  </h4>
              </div>
			   <div class="icon">
                <i class="fa fa-folder"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">18,007</span></h3>
                <h4>Repaid Loans</h4>
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
                <h4>BD Disbursed</h4>
              </div>
            </div>
			<div class="facts-item hover ">
               <div class="icon">
                <i class="fa fa-folder-open"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">1,566,396</span></h3>
                <h4>Active Loans</h4>
              </div>
			   <div class="icon">
                <i class="fa fa-folder"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">21,745,693</span></h3>
                <h4>Repaid Loans</h4>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
			   <i class="lnr lnr-pie-chart"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter"> 94 </span> &nbsp;%</h3>
                <h4>Repayment rate</h4>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

			  </h1>
			  <!-- end of counter -->
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Ebdaa Bahrain ... step by step with you  </p>
              <a href="#contact" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Visit Us</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slide/slide5.jpg" alt="fifth slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">“Meet the team!” </h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">We work day in and day out to ensure your top satisfaction </p>
              <a href="#team" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"> Ebdaa Team</a>
            </div>
          </div>
        
		<div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slide/slide6.jpg" alt="sixth slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Ebdaa Bahrain is SDGs oriented</h1>
               <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">For details</p>
              <a href="#blog" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">News</a>
            </div>
          </div>
        </div>
		</div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- About Us Section Start -->
	  <section id="about_us" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">ABOUT US</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">We support micro businesses. Our philosophy is centered around empowering and developing the skills of disadvantaged groups; especially women & youth; to improve their overall quality of life.  </p>
        </div>
        <div class="row" style="width: 100%;">
		      <div id="aboutUsTab">
      			<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      				<li class="col-sm-3 col-xs-6" style="float:left !important;"><a href="#tabs-1">About Us</a></li>
      				<li class="col-sm-3 col-xs-6" style="float:left !important;"><a href="#tabs-2">Board Members</a></li>
    				  <li class="col-sm-3 col-xs-6" style="float:left !important;"><a href="#tabs-3">Our Partners</a></li>
      				<li class="col-sm-3 col-xs-6" style="float:left !important;"><a href="#tabs-4">Financial Reports</a></li>
					<li class="col-sm-3 col-xs-6" style="float:left !important;"><a href="#tabs-5">Governance Reports</a></li>
      			</ul>
            <!--start of tab 1-->
    			  <div id="tabs-1">
              <h2>ABOUT EBDAA BAHRAIN</h2>
  			      <hr>
				   <p style="text-align:center;">Learn more about us by watching <a href="#Ebdaa_video" style="color:#61D2B4"><b>this short video</b></a></p>
  			      <div class="box_shadow_flex col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="col-lg-5 col-md-5 col-sm-10 col-xs-6 box_shadow">
  			          <h1>OUR PROMISE</h1>
  			            <hr>
                        <p>Supporting people with low incomes who own micro-enterprises by providing a package of distinctive and sustainable financing services.</p>
                </div>
          			<div class="col-lg-5 col-md-5 col-sm-10 col-xs-6 box_shadow" >
          			  <h1>OUR VISION</h1>
          			  <hr> 
					  <p>Offering a comprehensive range of financial solutions. Our work helps enable low-income Bahrainis to build a secure future and contribute to the social development across the country.</p>

        				</div>
      					<div class="col-lg-11 col-md-11 col-sm-10 col-xs-6 box_shadow" >
      					  <h1>HISTORY</h1>
      					  <hr>   
						<p>Ebdaa Bahrain was established in 2009 as the first microfinance bank in the Kingdom of Bahrain under a generous blessing off H.R.H Princess Sabeeka Bint Ibrahim Al Khalifa -the wife of the King of Bahrain and the President of the Supreme Council for Women, may God protect her- as well as Prince Talal Bin Abdul Aziz Al Saud, the President of the Arab Gulf Programme for Development (AGFUND).</p>
      				    <p>Ebdaa’s prime objective is to support low-income families and to contribute to socio-economic empowerment by providing microcredit opportunities to low-income Bahrainis. </p>
      					<p>By the mid of 2021, Ebdaa legal and corporate name has been changed to Ebdaa Microfinance company.  </p>
						<p>Ebdaa Bahrain serves as a lending resort for families in need, to improve their overall quality of life. It focuses on assisting Bahraini women and youth to visualize their dreams and ideas into successful micro-projects.</p>
						<p>Ebdaa also manages the special portfolio of H.R.H. Princess Sabeeka Bint Ibrahim Al Khalifa to support and empower women, in cooperation with the Supreme Council for Women and the Labour Fund "Tamkeen". </p>
						<p>Ebdaa Bahrain disburses its loans using both Sharia Compliant and Conventional approaches based on each client's preference. In May of 2017, Ebdaa Bahrain won the “Best Women Empowerment” Award in Dubai in recognition of Ebdaa’s role in supporting and empowering Bahraini women.</p>
						</div>
  					    <div class="col-lg-11 col-md-11 col-sm-10 col-xs-6 box_shadow" >
  			          <h1>OUR MISSION</h1>
  			          <hr>
          				<p>
        						<ul style="list-style-type :circle;">
        						<li style="list-style-type :circle;">To contribute to the national economic development of Bahrain as part of the economic vision 2030 of Bahrain</li>
        						<li style="list-style-type :circle;">To expand the middle class in Bahrain.</li>
        						<li style="list-style-type :circle;">To improve the low-income standard of living by promoting entrepreneurial projects and a culture of self-reliance.</li>
        						<li style="list-style-type :circle;">To implement effective partnerships with institutional stakeholders and individuals in Bahrain.</li>
        						</ul>
                  </p>
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
        <div id="tabs-2">
          <h2>BOARD MEMBERS</h2>
			    <hr>
          <div class="row " style="margin: 20px;">
            <div class="col-lg-4 col-md-6 col-xs-12" style="padding-bottom: 20px;">
              <div class="single-team">
                <a href="#" data-toggle="modal" data-target="#Mona"><img src="assets/img/board/Mona.jpg" alt="">  </a>
                <div class="team-details">
                  <div class="team-inner">
                    <a href="#" data-toggle="modal" data-target="#Mona"><h4 class="team-title">Mona Al Moayyad</h4>
                    <p>chairman of the board</p></a>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Mona" style="color:#61D2B4">Profile</a>
                  </div>
                </div>
              </div>
            </div>
			</div>
			<div class="row " style="margin: 20px;">
            <div class="col-lg-4 col-md-6 col-xs-12"style="padding-bottom: 20px;">
              <div class="single-team">
                <a href="#" data-toggle="modal" data-target="#Naser"><img src="assets/img/board/Naser.jpg" alt=""> </a>
                <div class="team-details">
                  <div class="team-inner">
                   <a href="#" data-toggle="modal" data-target="#Naser"> <h4 class="team-title">Nasser Al Qahtani</h4>
                    <p>Deputy Chairman</p></a>
  					        <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Naser" style="color:#61D2B4">Profile</a>
                  </div>
                </div>
              </div>
            </div>
			 <div class="col-lg-4 col-md-6 col-xs-12"style="padding-bottom: 20px;">
              <div class="single-team">
                <a href="#" data-toggle="modal" data-target="#Samar"><img class="img-fulid" src="assets/img/board/Samar.jpg" alt=""></a>
                <div class="team-details">
                  <div class="team-inner">
                   <a href="#" data-toggle="modal" data-target="#Samar"> <h4 class="team-title">Ms. Samar Agaibi</h4>
                    <p>Board Member</p></a>
  					        <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Samar" style="color:#61D2B4">Profile</a>
                  </div>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 col-xs-12"style="padding-bottom: 20px;">
              <div class="single-team">
                <a href="#" data-toggle="modal" data-target="#Dalal"><img class="img-fulid" src="assets/img/board/Dalal.jpg" alt=""></a>
                <div class="team-details">
                  <div class="team-inner">
                    <a href="#" data-toggle="modal" data-target="#Dalal"><h4 class="team-title">Dalal Ahmed Al Qais </h4>
                    <p>Board Member</p></a>
  					        <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Dalal" style="color:#61D2B4">Profile</a>
                  </div>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 col-xs-12"style="padding-bottom: 20px;">
              <div class="single-team">
                <a href="#" data-toggle="modal" data-target="#Abed"><img src="assets/img/board/Abed.jpg" alt=""></a>
                <div class="team-details">
                  <div class="team-inner">
                   <a href="#" data-toggle="modal" data-target="#Abed"> <h4 class="team-title">Abdul Hameed Dowani</h4>
                    <p>Board Member</p></a>
  					        <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Abed" style="color:#61D2B4">Profile</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12"style="padding-bottom: 20px;">
              <div class="single-team">
                <a href="#" data-toggle="modal" data-target="#Adel"><img class="img-fulid" src="assets/img/board/Adel.jpg" alt=""></s>
                <div class="team-details">
                  <div class="team-inner">
                   <a href="#" data-toggle="modal" data-target="#Adel"> <h4 class="team-title">Adel Mohamed Ali Bela</h4>
                    <p>Board member</p></a>
  					        <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Adel" style="color:#61D2B4">Profile</a>
                  </div>
                </div>
              </div>
            </div>


		        <div class="col-lg-4 col-md-6 col-xs-12"style="padding-bottom: 20px;">
              <div class="single-team">
                <a href="#" data-toggle="modal" data-target="#Bader"><img class="img-fulid" src="assets/img/board/Bader.jpg" alt=""></a>
                <div class="team-details">
                  <div class="team-inner">
                    <a href="#" data-toggle="modal" data-target="#Bader"><h4 class="team-title">Dr. Badr Eddin Abdel Rahim</h4>
                    <p>Board Member</p></a>
  					        <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Bader" style="color:#61D2B4">Profile</a>
                  </div>
                </div>
              </div>
            </div>
		</div>
        </div>
		<!-- board popup start -->
		<div class="modal fade " id="Mona" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/board/Mona.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Mona Al Moayyad</h4>
                <hr>
               <div class="box_shadow" >
               <p>Mrs. Al Moayyad is a member of Bahrain Shura council, the Chairwoman of Ebdaa Bahrain and the CEO of Y.K. Almoayyed & Sons, one of the Bahraini’s leading family businesses. She provides leadership and mentoring; both directly and indirectly to over 1,000 employees of various nationalities and about a hundred of luxury goods' brands that varies between home electronic appliances, heavy equipment and medical technologies.</p>
			         <p>Mrs. Al Moayyed was elected as the first woman Board Member at the Bahraini Chamber of Commerce & Industry in 2001. Furthermore, Mona was the first woman to be elected as a board member of a public company (BMMI), to chair the Business Women Committee at Bahrain Chamber, and later to become the Vice-Chairwoman of the Businesswomen Committee of the Federation of GCC Chambers, and a member in the Arab Union Committee for Women.</p>
			         <p>Voted the third most influential Arab Women’s List in the MENA region by Forbes Middle East for 2013, Mona is well known for her charity work and always speaks about the role of women in building a better society today. Mona was voted the fourth most powerful figures among 50 in Bahrain, the 130th among the 500 most powerful women by Arabian Business for 2012, the 74th among 100 most powerful women list by Arabian Business.</p>
			         <p>Mona was elected as the chairwoman of Bahrain Business Women Committee from 2006 to 2012. She also contributed to the establishment of Expatriates Protection Association (MWPS) and chaired the association between 2005 and 2011. She is currently chairing Al Muntada Society, a Bahrain society set up by academics, journalists and businessmen to promote liberalism in the Kingdom.</p>
              <p>Ms. Al Moayyad has been a founding shareholder of Ebdaa Bahrain, in partnership with AGFUND and the private sector to provide sustainable credit opportunities to low-income people.</p>
			  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<div class="modal fade " id="Naser" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/board/Naser.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Nasser Al-Kahtani</h4>
                <hr>
               <div class="box_shadow" >
                 <p>Mr. Al-Kahtani is the Chief Executive Officer of the Arab Gulf Programme for Development – AGFUND, a regional organization based in Riyadh, which was established in 1980 upon the initiative of His Royal Highness,Prince Talal Bin Abdul Aziz Al Saud with the support of leaders of the Gulf Cooperation Council Countries.</p>
  			     <p>Under Mr. Al-Kahtani's leadership, AGFUND has funded 1,472 development projects in 133 countries, established nine microfinance banks and four regional organizations for women empowerment, early childhood development, civil society empowerment and open higher education</p>
                 <p>Al-Kahtani holds a master degree from the University of Miami since 1989. He is currently a member of the Board of Trustees of the Arab Open University, the Centre for Arab Women for Training and Research (CAWTAR), The Arab Council for Childhood and Development (ACCD) and the Arab Network for NGOs, in addition to his Chairmanship of two Microfinance banks and seven memberships in Arab World and Africa boards.</p>
                 <p>Mr. AlQahtani played leading roles and has bold contributions in the development and upgrading of micro, small and medium finance institutions. He is considered to be one of the most distinguished Arab leaders in the field of international development. Assuming a number of advisory positions and membership of several boards in both public and private sectors, Mr. Al-Kahtani has won the confidence and high esteem of various executive councils functioning in human development and became well known as one of the most influential development leaders in the Arab world. He served as a Director at Gulf Navigation Holding PJSC until January 14, 2016.</p>
  			      </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<div class="modal fade " id="Adel" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/board/Adel.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Mr. Adel Mohamed Ali Bela</h4>
                <hr>
               <div class="box_shadow" >
                <p>Mr. Adel is the head of the Risk Committee, a member in the Technical Committee and a board member at Ebdaa Bahrain. He currently serves as the Director General of Ebdaa Bahrain for Microfinance in Sudan, and a board member of different AGFUND banks in the region including Jordan, Syria, Lebanon, Mauritania, and Sierra-Leone. Mr. Bela has extensive experience in the microfinance field, where he held many positions in various microfinance institutions in Sudan. Mr. Adel holds a bachelor's degree in business accounting since 1987 from the University of Khartoum.</p>
			         </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<div class="modal fade " id="Abed" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/board/Abed.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Mr. Abdul Hameed Mohamed Dowani</h4>
                <hr>
               <div class="box_shadow" >
               <p>Mr. Abdulhameed is a member of the Risk Committee and a board member at Ebdaa Bahrain. He is also a board member of many Bahraini companies and is currently an executive member of Al-Jazira Group and a board member of Manama Food Factory. Dowani holds a degree in Civil Engineering from Alexandria University.</p>
			          </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<div class="modal fade " id="Samar" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/board/Samar.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Mrs. Samar Agaibi</h4>
                <hr>
               <div class="box_shadow" >
               <p>Mrs. Agaibi has over 25 years of experience in the financial sector. She holds a BA degree in Economics from the American University in Cairo (1988), CMA from the United States In 1998, a Certified Diploma in Accounting and Finance from the United Kingdom (CDIPAF, 1995), various Certificates from Bahrain Institute of Banking and Finance (BIBF), and a number of other high qualifications.</p>           
               <p>At the ESKAN Bank; one of Ebdaa Bahrain shareholders; Mrs. Agaibi has held several positions throughout her career including risk management, quality, finance, project management and strategic business development. She is also a member of the audit committee. </p>
               <p>Ms. Agaibi has served on the boards of numerous companies and is currently focusing on major projects alongside relevant government agencies to develop and implement sustainable and affordable housing financial services at the Kingdom. ... a project that brings the public and private sectors together for the first time.</P>
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>


	<div class="modal fade " id="Bader" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/board/Bader.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Dr. Badr Eddin Abdel Rahim Ibrahim</h4>
                <hr>
               <div class="box_shadow" >
                 <p>Prof. Badr Eddin received his second honorary degree in economics at the University of Khartoum. He received his master's and doctorate degrees in economics from the University of Manchester in England in the early 1990s.</p>
                 <p>Professor Ibrahim is President of the Arab Open University in Bahrain and is currently a member of the Arab Gulf Development Program Advisory Committee (AGFUND) in Saudi Arabia, a member of the Technical Committee of the Program, a member of the technical committees of Ebdaa Banks for Microfinance Mauritania, Chairman of the Technical Committee and a Board member of Ebdaa Bahrain in Sierra Leone. He is a former board member of different microfinance institutions, including the Family Bank for Microfinance in Sudan, the Sudan Rural Development Foundation and the National Foundation for Microfinance, Sudan.</p>
                 <p>Professor Ibrahim has extensive experience and authored a collection of books in the field microfinance, financial inclusion and micro-enterprises, that were printed in England, America, Germany, Saudi Arabia and Sudan. He also has a large portfolio of papers that were published in international magazines in England, Germany, Canada, Egypt, India, Pakistan and Sudan.</p>
               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<div class="modal fade " id="Dalal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/board/Dalal.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Sanjeev Paul </h4>
                <hr>
               <div class="box_shadow" >
			   <p>Dalal Al Qais is a proficient banker with over 19 years of professional experience in the banking and financial industry covering retail, SME, digitization as well as risk across conventional, Islamic and international banks. </p>
			   <p>She earlier served as Chief Retail Banking and Wealth Management Officer at the Bahrain Islamic Bank prior to joining Bahrain Development Bank as Group Chief Executive Officer in December 2021.</p>
			   <p>Prior to that she held sev eral senior positions at Standard Chartered Bank including, Head of Consumer Banking, Head of Integrated Distribution and Head of Distribution & Regional Channel and Call Center. </p>
			   <p>Dalal holds a BSc in Management and Marketing from the University of Bahrain and a Master’s in Finance. In 2020, she completed an Oxford Fintech Programme from the Oxford University, and is currently pursuing a Business Doctorate from the Swiss Business School. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
		<!-- board popup end -->
        <!-- end of tab 2 -->
        <!--start of tab 3-->
		    <div id="tabs-3">
          <h2>OUR PARTNER</h2>
			    <hr>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="margin-right:10px;">
				      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 " style="padding:20px;">
                <div class="portfolio-item">
                  <div class="shot-item">
					          <a href="http://www.agfund.org/"target="_blank" ><img src="assets/img/partners/agfund.png" alt="" /></a>
				          </div>
                </div>
              </div>
			        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4" style="padding:20px;">
                <div class="portfolio-item">
                  <div class="shot-item">
					        <a href="http://www.bdb-bh.com/en/home"target="_blank" ><img src="assets/img/partners/bdb.png" alt="" /></a>
				          </div>
                </div>
              </div>
			        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4  " style="padding:20px;">
                <div class="portfolio-item">
                  <div class="shot-item">
  					        <a href="http://www.cbb.gov.bh/" target="_blank"><img src="assets/img/partners/cbb.png" alt="" /></a>
  				        </div>
                </div>
            </div>
			      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4  " style="padding:20px;">
              <div class="portfolio-item">
                <div class="shot-item">
					        <a href="http://www.eskanbank.com/"target="_blank" ><img src="assets/img/partners/eskanbank.png" alt="" /></a>
				        </div>
              </div>
            </div>
			      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4  " style="padding:20px;">
              <div class="portfolio-item">
                <div class="shot-item">
					        <a href="https://www.tamkeen.bh/" target="_blank" ><img src="assets/img/partners/tamkeen.png" alt="" /></a>
				        </div>
              </div>
            </div>
			      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4  " style="padding:20px;">
              <div class="portfolio-item">
                <div class="shot-item">
					        <a href="" ><img src="assets/img/partners/woman.png" alt="" /></a>
				        </div>
              </div>
            </div>
			    </div>
        </div>
        <!-- end of tab 3 -->
        <!--start of tab 4-->
		    <div id="tabs-4">
		      <div class="container" >
		        <h2>EBDAA BAHRAIN AUDITED FINANCIAL STATEMENTS</h2>
            <hr>
            <ul class="timeline">
			    </li>
				<li  class="timeline">
                <div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2024" id="2024"></i></div>
                <div class="timeline-panel">
                  <a href="assets/fainancial _report/FS2024EN.pdf" target="_blank"  >
        			      <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_6.jpg" />
                    </div>
                    <div class="timeline-body">
		             <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2024</p>	                   
					 </div>
        			 </a>
                  </div>
                </li>
				<li  class="timeline-inverted">
                <div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2023" id="2023"></i></div>
                <div class="timeline-panel">
                  <a href="assets/fainancial _report/FS2023EN.pdf" target="_blank"  >
        			      <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_3.jpg" />
                    </div>
                    <div class="timeline-body">
		             <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2023</p>	                   
					 </div>
        			 </a>
                  </div>
                </li>
				<li  class="timeline">
                <div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2022" id="2022"></i></div>
                <div class="timeline-panel">
                  <a href="assets/fainancial _report/FS2022EN.pdf" target="_blank"  >
        			      <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_6.jpg" />
                    </div>
                    <div class="timeline-body">
		             <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2022</p>	                   
					 </div>
        			 </a>
                  </div>
                </li>
				<li  class="timeline-inverted">
                <div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2021" id="2021"></i></div>
                <div class="timeline-panel">
                  <a href="assets/fainancial _report/FS2021EN.pdf" target="_blank"  >
        			      <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_3.jpg" />
                    </div>
                    <div class="timeline-body">
		             <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2021</p>	                   
					 </div>
        			 </a>
                  </div>
                </li>
				<li  class="timeline">
            		<div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2020" id="2020"></i></div>
                <div class="timeline-panel">
        		      <a href="assets/fainancial _report/FS2020EN.pdf" target="_blank"  >
                    <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_6.jpg" />
                    </div>
                    <div class="timeline-body">
                      <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2020</p>
                    </div>
        			    </a>
        		    </div>
              </li>
			<li  class="timeline-inverted">
            		<div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2019" id="2019"></i></div>
                <div class="timeline-panel">
        		      <a href="assets/fainancial _report/FS2019EN.pdf" target="_blank"  >
                    <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_3.jpg" />
                    </div>
                    <div class="timeline-body">
                      <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2019</p>
                    </div>
        			    </a>
        		    </div>
              </li>
              <li>
                <li>
            		<div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2018" id="2018"></i></div>
                <div class="timeline-panel">
        		      <a href="assets/fainancial _report/Audited Financial Statement english 2018.pdf" target="_blank"  >
                    <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_6.jpg" />
                    </div>
                    <div class="timeline-body">
                      <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2018</p>
                    </div>
        			    </a>
        		    </div>
              </li>
        	    <li  class="timeline-inverted">
            		<div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2017" id="2017"></i></div>
                <div class="timeline-panel">
        		      <a href="assets/fainancial _report/FS2017 Al Ebdaa Bank.pdf" target="_blank"  >
                    <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_2.jpg" />
                    </div>
                    <div class="timeline-body">
                      <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2017</p>
                    </div>
        			    </a>
        		    </div>
              </li>
              <li>
                <div class="timeline-badge primary"><a><i class="lnr lnr-history" rel="tooltip" title="2016" id="2016" ></i></a></div>
                <div class="timeline-panel">
                  <a href="assets/fainancial _report/FS2016 Al Ebdaa Bank.pdf" target="_blank"  >
        			      <div class="timeline-heading">
                      <img class="img-responsive" src="assets/fainancial _report/report_1.jpeg" />
                    </div>
                    <div class="timeline-body">
                      <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2016</p>
                    </div>
        			    </a>
                  </div>
                </li>
                <li  class="timeline-inverted">
                  <div class="timeline-badge primary"><a><i class="lnr lnr-history" rel="tooltip" title="2015" id="2015"></i></a></div>
                  <div class="timeline-panel">
        		        <a href="assets/fainancial _report/fs2015.pdf" target="_blank"  >
                      <div class="timeline-heading">
                        <img class="img-responsive" src="assets/fainancial _report/report_3.jpg" />
                      </div>
                      <div class="timeline-body">
                        <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2015</p>
                      </div>
        			      </a>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge primary"><a><i class="lnr lnr-history" rel="tooltip" title="2014" id="2014"></i></a></div>
                  <div class="timeline-panel">
              			<a href="assets/fainancial _report/fs2014.pdf" target="_blank"  >
                			<div class="timeline-heading">
                			  <img class="img-responsive" src="assets/fainancial _report/report_1.jpeg" />
                      </div>
                      <div class="timeline-body">
                        <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2014</p>
                      </div>
              			</a>
                  </div>
                </li>
                <li  class="timeline-inverted">
                  <div class="timeline-badge primary"><a><i class="lnr lnr-history" rel="tooltip" title="2013" id="2013"></i></a></div>
                  <div class="timeline-panel">
                    <a href="assets/fainancial _report/fs2013.pdf" target="_blank"  >
        			        <div class="timeline-heading">
                        <img class="img-responsive" src="assets/fainancial _report/report_4.jpg" />
                      </div>
                      <div class="timeline-body">
                       <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2013</p>
                      </div>
        			      </a>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge primary"><a><i class="lnr lnr-history" rel="tooltip" title="2012" id="2012"></i></a></div>
                  <div class="timeline-panel">
        			      <a href="assets/fainancial _report/fs2012.pdf" target="_blank"  >
                		  <div class="timeline-heading">
                        <img class="img-responsive" src="assets/fainancial _report/report_5.jpg" />
                      </div>
                      <div class="timeline-body">
                        <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2012</p>
                      </div>
        			      </a>
                  </div>
                </li>
                <li  class="timeline-inverted">
        		      <div class="timeline-badge info"><i class="lnr lnr-history" rel="tooltip" title="2011" id="2011"></i></div>
                  <div class="timeline-panel">
        		        <a href="assets/fainancial _report/fs2011.pdf" target="_blank"  >
                      <div class="timeline-heading">
                        <img class="img-responsive" src="assets/fainancial _report/report_3.jpg" />
                      </div>
                      <div class="timeline-body">
                        <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2011</p>
                      </div>
        			      </a>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge primary"><a><i class="lnr lnr-history" rel="tooltip" title="2010" id="2010"></i></a></div>
                  <div class="timeline-panel">
        		        <a href="assets/fainancial _report/fs2010.pdf.pdf" target="_blank"  >
                      <div class="timeline-heading">
                        <img class="img-responsive" src="assets/fainancial _report/report_1.jpeg" />
                      </div>
                      <div class="timeline-body">
                        <p>EBDAA BAHRAIN FINANCIAL STATEMENTS FOR THE YEAR ENDED 31 DEC 2010</p>
                      </div>
        			      </a>
                  </div>
                </li>
        	    </ul>
            </div>
		      </div>
			  	<!--start of tab 5-->
<div id="tabs-5" class="ar-txt">
  <h2>corporate governance Reports</h2>
  <hr>
  <div class="container">
    <p>Below are the annual governance reports for Ebdaa Bahrain Company. Below are the annual governance reports for Ebdaa Bahrain Company.:</p>
    <ul style="list-style-type: disc; padding-right: 20px;">
      <li><a href="assets/governance_reports/GovernanceReport2024.pdf" target="_blank" style="color:#61D2B4;">corporate governance Reports 2024</a></li>
           <!-- يمكنك إضافة المزيد من الروابط هنا -->
    </ul>
  </div>
</div>
<!--end of tab 5-->
          <!-- end of tab 6 -->
		 
		    </div>
		  </div>
		</div>
    </section>
	  <!-- About Us Section End  -->

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">WATCH THIS VIDEO TO LEARN MORE ABOUT EBDAA BAHRAIN</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms ">Ebdaa Bahrain was established in 2009 as the first microfinance bank in the Kingdom of Bahrain, with the support of Her Royal Highness Princess Sabeeka Bint Ibrahim Al Khalifa and the Late Prince Talal Bin Abdul Aziz Al Saud, the former President of the Arab Gulf Programme for Development (AGFUND).</p>
                <a  data-toggle="modal" data-target="#Bank_Video" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
				<!--<a  data-toggle="modal" data-target="#Bank_Video1" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>-->
              </div>
          </div>
        </div>
      </div>
    </section>
	<div class="modal fade " id="Bank_Video" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body ">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                <span aria-hidden="true">&times;</span>
              </button>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
				 <iframe width="100%" height="600px" src="https://www.youtube.com/embed/cuUJuoUZz8U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                  </div>
				 </div>
            </div>
          </div>
        </div>
      </div>
	 <!-- 	<div class="modal fade " id="Bank_Video1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body ">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                <span aria-hidden="true">&times;</span>
              </button>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">src="https://www.youtube.com/embed/1f3FN-PKTYg"
				 <iframe width="100%" height="600px" src="https://www.youtube.com/embed/Nk90TvNe4c8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                  </div>
				 </div>
            </div>
          </div>
        </div>
      </div>-->
    <!-- End Video Promo Section -->

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">EBDAA LOAN PRODUCTS</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s ">Our loan products were designed to meet the needs of all your business ventures. 
          <br> Your service is our honour and your satisfaction is our goal.</p>
        </div>
        <div class="row ">
          <div class="col-md-6 col-sm-6">
            <div  class="item-boxes wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="icon">
                <i class="fa fa-female"></i>
              </div>
              <h4>SAYDATI LOAN</h4>
              <p>Sayidati loan is a dedicated loan for Women that starts at BD 200 and caps at BD 1000 based on women-owned home-business needs. The loan will help women grow their businesses and differenciate their products without the need for traditional collateral.</p>
              <a href="#" class="btn btn-link" data-toggle="modal" data-target="#sayedaty" style="color:#61D2B4">More Details</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown animated" data-wow-delay="0.8s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
              <div class="icon">
                <i class="lnr lnr-magic-wand"></i>
              </div>
              <h4>EBDAA LOAN</h4>	
              <p>Ebdaa loan is a dedicated loan for men that starts at BD 200 and caps at BD 1000 based on men-owned home-business needs. The loan will help men grow their businesses and differentiate their products without the need for traditional collateral.</p>
              <a href="#" class="btn btn-link" data-toggle="modal" data-target="#ebdaaLoan" style="color:#61D2B4">More Details</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
              <div class="icon">
                <i class="lnr lnr-heart-pulse"></i>
              </div>
              <h4>Al AMAL LOAN</h4>
              <p>Al Amal loan is dedicated to borrowers who own a formal or informal business regardless of its nature (i.e. industrial, trading, or service) and regardless if it is operated from home, mobile, or market-based. This loan is also designed for those who are ready to move from the informal to the formal sector. Loan ranges between BD 1000 and 2400 to be paid over 24 months.</p>
              <a href="#" class="btn btn-link" data-toggle="modal" data-target="#hopeLoan" style="color:#61D2B4">More Details</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown animated" data-wow-delay="1.6s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.6s;">
              <div class="icon">
                <i class="lnr lnr-diamond"></i>
              </div>
              <h4>AL TAMAYUZ LOAN</h4>
              <p>Al Tamayuz Loan is designed for businesses that are licensed. The purpose of this loan is to assist business owners to support their working capital or purchase needed equipment. This loan ranges between BD 1500 to 7000 to be paid over 36 months.</p>
              <a href="#" class="btn btn-link" data-toggle="modal" data-target="#exellenceLoan" style="color:#61D2B4">More Details</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown animated" data-wow-delay="2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 2s;">
              <div class="icon">
                <i class="lnr lnr-sun"></i>
              </div>
              <h4>AL MAWSIMI LOAN</h4>
              <p>Al Mawsimi Loan is designed for informal or formal business needs on specific seasons such as the holy month of Ramadan and Back-To-School seasons. The loan ranges between BD 100 and 800 to be paid over 24 months.</p>
              <a href="#" class="btn btn-link" data-toggle="modal" data-target="#seasonalLoan" style="color:#61D2B4">More Details</a>
            </div>
          </div>
		  <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown animated" data-wow-delay="2.4s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 2s;">
              <div class="icon">
                <i class="lnr lnr-star"></i>
              </div>
              <h4>Al TAFAWOQ LOAN</h4>
              <p>This loan is known for its flexibility. It is designed to meet the needs men or women with licensed businesses. It can also be provided to mobile businesses such as distribution and delivery businesses or even taxi owners. Al Tafawoq loan is an amount between BD 1000 and 7000 and can be paid over 6, 12, 18 or 24 months.</p>
              <a href="#" class="btn btn-link" data-toggle="modal" data-target="#TafawoqLoan" style="color:#61D2B4">More Details</a>
            </div>
          </div>

		  <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown animated" data-wow-delay="2.8s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 2s;">
              <div class="icon">
                <i class="lnr lnr-rocket"></i>
              </div>
              <h4>Al NAJAH LOAN</h4>
              <p>Al Najah Loan is designed for home-based businesses with longer tenure than both Sayedati and Ebdaa Loans. This loan ranges between BD 600 and 1400 to be paid over 18 months.</p>
              <a href="#" class="btn btn-link" data-toggle="modal" data-target="#NajahLoan" style="color:#61D2B4">More Details</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services popup start -->
<!-- Services 1 -->
    <div class="modal fade " id="sayedaty" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img  src="assets/img/loan/-Eng سيدتي-01.jpg" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Sayedati LOAN</h4>
                <hr>
               <p> Ebdaa Bahrain innovated the "Sayedati" loan to support women working with home-based businesses. The loan ranges between BD 200 and 1000 based on the business needs to be paid over a period of 12 months.</p>
              <div class="box_shadow" >
                <p><b>Loan terms:</p></b>
                <li>Can only be used for the business purposes. Consumer needs are not supported.</li>
                <li>The borrower must have an existing business or at least an idea to start up.</li>
                <li>The borrower's age should be between 20 and 65.</li>
              </div>
              <div class="box_shadow" >
                <p><b> Required Documents</p></b>
                <li>A copy of a valid smart ID card.</li>
                <li>A copy of a valid passport or driver's license.</li>
                <li>Salary certificate for female employees or proof of project income.</li>
				<li>Proof of home address (i.e.: lease, ownership or electricity and water bill).</li>
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>
<!-- Services 2 -->
    <div class="modal fade " id="ebdaaLoan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/loan/-engالابداع-01.jpg" style="width:100%;">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                   <h4>Ebdaa Loan</h4>
    			          <hr>
                   <p>Ebdaa Bahrain offers micro loans to eligible entrepreneurs who work from home to support and develop those home projects. The loan amount ranges between BD 200 and 1000.Its paid over 12 months.</p>
          			  <div class="box_shadow" >
          			  <p><b> Loan terms: </p></b>
          			   <li> Can only be used for the business purposes. Consumer needs are not supported.</li>
                       <li> The borrower must have an existing business or at least an idea to start up.</li>
                       <li> The borrower's age should be between 20 and 65. </li>
          			 </div>
          			  <div class="box_shadow" >
          			  <p><b> Required Documents: </p></b>
          			  <li> A copy of a valid smart ID card. </li>
          			  <li> A copy of a valid passport or driver's license. </li>
          			  <li> Salary certificate for male employees or proof of project income. </li>
					  <li> Proof of home address (i.e.: lease, ownership or electricity and water bill).</li>
          			  </div>
  			        </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>
	<!-- Services 3 -->

    <div class="modal fade " id="hopeLoan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img  src="assets/img/loan/-engالأمل-01.jpg" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Al Amal Loan</h4>
 			          <hr>
                <p>Ebdaa Bahrain offers Al Amal Loan with simple terms to support those who have a variety of commercial, service, and industrial business needs, and those who are preparing to move from the informal to the formal sector.</p>
                <p>The loan amount ranges between BD 1000 and 2400 and is paid over 24 months.</p>
           			<div class="box_shadow" >
           			  <p><b> Loan terms: </p></b>
           			   <li> Can only be used for the business purposes. Consumer needs not supported.</li>
					   <li> The borrower must have an existing business or at least an idea to start up.</li>
                       <li> The borrower's age should be between 20 and 65.</li>
           			</div>
           			<div class="box_shadow" >
           			  <p><b> Required Documents: </p></b>
           			  <li> A copy of a valid smart ID card.</li>
           			  <li> A copy of a valid passport or driver's license.</li>
           			  <li> Salary certificate for employees or a proof of project income. </li>
           			  <li> Proof of home address (i.e.: lease, ownership or electricity and water bill). </li>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>
<!-- Services 4 -->
    <div class="modal fade " id="exellenceLoan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img  src="assets/img/loan/-engالتميز-01.jpg" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Al Tamayuz Loan</h4>
          <hr>
                <p>Ebdaa Bahrain now offers Al Tamayuz Loan for licensed commercial, industrial and service business owners.</p>
                <p>The loan amount ranges between BD 1500 and 7000, and is paid over 24 months. </P>
         <div class="box_shadow" >
         <p><b> Loan terms: </p></b>
         <li> The loan must be used for a licensed business.</li>
         <li> The loan must be used to purchase new equipment or increase the working capital.</li>
         <li> The business age must be a minimum of three years. </li>
		 <li> The borrower's age must be anything between 20 and 65.</li>
        </div>
         <div class="box_shadow" >
         <p><b> Required Documents: </p></b>
         <li> Copy of a valid passport and smart ID card. </li>
         <li> Copy of a driver’s license.</li>
         <li> Copy of Commercial Registration. </li>
         <li> Bank statement for the last six months.</li>
		 <li> Proof of home address and the most recent electricity and water bill.</li>
		 <li> Valid Commercial registration (for at least 6 months) </li>
		 <li> Any other documents that might be requested by the loan officer.</li>

         </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
            </div>
        </div>
      </div>
    </div>
<!-- Services 5 -->
    <div class="modal fade " id="seasonalLoan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img  src="assets/img/loan/-engموسمي-01.jpg" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Al Mawsimi Loan</h4>
 			   <hr>
               <p>Ebdaa Bahrain offers you credit to meet your seasonal needs. This loan is available before special occasions, such as Ramadan, the school season, and the Holy Eids.</p>
 			  <div class="box_shadow" >
 			  <p><b>Loan terms: </p></b>
 			  <li> All required documents below must be provided.</li>
 			  <li> Applicant must have a fixed income </li>
 			  <li> Applicants must be between 23 and 65 years old. </li>
 			 </div>
 			  <div class="box_shadow" >
 			  <p><b> Required Documents: </p></b>
 			  <li> Copy of a valid smart ID card. </li>
 			  <li> Copy of a valid passport or driver’s license.</li>
 			  <li> Proof of home address (i.e.: electricity bill, housing contract or smart card reading). </li>
			  <li> Latest salary slips for government sector employees</li>
		   	  <li>Salary certificate for private sector employees.</li>
			  <li> Bank statement for the last 3 months</li>
			  
			  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
           </div>
        </div>
      </div>
    </div>
	<!-- Services 6 -->
    <div class="modal fade " id="TafawoqLoan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img  src="assets/img/loan/-engالتفوق-01-01.jpg" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Al Tafawq Loan</h4>
 			   <hr>
                <p>This loan is known for its flexibility. It is designed to meet the needs men or women with licensed businesses. It can also be provided to mobile businesses such as distribution and delivery businesses or even taxi owners. Al Tafawoq loan is an amount between BD 1000 and 7000 and can be paid over 6, 12, 18 or 24 months.</p>
 			  <div class="box_shadow" >
 	         <p><b> Loan terms: </p></b>
             <li> The loan must be used for a licensed business.</li>
             <li> The loan must be used to purchase new equipment or increase the working capital.</li>
             <li> The business must be existing for 3 years . </li>
			 <li> The borrower's age must be between 25 and 65.</li>
             </div>
             <div class="box_shadow" >
             <p><b> Required Documents: </p></b>
             <li> Copy of a valid passport and smart ID card. </li>
			 <li>Copy of a driver’s license.</li>
			 <li>Copy of Commercial Registration</li>
			 <li>Bank statement for the last six months</li>
			 <li>Proof of home address and the most recent electricity and water bill.</li>
			 <li>Valid Commercial registration (for at least 6 months).</li>
			 <li>Any other documents that might be requested by the loan officer.</li>

 			  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
           </div>
        </div>
      </div>
    </div>

	<!-- Services 7 -->
    <div class="modal fade " id="NajahLoan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img  src="assets/img/loan/-engالنجاح-01.jpg" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Al Najah Loan</h4>
 			   <hr>
			   <p>Ebdaa Bahrain offers Al-Najah loans to eligible entrepreneurs who operate home businesses and to support and increase the business volume. The loan amount ranges between BD 600 and 1400 to be paid over 18 months.</p>
          		 <div class="box_shadow" >
          		 <p><b> Loan terms: </p></b>
				 <li>Can only be used for the business purposes. Consumer needs not supported.</li>
                 <li>The borrower must have an existing business or at least an idea to start up. </li>
                 <li>The borrower's age should be between 20 and 65.</li>
				 </div>
          		 <div class="box_shadow" >
          		 <p><b> Required Documents: </p></b>
          		 <li>A copy of a valid smart ID card.</li>
          		 <li>A copy of a valid passport or driver's license.</li>
          		 <li>Salary certificate for employed applicants or proof of project income.</li>
				 <li>Proof of home address (i.e.: lease, ownership or electricity and water bill).</li>
 			  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Services popup End -->
    <!-- Services Section End -->

    <!-- application Section Start  -->
    <section id="application" class="section" data-stellar-background-ratio="0.09">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">LOAN APPLICATION</h2>
          <hr class="lines">
          <p class="section-subtitle">Apply now to join the parade of successful entrepreneurs!<br>Fill in all required fields and we will be in touch!</p>
        </div>
        <div class="row ">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="contact-block">
             <form id="applicationForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="name_apply" name="name_apply" placeholder="Full Name"pattern="[A-Za-z\s]{3,30}" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
              <!--    <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="project_apply" name="project_apply" placeholder="Loan Purpose" "[A-Za-z\s]{3,50}" required data-error="Please enter your Loan Purpose">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div> -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="mobile_apply" name="mobile_apply" placeholder="Mobile Number" pattern="[0-9-]{8,15}" required data-error="Please enter your mobile number">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                    <select hidden id="type_apply" name="type_apply" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required data-error="Please select the loan type">
						<option value="">Loan Type</option>
						<option value="Sayedati">Sayidati</option>
						<option value="Ebdaa">Ebdaa</option>
						<option value="AlNajah">Al Najah</option>
						<option value="AlAmal">Al Amal</option>
						<option value="AlTamayoz">Al Tamayuz</option>
						<option value="AlTafawoq">Al Tafawq</option>
					</select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <!--
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="cpr_apply" name="cpr_apply" placeholder="CPR Number" pattern="[0-9-]{9,}" required data-error="Please enter your CPR number">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
						<select name="subcategory" id="subcategory" required data-error="Please select the loan amount">
							<option value="">Select the loan amount</option>
						</select>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="address_apply" name="address_apply" placeholder="Address" "[A-Za-z1-9-\,\s]{3,30}" required data-error="Please enter your address">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="job_apply" name="job_apply" placeholder="Current Job" pattern="[A-Za-z\s]{3,30}" required data-error="Please enter your Current Job">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <p><b>Guarantees</b></p>
                  </div>



                  <div class="col-md-12">
            				<div class="form-check form-check-inline">
            					<input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee1" value="guarantee1">
                      <label class="form-check-label" for="guarantee1"> One guarantor / several guarantors with good financial status. Copies of their identity card and proof of income will be provided.</label>
                    </div>
                  </div>

                  <div class="col-md-12">
				  			    <div class="form-check form-check-inline">
                			<input class="form-check-input" type="checkbox" name="guarantee" id="guarantee2" value="guarantee2">
                			<label class="form-check-label" for="guarantee2"> Guarantee/Payment cheques provided by:</label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options1" value="option1">Me personally</label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options2" value="option2">guarantor /guarantors</label>
                     <label><input class="form-check-input" type="radio" name="Options" id="Options3" value="option3">third party </label>
				            </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee3" value="guarantee3">
                    <label class="form-check-label" for="guarantee3">Monthly transfer from my salary at the following bank</label>
                    <input type="text" class="form-check-input" id="bankname1" name="bankname1">
                    <label class="form-check-label" for="bankname1">The net value of my salary is: BD</label>
                    <input type="text" class="form-check-input" id="salaryvalue1" name="salaryvalue1">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee4" value="guarantee4">
                    <label class="form-check-label" for="guarantee">Monthly transfer from the guarantor / guarantor's salary at the following Bank</label>
                    <input type="text" class="form-check-input" id="bankname2" name="bankname2">
                    <label class="form-check-label" for="bankname2">According to the repayment schedule.</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee5" value="option5">
                    <label class="form-check-label col-sm-5" for="guarantee5">Other Collaterals as follows:</label>
                    <input type="text" class="form-check-input col-sm-10" id="others" name="others">
                  </div>
                </div>-->
                <div class="col-md-12">
				          <p><br><b>To learn about the terms of application </b><a href="#" class="btn-link" data-toggle="modal" data-target="#conditions" style="color:#61D2B4"><b>please click here </b></a>.</p>
                </div>

           <div class="col-md-12">
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
               <label class="form-check-label" for="invalidCheck">I acknowledge that I have read and understood all the terms and conditions of Loan Applications and will not challenge this acknowledgement or revoke it in the future.</label>
             </div>
             <br>
           </div>
           <div class="col-md-12">
             <div id="check_text" class="help-block with-errors"></div>
           </div>


                  <div class="col-md-12">
                    <div class="submit-button text-center">
                      <button class="btn btn-common" id="submit" type="submit">Apply</button>
                      <div id="msgSubmit-apply" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<!-- conditions Modal -->
        <div class="modal fade" id="conditions" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body" style="color:black;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                <div class="col-sm-12">
                  <h4>ACKNOWLEDGEMENT</h4>
                  <hr>

                  </div>
                  <div class= "container" >
					<p><b>First</p></b>
                      <p>I guarantee that all information in this application throughout all its pages (before and after this page) are correct and represent the truth. I also guarantee that providing false information intentionally or unintentionally will result in the rejection of this application. Ebdaa has the right "in all circumstances" to approve the loan as it is, reduce it or reject it and I am not entitled for a clarification or to object this decision.</p>

                    
					<p><b>Second</p></b>
                      <p>We hereby authorize Ebdaa Bahrain for Microfinance to verify the accuracy of the information presented in this application or the financing track granted to us later from any source without the right to object this process, and I hereby waive the banking secrecy in this regard, The bank is entitled to inquire and/or verify the information from any source including the "Benefit Company" and/or any other security, and/or governmental and/or civil and/or private and/or public entities, whether local or abroad, and allow the employees of the Bank or their authorized representative to visit me and/or the guarantors in their place of residence and/or work any time before granting the loan and/or thereafter.</p>
                    
                  
                      <p><b>Third</p></b>
                      <p>We agree to pay an application fee - non-refundable - even if the application is rejected, in addition to the administration and processing fees that the bank will charge in advance and is not refundable once the loan is disbursed to us by a check issued by Ebdaa. We also acknowledge that we are not entitled to claim any of the documents associated with this application even if it is rejected.</p>

                  
                      <p><b>Forth</p></b>
                      <p>If approved, we agree to abide by all policies and procedures of Ebdaa Bahrain, including payment on time, and to pay delay penalties of BD 6 against each day in arrears of the payment of any of the loan instalments scheduled at the times specified by Ebdaa.</p>

                   
				  
                      <p><b>Fifth</p></b>
                      <p>If we wish to obtain any other services from the bank associated with this loan, we will pay the fees specified by Ebdaa (and published in all branches in a clear manner) without any objection.</p>

                  
                      <p><b>Sixth</p></b>
                      <p>We give Ebdaa Bahrain for Microfinance and/or its affiliates and/or cooperating institutions and/or entities the right to use the information and documents provided by us in this application in any marketing and/or promotional publications of the Bank's activities, even after the closing this loan and repayments have been made. Ebdaa has the right to obtain images of our own and/or the business in order to be used in the marketing and promotion of the bank and/or its sister institutions and/or entities and/or affiliates. We acknowledge and agree that Ebdaa and/or those institutions and entities may continue to use such images, data and success stories in any marketing, advertising, documentary and / or other means whatsoever and without limitation for the duration of such use before and after the closure of this loan.</p>

                 
                      <p><b>Seventh</p></b>
                      <p>We give Ebdaa Bahrain for Microfinance the right to provide any official or private entity, whether affiliated or external, with any information contained in this application. We also confirm Ebdaa’s absolute right to provide to BENEFIT, any governmental and/or quasi-governmental entity and/or any other party with such information. We will bear any consequences if it is found that this information is not genuine or conflicting with the information that is available with those entities.</p>
					  
					  <p><b>Eighth</p></b>
					  <P>To understand Loan application and/or Ebdaa’s services fees,<a href="UserFiles/files/Service%20Fees_new%202020-En-22.pdf#toolbar=0&navpanes=0scrollbar=0"target="_blank" type="application/pdf">please Click Here</a> </p>
                     
					 </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style= "visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
                </div>
            </div>
          </div>
        </div>
    <!-- Application Section End -->

    <!-- Success  Stories Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">SUCCESS STORIES</h2>
          <hr class="lines">
          <p class="section-subtitle">Learn about the successful projects<br>Discover the experiences of the successful projects with us!</p>
        </div>
        <div class="">
          <!-- Success  Stories Controller/Buttons -->
          <div class="controls text-center">
            <a class="filter active btn btn-common" data-filter="all">
            ALL
            </a>
            <a class="filter btn btn-common" data-filter=".stories">
            Stories
            </a>
            <a class="filter btn btn-common" data-filter=".stories_video">
            Stories with video
            </a>
          </div>
          <!-- Success  Stories Controller/Buttons Ends-->

          <!--  Recent Success  Stories -->


          <div id="portfolio" class="row">
		        <ul class="clearfix story-list">
    <!--  Story_1 -->
              <div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
                <div class="portfolio-item">
                  <div class="shot-item">
  				          <li>
                      <img src="assets/img/story/story_1.jpg" alt="" />
                      <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_1"><h1>Waheeba Khalil</h1></a>
                    </li>
                  </div>
                </div>
              </div>


<!--  Story 1  End-->

<!--  Story_4 -->

<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
                <div class="portfolio-item">
                  <div class="shot-item">
  				          <li>
                      <img src="assets/img/story/story_4.jpg" alt="" />
                      <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_4"><h1>Mohammed Abbas</h1></a>
                    </li>
                  </div>
                </div>
              </div>
  <!--  Story_4  End-->



  <!--  Story_3 -->

              <div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
                <div class="portfolio-item">
                  <div class="shot-item">
  				          <li>
                      <img src="assets/img/story/story_3.jpg" alt="" />
                      <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_3"><h1> Fatema Mohamed Ali</h1></a>
                    </li>
                  </div>
                </div>
              </div>


<!--  Story_3  End-->



		  <!--  Story_5 -->

              <div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
                <div class="portfolio-item">
                  <div class="shot-item">
  				          <li>
                      <img src="assets/img/story/story_5.jpg" alt="" />
                      <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_5"><h1> Sawsan Mohamed </h1></a>
                    </li>
                  </div>
                </div>
              </div>


<!--  Story_5  End-->

<!--  Story_7 -->

            <div class="col-sm-6 col-md-4 col-lg-4 mix stories">
              <div class="portfolio-item">
                <div class="shot-item">
                  <li>
                    <img src="assets/img/story/story_7.jpg" alt="" />
                    <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_7"><h1>Issa Ali</h1></a>
                  </li>
                </div>
              </div>
            </div>

<!--  Story_7 End -->

<!--  Story_9 -->

            <div class="col-sm-6 col-md-4 col-lg-4 mix stories">
              <div class="portfolio-item">
                <div class="shot-item">
                  <li>
                    <img src="assets/img/story/story_9.jpg" alt="" />
                    <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_9"><h1>Hameed Eid</h1></a>
                  </li>
                </div>
              </div>
            </div>

<!--  Story_9 End -->

<!--  Story_10 -->

            <div class="col-sm-6 col-md-4 col-lg-4 mix stories">
              <div class="portfolio-item">
                <div class="shot-item">
                  <li>
                    <img src="assets/img/story/story_10.jpg" alt="" />
                    <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_10"><h1>Hamad Shabib</h1></a>
                  </li>
                </div>
              </div>
            </div>

<!--  Story_10 End -->

<!--  Story_6 -->

            <div class="col-sm-6 col-md-4 col-lg-4 mix stories">
              <div class="portfolio-item">
                <div class="shot-item">
                  <li>
                    <img src="assets/img/story/story_6.JPG" alt="" />
                    <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_6"><h1>Ahmed Jawhar</h1></a>
                  </li>
                </div>
              </div>
            </div>

<!--  Story_6 End -->

<!--  Story_2 -->

<div class="col-sm-6 col-md-4 col-lg-4 mix stories">
              <div class="portfolio-item">
                <div class="shot-item">
                  <li>
                    <img src="assets/img/story/story_2.jpg" alt="" />
                    <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_2"><h1> Sahira Ebrahim</h1></a>
                  </li>
                </div>
              </div>
            </div>


<!--  Story_2  End-->

<!--  Story_8 -->

      <div class="col-sm-6 col-md-4 col-lg-4 mix stories_video">
        <div class="portfolio-item">
          <div class="shot-item">
            <li>
              <img src="assets/img/story/story_8.png" alt="" />
              <a href="#" class="overlay lightbox" data-toggle="modal" data-target="#story_8"><h1>Hassan Mohammad</h1></a>
            </li>
          </div>
        </div>
      </div>

<!--  Story_8 End -->








      			</ul>
          </div>
	      </div>
        <button class="btn btn-common more-stories" style="pointer-events: all; cursor: pointer;font-size: 18px; font-weight: bold; display:block; margin: 2px auto;">More Stories</button>
      </div>
    </div>
	</section>

	<!-- Container Ends -->

	<!-- STORIES POPUP START -->

	<!--  Story 1  popup-->
			  <div class="modal fade " id="story_1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body ">

                <div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                <span aria-hidden="true">&times;</span>
              </button>
                  <h4>MedNight Taxi</h4>
                  <hr>
				 </div>
                  <div class="col-sm-12 col-md-12 col-lg-12">
				 <iframe width="100%" height="500px" src="https://www.youtube.com/embed/isdSslF8FMI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                  </div>
              </div>
			    <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
            </div>
          </div>
        </div>
      </div>
<!--  Story 1  popup end-->

<!-- srory_2 popup  -->
<div class="modal fade " id="story_2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
				<h4>Transforming Talent into a Successful Project </h4>
                <hr>
                  <div id="slides_story_2" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/story/story_2.jpg" alt="First slide">
            </div>
        </div>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <p>Ms. Sahira Ebrahim developed a passion for cooking since her youth. Later on in life, she turned her passion into a business. After graduation from school, she started a food processing (cooking) business and sold her food among friends and family.</p>
			   <p>Sahira is now widely known among the Bahraini community because of her unique tasteful cooking. She is also the owner of the social media account: Rashat_Bharr which promotes popular cuisine.</p>
			   <p>To develop her business further, Sahira borrowed BD 600 from Ebdaa Bahrain to purchase necessary equipment for cooking. In doing so, she was able to practice her passion further and reach more of her clients. </p>
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
<!--  Story 2  popup end-->

 <!--  Story_3  popup-->
			  <div class="modal fade " id="story_3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body ">

                <div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                <span aria-hidden="true">&times;</span>
              </button>
                  <h4>Bahrain Hard Wax</h4>
                  <hr>
				 </div>
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <iframe width="100%" height="500px" src="https://www.youtube.com/embed/XjfWo_Qwgz8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                  </div>
				</div>
			  <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
            </div>
          </div>
        </div>
      </div>
<!--  Story 3  popup end-->

<!--  Story_5  popup-->
			  <div class="modal fade " id="story_5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body ">

                <div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                <span aria-hidden="true">&times;</span>
              </button>
                  <h4>Lewan Kitchen With Sawsan </h4>
                  <hr>
				 </div>
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <iframe width="100%" height="500px" src="https://www.youtube.com/embed/DSyqpqr-P38" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			  <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
            </div>
          </div>
        </div>
      </div>
<!--  Story 5  popup end-->

	  <!-- srory_4 popup  -->
<div class="modal fade " id="story_4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
				<h4>Partnership in Achievement</h4>
                <hr>
                  <div id="slides_story_4" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_story_4" data-slide-to="0" class="active"></li>
          <li data-target="#slides_story_4" data-slide-to="1"></li>
          <li data-target="#slides_story_4" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/story/story_4.jpg" alt="First slide">
            </div>
          <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/story/story_4.1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/story/story_4.2.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slides_story_4" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_story_4" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <p>Mohammed Maher Abbas is a young Bahraini with high ambition to continuously improve his financial situation. To achieve that goal, he considered creating a unique business to support his main salary from his job at a private sector company.</p>
			   <p>In 2016, Mohammed’s business came to life when he began selling shoes and bags in the commercial markets. Mohammed knew that in order for a business to grow there are expansions needed -- which could only be possible with a steady cash flow. Thus, he obtained three loans from Ebdaa Bahrain at different time intervals ranging between 300 dinars and 600 dinars.</p>
			   <p>These loans allowed him to keep his business evolving and expanding. Moreover, Mohammed's commitment to repaying his loans on time have greatly increased his credibility with Ebdaa. His relationship transformed from being just a client to now a continuously evolving and successful partnership.</p>
			    </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<!--  Story_4 popup End-->

		  <!-- srory_6 popup  -->
<div class="modal fade " id="story_6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
				<h4>Gym at home</h4>
                <hr>
                  <div id="slides_story_6" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/story/story_6.JPG" alt="First slide">
            </div>

        </div>

      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <p>Ahmed Ghanem Jawhar is a young Bahraini who made a benefit out of his passion to sports. He did this through the opening of a gym at his home in Hamad Town, where he trains people on boxing and bodybuilding.</p>
			   <p>Ahmed welcomes various age groups, especially youth, and believes that contribution and promotion of public health is very important.</p>
			   <p>Ahmad business has proven its success, and now he is seeking to develop this project from various aspects, while Ebdaa Bahrain is always ready to support its outstanding customers.</p>
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<!--  Story_6  End-->

  <!-- srory_7 popup  -->
<div class="modal fade " id="story_7" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body ">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
          <span aria-hidden="true">&times;</span>
        </button>
    <h4>Constant development</h4>
            <hr>
              <div id="slides_story_7" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slides_story_7" data-slide-to="0" class="active"></li>
      <li data-target="#slides_story_7" data-slide-to="1"></li>
      <li data-target="#slides_story_7" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-75" src="assets/img/story/story_7.jpg" alt="First slide">
        </div>
      <div class="carousel-item">
        <img class="d-block w-75" src="assets/img/story/story_7.1.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-75" src="assets/img/story/story_7.2.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#slides_story_7" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#slides_story_7" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
            </div>
          <div class="col-sm-12 col-md-12 col-lg-12">

           <div class="box_shadow" >
     <p>Successful businesses are never stagnant - they require constant evolving and the development of tools and equipment. Issa Naji Mohammed, who owns a garage in Al Hamala area for car and motorcycle repairs, understands this. He has over five years of experience in repairing and programming car computers but wanted to expand his business by adding new types of equipment related to the Hyundai cars.</p>
     <p>He was able to finance this expansion by obtaining loans from Ebdaa Bahrain. He received a loan in the amount of BD 2000 which he is now paying back in convenient instalments and with full commitment.</p>

     </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
<!--  Story_7  End-->

<!--  Story_8  popup-->
			  <div class="modal fade " id="story_8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body ">

                <div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                <span aria-hidden="true">&times;</span>
              </button>
                  <h4>Hassan Mohammad</h4>
                  <hr>
				 </div>
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <iframe width="100%" height="500px" src="https://www.youtube.com/embed/g5VhG1_LWbA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			  <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">close</button>
           </div>
            </div>
          </div>
        </div>
      </div>

<!--  Story_8  End-->

<!-- srory_9 popup  -->
<div class="modal fade " id="story_9" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-body ">
      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
        <span aria-hidden="true">&times;</span>
      </button>
  <h4>When Your Hobby Turns into Your Dream Job</h4>
          <hr>
            <div id="slides_story_9" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#slides_story_9" data-slide-to="0" class="active"></li>
    <li data-target="#slides_story_9" data-slide-to="1"></li>
    <li data-target="#slides_story_9" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-75" src="assets/img/story/story_9.jpg" alt="First slide">
      </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="assets/img/story/story_9.1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="assets/img/story/story_9.2.jpg" alt="Third slide">
      </div>
  </div>
  <a class="carousel-control-prev" href="#slides_story_9" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#slides_story_9" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
          </div>
        <div class="col-sm-12 col-md-12 col-lg-12">

         <div class="box_shadow" >
   <p>Do you think that all kinds of businesses require creative ideas, plans of action, big capital, employees, captives, and ...?! Of course not.</p>
   <p>Hameed Hassan Ali Eid is a client at Ebdaa Bahrain who breeds birds for a living -- hatching and selling them. This was a hobby that Hameed realized doesn’t only have to be fun, but can also be profitable. Working with pets is a wonderful profession, and Hassan is an example of a person who was able to turn their hobby into a job. He was aware that he needed some extra money in order to expand his business to buy more birds. That’s when he applied for a loan at Ebdaa Bahrain, and with the necessary funding, was able to achieve his dream job.</p>
  

   </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
     </div>
  </div>
</div>
</div>
<!--  Story_9  End-->

<!-- srory_10 popup  -->
<div class="modal fade " id="story_10" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-body ">
      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
        <span aria-hidden="true">&times;</span>
      </button>
  <h4>Enhancing Your Business Goals</h4>
          <hr>
            <div id="slides_story_6" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-75" src="assets/img/story/story_10.jpg" alt="First slide">
      </div>

  </div>

</div>
          </div>
        <div class="col-sm-12 col-md-12 col-lg-12">

         <div class="box_shadow" >
   <p>Hamad Abbas Shabib lives in AAli and owns a farm to rent horses and livestock in the area of Karana. Within the field of horses, he specifically trains children on horseback riding and provides them with necessary and basic instructions.</p>
   <p>Recently, Hassan wanted to expand his business by adding a new experience -- raising sheep. He reached out to Ebdaa Bahrain and is now grateful for our support in helping to enable his business expand.</p>

   </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
     </div>
  </div>
</div>
</div>
<!--  Story_10 End-->


    <!-- Success  Stories Section Ends -->

    <!-- Counter Section Start -->
    <div class="counters section" data-stellar-background-ratio="0.5">
      <div class="container">
            <p style="bottom: 0;color: white;font-size:11px;text-align: center;"> These figures are up to 05/09/2023</p>
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3 hoverable">
            <div class="facts-item normal">
              <div class="icon">
                <i class="lnr lnr-user"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">20,704</span></h3>
                <h4>Customers</h4>
              </div>
            </div>
			<div class="facts-item hover ">
               <div class="icon">
                <i class="fa fa-male"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">11,585</span></h3>
                <h4>Men </h4>
              </div>
			   <div class="icon">
                <i class="fa fa-female"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">9,119</span></h3>
                <h4>Women</h4>
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
                <h4>Loans </h4>
              </div>
            </div>
			<div class="facts-item hover ">
               <div class="icon">
                <i class="fa fa-folder-open"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">2,697</span></h3>
                <h4>Active Loans  </h4>
              </div>
			   <div class="icon">
                <i class="fa fa-folder"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">18,007</span></h3>
                <h4>Repaid Loans</h4>
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
                <h4>BD Disbursed</h4>
              </div>
            </div>
			<div class="facts-item hover ">
               <div class="icon">
                <i class="fa fa-folder-open"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">1,566,396</span></h3>
                <h4>Active Loans</h4>
              </div>
			   <div class="icon">
                <i class="fa fa-folder"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">21,745,693</span></h3>
                <h4>Repaid Loans</h4>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
			   <i class="lnr lnr-pie-chart"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter"> 94 </span> &nbsp;%</h3>
                <h4>Repayment rate</h4>
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">EBDAA TEAM</h2>
          <hr class="lines">
          <p class="section-subtitle ">“Together everyone achieves more.” </p>
        </div>

        <div class="row ">
          <div class="col-lg-3 col-md-6 col-xs-12" style="padding-bottom: 20px;">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#Khaled"><img src="assets/img/team/Khaled.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#Khaled"><h4 class="team-title">Khaled Al Gazawi</h4>
                  <p>Chef Executive Officer</p></a>
				  <br>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Khaled" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#Yousef"><img class="img-fulid" src="assets/img/team/Yousef.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                 <a href="#" data-toggle="modal" data-target="#Yousef"> <h4 class="team-title">Yousif Qambar</h4></a>
                  <p>Senior Supervisor of HR and Administrative Affairs</p>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Yousef" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div>
		 
		  
		  <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#ali"><img class="img-fulid" src="assets/img/team/ali.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#ali"><h4 class="team-title"> Ali Isa Mohamed </h4>
                  <p> Senior Officer of IT </p></a>
				  <br>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#ali" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div>
		  <!--
		   <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#Ghaith"><img class="img-fulid" src="assets/img/team/Ghaith.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#Ghaith"><h4 class="team-title">Ghaith Al Monem</h4>
                  <p> Operations Manager </p></a>
				  <br>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Ghaith" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div>
		  -->
		    <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
             <a href="#" data-toggle="modal" data-target="#Hana"> <img src="assets/img/team/hana.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#Hana"><h4 class="team-title">Hana Salman </h4>
                  <p> Senior First Officer - Credit </p></a>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Hana" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div> 
		  


	<!--
		  <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#Ahmed"><img class="img-fulid" src="assets/img/team/Ahmed.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#Ahmed"><h4 class="team-title"> Ahmed Al-Aradi </h4>
                  <p> Risk Manager </p></a>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Ahmed" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div> -->
		  

		  
		  <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#Mashael"><img src="assets/img/team/Mashael.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#Mashael"><h4 class="team-title">Mashael Saleh</h4>
                  <p>Finance Manager</p></a>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#Mashael" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <a href="#" data-toggle="modal" data-target="#hamza_new"><img class="img-fulid" src="assets/img/team/hamza_new.jpg" alt=""></a>
              <div class="team-details">
                <div class="team-inner">
                  <a href="#" data-toggle="modal" data-target="#hamza_new"><h4 class="team-title">Hamzah Qtaishat </h4>
                  <p>Senior Collection officer</p></a>
				  <a href="#" class="btn btn-link" data-toggle="modal" data-target="#hamza_new" style="color:#61D2B4">Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<!--Team Popup Start -->
	<div class="modal fade " id="Khaled" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/Khaled.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Khaled Al Gazzawi</h4>
                <hr>
               <div class="box_shadow" >
                 <p>Since 01/04/2014, Dr. Khaled Walid Al-Gazawi is serving as the CEO of Ebdaa Microfinance in Bahrain. He came in with over 19 years of experience in microfinance and more than eight years of experience in the financial and banking sector.</p>
                 <p>Dr. Al-Gazawi holds an Occupational PhD in International Business from the United States and a Master's and Bachelor's Degree in Business Administration and Finance from Jordan. He is a certified trainer in several areas of Microfinance, such as Business Planning, Impairment Management, Interest Rate setting, Accounting, Operational Risk Management And financial analysis.</p>
                 <p>Prior to joining the Family of Ebdaa Bahrain, Dr. Al-Gazawi served as the General Manager of Grameen-Jameel for Microfinance in Dubai, United Arab Emirates. Prior to that, he served as a resident advisor to the Arab Gulf Programme for Development (AGFUND) in Lebanon, where he led efforts to launch Ebdaa Company for Microfinance in Lebanon and managed to train and build the capacity of employees and launch the Bank's financing activities for the poor in less than 90 days.</p>
                 <p>Between 2009 and 2012, Khaled served as CEO of the First Microfinance Foundation in Egypt, which is affiliated to the Aga Khan Microfinance Agency in Geneva, Switzerland, and a consultant to the Quality Finance International, which operated out of Cairo between 2007 and 2009.</p>
                 <p>From early 2006 until the middle of 2007, Khaled operated out of Washington, DC as Director of the Greater Middle East Program at the World Village Banks (FINCA). Between 1999 and 2005, Dr. Al-Gazawi was one of the founders and the CEO of Jordan Microcredit Company (Tamweelcom), one of the leading microfinance companies in Jordan, fully owned by Queen Noor Al Hussein Foundation and funded by the US Agency for International Development. During his tenure, Tamweelcom became one of the leading providers of microfinance services in Jordan and has won prestigious international awards on various occasions for its transparency and dedication to poverty reduction and good governance.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<div class="modal fade " id="Ghaith" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/Ghaith.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Ghaith Al Monem</h4>
                <hr>
               <div class="box_shadow" >
                 <p>Mr. Al-Munem has been working in microfinance since early 2011 when he joined Ebdaa Microfinance in Syria on April 1, 2011. He has held several positions until he became a Branch Manager in the beginning of 2016. He later moved to Ebdaa Bahrain.</p>
                 <p>Ghaith started his career in the bank as a loan officer and was soon promoted to a group leader in the bank's branch at Riyadat mall in the Aali area when it was still under construction. He then took charge of the Branch when it was officially launched late 2016, and finally took over the position of Regional Manager responsible for the Riyadat and Hamad Town branches in December of 2017, before he was finally promoted to the Operations Manager position Mid of 2018.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	
    <div class="modal fade " id="Hana" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/Hana.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4> Hana Salman </h4>
				<h4> Senior First Officer - Credit </h4>
                <hr>
               <div class="box_shadow" >
                 <p>
                 Ms. Hana Salman joined Ebdaa Bahrain in August 2016 as a Loan officer in Operations department. She has quickly settled herself to work with honesty and commitment. Hana started to move up into her journey to undertake the tasks of a group supervisor in May 2017, where she was characterized by mastering the leadership skills. She continued in moving up and doing her best in the same department until she reached a branch manager position in May 2018. Given her excellence and enthusiasm on realizing her goals, Hana, today, serves as a senior credit officer as she was appointed in this position since October 2019.				 </p>
                 <p>
                 Hana is persistent and determined in her work. She has always aspired to realize her goals through her excellence and enthusiasm to be the best. 				 </p>
                 <p>
                 Ms. Hana holds a bachelor's degree in Business Administration from the Arab Open University, Administration Systems specialization. She has also received many of training certificates, primary in the microfinance, customer services, management and leadership skills. Hana has participated in many of the international forums and various events that serve the company and the Bahrain society in whole.				 </p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade " id="Ahmed" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/Ahmed.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4> Ahmed Al-Aradi </h4>
                <h4> Risk and Compliance officer and acting M2RO </h4>
               <div class="box_shadow" >
                 <p>
				 Ahmed has extensive experience in risk management. Prior to joining Ebdaa Bahrain, he worked in S2M Transaction GCC as Risk and Corporate Governance Officer. 
				 </p>
                 <p>
				 He also held the position of Risk Officer at Bahrain National Insurance Company (BNI) from 2015 until 2019.
				 </p>
                 <p>
				  Mr. Ahmed Al-Aradi holds a Bachelor’s degree in Banking finance from Bahrain Polytechnic. Ahmed is a Professional Risk Manager (PRM) candidate, Associate Professional Risk Manager and the Foundation of Financial Risk professional certificate holder.
				 </p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	
	
	<div class="modal fade " id="Firas" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/Firas.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Firas Ismail</h4>
                <hr>
               <div class="box_shadow" >
			   <p>Mr. Firas Ismail is a Jordanian national. He and holds a bachelor degree in accounting from Amman Ahliya University, a master's degree in accounting from Amman Arab University; both in Jordan. Firas comes forward with many other certificates and training courses in accounting, management, auditing and capacity building.</p>
			   <p>Firas has held several positions throughout his career. At the beginning of 1996, he worked as a senior accountant in one of the prestigious engineering companies in the United Arab Emirates. From 1999 to 2003, he worked as an external auditor and accountant at Talal Abu-Ghazaleh Audit firm. Between 2003 and 2006, he served as an internal auditor at Microfund for Woman (one of the largest microfinance providers in Jordan) and then as a Director of Finance between 2006 and 2007. Finally, from 2007 until joining the family of Ebdaa Bahrain, he served in the capacity of the CFO of one of the leading microfinance companies in Jordan "Tamweelcom".</p>
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade " id="Yousef" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/Yousef.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Yousif Qambar</h4>
               <div class="box_shadow" >
                 <p>Mr. Yousif Qambar has been a member of the Ebdaa team nearly since its establishment. He joined in July 2009 as an Administrative Coordinator in the Human Resources and Administrative Affairs Department. In July 2011, he was appointed as Executive Secretary of the CEO and Board of Directors. Mr. Yousif has demonstrated outstanding skills and continued to gradually upgrade in positions until he was appointed Senior Supervisor of Human Resources and Management at the Bank in April of 2016.</p>
                 <p>Mr. Yousif holds a specialized diploma from the Bahrain Training Institute and a Bachelor’s degree in Business Administration from Arab open University. He also attended several conferences and professional courses and received many certificates in microfinance and specialized certificates in human resources and administrative affairs.</p>

			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade " id="ali" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/ali.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Ali Isa Mohamed</h4>
				<h4>Senior Officer of IT</h4>
                <hr>
               <div class="box_shadow" >
                 <p>
                 Mr. Ali Mohamed has been working at the Ebdaa Bahrain since 2018. He holds the HNA from the Bahrain Training Institute, Information Systems specialization.				 </p>
                 <p>
                 Before joining Ebdaa Bahrain as a technical support officer, Mr. Ali had worked in the Information Technology Department at Alloyed Contracting Company for nine years. He was promoted until he reached a senior technical support officer position. Mr. Ali attended many conferences and professional courses and awarded many international licenses in the field of the information technology.				 </p>
		          </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	</div>
    </div>
	  
    </div>
	<div class="modal fade " id="Mashael" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/Mashael.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Mashael Saleh</h4>
                <hr>
               <div class="box_shadow" >
                 <p>Ms. Mashael holds a Bachelor's degree in Accounting from Bahrain Polytechnic University. She worked for Citi Islamic Investment Bank for two years before joining Ebdaa Bahrain as an accountant. She was promoted to the position of chief accountant at Ebdaa as of the first quarter of 2018. Ms. Saleh attended several courses in banking, financial management and financial planning.</p>
			          </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<div class="modal fade " id="hamza_new" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <img src="assets/img/team/hamza_new.jpg" alt="" style="width:100%;">
                </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <h4>Hamzah Qtaishat  </h4>
                <hr>
               <div class="box_shadow" >
			   <p>Mr. Hamzah Qtaishat has been working at Ebdaa Bahrain since March 2015, and has served in several positions until he became the senior first officer - collections at the beginning of 2018.</p>
			   <p>Hamza began his career with Ebdaa as a loan officer and was then transferred to the collection department as a Collection Officer. He showed outstanding skills and received a promotion to become the Collection Officer in the A’ali branch and then he was promoted to Senior First Officer - Collection. He has also attended numerous conferences and professional courses and has received many certificates in microfinance.</p>
                    </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>


	<!-- Team Popup End -->
    <!-- Team section End -->

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1 " style="direction:ltr !important;">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme ">
			<div class="testimonial-item ">
                <img src="assets/img/team/Khaled.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p> <span class="fa fa-quote-left"></span> &nbsp The objective of Ebdaa Bahrain is to serve Bahrainis who run small businesses or intend to start ones,   <br> all in order to achieve the Bahrain Economic Vision 2030 and the 17 sustainable development goals of the United Nations, <br> whom Bahrain volunteered to implement &nbsp <span class="fa fa-quote-right"></span> </p>
                  <h3>Dr. Khaled Al-Gazawi</h3>
                  <span>CEO</span>
                </div>
              </div>
			  <div class="testimonial-item ">
                <img src="assets/img/board/Mona.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p><span class="fa fa-quote-left"></span> &nbsp Every woman has unlimited possibilities to achieve the impossible <br> if she has the well and faith in her abilities. &nbsp <span class="fa fa-quote-right"></span></p>
                  <h3>Mona Al Moayyad</h3>
                  <span>chairman of the board</span>
                </div>
              </div>
   <!--           <div class="testimonial-item ">
                <img src="assets/img/team/Eman.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text ">
                  <p><span class="fa fa-quote-left"></span>&nbsp During my years at Ebdaa Bahrain, I found that <br>   Bahraini women are the best example of hard work and creativity,<br>and always strive to rely on themselves and manage their work &nbsp <span class="fa fa-quote-right"></span></p>
                  <h3>Eman Bu Fersen</h3>
                  <span>Compliance Officer</span>
                </div>
              </div>-->
              <div class="testimonial-item ">
                <img src="assets/img/team/mohd_alhadad.png" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p><span class="fa fa-quote-left"></span> &nbsp  We are always keen to upgrade our services to the level that helps our  <br>clients to develop their businesses and increase their income  &nbsp <span class="fa fa-quote-right"></span></p>
                  <h3>Mohammad Al-Haddad</h3>
                  <span>Branch Manager</span>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial Section End -->

    <!-- News Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">EBDAA BAHRAIN NEWS</h2>
          <hr class="lines">
          <!--<p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p> -->
        </div>
        <div class="row  ">
		      <ul class="clearfix news-list">
			  
			  <!-- News23 Item Starts -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
              <div class="blog-item-wrapper">
                <li>
                  <div class="blog-item-img">
                    <a href="#" data-toggle="modal" data-target="#News23"><img src="assets/img/news/news_23.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
				  <br><br>
                    <p>June 7, 2022</p>
	                <h3><a href="#" data-toggle="modal" data-target="#News23">H.R.H Prince Abdulaziz bin Talal Al-Saud visits “Ebdaa Bahrain”</a></h3>
					<p>
	               His Royal Highness Prince Abdulaziz bin Talal Al Saud, Chairman of Arab Gulf Program for Development (AGFUND), accompanied by The Executive Director of AGFUND, Mr. Nasser Alkahtani, visited the headquarters of "Ebdaa" Microfinance Company - Bahrain
                    </p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News23" style="color:#61D2B4">تفاصيل الخبر  <i class="lnr lnr-arrow-left"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News21"><img src="assets/img/news/news_21.jpg" alt=""></a>
                  </div>
				  <br><br>
                  <div class="blog-item-text">
                      <p>August 30, 2021 </p>
                    <h3><a href="#" data-toggle="modal" data-target="#News21">Dr. Khaled Al Ghazzawi, Developing Credit policies at Ebdaa Microfinance </a></h3>
                    <p>
             Dr. Khaled Al Ghazzawi, CEO of “Ebdaa Microfinance – Bahrain”, stated that the company has recently developed its credit policies to help more clients restore the operating performance, competitiveness, and profitability of their microenterprises, </p>
			 
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News21" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News20"><img src="assets/img/news/news_22.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
				 
                      <p>August 8, 2021 </p>
                    <h3><a href="#" data-toggle="modal" data-target="#News20">Training Ebdaa cadres for post- pandemic era: Dr. Khaled Al Ghazzawi</a></h3>
                    <p>
              Dr. Khaled Al Ghazzawi, CEO of “Ebdaa Microfinance – Bahrain”, stated that the company has initiated an ambitious plan to train its cadres to help Bahraini customers owners of small and micro companies to recover their companies’ activities and market share, and to keep pace with the developments brought about by the pandemic.</p>
			  
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News20" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
                  </div>
			          </li>
              </div>
            </div>

		 <!-- News19 Item Starts -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
              <div class="blog-item-wrapper">
                <li>
                  <div class="blog-item-img">
                    <a href="#" data-toggle="modal" data-target="#News19"><img src="assets/img/news/news_20.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
				   <br><br>
                      <p>May 20, 2021 </p>
                    <h3><a href="#" data-toggle="modal" data-target="#News19">Ebdaa microfinance boots its post-pandemic financing services  </a></h3>
                    <p>
               CEO of “Ebdaa Microfinance” Dr. Khaled Al Ghazzawi, stated that internal work system is under development to ensure providing financing services that keep pace with the emerging needs of Bahrainis micro-entrepreneurs and to avoid the negative repercussions of the COVID-19 pandemic on their projects, especially those related to the most affected sectors such as hospitality and transportation.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News19" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
                  </div>
			          </li>
              </div>
            </div>
            <!-- News Item Wrapper Ends-->  
			
			
		
		   <!-- News18 Item Starts -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
              <div class="blog-item-wrapper">
                <li>
                  <div class="blog-item-img">
                    <a href="#" data-toggle="modal" data-target="#News18"><img src="assets/img/news/mona-khaled-nasser.jpg" alt=""></a>
                  </div>
				  <br><br>
                  <div class="blog-item-text">
                      <p>February 6, 2021 </p>
                    <h3><a href="#" data-toggle="modal" data-target="#News18">Ebdaa Bank hails Mona Almoayyed’s ranking on Forbes list</a></h3>
                    <p>
               Ebdaa bank for Microfinancing - Bahrain, congratulated its Chairman, H.E. Mona Yousuf Khalil Almoayyed, on the occasion of ranking first place in Bahrain </p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News17" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
                  </div>
			          </li>
              </div>
            </div>
		 <!-- News17 Item Starts -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
              <div class="blog-item-wrapper">
                <li>
                  <div class="blog-item-img">
                    <a href="#" data-toggle="modal" data-target="#News17"><img src="assets/img/news/news_17.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                      <p>March 27, 2019 </p>
                    <h3><a href="#" data-toggle="modal" data-target="#News17">Financial Results 2018 for Ebdaa Bank </a></h3>
                    <p>
            Ebdaa Bank for Microfinance – Bahrain announced an increase of over 227% in net profits for the financial year ending December 31, 2018, when compared to 2017.</p>
			 
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News17" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News16"><img src="assets/img/news/news_16.jpg" alt=""></a>
                  </div>
                  <br>
                  <div class="blog-item-text">
                      <p>March 24, 2019  </p>
                    <h3><a href="#" data-toggle="modal" data-target="#News16">Ebdaa Bahrain plans to adopt technology solutions: CEO</a></h3>
                    <p>
               Ebdaa Bahrain, a micro-financing bank in the Kingdom, has announced plans to implement innovative technology solutions, within the bank, in a bid to benefit from Bahrain’s position as a regional center for financial technology. The bank also said it is currently looking forward to cooperating with a commercial bank to issue credit cards to disburse loans and for client loan payments, after obtaining the approval of the Central Bank of Bahrain.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News16" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News15"><img src="assets/img/news/news_vacancies.jpg" alt=""></a>
                  </div>
                  <br>
                  <div class="blog-item-text">
                      <p>24 Feb 2019 </p>
                    <h3><a href="#" data-toggle="modal" data-target="#News15">Ebdaa Bahrain offers vacancies  </a></h3>
                    <p>
                  Manama, Feb. 24 (BNA): Ebdaa Bahrain for Microfinance in Bahrain has participated in the Pre-Work Education and Training Expo, which was held under the patronage of Labour and Social Development Minister Jameel bin Mohammed Ali Humaidan.
                    </p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News15" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News14"><img src="assets/img/news/news_Sanjev.jpg" alt=""></a>
                  </div>
                  <br>
                  <div class="blog-item-text">
                      <p>February 15, 2019</p>
                    <h3><a href="#" data-toggle="modal" data-target="#News14">BDB CE joins Ebdaa Bahrain director board </a></h3>
                    <p>
                  Ebdaa Bahrain for micro-financing said the Chief Executive of Bahrain Development Bank (BDB) has become a member of the Ebdaa Bahrain board of directors. BDB Chief Executive, Sanjeev Paul, is the successor of Dalal Ismail, who was a BDB representative in the board for over five years. 
                    </p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News14" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News12"><img src="assets/img/news/news_12.jpg" alt=""></a>
                  </div>
                  <br>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News12">Representatives of 10 Arab MFIs Take Part in a Workshop in Bahrain</a></h3>
                    <p>
                   Bahrain hosted a workshop, organized by the Arab Gulf Programme for Development-AGFUND, in the presence of 20 officials representing 10 Arab microfinance institutions representing the branches of AGFUND in Lebanon, Mauritania, Sudan, Syria and Bahrain, as well as officials representing Microfinance institutions from Jordan and Iraq.
                    </p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News12" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News0"><img src="assets/img/news/news_0.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">

                    <h3><a href="#" data-toggle="modal" data-target="#News0">UN office sign statement with Ebdaa Bahrain</a></h3>
                    <p>Manama, Sept. 24(BNA): A statement of intent was signed between Ebdaa Bahrain for Microfinance and the United Nations office of the Kingdom to work jointly on areas of mutual interest, especially the promotion of the Sustainable Development Goals (SDGs) and the 2030 Agenda for Sustainable Development. </p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News0" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News1"><img src="assets/img/news/news_1.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">

                    <h3><a href="#" data-toggle="modal" data-target="#News1">Algosaibi Holding Group Sign Grant Agreement in support of Ebdaa Bahrain</a></h3>
                    <p>Algosaibi Holding Group has signed a grant agreement with Ebdaa Bahrain, as a nonprofit social financing, that seek to help low-income Bahraini make their way to business.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News1" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News2"><img src="assets/img/news/news_2.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">

                     <h3><a href="#" data-toggle="modal" data-target="#News2">Ebdaa Bahrain Launches New Products</a></h3>
                    <p>Ebdaa Bahrain, for Microfinance, has launched two new loans “Al Najah” and “Altafawq”, offering more financial unguaranteed loans for Bahraini low-incomers.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News2" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News3"><img src="assets/img/news/news_3.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News3">Ebdaa Bahrain to Reopen Hamad Town Branch</a></h3>
                    <p>Ebdaa Bahrain for Microfinance will reopen its branch in Hamad Town after a comprehensive maintenance and development process</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News3" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News4"><img src="assets/img/news/news_4.3.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News4">Ebdaa Bahrain celebrated staff honouring</a></h3>
                    <p>Ebdaa Bahrain for Microfinance celebrated its staff in a special meeting</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News4" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News5"><img src="assets/img/news/news_5.1.JPG" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News5">Ebdaa Bahrain Attends “Middle East Investment Conference” in Cairo</a></h3>
                    <p>Dr. Khalid Waleed Al Ghazawi, CEO of Ebdaa Bahrain, partook in “Middle East Investment Conference” in Cairo, Egypt where international thought leaders, policymakers and key market participants are gathered to discuss trends shaping the Middle East and North Africa region, as well as its role in the global economy.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News5" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News6"><img src="assets/img/news/news_6.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News6">Ebdaa Bahrain is an exclusive sponsor of the "N3een N3awen” campaign </a></h3>
                    <p>Ebdaa Bahrain announced its exclusive sponsorship of the campaign “N3een N3awen” –a social marketing campaign by Public Relations Majors-initiated by a number of students of University of Bahrain (UOB) under the auspices of the president of UOB Dr. Riyadh Hamza. </p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News6" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News7"><img src="assets/img/news/news_7.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News7">Ebdaa Bahrain Links its New Strategic Plan to SDGs </a></h3>
                    <p>Dr. Khalid Al Ghazawi, CEO of Ebdaa Bahrain - Bahrain said that the bank is currently fully reviewing its new strategy to meet the Sustainable Development Goals (SDGs) to support services of Bahrain’s society and economy.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News7" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News8"><img src="assets/img/news/news_8.2.JPG" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News8">Dr. Al Ghazawi Sees the Positive Impact of Microfinance in Iraq</a></h3>
                    <p>Dr. Khalid Waleed Al Ghazawi,CEO of Ebdaa Bahrain, talks to the chairman of Iraq Private Banks League Mr. Waleed Al Handal about Bahrain’s experience in Microfinance represented by Ebdaa Bahrain.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News8" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News9"><img src="assets/img/news/news_9.1.JPG" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News9">Ebdaa Bahrain Nod to Adopt Microfinance in Gulf Charities</a></h3>
                    <p>Ebdaa Bahrain has agreed with a proposal to microfinance project adopted by charities due to its sustainability to develop their financial resources thus to achieve their objectives to support low-income families. At a time that donations are very less compared to the people needs.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News9" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
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
                    <a href="#" data-toggle="modal" data-target="#News10"><img src="assets/img/news/news_10.1.jpg" alt=""></a>
                  </div>
                  <div class="blog-item-text">
                    <h3><a href="#" data-toggle="modal" data-target="#News10">Ebdaa Bahrain celebrates Employee Appreciation</a></h3>
                    <p>Dr Khalid Waleed Al Ghazawi, CEO of Ebdaa Bahrain, honored a number of employees who were distinguished for their outstanding performance in recent years as a part of Bank’s staff motivation program to encourage them for an enhanced performance and productivity.</p>
                    <a href="#" class="btn btn-link" data-toggle="modal" data-target="#News10" style="color:#61D2B4">more details<i class="lnr lnr-arrow-right"></i></a>
                  </div>
			          </li>
              </div>
            </div>
            <!-- News Item Wrapper Ends-->
		      </ul>
        </div>
        <button class="btn btn-common more-news" style="pointer-events: all; cursor: pointer;font-size: 18px; font-weight: bold; display:block; margin: 2px auto;">More News</button>
      </div>
    </section>
    <!-- News Section End -->
<!-- popup start -->


<!-- News23 -->
<div class="modal fade ar-dir" id="News23" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
			<h4> H.R.H Prince Abdulaziz bin Talal Al-Saud visits “Ebdaa Bahrain”</h4>
			<hr>
                  <div id="slides_News23" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News23" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News23" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_23.jpg" alt="First slide">
            </div>
           
        <a class="carousel-control-prev" href="#slides_News23" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News23" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   
				 <p>His Royal Highness Prince Abdulaziz bin Talal Al Saud, Chairman of Arab Gulf Program for Development (AGFUND), accompanied by The Executive Director of AGFUND, Mr. Nasser Alkahtani, visited the headquarters of "Ebdaa" Microfinance Company - Bahrain, where His Highness was received by several of the company's board of directors, including Mr. Abdul Hamid Dawani, Mrs. Dalal Al Ghais, Mrs. Samar Ajaybi, the company's CEO, Dr. Khalid Al Ghazzawi, and a number of the company's senior employees.</p>				 
				 <p>His Royal Highness Prince Abdulaziz bin Talal Al Saud toured the headquarters of "Ebdaa" company, and was briefed about the process of development witnessed by Ebdaa since its establishment in the Kingdom of Bahrain in 2009 as the first bank specializing in microfinance in the Kingdom of Bahrain under the patronage of Her Royal Highness Princess Sabeeka bint Ibrahim Al Khalifa, wife of the King of Bahrain and President of the Supreme Council for Women, may God protect her, and the late Prince Talal bin Abdulaziz Al Saud, former Chairman of the Arab Gulf Program for Development “AGFUND”.</p>
				 <p>His Highness was also briefed of the contributions of "Ebdaa" to the Kingdom of Bahrain 2030 vision, its support for micro-enterprise owners, and its contribution to launching their projects and realizing their ambitions by providing small loans on easy and accessible terms, with a special focus on women and youth. </p>
				 <p>His Royal Highness Prince Abdulaziz bin Talal Al Saud also listened to the company's CEO, Dr. Khalid Al Ghazzawi 's presentation of the company's qualitative development, the diversity of its loan products, and the high levels of financing and collection rates recorded. </p>
				 <p>During his visit, His Highness also honoured several Bahraini micro-enterprise owners who have invested in the financial services of “Ebdaa” to develop their projects and increase their efficiency and productivity.</p>
				</div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">إغلاق</button>
           </div>
        </div>
      </div>
    </div>


<!-- News21 -->
<div class="modal fade" id="News21" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Dr. Khaled Al Ghazzawi, Developing Credit policies at Ebdaa Microfinance </h4>
                <hr>
                  <div id="slides_News21" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News21" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News21" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_21.jpg" alt="First slide">
            </div>
            
        <a class="carousel-control-prev" href="#slides_News21" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News21" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <P>Dr. Khaled Al Ghazzawi, CEO of “Ebdaa Microfinance – Bahrain”, stated that the company has recently developed its credit policies to help more clients restore the operating performance, competitiveness, and profitability of their microenterprises, in line with the economic and commercial recovery phase recently witnessed in the Kingdom of Bahrain.</p>
			   
			   <p>Dr. Al Ghazzawi, during an inspection visit to the company’s branches, said that the development of the credit policy came based on a survey of many customers and employees and extensive studies, adding that these developments would allow more flexibility in granting and increasing the number of loans, in addition to helping customers to pay on time, and reduce the costs of granting the loan for the company and the client at the same time.<p>
			   
			   <p>“The collection policy is subject to a process of permanent monitoring and evaluation to increase its efficiency and ensure cash flows; so that the company can rotate loans quickly enough to benefit more Bahraini borrowers who own microenterprises. to pay on time, which indicates the restoration of economic recovery in large sectors.” Dr. Al Ghazzawi said.</p>
			   
			   <p>Dr. Al Ghazzawi stressed the company’s management’s keenness to achieve a balance between return and risk in managing accounts, especially since what distinguishes Ebdaa Microfinance’s loans is that they are given to the client without any guarantees to help him launch and develop his own project, and within the company’s main vision on supporting Bahrainis with limited income within the framework of Bahrain Economic Vision 2030.</p>
			   
			   <p>Dr. Al Ghazzawi noted the countless efforts made by the cadres of Ebdaa Microfinance at its various levels and tasks within the strategy of the Board of Directors, to achieving the set goals and meeting the aspirations of customers, partners, and supporters, adding in this context that Ebdaa Microfinance Since its establishment in the Kingdom of Bahrain in 2009, has been able to grant more than 16,300 micro-loans to Bahraini entrepreneurs, amounting to a total of 19.4 million dinars, of which approximately 63% are directed to Bahraini women and men under the age of 45.<p>
			   
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>

<!-- News20 -->
<div class="modal fade" id="News20" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4> Training Ebdaa cadres for post- pandemic era: Dr. Khaled Al Ghazzawi </h4>
                <hr>
                  <div id="slides_News20" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News20" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News20" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_22.jpg" alt="First slide">
            </div>
            
        <a class="carousel-control-prev" href="#slides_News20" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News20" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <P>Dr. Khaled Al Ghazzawi, CEO of “Ebdaa Microfinance – Bahrain”, stated that the company has initiated an ambitious plan to train its cadres to help Bahraini customers owners of small and micro companies to recover their companies’ activities and market share, and to keep pace with the developments brought about by the pandemic.</p>
			   
			   <p>In a statement following a meeting with several of cadres of Ebdaa company Dr. Al Ghazzawi commented: “This training includes providing guidance and direction services in addition to a feasibility study for the Bahraini project owner wishing to obtain a financial loan from Ebdaa company, to help him sustain his project, accelerate its growth, and increase its competitiveness and profitability”<p>
			   
			   <p>The CEO of Ebdaa company commended the efforts exerted by the company cadres to meet the aspirations and directives of the board of directors, implement the work plan drawn up by the executive management, and achieve the results and goals set for the company’s work, foremost among which is helping Bahraini customers with low incomes, especially the women and youth segment, to launch special projects that contribute to providing them with a sustainable source of income, and support the national economy of the Kingdom of Bahrain.</p>
			   
			   <p>“It’s noteworthy to praise the exceptional initiatives of the bank’s cadres in facing the challenges imposed by the pandemic on the work environment, and the creative proposals put forward by a number of them to develop workplan in light of the pandemic and make it more flexible and effective for employees and customers” Dr. Al Ghazzawi added.</p>
			   
			   <p>During his speech to the bank’s cadres, Dr. Al Ghazzawi stated that Ebdaa Microfinance – Bahrain”, has set a clear path for career development and advancement to encouraging Bahraini cadres to advance and reach leadership positions in the company, with special attention to empowering Bahraini women working for the company.<p>
			   
			   <p>It is noteworthy that “Ebdaa Microfinance – Bahrain”, was established in the Kingdom of Bahrain in the year 2009 under the name “Al-Ebdaa Bank for Microfinance “, as the first bank specialized in microfinance, under the patronage of Her Royal Highness Princess Sabeeka bint Ibrahim Al Khalifa, wife of the King of Bahrain, President of The Supreme Council for Women, and the late Prince Talal bin Abdulaziz Al Saud, head of the Arab Gulf Program for United Nations Development “AGFUND”, to supporting low-incomers and promote their contribution to unleashing their creativity and achieving their ambitions by providing Micro loans with easy and manageable terms. “Ebdaa Microfinance – Bahrain”, provides financing in both its Islamic and traditional form.<p>
			   
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	
	
	<!-- News19 -->
<div class="modal fade" id="News19" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa microfinance boots its post-pandemic financing services </h4>
                <hr>
                  <div id="slides_News19" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News19" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News19" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_20.jpg" alt="First slide">
            </div>
            
        <a class="carousel-control-prev" href="#slides_News19" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News19" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <P>CEO of “Ebdaa Microfinance” Dr. Khaled Al Ghazzawi, stated that internal work system is under development to ensure providing financing services that keep pace with the emerging needs of Bahrainis micro-entrepreneurs and to avoid the negative repercussions of the COVID-19 pandemic on their projects, especially those related to the most affected sectors such as hospitality and transportation.</p>
			   
			   <p>Dr. Al Ghazzawi affirmed that “Ebdaa Microfinance” at the same time is working to complete the procedures for transferring its license from a “bank” to a “company”, in compliance with the instructions of the Central Bank of Bahrain, indicating that this transfer is just an internal legal procedure that will not affect the nature of work and the services provided.<p>
			   
			   <p>“Ebdaa Microfinance will work through its new name to boost its marketing identity and its presence in the field of providing easy financing without guarantees for Bahrainis who wish to develop their existing projects or launch new projects that contribute to diversifying sources of income and support economic growth in line with Bahrain Vision 2030.” Dr.  Al Ghazzawi said.</p>
			   
			   <p>“We trust that Bahrain will be one of the first countries around the world to reopen its economy again due to the rapid vaccination process. We believe that it is our duty to be ready to assume our national responsibility and play our role in contributing to the efforts of the esteemed government to restore the economic sector in Bahrain to the path of rapid growth. Our team will remain committed to the highest standards of quality in providing service, actively following up on clients’ financing needs and guiding them in the field of developing their projects.” Dr. Al Ghazzawi concluded.</p>
			   
			   <p>It’s noteworthy that “Ebdaa Microfinance” was established under the title of “Bank” in the Kingdom of Bahrain in 2009 as the first specialized entity for microfinance with a capital of five million dollars, under the generous patronage and blessing Her Royal Highness Princess Sabeeka bint Ibrahim Al-Khalifa, Wife of HM the King and the president of the Supreme Council for Women (SCW), and the late Royal Highness Prince Talal bin Abdulaziz – President of the Arab Gulf Program for Development (AGFUND). It focuses on supporting the realization of Bahrain’s economic vision for the year 2030 by helping low incomers to engage in new and innovative economic projects. Since its inception, the bank has succeeded to allocate more than 16300 micro-loans to Bahraini entrepreneurs, totalling nearly 19.4 million dinars, of which about 63% are directed to Bahraini women and men under the age of 45 years.<p>
			   
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	
	
<!-- News18 -->
<div class="modal fade" id="News18" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain hails Mona Almoayyed’s ranking on Forbes list</h4>
                <hr>
                  <div id="slides_News18" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News18" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News18" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/mona-khaled-nasser.jpg" alt="First slide">
            </div>
            
        <a class="carousel-control-prev" href="#slides_News18" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News18" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <P>Ebdaa Bahrain for Microfinancing - Bahrain, congratulated its Chairman, H.E. Mona Yousuf Khalil Almoayyed, on the occasion of ranking first place in Bahrain and ninth in the world in the Forbes list of the 100 most powerful businesswomen in the Middle East, thus maintaining a prominent place at the top of this list that includes businesswomen who headed a number of the largest and most influential companies in the Middle East.</p>
			   <p>Ebdaa Bahrain expressed its pride that its board of directors is headed by H.E. Mona Yousuf Khalil Almoayyed, who is considered as an exceptional leadership figure in Bahrain and the Middle East by prestigious global business magazines such as Forbes. The bank affirmed that Forbes granted her this rank according to in-depth research based on several criteria including the volume of business managed by female personalities, in addition to the achievements performed during the past year, the volume of initiatives, and the total work experience.<p>
			   <p>On such an occasion, Mr. Nasser Al-Qahtani, Vice-Chairman of the Bank and Executive Director of the Arab Gulf Program for Development (AGFUND), noted the continuous achievements of Mrs. Almoayyed over many years, marks an example for Bahraini and Gulf women who can excel and lead commercial and social enterprises to a broader horizon of growth and development.</p>
			   <p>“Mrs. Almoayyed combines in her personality a prominent distinction in managing commercial work on the one hand and charitable social work on the other hand through many initiatives that she implements to serve the community, which makes her a real added value for the AGFUND program, which is concerned with providing affordable financial funds to help low-incomers to launch micro-projects that contribute to raising national development rates” Al-Qahtani added.</p>
			   <p>Al-Qahtani stressed that the successful leadership of Mrs. Almoayyed of Ebdaa Bahrain confirms the correctness of the AGFUND program’s approach towards integrating more women into the microfinance industry at different professional and administrative levels through the nine banks managed by the program in the Arab region and Africa, especially as women represent a significant segment who benefits from the services of those banks.<p>
			   <p>For his part, CEO of Ebdaa Bahrain, Dr. Khaled Al-Ghazzawi said, " Mrs. Almoayyed continues to top the Forbes list of the most powerful businesswomen in the Middle East, and this is a source of pride for us, and an outstanding incentive to continue our enthusiastic work on implementing the bank’s board strategy, facing challenges and developing performance."<p>
			   <p>Dr. Al-Ghazzawi emphasized that the presence of Mrs. Almoayyed at the head of the bank’s board and her sound guidance is one of the most essential factors of Ebdaa Bahrain success in overcoming difficulties and challenges. “There is no doubt that the good reputation and prestigious position that Mrs. Almoayyed enjoys in all circles boosts the strength and presence of the bank in the Kingdom of Bahrain and its contribution to achieving the 2030 Economic Vision.” Dr. Al-Ghazzawi concluded.<p>
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
<!-- News17 -->
<div class="modal fade" id="News17" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Financial Results 2018 for Ebdaa Bahrain</h4>
                <hr>
                  <div id="slides_News17" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News17" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News17" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_17.jpg" alt="First slide">
            </div>
            
        <a class="carousel-control-prev" href="#slides_News17" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News17" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <p>Ebdaa Bahrain reported net profits exceeding BD 306,000 for the financial year ended December 31, 2018, compared to a profit of BD 94,000 in 2017. The increase in net profits is reported to be due to the increase in the volume of operations apart from the number and value of disbursed loans. Operating as a social business,Ebdaa Bahrain confirmed that profits will be re-injected into the bank’s capital to increase the number and value of low-income loans, helping more Bahrainis to start and/or improve their micro and small businesses and serving the national economy in accordance with the Bahrain 2030 Vision.</p>
			   <p>In its statement on the performance of 2018, Ebdaa Bahrain reported that its assets increased by over 24% from around BD 2.45 million in 2017 to over BD 3.05 million at the end of 2018. The net loan portfolio increased from BD 1.6 million in 2017 to approximately BD 2.1 million in 2018, an increase of 31%. While the bank’s operational income increased by 40% in 2018, the Bank managed to control its operating expenses, which only increased by 10.7% in 2018, compared to 2017.</p>
			   <p>Ebdaa Bahrain successfully recovered nearly BD 64,000 from the provision for doubtful debts, as a result of increased efforts in the collection of outstanding loans and arrears from previous years.</p>
			   <p>Chairwoman of the Board of Directors of Ebdaa Bahrain, Mrs. Mona Yousef Al Moayyed, expressed her satisfaction with the continued development of the Bank’s operations and commitment to serve low-income Bahraini clients.“Enhancing the bank’s ability to lend is very important, at this time, as it contributes to national efforts to encourage retirees of the voluntary retirement program to launch their own businesses,” said Ms. Al Moayyed.</p>
			   <p>“It further encourages micro, small and medium enterprises to generate more jobs in response to the requirements of the National Employment Program,” she added.</p>
			   <p>Mrs. Al Moayyed expressed her appreciation for Bahrain’s leadership in its efforts to serve low-income clients. “The shareholders and board of directors would like to express our gratitude to the Bahraini businessmen and businesswomen who have provided the bank with interest-free financing this year,” she said.</p>
			   <p>In her statement, Mrs. Al Moayyed appreciated the CBB’s support of the microfinance industry in the Kingdom of Bahrain and its recent decision to reduce the minimum capital of microfinance banks from BD 5 million to BD 2 million, thereby expanding the microfinance base, from BD 5000 to BD 7000. “The Tamkeen Labor Fund has also contributed to our success and has provided continuedsupport to Ebdaa Bahrain programs, performance and staff, particularly in the areas of technical development, training and payment support,” she stated.</p>
			   <p>“We look forward to working with Tamkeen this year on initiatives related to expanding the base of female borrowers, by providing the loan portfolio with a capital grant of BD 500,000, and launching the first phase of the Youth Support Program with a similar amount,” she revealed.</p>
			   <p>Chief Executive Officer of Ebdaa Bahrain, Dr. Khalid Al-Gazawi stated that the fruitful results achieved over past four years by Ebdaa Bahrain are mainly due to the implementation of AGFUND methodologies and standards in the field of microfinance. “Ebdaa Bahrain has become an example in the success of microfinance institutions in Bahrain and the rest of the region,” said Dr. Al- Ghazzawi.</p>
			   <p>“We would also like to recognize the efforts of and thank our staff at different locations for their outstanding efforts in developing the Bank’s performance,” he added.</p>
			   <p>Ebdaa Bahrain was able to disburse over 2,600 loans to its new and repeat customers, amounting to over BD 2.6 million, in 2018. “The bank’s plan for the next five years focuses on serving 10,000 borrowers including existing and new customers with loans worth over BD 10 million,” he stated.</p>
			   <p>“The plan also includes the opening of branches in Muharraq, Saar and Sitra,” he added.
                 Dr. Al-Gazawi thanked the shareholders and all partners for their cooperation with Ebdaa Bahrain. “The Arab Gulf Development Program also plays a tremendous role in supporting the bank through the AGFUND model in financial management, which led to the Bank’s success in overcoming challenges faced since its establishment. We are highly pleased with this advanced stage of success,” he concluded.</p>
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
<!-- News16 -->
<div class="modal fade" id="News16" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ar-txt">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain plans to adopt technology solutions: CEO</h4>
                <hr>
                  <div id="slides_News16" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News16" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News16" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_16.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_16.1.jpg" alt="Second slide">
          </div>
        <a class="carousel-control-prev" href="#slides_News16" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News16" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
			   <p>Ebdaa Bahrain, a micro-financing bank in the Kingdom, has announced plans to implement innovative technology solutions, within the bank, in a bid to benefit from Bahrain’s position as a regional center for financial technology. The bank also said it is currently looking forward to cooperating with a commercial bank to issue credit cards to disburse loans and for client loan payments, after obtaining the approval of the Central Bank of Bahrain.</p>
			   <p>Dr. Khaled Waleed Al-Ghazzawi, CEO of Ebdaa Microfinance – Bahrain said that the bank has entered into talks with financial companies on the provision of soft loans to new segments of beneficiaries, including low-income workers who want to start micro-enterprises. Speaking at the third edition of the Arab Banks Union conference, held in Jordan, Dr. Al-Ghazzawi provided an overview of Bahrain’s experience in the application of modern financial technology in the banking sector.</p>
			   <p>“Ebdaa Bahrain seeks to benefit from Bahrain’s position as a regional center for financial technology through the application of innovative technology solutions at the bank,” he said. “This will further enable us to provide financial services to our customers in a manner that ensures the highest degree of ease, transparency, and effectiveness,” he added.</p>
			   </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
<!-- News15 -->
<div class="modal fade " id="News15" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain offers vacancies  </h4>
                <hr>
                  <div id="slides_News15" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_vacancies.jpg" alt="First slide">
            </div>
          
          
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >

                <p>Manama, Feb. 24 (BNA): Ebdaa for Microfinance in Bahrain has participated in the Pre-Work Education and Training Expo, which was held under the patronage of Labour and Social Development Minister Jameel bin Mohammed Ali Humaidan.</p>
				<p>About 60 public and private sectors establishments working in the field of education, training and employment participated in the event. </p>
				<p>Chief Executive Officer of Ebdaa Bahrain, Dr.Khalid Al Ghazzawi,stated that Ebdaa Bahrain offered a number of vacant positions in various departments and fields, during the exhibition. "We received several applications for employment, during the exhibition, which we are reviewing," he said.</p>
				<p>"In addition, we are currently interviewing the applicants for inclusion in the training courses offered by the bank, so they have the opportunity to be potential employees," he added.</p>
				<p>He stressed Ebdaa Bahrain interest in participating in such exhibitions and events in order to attract young Bahraini talent, while providing them with training opportunities and quality employment. "This is in line with Ebdaa Bahrain keen interest in raising the percentage of Bahrainis in all our departments, which has currently reached over 80%," he stated.</p>
				<p>The bank’s participation in the event comes within the framework of its contribution to programs and activities aimed at supporting Bahraini youth in various fields including the training and employment sector. "This raises the efficiency and capabilities of the national human resources, in line with Bahrain Economic Vision 2030. It supports our mission of providing advanced financing packages for low-income Bahrainis to help them launch micro-projects, which provides them with a decent livelihood," he explained.</p>
				<p>Al Ghazzawi highlighted the importance of the Bahrain Training and Education Exhibition in relation to students expected to graduate from secondary school and university.</p>
				<p>"Such events showcase educational, training and employment opportunities which are available to these students. It is important given the nature of the requirements of the labor market, apart from the scientific and functional skills required by each profession in different sectors," he concluded.</p>
			
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
<!-- News14 -->
<div class="modal fade " id="News14" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>BDB CE joins Ebdaa Bahrain director board</h4>
                <hr>
                  <div id="slides_News14" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_Sanjev.jpg" alt="First slide">
            </div>
          
          
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >

                <p>Ebdaa Bahrain for micro-financing said the Chief Executive of Bahrain Development Bank (BDB) has become a member of the Ebdaa Bahrain board of directors. BDB Chief Executive, Sanjeev Paul, is the successor of Dalal Ismail, who was a BDB representative in the board for over five years. </p>
				<p>Ebdaa Bahrain Chairwoman, Mona Yousif Almoayyed, welcomed Paul, who has over 30 years of experience in the banking sector. “The membership will contribute to enhancing co-operation between the banks, both of which work to provide affordable loans for start-up projects and to support the national economy,” said Almoayyed. </p>
				<p>Paul’s presence in the board will allow him the opportunity of being closely introduced to the best practices in micro-financing while associating them with the 17 sustainable development goals that are adopted by the Arab Gulf Programme for Development (AGFUND) through its banks existing in nine Arab and African countries.</p>
				<p>“It will also help him adopt concepts of development in banking during his service as BDB chief executive,” she said. Almoayyed said Ebdaa Bahrain is keen to coordinate with BDB through Paul. “This is especially to transfer Ebdaa Bahrain clients who expand their projects, and require loans that are higher than the bank loans’ ceiling of BD5000, to BDB,” she stated.</p>
			
				
                
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
<!-- News12 -->
<div class="modal fade " id="News12" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Representatives of 10 Arab MFIs Take Part in a Workshop in Bahrain</h4>
                <hr>
                  <div id="slides_News12" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_12.jpg" alt="First slide">
            </div>
          
          
        </div>
        
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >

                <p>Bahrain hosted a workshop, organized by the Arab Gulf Programme for Development-AGFUND, in the presence of 20 officials representing 10 Arab microfinance institutions representing the branches of AGFUND in Lebanon, Mauritania, Sudan, Syria and Bahrain, as well as officials representing Microfinance institutions from Jordan and Iraq.</p>
				<p>The 11-day workshop, facilitated by Dr. Khalid Al Ghazzawi,CEO of Ebdaa Bahrain. The workshop aimed to help microfinance in the Arab region prepare financial and operational management plans for five years, how to strategically plan for MFIs, transform the strategy into operational plans that include measurable numbers, auditing, evaluation and performance correction, and finding on the necessary funding sources and conditions.</p>
				<p>The workshop reviewed the methods of advanced financial analysis, including effective measurement of the loan portfolio and financial performance, and finally how to price the loan products in a way that the institution achieves the required sustainability.</p>
				<p>During the workshop, participants practiced to develop and update their organizations’ strategy, vision, values and mission, developing operational plans based on new data, identifying strengths and weakness of their organizations and designing new products that meets borrower’s needs.</p>
				<p>This workshop comes within the framework of the AGFUND's keenness to strengthen the microfinance industry in the Arab region within its branches and various MFIs, building capacities in this vital field, keeping abreast of national plans to support a wider segment of low-income people, encouraging the emerging SMEs and supporting the national economy.</p>
				<p>Bahrain, was selected by AGFUNF to host this workshop for its developed and diversified banking sector to encourage new ideas and new developments in this industry and develop its necessary legislation, led by the Central Bank of Bahrain.</p>
				
                
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>

<!-- News0 -->
<div class="modal fade " id="News0" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>UN office sign statement with Ebdaa Bahrain</h4>
                <hr>
                  <div id="slides_News0" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News0" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News0" data-slide-to="1"></li>
          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_0.jpg" alt="First slide">
            </div>
          <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_0.1.jpg" alt="Second slide">
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#slides_News0" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News0" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >

                <p>Manama, Sept. 24(BNA): A statement of intent was signed between Ebdaa for Microfinance and the United Nations office of the Kingdom to work jointly on areas of mutual interest, especially the promotion of the Sustainable Development Goals (SDGs) and the 2030 Agenda for Sustainable Development. The UN office will work with other UN agencies, programmes, and specially UNDP to provide technical support in integrating the SDGs into the bank’s future strategic plans.</p>
				<p>The UN office will provide the necessary knowledge and expertise in this area and will organize a number of workshops by international experts to align the bank’s strategy and services with the SDGs. On the other hand, the bank is looking forward to present this experience in the Kingdom in aligning the strategy and activities with the SDGs during the AGFUND Development Forum and the AGFUND International Award, scheduled for mid-October in Geneva, Switzerland.</p>
				<p>The signing ceremony was held at United Nations House in the presence of Dr. Khaled Al-Ghazawi, Chief Executive of Ebdaa Bahrain, and Amin Al-Sharkawi, United Nations Resident Coordinator and United Nations Development Programme Resident Representative, in addition to officials from both sides.</p>
				<p>Dr. Al-Ghazzawi expressed his contentment in working with the UN Office in Bahrain, which has an extensive experience in the fields of sustainable development. He explained that the statement of intent reflects the direction of the bank with its founding body, the Arab Gulf Development Program (AGFUND), which linked all its strategic objectives and various programs in development, microfinance, child support, women and education towards the sustainable development goals.</p>
				<p>He added: “This statement of intent comes as part of the bank’s efforts to develop its new strategy, which is based on two main pillars: first, the strategy adopted by AGFUND under the guidance and blessing of His Royal Highness Prince Talal bin Abdulaziz Al Saud, and second is the action plan adopted by Government of the Kingdom of Bahrain in achieving the SDGs”.</p>
				
                
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>


<!-- News1 -->
<div class="modal fade " id="News1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Algosaibi Holding Group Sign Grant Agreement in support of Ebdaa Bahrain</h4>
                <hr>
                  <div id="slides_News1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News1" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News1" data-slide-to="1"></li>
          <li data-target="#slides_News1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_1.jpg" alt="First slide">
            </div>
          <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_1.1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_1.2.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slides_News1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >

                <p>Algosaibi Holding Group has signed a grant agreement with Ebdaa Bahrain, as a nonprofit social financing, that seek to help low-income Bahraini make their way to business.</p>
                <p>This grant of BD100, 000 will help enhancing bank’s financial solvency and to increase its ability to expand borrowers list which currently includes more than 2,500 borrowers.</p>
                <p>The agreement was signed by Dr Khalid Al Ghazawi, CEO of Ebdaa Bahrain, and Mr Fawaz Algosaibi, CEO of Algosaibi Holding, at the  headquarter of Ebdaa Bahrain in Sanabis.</p>
                <p>“We grant five types of loans without guarantees to low-income Bahrainis in Ebdaa Bahrain, including Sayidati loan to finance projects run by housewives, in addition to other financing products that suits each borrowers’ project,”. Dr Al Ghazawi said.</p>
                <p>“The total amount of one loan varies between five hundred and one thousand dinars, while the average of per loan is only 893 dinars. This support from Algosaibi Group can greatly improve our business, especially as we monitor high rates of sustainability and expansion of borrowed projects”. He added.</p>
                <p>CEO of Ebdaa Bahrain welcomed Algosaibi Holding group as a new supporter to bank’s supporters group which including Ms Mona Almoayyed, Mr Khalid Kanoo, Mr Abdulhameed Dwani, AGFUND, Eskan Bank and Bahrain Development Bank. He praised Algosaibi Holding Group as one of the leading Bahraini institutions in the field of promoting the national economy and supporting the Bahraini society.</p>
                <p>Mr. Fawaz Algosaibi, CEO of Algosaibi Holding Group, said “This support is a part group’s social responsibility towards Bahraini community, providing support to the the low income population and encouraging them to venture their business would contribute to provide job vacancies, reduce import invoices and support the national economy to achieve Bahrain 2030 vision.”</p>
                <p>Mr. Algosaibi praised the efforts made by Ebdaa Bahrain to provide easy financing for low-incomers and prudent management practices implemented by the Bank, which contributed to its financial stability and the constant expansion of borrowers. </p>
                <p>Expressing his full confidence in the ability of the bank to manage the amount of support and maximize the benefit from it.</p>

              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
<!-- News2 -->
<div class="modal fade " id="News2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain Launches New Products</h4>
                <hr>
                  <div id="slides_News2" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_2.jpg" alt="First slide">
            </div>


        </div>

      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Ebdaa for Microfinance, has launched two new loans “Al Najah” and “Altafawq”, offering more financial unguaranteed loans for Bahraini low-incomers.</p>
                 <p>The aim of the loans is to encourage low-incomers to venture their business to make the lives of the Bank’s customers better and improve the society.</p>
                 <p>“We are branding Ebdaa Bahrain as an integral part of the lives of our customers. By launching “Alnajah” and “Altafawq” loans we are expanding our borrowers list which currently has 2,500. The amount of loans between BD200 to 5000, while the average single loan outstanding amount is BD 89,” Said Dr Khalid Al Ghazawi, the CEO of Ebdaa Bahrain.</p>
                 <p>Dr. Al Ghazawi added: “We want to assure our objectives of contributing to the national economy development as per to the Bahrain National Economy Vision 2030 through expanding the middle class in Bahrain, improving life standards of the targeted group by investing in micro enterprises and promoting entrepreneurial spirit and a culture of self-reliance.”</p>
                 <p>“We at Ebdaa Bahrain are part of the economic system in the Kingdom of Bahrain. We must keep pace with the development of this system and be pioneers in our business of providing unguaranteed microcredit to support economic growth."</p>
                 <p>The “Al Najah” loan was designed for home entrepreneurs of both men and women to develop their projects into licensed businesses. This loan provides various amounts of financing to meet the needs of different clients starting from BD600 to BD1400 paid within 18 months.</p>
                 <p>“Tamaiuz” loan is more flexible in terms of repayment. It is targeting licensed commercial enterprises of both men and women. It is granted to roving entrepreneurs like delivery buses or taxis. It enables customers to repay their loan within 24 months.</p>
                 <p>With these two loans, Ebdaa Bahrain raises the number of loans it provides to seven, namely, “Sayidati” loan for housewives homemade projects, “Ebaa” loan to support men's home projects, “Al Amal” loan for commercial industrial or service entrepreneurs, “Tamaiuz” loan for CR projects and “Al Mawsimi” loan that is granted for domestic or commercial projects licensed by a commercial or non-licensed register, during holidays, the holy month of Ramadan and Back-to-schools season.</p>

               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<!-- News3 -->
<div class="modal fade " id="News3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain to Reopen Hamad Town Branch</h4>
                <hr>
          <div id="slides_News3" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News3" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News3" data-slide-to="1"></li>
          </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_3.jpg" alt="First slide">
            </div>
			<div class="carousel-item ">
            <img class="d-block w-75" src="assets/img/news/news_3.1.jpg" alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#slides_News3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Ebdaa Bahrain for Microfinance will reopen its branch in Hamad Town after a comprehensive maintenance and development process, ensuring to improve convenience for existing customers of the bank and allow for serving additional residents seeking doing business with a local, community bank.</p>
                 <p>The development process included improvements to the building structure, re-furnishing, advanced lighting system, internal and external internet networks, with a special attention to the electronic system for customers and waiting areas.</p>
                 <p>“Decision to open a branch location in Hamad Town will improve convenience for existing customers of the bank and allow for serving 2000 residents at Hamad Town and the nearby villages” said Ebdaa Bahrain CEO Dr Khalid Waleed Al Ghazawi</p>
                 <p>“We are excited about becoming more involved in Hamad Town community and surrounding villages. What’s more, we understand that having involvement in the community means more than just presenting checks. We actively seek out opportunities and look forward to rolling up our sleeves in and around Hamad Town.”  </p>
                 <p>Ebdaa Bahrain is planning to establish more branches in Bahrain’s governorates, with the aim of expanding the bank's clientele and staying close to them, allowing Ebdaa Bahrain to study the requirements of a greater number of microcredit needs in different regions.</p>
                 <p>Ebdaa Bahrain for Microfinance opened its doors to customers in 2009, currently serving them through three main offices; its headquarters at Sanabis, Riyadat Mall branch at A’ali and Hamad Town branch. </p>
                 <p>The bank plans to establish two more branches in Muharraq and Sitra as part of an ambitious plan to expand its branches in the Kingdom to five fully integrated branches.</p>
               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<!-- News4 -->
<div class="modal fade " id="News4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain celebrated staff honouring</h4>
                <hr>
                  <div id="slides_News4" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News4" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News4" data-slide-to="1"></li>
          <li data-target="#slides_News4" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_4.1.jpg" alt="First slide">
            </div>
			<div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_4.2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_4.3.jpg" alt="Third slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#slides_News4" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News4" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Ebdaa Bahrain for Microfinance celebrated its staff in a special meeting. Attended the ceremony, Ebdaa CEO Dr Khalid Al Ghazawi and staff from all bank’s departments. The meeting included entertainment activities organised by bank’s employees in a family atmosphere that stimulates the continuation of productivity and giving.</p>

               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
		<!-- News5 -->
<div class="modal fade " id="News5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain Attends “Middle East Investment Conference” in Cairo</h4>
                <hr>
                  <div id="slides_News5" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News5" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News5" data-slide-to="1"></li>
          <li data-target="#slides_News5" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_5.1.JPG" alt="First slide">
            </div>
			<div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_5.2.JPG" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_5.3.JPG" alt="Third slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#slides_News5" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News5" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Dr. Khalid Waleed Al Ghazawi, CEO of Ebdaa Bahrain, partook in “Middle East Investment Conference” in Cairo, Egypt where international thought leaders, policymakers and key market participants are gathered to discuss trends shaping the Middle East and North Africa region, as well as its role in the global economy.</p>
                 <p>Dr. Khalid Waleed Al Ghazawi, CEO of Ebdaa Bahrain, called for greater integration of microfinance industry in the Arab world and to enhance its development which provides funding and training for SMEs in the region, especially in countries such as Egypt, Sudan, Mauritania and Jordan.</p>
                 <p>During a session in “Middle East Investment Conference 2018” hosted by CFA Society Egypt, Dr. Khalid stressed that greater attention is paid by governments and decision makers to microenterprises which contribute significantly to self-sufficiency in goods and services.</p>
                 <p>“Without underestimating the importance of attracting large foreign investment, we should also be mindful of stimulating and encouraging what can be called local small investors through the provision of affordable financing and training opportunities.” Said Dr. Khalid</p>
                 <p>Dr. Al-Ghazawi reviewed aspects of the Kingdom's advanced experience in supporting SMEs through enabling environment for innovation and entrepreneurship by institutions such as the Economic Development Board, Tamkeen, the Bahrain Development Bank, the Supreme Council for Women and others.</p>
                 <p>“SMEs make up more than 80% of private enterprises in most countries of the region, but do not contribute more than 40% of GDP, so we are constantly challenging how to finance and develop these institutions and increase their activities and competitiveness.” Said Dr. Khalid</p>
                 <p>Dr. Al Ghazawi, with more than 20 years of experience in microfinance around the world, pointed out the difference between sustainable microfinance provided by financial institutions operating according to clear administrative standards and donations provided by charities, stressing the confusion of the two concepts continued to affect development efforts.</p>
                 <p>“Although the capital of the SMEs is mainly from donors, our work requires lending to those in need and ensuring the success of their projects and retrieving the loan to grant it to another needy person. This is, of course, different from grants, zakat or charitable giving.” Said CEO of Ebdaa Bahrain Dr. Al Ghazawi</p>
                 <p>On a related level, Dr. Al Ghazawi stressed the importance of SMEs to ensure their sustainability and cope with advanced banking methods in legislation and risk management such as Blockchain and Fentech and others, in addition to innovating in providing loans and be their partners in their success through consultations and support in commensurate with the nature of business in Arab countries.</p>
                 <p>He considered that SMEs’ success shouldn’t be measured through the number of loans or beneficiaries, however in loans returns and profit and in measuring the number of projects that have already been able to grow bigger without external support.  </p>
                 <p>This success will contribute to the expansion of financial services to micro-enterprises; reduce the funding gap in this sector, encourage the establishment and licensing of microfinance companies and the availability of funding resources.</p>

               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<!-- News6 -->
<div class="modal fade " id="News6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain is an exclusive sponsor of the "N3een N3awen” campaign </h4>
                <hr>
                   <div id="slides_News5" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_6.jpg" alt="First slide">
            </div>

        </div>

      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Ebdaa Bahrain announced its exclusive sponsorship of the campaign “N3een N3awen” –a social marketing campaign by Public Relations Majors-initiated by a number of students of University of Bahrain (UOB) under the auspices of the president of UOB Dr. Riyadh Hamza. </p>
                 <p>“N3een N3awen” aims to encourage individuals to positively contribute and actively participate to activate the principle of social solidarity among students of UOB.</p>
                 <p>Dr. Khalid Waleed Al Ghazawi, CEO of Ebdaa Bahrain, stressed the bank’s keenness to fulfill its social responsibility towards Bahraini society through encouraging volunteerism and increase community partnership and solidarity among all members of society.</p>
                 <p>CEO of Ebdaa Bahrain praised such voluntary initiatives of Bahraini youth, which reflect their keenness to develop their society, adopt positive attitudes and develop their lifestyles in a modern manner without abandoning their traditions and values.</p>
                 <p>He pointed out that the Bank is keen to communicate effectively with society, especially undergraduates who are ready towards employability and to venture their ideas into existing projects, stressing that bank is always there to serve and support them through providing easy financing, Micro-development as well as qualitative guidance to ensure the success and development of microenterprises.</p>

              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>

	<!-- News7 -->
<div class="modal fade " id="News7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain Links its New Strategic Plan to SDGs </h4>
                <hr>
                   <div id="slides_News7" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_7.jpg" alt="First slide">
            </div>

        </div>

      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Dr. Khalid Al Ghazawi, CEO of Ebdaa Bahrain - Bahrain said that the bank is currently fully reviewing its new strategy to meet the Sustainable Development Goals (SDGs) to support services of Bahrain’s society and economy.</p>
                 <p>Dr Al Ghazawi assured that the new strategy is based largely on two axes: AGFUND’s adopted strategy under the guidance and blessing of His Highness Prince Talal Bin Abdul Aziz Al Saud and the national plan to achieve SDGs adopted by the Kingdom of Bahrain.</p>
                 <p>“Despite the narrow legislative framework through which Ebdaa Bahrain operates, the bank will seek to develop and adjust its strategy in lending products, loan procedures and policies, customer selection, and marketing campaign through social media to achieve the 17 SDGs 2030 approved by the United Nations and adopted by the Kingdom of Bahrain.” Said Dr Al Ghazawi</p>
                 <p>“Ebdaa Bahrain is achieving a number of SDGs even before this comprehensive review, the bank backs the neediest in Bahrain through providing loans without guarantees and guidance services towards achieving the 17 SDGs. Our commitment to achieve these goals is a voluntary commitment stemming from a high sense of responsibility to be an active part of the national, regional and global efforts.”  Said Dr Al Ghazawi</p>
                 <p>He added: “Since the bank’s establishment, it has been providing loans to more than nine thousand borrowers and currently serves more than 2300 borrowers, meaning we contribute to the establishment of a large number of micro enterprises in the Kingdom of Bahrain. We are working to achieve development conducive to a comprehensive, environment-friendly economic prosperity, ensuring peace and prosperity, and making science, technology and innovation available to all in order to achieve development with a human dimension.”</p>
                 <p>Dr Al Ghazawi stressed that achieving the fifth goal of the SDGs aimed at “Gender Equality” is reflected in the prudent practices of the bank internally through non-discrimination between employees of both sexes in employment, salaries, allowances, and promotions. It is also evident in the non-discrimination among borrowers on the basis of sex, religion, color, or race.</p>
                 <p>CEO of Ebdaa Bahrain highlighted the eighth goal “Decent Work and Economic Growth”, stressing the keenness of the bank to provide conducive environment to suit employees competencies and aspiration. It also contributes in national economy development through granting loans to microenterprises.</p>
                 <p>Dr Al Ghazawi affirmed his keenness to consult with all civil society actors, the private sector and local authorities in order to ensure the achievement of sustainable development goals as effectively as possible.</p>
               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>

<!-- News8 -->
<div class="modal fade " id="News8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Dr. Al Ghazawi Sees the Positive Impact of Microfinance in Iraq</h4>
                <hr>
                  <div id="slides_News8" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News8" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News8" data-slide-to="1"></li>
          <li data-target="#slides_News8" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_8.1.JPG" alt="First slide">
            </div>
			<div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_8.2.JPG" alt="Second slide">
          </div>


        </div>
        <a class="carousel-control-prev" href="#slides_News8" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News8" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Dr. Khalid Waleed Al Ghazawi, CEO of Ebdaa Bahrain, talks to the chairman of Iraq Private Banks League Mr. Waleed Al Handal about Bahrain’s experience in Microfinance represented by Ebdaa Bahrain.</p>
                 <p>A meeting was held at the headquarters of Ebdaa Bahrain, during which Dr Al Ghazawi discussed Bank’s experience over the past nine years and its success during the last three years which allow the bank to provide a working guide in MFIs. </p>
                 <p>CEO of Ebdaa Bahrain stressed the keenness of the bank to provide the needed experiences and consultations to back MFIs in Iraq, where its need to overcome economic difficulties and increase their contribution to provide loans for citizens.</p>
                 <p>He pointed that launching more MFIs in Iraq aims to provide citizens with loans and consultations to use their loans to venture and develop their enterprises to SMEs thus to prevent poverty issues in Iraq.</p>
                 <p>For his part, Mr. Waleed Al Handal stressed the keenness of IPBL to hold meetings and seminars with financial institutions and stakeholders interested in Microfinance at the aim of introducing them to Bahrain’s experience in Microfinance, due to the decreased number of MFIs in Iraq, increased demand for loans provided by MFIs and the urgent need to develop and ensure their sustainable work.</p>
                 <p>Chairman of Iraq Private Banks League stressed the importance of sharing MFIs experience due to its benefit for the whole banking sector in Iraq. It is to encourage low-incomers to venture their projects at time where Iraq is witnessing decrease of official financial accounts owners. </p>
                 <p>IPBL delegation visited Ebdaa Bahrain branches to be introduced to its experience with loaners’ projects.</p>
               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
	<!-- News9 -->
<div class="modal fade " id="News9" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain Nod to Adopt Microfinance in Gulf Charities</h4>
                <hr>
                  <div id="slides_News9" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides_News9" data-slide-to="0" class="active"></li>
          <li data-target="#slides_News9" data-slide-to="1"></li>
          <li data-target="#slides_News9" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_9.1.JPG" alt="First slide">
            </div>
			<div class="carousel-item">
            <img class="d-block w-75" src="assets/img/news/news_9.2.JPG" alt="Second slide">
          </div>


        </div>
        <a class="carousel-control-prev" href="#slides_News9" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#slides_News9" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Ebdaa Bahrain has agreed with a proposal to microfinance project adopted by charities due to its sustainability to develop their financial resources thus to achieve their objectives to support low-income families. At a time that donations are very less compared to the people needs.</p>
                 <p>CEO of Ebdaa Bahrain Dr Waleed Al Ghazawi welcomed Almajdouie Group, stressing the need of GCC to adopt microfinance due to its benefit for charity donations.</p>
                 <p>This concept would help more citizens to launch their business venture through which national private sector can provide local market needs of services and products and would provide job vacancies. </p>
                 <p>Dr Al Ghazawi stressed the keenness of Ebdaa Bahrain to provide institutions and charities with necessary expertise which would develop their business. The success of Microfinance experience is considered a leading model for charity institutions to develop their business to advanced levels. </p>
                 <p>CEO of Ebdaa Bahrain said, “Microfinance policy is based on a simple concept referred to a proverb that says “do not feed a fish to hungry, he would ask for more however teach him how to be fisher.” Microfinance is based on exploring actual needs of people to launch their own business through giving advice, consultation, training and follow-up until he can take charge of his project himself.”</p>
                 <p>Almajdouie Group visits Bahrain to share ideas and experience through which it would develop their sustainable charity projects. Addressing poverty through Microfinance would support the new project of Almajdouie Group “Basta”, where six booths were launched in KSA distributed in Dammam and Al Khobar.</p>
                 <p>This project aims to support Kiosks to develop their projects. It is applied in many developing countries and has had a major impact on addressing poverty. </p>
               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
		<!-- News10 -->
<div class="modal fade " id="News10" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Ebdaa Bahrain celebrates Employee Appreciation</h4>
                <hr>
                   <div id="slides_News10" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-75" src="assets/img/news/news_10.1.jpg" alt="First slide">
            </div>
        </div>
      </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12">

               <div class="box_shadow" >
                 <p>Dr Khalid Waleed Al Ghazawi, CEO of Ebdaa Bahrain, honored a number of employees who were distinguished for their outstanding performance in recent years as a part of Bank’s staff motivation program to encourage them for an enhanced performance and productivity.</p>
                 <p>Mrs. Maryam Hassan Sultan from Hamad Town branch and Ali Al Kamil from Riyadat Mall were awarded for achieving the highest productivity whilst the most productive branch award was honored to the Banks’ branch staff at Riyadat.  </p>
                 <p>During the ceremony, Dr Khalid Al Ghazawi praised the outstanding role played by the Bank’s creative staff to achieve the best results at all levels. He stressed the efficiency of operations and resources managements at a time where worldwide banks recording general revenue declines and raised operating expenses. </p>
                 <p>He pointed that this celebration is to thank Ebdaa Bahrain staff for their distinguished productivity due to achieve further upgraded work relying on Bank’s human capital.</p>

               </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
           </div>
        </div>
      </div>
    </div>
    <!-- Contact Us Section Start -->
    <section id="contact" class="section" style="background-image: linear-gradient(#b1e9da, #ffffff);">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">CONTACT US</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"> If you have any inquiries or complaints related to the services of Ebdaa Bahrain, please contact us using the form below. <br>Your opinion is important to us and your satisfaction is our goal. </p>
        </div>

        <div class="contact-form" id="contactUs">
          <div class="container">
            <div class="row ">
              <div class="col-lg-6 col-sm-12 col-xs-12" style="padding:0 !important">
                  <div id="contact-address">
				  <div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-bottom: 2px solid #61D2B4;">
                      <p style="text-align:left" > <b>Head Office</b></p>
                      <hr>
                      <ul style="text-align:left ;padding-bottom:30.7px;">
                       <li> <a style=" padding: 7px 0px; color: #999; text-transform: capitalize;" href="tel:+97317381000"><span class="fa fa-phone " style="padding-right:5px;"></span>+973 17 381000</a></li>
                       <li> <a class="btn-rm" href="mailto:info@ebdaabahrain.com" > <span class="fa fa-envelope " style="padding-right:5px;" ></span>info@ebdaabahrain.com </a></li>
                       <li> <a  class="btn-rm"href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-right:5px;"></i>Manama - Bahrain</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-bottom: 2px solid #61D2B4 ; border-right: 2px solid #61D2B4" >
                      <p style="text-align:left"> <b>Manama Branch</b> </p>
                      <hr >
                      <ul style="text-align:left; padding-bottom:10px">
                        <li><a style="padding: 7px 0px; color: #999; text-transform: capitalize;" href="tel:+97317381003"><span class="fa fa-phone " style="padding-right:5px;"></span>+973 17 381003 </a></li>
                        <li><a class="btn-rm" href="mailto:almanama@ebdaabahrain.com" > <span class="fa fa-envelope " style="padding-right:4px;" ></span>almanama@ebdaabahrain.com </a></li>
                        <li><a class="btn-rm"href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-right:5px;"></i>Manama - Bahrain</a></li>
                      </ul>
                    </div>
					<div class="col-lg-6 col-sm-6 col-xs-12 contactBox">
                      <p style="text-align:left;"> <b>Saar Branch</b> </p>
                      <hr >
                      <ul style="text-align:left ;padding-bottom:10px;">
                        <li> <a style=" padding: 7px 0px; color: #999; text-transform: capitalize;" href="tel:+97317381013"><span class="fa fa-phone " style="padding-right:5px;"></span>+973 17 381012</a></li>
                        <li><a class="btn-rm" href="mailto:Saar@ebdaabahrain.com" > <span class="fa fa-envelope " style="padding-right:5px;" ></span>Saar@ebdaabahrain.com </a></li>
                        <li>  <a  class="btn-rm"href="https://goo.gl/maps/azWzNzyXwCNmLyEv7" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-right:5px;"></i>Saar - Bahrain</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-right: 2px solid #61D2B4">
                      <p style="text-align:left;"> <b>Aali Branch</b> </p>
                      <hr>
                      <ul style="text-align:left ;padding-bottom:10px;">
                        <li> <a style=" padding: 7px 0px; color: #999; text-transform: capitalize;" href="tel:+97317381013"><span class="fa fa-phone " style="padding-right:5px;"></span>+973 17 381013</a></li>
                        <li><a class="btn-rm" href="mailto:aali@ebdaabahrain.com" > <span class="fa fa-envelope " style="padding-right:5px;" ></span>aali@ebdaabahrain.com </a></li>
                        <li>  <a  class="btn-rm"href="https://goo.gl/maps/Xgobw4hn6qM2" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-right:5px;"></i>A'ali - Bahrain</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-Top: 2px solid #61D2B4; border-left: 2px solid #61D2B4"> 
                      <p style="text-align:left" > <b>Hamad Town Branch</b></p>
                      <hr>
                      <ul style="text-align:left;padding-bottom:10px;">
                        <li> <a style=" padding: 7px 0px; color: #999; text-transform: capitalize;" href="+97317381018"><span class="fa fa-phone " style="padding-right:5px;"></span>+973 17 381018</a></li>
                        <li> <a class="btn-rm" href="mailto:hamad.town@ebdaabahrain.com" > <span class="fa fa-envelope " style="padding-right:5px;" ></span>hamad.town@ebdaabahrain.com </a></li>
                        <li> <a  class="btn-rm"href="https://goo.gl/maps/qShfUw1tMhk" target="_blank"><i class="fa fa-map-marker fa-2x" style="padding-right:5px;"></i>Hamad Town - Bahrain</a></li>
                      </ul>
                    </div>
					 <div class="col-lg-6 col-sm-6 col-xs-12 contactBox" style="border-Top: 2px solid #61D2B4; border-right: 0px solid #61D2B4">
                    </div>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-xs-12" >
                <div class="contact-block">
                  <form id="contactForm">
                    <div class="">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" id="name_contact" name="name_contact" placeholder="Full Name" pattern="[A-Za-z\s]{3,30}" required data-error="Please enter your name">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
					  <div class="col-md-12">
					  <div class="form-group">
						  <input type="text" id="mobile_contact" name="mobile_contact" pattern="[0-9-]{8,15}" placeholder="Mobile Number" required data-error="Please Enter Your Mobile Number ">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" placeholder="Email Address" id="email_contact" name="email_contact" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required data-error="Please enter your email">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
						<div class="col-md-12">
                          <div class="form-group">
                            <select id="subject_contact" name="subject_contact"  form="contactForm" >
                                <option value="">please choose the message purpose</option>
                              <option value="Enquiry">Enquiry</option>
                              <option value="Suggestion">Suggestion</option>
                              <option value="Complaint">Complaint</option>
                            </select>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea  id="message_contact" placeholder="Message" rows="8" data-error="Please enter your message"  pattern="[A-Za-z1-9-\,\.\?\!\@\s]{3,200}" required></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button text-center">
                          <button class="btn btn-common" id="submit_contact" type="submit">Send A Message</button>

                          <div id="msgSubmit-form" class="h3 text-center hidden"></div>
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
        <p class="">** If you have any complaint, you can send a message via <a href="#contact" class="btn-link" style="color:#61D2B4"><b> the above form </b></a>or please follow the <a href="#" class="btn-link" data-toggle="modal" data-target="#complain" style="color:#61D2B4"><b> complaints procedure </b></a>and we will contact you.</p>
		    <p class="">** To view JOB VACANCIES please<a href="#" class="btn-link" data-toggle="modal" data-target="#jobModal" style="color:#61D2B4"><b> click here.</b></a></p>
        <!-- complain Modal -->
        <div class="modal fade " id="complain" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="row ">
                <div class="col-sm-12">
                  <h4>Procedures in dealing with complaints</h4>
                  <hr>
                  <p>Ebdaa Bahrain for Microfinance undertakes to provide the highest level of service to its clients. Please let us know if our services do not meet your expectations in any way so that we can satisfy you</p>
                  <div class="box_shadow">
                    <p><b>Follow these three steps to communicate your point of view:</p></b>
                  </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="box_shadow">
                      <p><b>First, let the person in charge know your problem</b></p>
                      <p>   Let us know your problem and suggestions by contacting the Complaints Officer:</p>
                      <p> Telephone +973 38712712</p>
                      <p> Or email complaints@ebdaabahrain.com </p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="box_shadow" >
                      <p><b>Second Follow  with us:</p></b>
                      <p>If you are not satisfied with the actions taken by the person responsible, </p>
                      <p> the complaint will be submitted to the Operations Department at Ebdaa Bahrain</p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="box_shadow" >
                      <p><b>Third, Follow-up Department at the Central Bank of Bahrain</p></b>
                      <p>If there is no solution to the issue of the complaint through Ebdaa Bahrain, you may refer the matter to the CBB Follow-up Department at the following Address:</p>
                      <p>Complaints Management</p>
                      <p>Central Bank of Bahrain</p>
                      <p>King Faisal Street</p>
                      <p>Diplomatic Area, Building No. 96, Route 1702, Compound 317</p>
                      <p>Manama - Kingdom of Bahrain</p>
                      <p>E-mail: compliance@cbb.gov.bh</p>
                    </div>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact us end-->

    <!-- social-icons  start-->
 
 <div class="social-widget social-icons">
      <ul>
        <li class="facebook" id="facebook-share-btn"><a href="https://www.facebook.com/Ebdaabahrain/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="twitter" id="twitter-share-btn"><a href="https://twitter.com/ebdaabahrain" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="instagram" id="instagram-btn" ><a href="https://www.instagram.com/ebdaabahrain/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li class="youtube" id="youtube-btn"><a href="https://www.youtube.com/channel/UCE5TCNCvV9D86TLo4nwFyrQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
      <li class="call-us" id="call-us-btn"><a href="tel:+973 17381000"><i class="lnr lnr-phone"></i></a></li>
	  <li class="call-us" id="call-us-btn"><a href="#application"><i class="lnr lnr-file-add"></i></a></li>
	  </ul>
    </div>
	
     <!-- social-icons  End-->

    <!-- Footer Section Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>All copyrights reserved &copy; 2021 - Designed & Developed by <a rel="nofollow" href="en.php">Ebdaa Bahrain</a><br>Licensed as a Conventional MFI by the Central Bank of Bahrain</p>
            </div>
          </div>
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links ">
              <li><a href="en.php">Home</a></li>
              <li><a href="#service">Services</a></li>
              <li><a href="#about_us">About Us</a></li>
              <li><a href="#" data-toggle="modal" data-target="#jobModal">Careers</a></li>

            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

     <!-- Jobs Modal -->
    <div class="modal fade " id="jobModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h4>Apply for a JOB</h4>
              <hr>
            </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Please fill the form and submitted it to us</p>
				<div id="accordion">
				<button name="job1" type="button" class="collapsible">Collection Officer</button>
				<div class="content">
                  <div>
                    <p>Objective <br>The collector is the person concerned to visit the customers who are in arrears to continue collecting what they deserve in favor of the bank</p>
                  <p>Tasks and Responsibilities

				  <ol>
				  <li> Investigate the validity of the information provided to the Loan officers.</li>
				  <li>Follow-up of customers who are in arrears  continuously until collect the receivables.</li>
				  <li>Coordinate with the supervisor and the Loan officer about the arrear customer to find the means to solve the problem with this customer.</li>
				  <li>Follow-up of loans scheduled to make sure they are paid on time according to scheduling procedures.</li>
				  <li>Prepare lawyer's warnings to customers who are late for payment and their guarantors.</li>
				  <li>Follow up with the Legal Counsel regarding the files transferred to him.</li>
				  <li>Follow any legal action taken, including follow-up of collections at the Department of Procedure.</li>
				  <li>Coordinate with operations regarding collection of late payments and fines.</li>
				  <li>Preparation of all reports and statements regarding outstanding installments.</li>
				  <li>Perform any other duties assigned to him by his direct supervisor.</li>
				  </ol>
				  </p>
				  <p>Academic qualifications:<br>Bachelor or diploma in the specialties of administrative sciences or equivalent</p>
				  <p>Experience:
				  <ol>
				  <li>Know the applicable laws in this regard.</li>
				  <li>Know about follow-up and collection procedures.</li>
				  </ol>
				  </p>
				  <p>skills
				  <ol>
				  <li>leadership skills.</li>
				  <li>Proficiency in both Arabic and English writing, reading, speaking and good knowledge in computers.</li>
				  </ol>
				  </p>
				  </div>
				  </div>
				  <button name="job2" type="button" class="collapsible">Loan Officer</button>
				  <div class="content">
                  <div>
                    <p>Objective<br> Promotion of customer acquisition,applications study  and field visits, as well as the achievement  of the quality of the credit portfolio. </p>
					<p>tasks and responsibilities:
                   <ol>
					<li>To promote the Bank's products and services to obtain applications for loans and to reach the required number of customers as determined by the Bank.</li>
					<li>Field visit to customers according to plans and policies prepared by the bank.</li>
					<li>Review Loan requests for correctness and correctness of procedures.</li>
					<li>Ensure that customers have completed all necessary documents related to their applications</li>
					<li>An integrated study shows the financial ability of clients applying for a loan.</li>
					<li>Submit periodic reports to the direct supervisor regarding the credit portfolio.</li>
					<li>Continuous monitoring of the credit portfolio, focus on timely payment and management of arrears, if any.</li>
					<li>Perform any other duties assigned to you by the direct supervisor.</li>
					</ol>
                    </p>
					<p>Academic qualifications:<br> Bachelor's or Diploma in Administrative and Financial Sciences.</p>
                   <p>Experience <br>No Need  </p>
				  <p>Skills
				  <ol>
					<li> leadership skills.</li>
					<li>Proficiency in Arabic and English Languages Writing, reading, speaking and have a good knowledge in computers.</li>
					<li>Ability to train staff.</li>
				</ol>
                    </p>
                  </div>
                 </div> 

                </div>

              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="contact-form">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-block">
                          <form id="jobsForm" method="post" action="php/jobs-process.php">
                            <div class="">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="text" id="name_job" name="name_job" placeholder="Full Name" pattern="[A-Za-z\s]{3,30}" required data-error="Please enter your name">
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="text" placeholder="Email Address" id="email_job" name="email_job" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required data-error="Please enter your email">
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="file" placeholder="Your CV" id="cv_job" name="file_attach[]" required data-error="Please upload your CV" accept=".doc, .docx, .txt, application/pdf">
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <select id="job_type" name="job_type" form="contactForm">
                                      <option value="">please choose the vacancy</option>
                                    <option value="job1">Collection Officer</option>
                                    <option value="job2">Loan Officer</option>
                                    <option value="job3">Others</option>
                                  </select>
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <textarea  id="message_job" name="message_job" placeholder="Message" rows="6" pattern="[A-Za-z1-9-\,\.\?\!\@\s]{3,200}" ></textarea>
                               <div class="help-block with-errors"></div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div id="alert" style="display:none" class="alert alert-danger" role="alert">
                                  Please complete the security check below
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LetsOQZAAAAANG2gbEt7vMzNEFNHMry4QKYdVJ5"></div> 
                                <div class="submit-button text-center">
                                  
                                  <button class="btn btn-common" id="submit_job" type="submit">Apply for a JOB</button>
                                  <div id="msgSubmit-job" class="h3 text-center hidden"></div>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
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
 </body>
</html>
