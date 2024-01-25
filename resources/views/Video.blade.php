<x-header />
<div class="video_section">
<section class="container">
     <div class="d-flex video_mainFor" >
        @php
        $diff = $video->created_at->diffForHumans();
    @endphp
        <div class="video_one">
            <video src="/storage/video/{{$video->video}}" controls>
            </video>
            <h2>{{$video->title}}</h2>
            <p>{{$diff}} </p>
        </div>
      
     </div>

     <div class="comment_main">
                <div class="d-flex flex-column"> 
                    <p class="comment_logo">Комментарии</p>
                    <hr style="   border: none; color: #ffffff; background-color: #ffffff; 
    height: 2px; ">
                    <form class="d-flex gap-1">
                        <input class="comment_text" type="text" name="comment" placeholder="Оставить комментарий"> 
                        <input type="submit" class="comment_add">
                    </form>
                </div>
        </div>


</section>
</div>
</body>

</html>
