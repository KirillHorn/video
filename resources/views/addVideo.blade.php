<x-header/>
<section>
    <h1 class="text-center" style="color:#263248;" >Добавить видео</h1>
    <form method="POST" action="/addVideo_valid" class="form_vhod" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Название</label>
        <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputPassword1">
        <p>@error('login') {{$message}}  @enderror</p>
      </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Описание</label>
          <textarea class="form-control" name="description"> </textarea>
          <p>@error('email') {{$message}}  @enderror</p>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Превью</label>
          <input type="file" name="img" class="form-control" id="imageFile">
          <img class="img_view" id="prevImage" src="#" alt=""/>
          <p>@error('password') {{$message}}  @enderror</p>
        </div>

        <div class="mb-3">
      <label for="disabledSelect" class="form-label">Категория</label>
      <select id="disabledSelect" class="form-select" name="categories">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
      </select>
      <p>@error('password') {{$message}}  @enderror</p>
    </div>


          
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Загрузить видео</label>
            <input type="file" name="video" class="form-control" id="imageFile">
            <p>@error('password') {{$message}}  @enderror</p>
          </div>


      
        <button type="submit" class="btn btn-primary button_auth">Добавить видео</button>
      </form>
</section>

<script>
function readURL(input) { //
 if (input.files && input.files[0]) {
  var reader = new FileReader(); //позволяет читать асинхронно содержимое файлов, хранящийся на пк
    
  reader.onloadend = function(e) { //Срабатывает только после того как скрипт был загружен  и выполнен
   $('#prevImage').attr('src', e.target.result); // attr - Название атрибута, которое нужно получить.
  }
    
  reader.readAsDataURL(input.files[0]); //используется для чтения содержимого files
 }
}
$("#imageFile").change(function() { //change - Событие  происходит по окончании изменения значения элемента формы, когда это изменение зафиксировано.
 readURL(this);
});

setTimeout(function(){
	document.getElementById('message').style.display = 'none';
}, 5000);



</script>