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
}

.hero {
    
}

section {
    width: 1156px;
    background-color:pink;
    display: flex;
}

section > div {
    background-image: url("abunai/dojo.jpg");
    width: 100%;
    display: flex;
    background-size: 100% 120%;
}

img {
    width:100%;
}

.bg {
    display: flex;
    flex-direction: column;
    color: white;
}

h1 {
    color: red;
}

.pageTitle {
    text-align: center;
    font-size: 46px;
}

.content {
    padding-left: 100px;
    padding-right: 100px;
    background-color: rgba(0,0,0,0.4);
    overflow: scroll;
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

img {
	height: 160px;
	width: 160px;
	width: 160px;
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
                                <a href="/pictures">PICTURES</a>
                                <a href="/admin">ADMIN</a>
                                <a href="/contact">CONTACT</a>
                            </div>

                        </nav>
                        
                        <div class="content">
                        	<h1>Picture Gallery</h1>
                         <table style="width:100%">
                          
                          <tr>
                            <td><img src="/gallery/1.jpg"></td>
                            <td><img src="/gallery/2.jpg"></td>
                            <td><img src="/gallery/3.jpg"></td>
                            <td><img src="/gallery/10.jpg"></td>
                            <td><img src="/gallery/16.jpg"></td>
                            
                          </tr>
                          <tr>
                            <td><img src="/gallery/5.jpg"></td>
                            <td><img src="/gallery/6.jpg"></td>
                            <td><img src="/gallery/7.jpg"></td>
                            <td><img src="/gallery/8.jpg"></td>
                            <td><img src="/gallery/8.jpg"></td>
                          </tr>

                          <tr>
                            <td><img src="/gallery/9.jpg"></td>
                            <td><img src="/gallery/10.jpg"></td>
                            <td><img src="/gallery/11.jpg"></td>
                            <td><img src="/gallery/12.jpg"></td>
                            <td><img src="/gallery/12.jpg"></td>
                          </tr>

                          <tr>
                            <td><img src="/gallery/13.jpg"></td>
                            <td><img src="/gallery/14.jpg"></td>
                            <td><img src="/gallery/15.jpg"></td>
                            <td><img src="/gallery/16.jpg"></td>
                            <td><img src="/gallery/16.jpg"></td>
                          </tr>

                          <tr>
                            <td><img src="/gallery/17.jpg"></td>
                            <td><img src="/gallery/18.jpg"></td>
                            <td><img src="/gallery/19.jpg"></td>
                            <td><img src="/gallery/20.jpg"></td>
                            <td><img src="/gallery/20.jpg"></td>
                          </tr>


                        </table>
                      
                        </div>
                    </div>

                </section>

                
                
                

                <footer>
                    FOOTER
                </footer>

            </div>
        
        </div>
    
    </div>

        
</body>
</html>