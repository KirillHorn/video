<x-header />

<section class="container">
 <a href="/addVideo" class="addVideo_link" >+</a>
 <h2 style="color:#263248;">Мои видео</h2>
    <div class=" flex-column  d-flex gap-3">

    @if ($videos)
        @foreach ($videos as $video)


        @php
        $diff = $video->created_at->format('d-m-Y H:m');
    @endphp

            <a href="/{{$video->id}}/Video">
            <div class=" video_block video_block_on  d-flex " >
                <video src="/storage/video/{{$video->video}}" alt="/storage/img/{{$video->img}}" controls>
                </video>
                <div class="d-flex flex-column" style="margin-top: 40px; margin-left:20px;"> 
                <p class="fs-6 fw-bold" style="padding-left: 5px;">Название: {{$video->title}}  </p>
                   
                <p style="padding-left: 5px;">Количество лайков: {{$video->likesCount()}} <span class="fw-bold">  </span>    </p>
                <p style="padding-left: 5px;">Количество Дизлайков:  {{$video->DislikesCount()}} <span class="fw-bold"> </span>    </p>
                <p style="padding-right: 10px;">Дата создания: {{$diff}}</p>
                <p style="padding-right: 10px;">Статус видео: {{$video->statuses->title}}</p>
                      
                     </div>
            </div>
        </a>
        <hr style="color: #263248;   width:65%;">
    @endforeach

    @else
            <div>Видео нет</div>
    @endif

     </div>

     
    

</section>

</body>

</html>
