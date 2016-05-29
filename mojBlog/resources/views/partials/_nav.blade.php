<!-- Navigacioni meni skinut sa bootstrapa -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Naslovna</a></li>
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
            <li class="{{ Request::is('o-nama') ? "active" : "" }}"><a href="/o-nama">O nama</a></li>
            <li class="{{ Request::is('kontakt') ? "active" : "" }}"><a href="/kontakt">Kontakt</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zdravo {{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('posts.index')}}">Vesti</a></li>
                <li><a href="{{ route('kategorije.index')}}">Kategorije</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout')}}">Logout</a></li>
              </ul>
            </li>

            @else

            <a href="{{ route('login') }}" class="btn btn-default">Login</a>

            @endif

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>