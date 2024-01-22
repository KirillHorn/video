
    <x-header/>
    <div class="container">
    @if (session("error"))
    <div  id="message"  class="message">
    {{session("error")}}

  

    </div>
    @endif
    <h1 class="text-center" style="color:#263248;" >Регистрация</h1>
    <form method="POST" action="/registration_valid" class="form_vhod">
      @csrf

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Логин</label>
        <input type="text" name="login" class="form-control" id="exampleInputPassword1">
        <p>@error('login') {{$message}}  @enderror</p>
      </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <p>@error('email') {{$message}}  @enderror</p>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          <p>@error('password') {{$message}}  @enderror</p>
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
          <input type="password" name="password_reset" class="form-control" id="exampleInputPassword1">
          <p>@error('password_reset') {{$message}}  @enderror</p>
        </div>
        <button type="submit" class="btn btn-primary button_auth">Зарегистрироваться</button>
      </form>


    </div>
</body>
</html>
