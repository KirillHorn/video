<x-header/>

            <section>
                <h1>Добро пожаловать в админ панель - {{Auth::user()->login}}</h1>

                <div> 
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Фото</th>
      <th scope="col">Видео</th>
      <th scope="col">Описание</th>
      <th scope="col">Автор</th>
      <th scope="col">Категория</th>
      <th scope="col">Статус</th>
      <th scope="col">Сменить статус</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($videos as $video)
    <tr>
      <td class="align-middle fw-bold">{{$video->id}}</td>
      <td class="align-middle fw-bolder">{{$video->title}}</td>
      <td class="align-middle"><img src="/storage/img/{{$video->img}}" alt="" class="img_align"></td>
      <td class="align-middle"><video src="/storage/video/{{$video->video}}" alt="" class="img_align"></video>
      <td class="align-middle">{{$video->description}}</td>
      <td class="align-middle">{{$video->user->login}}</td>
      <td class="align-middle">{{$video->categorie->title}}</td>
      <td class="align-middle">{{$video->statuses->title}}</td>
      <td class="align-middle">
        <form method="POST" action="" class="d-flex flex-column gap-1"> 
        <select name="id_categoriesCafe" class="option_status"> 
            @foreach ($status as $statuses)
                <option value="{{$statuses ->id }}"> {{$statuses->title}} </option>
            @endforeach
        </select>
            <input type="submit" class="input_admin" value="Изменить">
        </form>  
      </td>
    </tr>
    @endforeach
   
  </tbody>
  </table>
                </div>
            </section>
                
    
        </body>
</HTML>