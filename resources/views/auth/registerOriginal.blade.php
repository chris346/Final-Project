{{print_r($errors)}}
{{print_r($errors)}}



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
     background-color: black;
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

h1 {
    margin: 0 auto;
}

.parent {
    height: 530px;
    width: 1156px;
    margin: 0 auto;
    background-color: black;
}

.hero {
    
}

section {
    
    width: 1156px;
    background-color:pink;
    display: flex;
}

section > div {
    background:gray ;
    width: 100%;
    display: flex;
    background-size: 100% 120%;
}



.bg {
    display: flex;
    flex-direction: column;
    color: white;
}
footer {
    height: 50px;
    background-color: black;
}

.loginBox {
    background-color: white;
    width: 600px;
    height: 230px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 148px;
    padding-top: 43px;
    border: red solid 3px;
    border-radius: 10px;
    text-align: center;
}


form {
    background-color: white;
    text-align: right;
    width: 406px;
}
form div {
    margin-left: auto;
    margin-right: auto;
}

.email {
    margin-top:30px;
}

    </style>
</head>
<body>
        <div class="parent">
            <div class="hero">

                                
                <section>
                    <div class="bg">
                        <header>
                            
                        </header>
                      
                    </div>

                </section>

                <div class="parent">
                    <div class="loginBox">
                        <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
    <a href="/auth/login"><small>back to Login</small></a>

</form>
                    </div>
                </div>
                

                <footer>
                    FOOTER
                </footer>

            </div>
        
        </div>
    
        
    
        
            
            







        
    </div>

        
</body>
</html>

