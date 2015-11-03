<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
	<script src="javascript/jquery.lighter.js" type="text/javascript"></script>
	<link href="stylesheets/jquery.lighter.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
	/*// Add the slick-theme.css if you want default styling*/
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
<style type="text/css">
html {
    font-family: 'Open Sans';
}

body {
    background-image: url("abunai/grunge.jpg");
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
    /*background-image: url("abunai/arena2.jpg");*/
    background-color: lime;
    width: 100%;
    display: flex;
    background-size: 100% 100%;
}

img {
    width:auto;
    width: 400px;
    margin: 0 auto;
}

.bg {
	display: flex;
    flex-direction: column;
    color: white;
}

.list{
	height: 542px;
	
}

h1 {
    color: red;
}

.pageTitle {
    text-align: center;
    font-size: 34px;
    margin:0;
}

.content {
    padding-left: 100px;
    padding-right: 100px;
    display: flex;
    width: 500px;

}

aside{
    border: black solid 2px;
    flex:1;
    display: inline-block;
}

aside img {
	
}

main {
    flex: 1;
   	padding: 20px;
    color: white;
    background-color: rgba(0,0,0,0.4);
    border: black solid 2px;
}

.primary {
    width: 1156px;
    background-color: green;
    text-align: center;
   
}
.panel {
    display:inline-block;
    text-align: left;
}

footer {
    height: 50px;
    background-color: black;
    width: 1156px;
    margin-left: auto;
    margin-right: auto;
}

.slick-initialized .slick-slide {
    display: flex;
}

element.style {
    width: 1000px;
}


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
                                <a href="/home">ABUNAI <span>MMA</span></a>
                            </div>
                            <div class="links">
                                <a href="/home">HOME</a>
                                <a href="/aboutUs">ABOUT US</a>
                                <a href="/gallery">GALLERY</a>
                                <a href="/admin">ADMIN</a>
                                <a href="/contact">CONTACT</a>
                            </div>

                        </nav>
                        <p class="pageTitle">UPCOMING COMPETITIONS</p>
	                    

	                    <div class="list">
	                        

	                        
	                           <div class="content">
		                            <aside>
		                            	
										<a href="http://nagafighter.com/index.php?module=homepage"><img src="competitions/poster1.jpg"></a>
										
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                         

	                        
	                           <div class="content">
		                            <aside>
		                                <a href="http://www.americangrapplingfederation.com/"><img src="competitions/poster2.jpg"></a>
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                        

	                        
	                           <div class="content">
		                            <aside>
		                                <a href="http://ibjjf.org/championship/pan-jiu-jitsu-championship/"><img src="competitions/poster3.jpg"></a>
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                        

	                        
	                           <div class="content">
		                            <aside>
		                                <img src="competitions/poster4.jpg">
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                        

	                        
	                           <div class="content">
		                            <aside>
		                                <img src="competitions/poster5.jpg">
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                        
	                        
	                           <div class="content">
		                            <aside>
		                                <img src="competitions/poster6.jpg">
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                       

	                        
	                           <div class="content">
		                            <aside>
		                                <img src="competitions/poster7.jpg">
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                        
	                        
	                           <div class="content">
		                            <aside>
		                                <img src="competitions/poster8.jpg">
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                        
	                        	<div class="content">
		                            <aside>
		                                <img src="competitions/poster9.jpg">
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                        

	                        
	                           <div class="content">
		                            <aside>
		                                <img src="competitions/poster10.jpg">
		                            </aside>
		                            <main>
		                                <h2>Tournament: 555-555-5555</h2>
		                                <h2>Date: December 4th, 2015</h2>
		                                <h2>Location: Phoenix, AZ </h2>
		                                <h2>Time: Kids-10AM Adults-2PM</h2>
		                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

		                            </main>
	                        	</div>
	                         
	                        
	                        
	                    </div>

                          

                
                
                

                

            </div>

        
        </div>
    		
    </div>
     <footer>
        FOOTER
     </footer>
     {{-- This zooms in each innerDiv --}}
 //     <script type="text/javascript">
 //    	$(document).ready( function() {
	// 	$('div').hover(
 //    	function() {
 //        	$(this).animate({ 'zoom': 1.2 }, 100);
 //    	},
 //    	function() {
 //        	$(this).animate({ 'zoom': 1 }, 100);
 //    	});
 //    });
	// </script>
	
	{{-- This is the Carousel --}}
	<script type="text/javascript">
	$(document).ready( function(){	
		$('.list').slick({
  			infinite: true,
  			slidesToShow: 1,
  			slidesToScroll: 1
		});
	 });
	</script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
</body>
</html>




