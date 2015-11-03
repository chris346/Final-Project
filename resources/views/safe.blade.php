<div class="panel">
                    <div class="title">Announcements</div>
                        
                            
                        
                        <div class="articleNotice">
                            
                              
                            {{-- <ul> --}}
                                <a href="/newNotice">Make a New Announcement!</a>   

                                @foreach($notices as $n)
                                    {{-- <li> --}}
                                        <div class="popUp">
                                            <div id="triangle"></div>
                                                <div class="description">
                                                <small><i>Batman says:</i></small><br>
                                                <span>"{{$n->noticeContent}}"</span><br>
                                                <button class="button" data="{{$n->noticeID}}"><small>REMOVE</small></button>
                                                <a href="/editNotice/{{$n->noticeID}}/edit"><small>Edit</small> </a>
                                                
                                            </div>
                                        </div>
                                    {{-- </li> --}}
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
                                            var li = $(this).closest("li");
                                            

                                            $.post("/api/notice/delete/"+id, {id: id}, function(res){
                                            li.remove();
                                        })
                            
                                        });
                                    });

                                </script>
                               
                            {{-- </ul> --}} 
                            
                        </div>
                    
                    </div>
                    
                </div>