<x-header />
<section class="container">
     <div class="video_main  d-flex gap-3 flex-wrap align-items">

    @if ($videos)
        @foreach ($videos as $video)


        @php
        $diff = $video->created_at->diffForHumans();
    @endphp

            <a href="/{{$video->id}}/Video">
            <div class="video_block d-flex flex-column">
                <video src="/storage/video/{{$video->video}}" alt="/storage/img/{{$video->img}}" controls>
                </video>
                <p class="fs-6 fw-bold" style="padding-left: 5px;">{{$video->title}}  </p>
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
     <hr style="color: #263248;">
</section>

</body>

</html>
