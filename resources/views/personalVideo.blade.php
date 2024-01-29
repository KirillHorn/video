<x-header />

<section class="container">
    <h2>Мои видео</h2> <a href="/addVideo" class="addVideo_link">+</a>
    <div class="video_main flex-column  d-flex gap-3 ">

    @if ($videos)
        @foreach ($videos as $video)


        @php
        $diff = $video->created_at->format('d-m-Y H:m');
    @endphp

            <a href="/{{$video->id}}/Video">
            <div class="video_block_on video_block d-flex ">
                <video src="/storage/video/{{$video->video}}" alt="/storage/img/{{$video->img}}" controls>
                </video>
                <p class="fs-6 fw-bold" style="padding-left: 5px;">{{$video->title}}  </p>
                    <div class="d-flex justify-content-between" > 
                <p style="padding-left: 5px;">Количество лайков: <span class="fw-bold"> {{$video->user->login}} </span>    </p>
                <p style="padding-left: 5px;">Количество Дизлайков: <span class="fw-bold"> {{$video->user->login}} </span>    </p>
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
     
      


</section>

</body>

</html>
