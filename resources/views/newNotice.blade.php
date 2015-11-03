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
    background-image: url('abunai/grunge.jpg');
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
    height: 600px;
    width: 1156px;
    background-color: teal;
    margin: 0 auto;
}

.hero {
    
}

section {
    height: 550px;
    width: 1156px;
    background-color:pink;
    display: flex;
}

section > div {
    background-image: url('abunai/caio.jpg');
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

.box {
    background-color: rgba(0,0,0,0.5);
    padding: 10px;
    width: 500px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 146px;
    border-radius: 5px;
}
input {
    width: 400px;
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
                                <a href="home">ABUNAI <span>MMA</span></a>
                            </div>
                            <div class="links">
                                <a href="/home">HOME</a>
                                <a href="/aboutUs">ABOUT US</a>
                                <a href="/gallery">GALLERY</a>
                                <a href="/admin">ADMIN</a>
                                <a href="/contact">CONTACT</a>
                            </div>

                        </nav>
                        <div class="box">
                            <form method="POST">
                                {!! csrf_field() !!} 
                                
                            <h1>Make a New Announcement</h1>

                                <label>
                                    <input type="text" name="noticeContent">
                                </label>
                                

                                <br>
                                <br>

                                <button>Announce</button>
                                <a href="/home">Cancel</a>

                            </form>
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