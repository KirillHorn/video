<x-header />
<div class="video_section">
<section class="container">
     <div class="d-flex">
        @php
        $diff = $video->created_at->diffForHumans();
    @endphp
        <div>
            <video src="/storage/video/{{$video->video}}" controls>
            </video>
            <h2>{{$video->title}}</h2>
            <p>{{$diff}} </p>
        </div>
        <div class="comment_main">
                <div> 
                    <form>
                        <input type="text" name="comment" placeholder="Оставить комментарий"> 
                    </form>
                </div>
        </div>
     </div>


        
    {{-- @if ($videos)
        @foreach ($videos as $video)


        @php
        $diff = $video->created_at->diffForHumans();
    @endphp

            <a href="/{{$video->id}}/Video">
            <div class="video_block">
                <video src="/storage/video/{{$video->video}}" controls>
                </video>
                <p class="fs-4 fw-bold" style="padding-left: 5px;">{{$video->title}}  </p>
                    <div class="d-flex justify-content-between" > 
                <p style="padding-left: 5px;">Автор: <span class="fw-bold"> {{$video->user->login}} </span>    </p>
                <p style="padding-right: 10px;">{{$diff}}</p>

                     </div>
            </div>
        </a>
    @endforeach

    @else
            <div>Видео нет</div>
    @endif

     </div>
     <hr style="color: #263248;"> --}}
</section>
</div>
</body>

</html>
