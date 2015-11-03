<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <style type="text/css">

/*     #F5D04C      */

        html {
            font-family: 'Open Sans';
            font-weight: 300;
        }

        body {
             background-image: url("abunai/grunge.jpg");
        }

        header{
           height: 20px;
           background-color: black;
           color:white;
           text-align: left;
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

        .login {
            margin-left: 520px;
        }
        .hello {
            margin-left: 939px;
            position: absolute;
        }
        .logout {
            position: absolute;
        }

        .message {
            position: relative;
            width: 98px ;
            top: -50;
            left: 1030;
        }

        a:link {
        color: red;
        text-decoration: none;
        }

        a:active {
            color: #F5D04C;
        }

       a:visited 
        {
            text-decoration: none; 
            decoration: none; 
            color: red;
        }
        
        nav a:visited 
        {
            text-decoration: none; 
            decoration: none;
            color: white; 
        }

        .name {
            flex:1;
            margin-left:94px;
            font-family: Open Sans;
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
        .name a {
            font-weight: 700;
        }

        .name a span {
            /*color: red;*/
        }

        .links{
            flex:2;
            margin-left:94px;
            font-size:14px;
        }

        nav{
            padding: 4px;
            box-sizing: border-box;
            height: 50px;
            display: flex;
            background: linear-gradient(rgba(93,93,93,1), black); /* Standard syntax */
        }

        nav a {
            padding-left:22px;
            padding-right:22px;
            padding-top:0px;
            padding-bottom:0px;
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
            box-shadow: 0 0 20px #000;
        }

        .hero {
            background-image: url("abunai/retouchedImage.jpg");
            background-size: 100%;
        }

        .gradient {
            background: radial-gradient(rgba(0,0,0,0), rgba(0,0,0,0.3), black);

        }


        section {
            height: 674px;
            width: 1156px;
            background-color:rgba(0,0,0,0);
            display: flex;
        }

        section > div {
            background: rgba(0,0,0,0);
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
            color: #00CCFF;
        }

       
        .selectionBar {
            background: linear-gradient(#4D4D4D, black);    
            text-align: center;
            height:100px;
            
        }

        .selectionBox {
            width:300px;
            background-color: white;
            display: inline-block;
            margin:5px;
            transform: translate(0px, -165px);
            box-shadow: 5px 5px 10px #000;
        }

        .selectionImage {
            background-color:lightblue;
            height:160px;
        }

        .selectionImage img {
            height:100%;
            width:100%;
        }

        .selectionContent {
            height: 80px;
            text-align: left;
            padding: 10px;
            box-sizing: border-box;
            background: linear-gradient(#4D4D4D, black); /* Standard syntax */
        }

        .selectionContent span {
        color: #F5D04C;
        }

        .selectionContent h2 {
            margin: 0px;
            color: white;
        }

        .primary {
            width: 1156px;
            background-image: url("abunai/grunge.jpg");
            text-align: center;
           
        }
        .panel {
            display:inline-block;
            text-align: left;

        }

        .panel .title {
            color:white;
            font-size:22px;
            font-weight:300;
            padding: 12px;

        }

        .articleFacebook{
            display: inline-block;
            width: 500px;
            height: 640px;
            margin: 5px;
            background-color: rgba(0,0,0,0);
            text-align: left;
            box-shadow: 0 0 20px black;
        }
        
        .articleAttend {
            display: inline-block;
            width: 300px;
            height: 640px;
            margin: 5px;
            background-color: rgba(0,0,0,0);
            text-align: left;
            overflow: scroll;
        }   
        .articleSchedule {
            display: inline-block;
            color: white;
            width: 300px;
            height: 640px;
            margin: 5px;
            background-color: rgba(0,0,0,0);
            text-align: left;
            overflow: scroll;
        }
        
        .articleNotice {
            display: inline-block;
            width: 259px;
            height: 640px;
            margin: 5px;
            background-color: rgba(0,0,0,0);
            text-align: left;
            overflow: scroll;
            position: relative;
            top:0;
            left:0;
        }        
        .articleNoticeTop {
            display: inline-block;
            width: 300px;
            height: 414px;
            margin: 5px;
            background-color: rgba(0,0,0,0);
            text-align: left;
            overflow: scroll;
            position: relative;
            top:0;
            left:0;
        }


        .content h2 {
            color: red;
        }

        .title {
            color: white;
            margin-left: 5px;
        }

       
        article .content {
            color: white;
            height:3000px;
        }

        .content strong {
            color: red;
        }
        
        .content h1 {
            text-align: center;
        }

        i {
            color: red;
        }

       
        /*ul {
            list-style-type: none;
        }*/



        .attending {
            width:100%;

        }

        .attending h3 {
            color: white;
            text-align: center;
        }

        .popUp {
            width: 90%;
            display: flex;
            padding:5px;
            background-color:rgba(0,0,0,0.4);
            margin-left: auto;
            margin-right: auto;
            margin-top: 5px;
            /*border: white solid 1px;
            border-radius: 5px;*/

        }

        .popUp .aside{
            flex:1;
            height:95px;
            background-color: white;
        }

        .popUp .aside img{
            height: 100%;
            width:91px;
            overflow: hidden;


        }

        .popUp .content{
            flex:2;
            height: 70px;
            background-color: rgba(0,0,0,0);
            text-decoration: none;
            color: white;

        }

        .popUp span {
            color: white;
        }

        


        #triangle {
            width: 0;
            height: 0;
            border-top: 8px solid transparent;
            border-left: 16px solid red;
            border-bottom: 8px solid transparent;
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 5px;
        }
        .announce {
            background-color: white;
            color: white;
            font-size: 16px;
            display:block;
            margin: 0 auto;  
            font-weight: 700;

        }

        button  {
            background-color: rgba(0,0,0,0);
            color: red;
            border: red solid 2px;

        } 

        footer {
            height: 50px;
            background-color: black;
        }

        video {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 679;
            height: 651px;
            width: 1156px;
        }

        video source {
            
        }



    </style>
</head>
<body>
{{Auth::user()}}
        <div id="fb-root"></div>
      
        <div class="parent">
            <div class="hero">
                    
                 {{--  @if(!Auth::user())
                    <video width="100%" height="100%" autoplay poster="http://gifs.gifbin.com/1233925271_8be9acc.gif">
                        <source src="abunai/Project.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2'>
                    </video>
                    @endif --}}

                 <div class="gradient">             
                   
                     <section>

                        <div class="bg">
                           
                                                      
                            
                            <header>
                                
                                @if(Auth::user())
                                    <div class="hello">Hello {{Auth::user()->studentName}},<a href="/auth/logout"><span class="logout">Logout</span></a></div>
                                @else
                                    <a href="/auth/register">New user? <span class="register">Register for Free</span></a>
                                    <a href="/auth/login"><span class="login">Login Here</span></a>
                                @endif



                                {{-- <a href="/auth/login">Already a member? <span>Login Here</span></a>
                                <a href="/auth/register">New user? <span>Register for Free</span></a>
                                <a href="/auth/logout"><span>Logout</span></a> --}}
                                

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
                            <div class="message">
                                
                            </div>
                            <div class="panel">

                        <div class="title">Announcements</div>
                        
                            
                        
                        <div class="articleNoticeTop">
                            
                              
                            
                                <a href="/newNotice">Make a New Announcement!</a>   

                                @foreach($notices as $n)
                                    
                                        <div class="popUp">
                                            <div id="triangle"></div>
                                                <div class="description">
                                                <small><i>Batman says:</i></small><br>
                                                <span class="noticeContent">"{{$n->noticeContent}}"</span><br>
                                                <button class="button" data="{{$n->noticeID}}"><small>REMOVE</small></button>
                                                <a href="/editNotice/{{$n->noticeID}}/edit"><small>Edit</small> </a>
                                                
                                            </div>
                                        </div>
                                    
                                @endforeach   
                                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

                                <script>
                                    $(function(){

                                        console.log("ready");

                                        $.ajaxSetup({
                                            headers: {
                                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                                            }
                                        });

                                        $("button").on("click", function(){
                                            var id = $(this).attr("data");
                                            var div = $(this).parents("div.popUp");
                                            
                                            $.post("/api/notice/delete/"+id, {id: id}, function(res){
                                                div.remove();
                                            });

                                        });
                                    });
                                </script>
                            </div>
                        </div>
                            
                    </section>

                    <div class="selectionBar">
                               
                        <a href="/students">
                    
                            <div class="selectionBox">

                                    <div class="selectionImage">

                                        <img src="abunai/students.jpg" alt="">  
                    
                                    </div>
                       
                                <div class="selectionContent">
                                    <h2>STUDENTS</h2>
                                    <span>MEET THE TEAM</span>
                                </div>
                                
                            </div>
                                        
                        </a>
                                        
                        

                            <div class="selectionBox">

                                <div class="selectionImage">
                                    <img src="abunai/class.jpg" alt="">
                                </div>
                        
                                <div class="selectionContent">
                                <a href="/student/checkIn">
                                    <h2>CHECK-IN</h2>
                                </a>
                                <a href="/student/checkOut">   
                                    <span>CHECK-OUT</span>
                                </a>
                                </div>
                            
                            </div>

                        

                        <a href="/comp">
                            
                            <div class="selectionBox">
                                
                                <div class="selectionImage">
                                    <img src="abunai/armbar.jpg" alt="">  
                                </div>
                                
                                <div class="selectionContent">
                                    <h2>TOURNAMENTS</h2>
                                    <span>UPCOMING COMPETITIONS</span>
                                </div>

                            </div>
                        </a>

                    </div>
                </div>

            </div>
            
            <div class="primary">
                
                <div class="panel">
                    <div class="title">Follow Us On Facebook</div>

                    <div class="articleFacebook">
                        
                        
                        <div class="content">
                             <div class="fb-page" data-href="https://www.facebook.com/Abunai-MMA-Jiu-jitsuNava-Brazilian-Jiu-jitsu-298814180276100/" 
                                data-width="1000" data-height="640" data-hide-cover="false" data-show-facepile="false"
                                data-show-posts="true">
                            </div>
                            
                        </div>
                    </div>
                </div>
               



                <div class="panel">
                    <div class="title">Schedule</div>

                    <div class="articleSchedule">
                        <div class="attending">
                            <div class="content">
                                <h2>Monday<h2>
                                <h4>5:15pm. Kids- Brazilian Jiu-jitsu.</h4>
                                <h4>6pm. Womens- MMA/Jiu-jitsu Combatives.<h4>
                                <h4>7pm. All Levels- Brazilian Jiu-jitsu Fundamentals.<h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.<h4>
                                
                                <h2>Tuesday</h2>
                                <h4>6pm. All Levels- MMA/Muay Thai/No-Gi Grappling.</h4>
                                <h4>7pm. All Levels- Judo/Competition Brazilian Jiu-jitsu.</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.</h4>
                                
                                <h2>Wednesday<h2>
                                <h4>5:15pm. Kids- Brazilian Jiu-jitsu.<h4>
                                <h4>6pm. Womens- MMA/Jiu-jitsu Combatives.<h4>
                                <h4>7pm. All Levels- Brazilian Jiu-jitsu Fundamentals.</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.<h4>
                                
                                <h2>Thursday</h2>
                                <h4>6pm. All Levels- MMA/Muay Thai/No-Gi Grappling.</h4>
                                <h4>7pm. All Levels- Judo/Competition Brazilian Jiu-jitsu.</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.</h4>
                                
                                <h2>Friday</h2>
                                <h4>5:15pm. Kids- Brazilian Jiu-jitsu.</h4>
                                <h4>6pm. Womens- MMA/Jiu-jitsu Combatives.</h4>
                                <h4>7pm. All Levels- Brazilian Jiu-jitsu Fundamentals. (Gi)</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu. (Gi)</h4>
                                
                                <h2>Saturday<h2>
                                <h4>6am-8am. Open for Privates. (By Appointment Only)</h4>
                                <h4>9am. Strength & Conditioning.</h4>
                                <h4>10am. All Levels- MMA/Muay Thai/No-Grappling.</h4>
                                <h4>11am. All Levels- Brazilian Jiu-jitsu.</h4>
                                <h4>12pm-2pm. Open Mat.</h4>
                                <h4>6pm-8pm. All Levels- Open Mat. (TBA)</h4>
                                
                                <h2>Sunday</h2>
                                <h4>6am-8am. Open for Privates. (By Appointment Only)</h4>
                                <h4>9am. Strenght & Conditioning Workout. (TBA)</h4>
                                <h4>6pm-8pm. Open Mat. (TBA)</h4>
                            </div>

                        </div>

                    </div>
                </div>
                
                <div class="panel">
                    <div class="title">Attending Today</div>

                    <div class="articleAttend">
                        
                        <div class="attending">
                            <div class="content">
                                
                                    @foreach($students as $s)
                                        
                                            <a href="/student/{{$s->studentID}}">   
                                                <div class="popUp">
                                                    <div class="aside">

                                                        <img src="/heroes/{{$s->img1}}">
                                                    </div>
                                                    <div class="content">
                                                        <strong>{{$s->studentName}}</strong><br>
                                                        Belt Rank: {{$s->studentRank}}<br>
                                                        Contact#{{$s->studentPhone}}
                                                    </div>
                                                </div>
                                            </a>
                                        
                                    @endforeach
                            </div>

                        </div>{{-- closes .content --}}

                    </div>{{-- closes .articleAttend --}}
                </div>

                <footer>
                       <small>Abunai MMA & Jiu Jitsu</small>             
                </footer>
            </div>
        </div>
  <script type="text/javascript">
    $(document).ready( function() {
$('.attending .popUp').hover(
    function() {
        $(this).animate({ 'zoom': 1.2 }, 400);
    },
    function() {
        $(this).animate({ 'zoom': 1 }, 400);
    });
    
});

</script>
   
   <script type="text/javascript">
      $(document).ready( function() {
        $('.selectionBox').live("mouseover", function(){
          var $this=$(this);

          $this.attr('width','25%');
          $this.attr('height','25%');


       })
    });
  //  $(function(){
  //   $('a').click(function(){
  //       $('embed').remove();
  //       $('body').append('<embed src="/abunai/click.wav" autostart="true" hidden="true" loop="false">');
  //   });
  // </script>

      <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
</body>
                
</html>


                

        
    
        
    
        
            
            







        
       
  

