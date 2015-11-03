
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  
!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/jquery.bxslider.css" rel="stylesheet" /> <


<style type="text/css">
        
  html {
  font-family: 'Open Sans';
  }

  body {
      background-image: url("http://geekongadgets.com/wp-content/uploads/2014/05/concrete-texture-abstract-mobile-wallpaper-1080x1920-4590-4143710250.jpg");

  }

  header{
     height: 20px;
     background-color: black;
     color:white;
     text-align: right;
  }

  header a {
      color: white;
      font-weight: 300;
      text-decoration:none;
  }
  header span {
      color:red;
      margin-right: 163px;
      margin-left: 20px;
  }

  nav{
      padding: 4px;
      box-sizing: border-box;
      height: 50px;
      display: flex;
      background: linear-gradient(rgba(93,93,93,1), black); /* Standard syntax */
  }

  .name {
      flex:1;
      font-size:30px;
      margin-left:94px;

  }


  .name a {
      font-weight: 700;
  }

  .name a span {
      color: red;
  }

  .links{
      flex:2;
      margin-left:94px;
      font-size:14px;
  }

  nav a {
      padding:22px;
      height:0px;
      color: white;
      text-decoration:none;
      position: relative;
      margin-top: 10px;
  }

  .parent {
     	
      width: 1156px;
      background-color: teal;
      margin: 0 auto;
  }
  .hero {
      
  }
  section {
      width: 1156px;
      background-color:pink;
      display: flex;
  }
  section > div {
      background: #232323;
      width: 100%;
      display: flex;
      background-size: 100% 120%;
  }

  .bg {
      display: flex;
      flex-direction: column;
      color: #00CCFF;
  }

  .titleHolder {
  	height:100px;
      background: #232323;
  }

  .abunai {
      font-family: Open Sans;
  }

  .pageTitle  {
  	text-align: center;
      color:white;
      font-family: Special Elite;
      font-size: 58px;
      text-transform: uppercase;
  }

  .imagePanel {
  	width: 100%;
  	background-color: red;
  	/*display: flex;*/
  }

  .imagePanel div {
  	width: 100%;
  }

  .imageHolder {
  	height: 300px;
  	width: 300px;
  	overflow:hidden;
  	display: inline-block;
  	position: absolute;
  	transform: translate(50px,-450px);

  	
  }

  .imageHolder img {
  	height:270px;
  	width:270px;
  	border-radius: 50%;
  	border: #232323 solid 15px;
  }

  .studentTitle {
  	display: inline-block;
  	background-color: yellow;
  	height:70px;
  	width: 100%;
  	display: inline-block;
  }


  .studentTitle h1 {
  	margin-left: 360px;
  }

  .caro {
  	height: 340px;
  	background-color: black;
      

      }
  .imageGroup {
       
  }

  .caro .imgHolder {
      width:270px;
      height:270px;
      display: inline-block;
      flex:1;
  }

  .caro .imgHolder img {
      height: 100%;
      width: 100%;
  }


  .studentContent {
  	display: inline-block;
      font-family: Special Elite;
  	/*background: #232323; */  
      background: #232323;
  	height:200px;
  	width: 100%;
      display: flex;
  }

  .studentContent div {
      flex:1;
      background: #232323;
  }

  .studentContent h1 {
  	margin-left: 60px;
  	color: white;
  }

  .primary {
      width: 1156px;
      background-color: green;
      text-align: center;
     
  }

  footer {
      height: 50px;
      background-color: black;
  }

  /*THIS IS THE SLICK CAROSOUL CSS*/

  @charset 'UTF-8';
  /* Slider */
  .slick-loading .slick-list
  {
      background: #fff url('./ajax-loader.gif') center center no-repeat;
  }

  /* Icons */
  @font-face
  {
      font-family: 'slick';
      font-weight: normal;
      font-style: normal;

      src: url('./fonts/slick.eot');
      src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
  }
  /* Arrows */
  .slick-prev,
  .slick-next
  {
      font-size: 0;
      line-height: 0;

      position: absolute;
      top: 50%;

      display: block;

      width: 20px;
      height: 20px;
      margin-top: -10px;
      padding: 0;

      cursor: pointer;

      color: transparent;
      border: none;
      outline: none;
      background: transparent;
  }
  .slick-prev:hover,
  .slick-prev:focus,
  .slick-next:hover,
  .slick-next:focus
  {
      color: transparent;
      outline: none;
      background: transparent;
  }
  .slick-prev:hover:before,
  .slick-prev:focus:before,
  .slick-next:hover:before,
  .slick-next:focus:before
  {
      opacity: 1;
  }
  .slick-prev.slick-disabled:before,
  .slick-next.slick-disabled:before
  {
      opacity: .25;
  }

  .slick-prev:before,
  .slick-next:before
  {
      font-family: 'slick';
      font-size: 20px;
      line-height: 1;

      opacity: .75;
      color: white;

      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }

  .slick-prev
  {
      left: -25px;
  }
  [dir='rtl'] .slick-prev
  {
      right: -25px;
      left: auto;
  }
  .slick-prev:before
  {
      content: '←';
  }
  [dir='rtl'] .slick-prev:before
  {
      content: '→';
  }

  .slick-next
  {
      right: -25px;
  }
  [dir='rtl'] .slick-next
  {
      right: auto;
      left: -25px;
  }
  .slick-next:before
  {
      content: '→';
  }
  [dir='rtl'] .slick-next:before
  {
      content: '←';
  }

  /* Dots */
  .slick-slider
  {
      margin-bottom: 30px;
  }

  .slick-dots
  {
      position: absolute;
      bottom: -45px;

      display: block;

      width: 100%;
      padding: 0;

      list-style: none;

      text-align: center;
  }
  .slick-dots li
  {
      position: relative;

      display: inline-block;

      width: 20px;
      height: 20px;
      margin: 0 5px;
      padding: 0;

      cursor: pointer;
  }
  .slick-dots li button
  {
      font-size: 0;
      line-height: 0;

      display: block;

      width: 20px;
      height: 20px;
      padding: 5px;

      cursor: pointer;

      color: transparent;
      border: 0;
      outline: none;
      background: transparent;
  }
  .slick-dots li button:hover,
  .slick-dots li button:focus
  {
      outline: none;
  }
  .slick-dots li button:hover:before,
  .slick-dots li button:focus:before
  {
      opacity: 1;
  }
  .slick-dots li button:before
  {
      font-family: 'slick';
      font-size: 6px;
      line-height: 20px;

      position: absolute;
      top: 0;
      left: 0;

      width: 20px;
      height: 20px;

      content: '•';
      text-align: center;

      opacity: .25;
      color: black;

      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }
  .slick-dots li.slick-active button:before
  {
      opacity: .75;
      color: black;
  }
  <!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/jquery.bxslider.css" rel="stylesheet" />

  </style>
</head>
<body>
  <div class="parent">
      <div class="hero">

         <section>
            <div class="bg">
                <header>
                    <a href="">Already a member? <span>Login Here</span></a>
                </header>
                <nav>
                    <div class="name">
                        <a href="/home"><span class="abunai">ABUNAI<span> <span>MMA</span></a>
                    </div>
                    <div class="links">
                        <a href="/home">HOME</a>
                        <a href="/aboutUs">ABOUT US</a>
                        <a href="/gallery">GALLERY</a>
                        <a href="/admin">ADMIN</a>
                        <a href="/contact">CONTACT</a>
                    </div>

                </nav>
                <div>
                
                  <h1 class="pageTitle">{{$student->studentName}}</h1>
      					
                                
         						
      						
      						<div class="caro">
      							
      	            <div id="carousel">
                          <div id="slider">
                            <div class="imgHolder"><img src="/heroes/{{$student->img1}}"></div>
                            <div class="imgHolder"><img src="/heroes/{{$student->img2}}"></div>
                            <div class="imgHolder"><img src="/heroes/{{$student->img3}}"></div>
                            <div class="imgHolder"><img src="/heroes/{{$student->img4}}"></div>
                            <div class="imgHolder"><img src="/heroes/{{$student->img5}}"></div>
                          </div>  
                    </div>    

                      
                      <script type="text/javascript">
                       $(document).ready(function(){
                        $('.carousel').bxSlider({
                          slideWidth: 300,
                          minSlides: 2,
                          maxSlides: 3,
                          moveSlides: 1,
                          slideMargin: 10
                        });
                      });
                      </script>
      		
      	             <div class="imageHolder">
      		           <img src="/heroes/{{$student->img1}}">
      						</div>

                  <div class="studentContent">
                      <div>
                         <h1>Name: {{$student->studentName}}</h1>
                      </div>
                      <div>
                          <h1>Belt Rank: {{$student->studentRank}}</h1>
                      </div>
                      <div>
                          <h1>Contact Number: {{$student->studentPhone}}</h1>
                      </div>
      						</div>
      						
                  <footer>This is the footer</footer>
													
				       </div>
            
			    </div>
          
				</section>               
        
		  </div>
        
	</div>

</body>

              
        

    
       
  

							