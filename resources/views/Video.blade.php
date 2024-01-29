<x-header />
<div class="video_section">
<section class="container">

     <div class="d-flex video_mainFor" >
        @php
        $diff = $video->created_at->diffForHumans();

       
    @endphp
        <div class="video_one">
            <video src="/storage/video/{{$video->video}}" controls autoplay loop>
            </video>
            <div class="d-flex justify-content-between">
            <h2>{{$video->title}}</h2> <h2>Канал: {{$video->user->login}}</h2>
        </div>
            <p>{{$diff}} </p> <form> </form>
        </div>
      
     </div>

     <div class="comment_main">
                <div class="d-flex flex-column"> 
                    <p class="comment_logo">Комментарии

                        @guest
                        <h2 style="padding-left: 20px;">Чтобы оставлять комментарии - <a href="/auth"> Войдите </a> или <a href="/register"> зарегистрируйтесь </a></h2>
                        @endguest
                    </p>
                    <hr style="   border: none; color: #ffffff; background-color: #ffffff; 
    height: 2px; ">
    @auth
                    <form class="d-flex gap-1" method="POST" action="/{{$video->id}}/comment_Add">
                        @csrf
                        <input class="comment_text" type="text" name="comment" placeholder="Оставить комментарий" height="100%" width="1300px"> 
                        <input type="submit" class="comment_add">
                    </form>
                    @endauth
                   
                </div>
                <div class="d-flex flex-column"> 
                    @if ($comment)
                    @foreach ($comment as $comments)
                    @php
                    $diff = $comments->created_at->diffForHumans();
                    @endphp
                    <div class="d-flex flex-column comment_users" style="margin-left:5px;"> 
                        <p>{{$comments->users->login}}</p>
                        <p>{{$comments -> comment}}</p>
                        <p style="font-size:14px;">{{$diff}}</p>
                        <hr style="  border: none;
                        color: #ffffff; 
                        background-color: #ffffff; 
                        height: 2px;
                        width:98%">
                    </div>
                    @endforeach
                    @else
                    <div class="d-flex flex-column" style="margin-left:5px;">
                <p>Комментариев нету</p>
                    </div>
                    @endif
                </div>
        </div>


</section>
</div>
</body>

</html>
