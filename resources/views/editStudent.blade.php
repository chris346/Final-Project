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
    background-color:gray;
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

#logo {
    position: absolute;
    height: 100px;
}

.parent {
    height: 700px;
    width: 1156px;
    background-color: teal;
    margin: 0 auto;
    overflow: scroll;


}

.hero {
    
}

section {
    
    width: 1156px;
    background-color:pink;
    display: flex;
}

section > div {
    background: black;
    padding: 20px;
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
    color: red;
}
input {
     width:400px;
}

footer {
    height: 50px;
    background-color: black;
    width:1156px;
    margin-left: auto;
    margin-right: auto;
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
                        
                       <form method="POST">
                            {!! csrf_field() !!} 
                            
                        <h1>Edit {{$student->studentName}}'s profile</h1>

                            <label>
                                <h2>Name: <input type="text" name="studentName" value="{{$student->studentName}}"></h2>
                                <h2>email: <input type="text" name="email" value="{{$student->email}}"></h2>
                                <h2>Contact Number: <input type="text" name="studentPhone" value="{{$student->studentPhone}}"h2>
                               <h1>BJJ Belt Rank</h1>
                                <div class="rank">
                                    <h4>White<input type="radio" name="studentRank" value="white"></h4>
                                    <h4>Blue<input type="radio" name="studentRank" value="blue"></h4>
                                    <h4>Purple<input type="radio" name="studentRank" value="purple"></h4>
                                    <h4>Brown<input type="radio" name="studentRank" value="brown"></h4>
                                    <h4>Black<input type="radio" name="studentRank" value="Black"></h4>
                                </div>
                                <h2>Image1: <input type="text" name="img1" value="{{$student->img1}}"><small>This will be your Profile Picture </small></h2>
                                <h2>Image2: <input type="text" name="img2" value="{{$student->img2}}"></h2>
                                <h2>Image3: <input type="text" name="img3" value="{{$student->img3}}"></h2>
                                <h2>Image4: <input type="text" name="img4" value="{{$student->img4}}"></h2>
                                <h2>Image5: <input type="text" name="img5" value="{{$student->img5}}"></h2>
                                <!-- <img src="/heroes/{{$student->img1}}"> -->

                                

                            </label>
                            

                            <br>
                            <br>

                            <button>Save Changes    </button>
                            <a href="/students">Cancel</a>
                            

                        </form>

                    </div>

                </section>

                 
                        
                

                
            </div>
        
        </div>
    <footer>
                    FOOTER
                </footer>
        
    </div>

        
</body>
</html>