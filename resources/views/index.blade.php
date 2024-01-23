<x-header />
<section class="container">
     <div class="video_main  d-flex gap-4 flex-wrap align-items">
        @foreach ($videos as $video)
        
            <div class="video_block">
                <video src="/storage/video/{{$video->video}}" controls>
                </video>
                <p>{{$video->title}}  </p>
                <p>{{$video->users}}  </p>
                <p>{{$video->created_at}}</p>
            </div>
    @endforeach


            <div class="video_block">
                <video src="/videos/🚗.mp4" controls>
                </video>
                <p>Drive Half Life</p>
                <p>дата загрузки</p>
            </div>



            <div class="video_block">
                <video src="/videos/И я такой пау пау пау _『AI COVER』.mp4" controls>
                </video>
                <p>И я такой пау пау пау _『AI COVER</p>
                <p>дата загрузки</p>
            </div>

            <div class="video_block">
                <video src="/videos/Гигашарики_ Скафандр мод _ 3д анимация.mp4" controls>
                </video>
                <p>Гигашарики_Скафандр мод_3д</p>
                <p>дата загрузки</p>
            </div>
           
     </div>
     <hr style="color: #263248;">
</section>

</body>

</html>
