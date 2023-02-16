<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Referrals
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('referrals.create')}}">Create</a>
                    @if (isset(Auth::user()->role) && Auth::user()->role->name == 'admin')
                        <a class="dropdown-item" href="{{ route('referrals.list')}}">List</a>
                    @endif
                </li>
        </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>