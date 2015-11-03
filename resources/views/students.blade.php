<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
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
    height: 633px;
}

section {
    height: 550px;
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
.image {
    display:inline;
    flex:3;
    background-color:green;
    margin: 5px;
    border-radius:5px;
    background-color:rgba(0,0,0,0);
}
img {
    width:100%;
}
.bg {
    display: flex;
    flex-direction: column;
    color: white;
}
.pageName {
	background-color: black;
	width: 920px;
	margin-left: auto;
	margin-right: auto;
	display: flex;
	margin-top: 5px;
	margin-bottom: 5px;
}
.pageName h1 {
	margin-left: auto;
	margin-right: auto;
}

.add{
    margin-left: auto;
    margin-right: auto;
    text-decoration: none;
}

a:visited {
    color: white;
    text-decoration: none;
}

.background{
    height: 625px;
    overflow: scroll;
}  


.outerPanel {
	
    background-image: url("abunai/gracie.jpg");
    background-repeat: no-repeat;
    background-size: 1156px 633px; 
    height: 800px;
    
}
    
/*ul {
    list-style-type: none;
}*/
.innerPanel {
	/*background-image: url("abunai/grunge.jpg");*/
    background-color: rgba(255,255,255,0.05);
	height: 173px;
	width: 750px;
    margin-left: 15px;
	display: flex;
	margin-top: 5px;
	margin-bottom: 5px;
    border: white solid 1px;
    border-radius: 10px;

}
.imgHolder {
	width:150px;
    height: 150px;
	background-color: white;
	margin: 10px;
	border-radius: 50%;
	border: white solid 2px;
	overflow: hidden;
}
.imgHolder img {
	height: 100%;
}	
.infoHolder {
	flex: 2;
	background-color: rgba(0,0,0,0);
	margin: 10px;
}
.contentHolder {
	flex:2;
	background-color: rgba(0,0,0,0);
	margin: 10px;
}
footer {
    height: 50px;
    background-color: black;
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
                        <div class="outerPanel">
                          
                        
                        
                        <div class="background">
                                <a class="add" href="/auth/register">Add a New Student</a>
                            
                            
                            	@foreach($students as $s)
                            		<div class="innerPanel">
    		                        	 	
    		                        	 	<div class="imgHolder">
    		                        	 		<a href="/student/{{$s->studentID}}">
                                                    <img src="/heroes/{{$s->img1}}">
                                                </a>
    		                        	 	</div>
    		                        	 	
    		                        	 	<div class="infoHolder">
    		                        	 		<h4>Name: {{$s->studentName}}</h4>
                                                <h4>Contact # {{$s->studentPhone}}</h4>
                                                <h4>Email: {{$s->email}}</h4>

    		                        	 	</div>
    		                        	 	
    		                        	 	<div class="contentHolder">
    		                        	 		 <h4>Rank: {{$s->studentRank}}</h4>
    		                        	 	</div>
                                            <div class="buttonHolder">
                                                <button data="{{$s->studentID}}"><small>REMOVE</small></button>
                                                <a href="/editStudent/{{$s->studentID}}/edit">edit</a>


                                            </div>
    		                        	</div>
    		                        
    			                 @endforeach

                                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>



                                <script src="/script.js">
                                     

                                </script>
		                      </div> 
		                    <footer>
        						FOOTER
   							 </footer>    
		               
                       
                        </div>
                    </div>


                </section>

                
                

                

            </div>
        
        </div>
    
        
    
        
            
            







    
    </div>
      <script type="text/javascript">
    $(document).ready( function() {
$('.innerPanel').hover(
    function() {
        $(this).animate({ 'zoom': 1.2 }, 100);
    },
    function() {
        $(this).animate({ 'zoom': 1 }, 100);
    });
    
});

</script>
</body>
</html>