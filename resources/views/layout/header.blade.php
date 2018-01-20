 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="galeri">Gallery</a></li>
      <li><a href="tabel">Data Tabel</a></li>
      <li><a href="paragrap">Paraghrap</a></li>
      <li><a href="bobotoh">Band</a></li>
      <li><a href="persib">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                
                            </li>
    </ul>
  </div>
</nav> 