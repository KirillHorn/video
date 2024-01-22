<x-header/>
<section>
    <h1 class="text-center" style="color:#263248;" >Добавить видео</h1>
    <form method="POST" action="/addVideo_valid" class="form_vhod">
      @csrf

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Название</label>
        <input type="text" name="title" class="form-control" id="exampleInputPassword1">
        <p>@error('login') {{$message}}  @enderror</p>
      </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Описание</label>
        <textarea name="description"> </textarea>
          <p>@error('email') {{$message}}  @enderror</p>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Превью</label>
          <input type="file" name="img" class="form-control" id="exampleInputPassword1">
          <p>@error('password') {{$message}}  @enderror</p>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Категория</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <p>@error('password') {{$message}}  @enderror</p>
          </div>

          
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Загрузить видео</label>
            <input type="file" name="video" class="form-control" id="exampleInputPassword1">
            <p>@error('password') {{$message}}  @enderror</p>
          </div>


      
        <button type="submit" class="btn btn-primary button_auth">Добавить видео</button>
      </form>
</section>