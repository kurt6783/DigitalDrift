<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="/">Weather Check</a>
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登錄</a></li>
      <li class="nav-item" ><a class="nav-link" href="#">
              <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button  type="submit" name="button">登出</button>
              </form></a></li>
    </ul>
  </div>
</nav>