$(function(){

    console.log("ready");

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '{!! csrf_token() !!}'
        }
    });

    $("button").on("click", function(){
        var id = $(this).attr("data");
        var div = $(this).parents("div.innerPanel");

        $.get("/api/student/delete/"+id, function(res){
            div.remove();
        });

    });
});


                                // <script>
                                //     $(function(){

                                //         console.log("ready");

                                //         $.ajaxSetup({
                                //             headers: {
                                //             'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                                //             }
                                //         });

                                //         $("button").on("click", function(){
                                //             var id = $(this).attr("data");
                                //             var div = $(this).parents("div.popUp");
                                            
                                //             $.post("/api/notice/delete/"+id, {id: id}, function(res){
                                //                 div.remove();
                                //             });

                                //         });
                                //     });
                                // </script>