<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">
        {{ config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active nav-link">
                    <a  href="{{ route ('home')}}">Inicio</a>
                </li>
               
            </ul
        </div>
    </div>
</nav>