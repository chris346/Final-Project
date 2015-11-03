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

.abunai {
            font-size: 28px;
            color: white;
        }

        .abunai2{
            color:red;
            font-size:22px;
            font-weight:300;
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
                                <a href="/auth/login">Already a member? <span>Login Here</span></a>
                                <a href="/auth/register">New user? <span>Register for Free</span></a>
                                <a href="/auth/logout"><span>Logout</span></a>

                            </header>

                            <nav>
                                <div class="name">
                                    <a href="/home"> <span class="abunai">ABUNAI </span><span class="abunai2">MMA & JIU JITSU</span></a>
                                </div>
                                <div class="links">
                                    <a href="/home">HOME</a>
                                    <a href="/aboutUs">ABOUT US</a>
                                    <a href="/pictures">PICTURES</a>
                                    <a href="/contact">CONTACT</a>
                                </div>

                            </nav>
                        
                        <div class="content">
                            <h1 class="pageTitle">About Us</h1>
                            Abunai MMA & Jiu jitsu is dedicated to improving the lives of its 
                            students through the practice of martial arts. Students learn not 
                            only one of the most effective systems of self-defense and martial 
                            arts, but also one of the most complete forms of health improvement 
                            that give the values of positive attitude, discipline, respect, help 
                            students becoming well-rounded, responsible and successful individuals 
                            in life. Our kids class is fun and great for confidence, stranger safety 
                            skills, character development as well as bully proofing.

                            Our cardio program is an awesome workout involving many different tools 
                            & exercise movements to get you in the shape you want. Our workouts are 
                            all technique based, so that the student develops skills through repetition 
                            which develops muscle memory. We focus on four categories of fitness: 
                            cardiovascular, flexibility, strength training, as well as self defense. 
                            We believe that the mind and body need to be healthy and strong. One of the 
                            keys to our program is the balance between traditional techniques and modern 
                            training methods that are safe and effective.
                            
                            <h1>Abunai MMA & Jiu jitsu Creed</h1>
                            
                            UPHOLD THE PRINCIPLES OF PROPRIETY & COURTESY.<br>

                            CULTIVATE THE SPIRIT OF EFFORT.<br>

                            PERFECT THE MIND OF PATIENCE.<br>

                            LEAD THE WAY OF TRUTH.<br>

                            I WILL NOT LOSE SELF CONTROL OR ACT IN A VIOLENT MANNER.<br>

                            THIS IS A BLACK BELT SCHOOL. WE ARE DEDICATED, WE ARE MOTIVATED WE ARE ON A QUEST TO BE THE BEST. Osss!!!<br>

                            <h1>Abunai MMA Code of Ethics</h1>

                            I will look for the good in all people and make them feel worth while.

                            I will always be in a positive frame of mind convey this feeling to every person that I meet.

                            I will give so much time to the improvement of myself that I have no time to criticize others.

                            If I have nothing good to say about a person, I will say nothing.

                            I shall continually work at developing love, happiness and loyalty in my family and acknowledge that no other success can compensate failure in the home.

                            I shall develop myself to the maximum of my potential in all ways.

                            I will always remain loyal to my country and obey the laws of the land.

                            I will be as enthusiastic about the success of others as I am about my own.

                            I will forget about the mistakes of the past and press on to greater achievements in the future.

                            I will maintain an attitude of open-mindedness towards another’s viewpoints while still holding fast to that I know to be true and honest.

                            I will maintain respect for those in authority and demonstrate this respect at all times.

                            I will become and remain highly goal oriented throughout my life.

                      
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