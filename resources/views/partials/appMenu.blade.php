<ul class="nav nav-tabs">
    <li @if ($activeMenu == "home")class="active dropdown" @endif><a href="/">Home</a></li>
    <li @if ($activeMenu == "articles")class="active dropdown" @else class="dropdown"  @endif>
        <a class="dropdown-toggle" href="/articles">Abonnementen
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="/articles/create">Handmatig</a></li>
            <li><a href="/articles/download">Download Sheet</a></li>
            <li><a href="/articles/upload">Upload Sheet</a></li>
            <li><a href="/articles">Overzicht</a></li>
            <li><a href="/articles/tagging">Tagging</a></li>
        </ul>
    </li>
    <li  @if ($activeMenu == "subscription") class="active dropdown" @else class="dropdown"  @endif>
        <a class="dropdown-toggle"  href="/subscription">Proposities
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="/subscription/create">Handmatig</a></li>
            <li><a href="/subscription/download">Download Sheet</a></li>
            <li><a href="/subscription/upload">Upload Sheet</a></li>
            <li><a href="/subscription">Overzicht</a></li>
            <li><a href="/subscription/html">Creëer HTML</a></li>
        </ul>
    </li>
    <li class="dropdown pull-right">
        <a class="dropdown-toggle" href="/login">
            @if (Auth::user() != null) Ingelogd als: {{ Auth::user()->name }} @else Login @endif
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            @if (Auth::user() == null) <li><a href="/auth/register">Registreer</a></li> @endif
            @if (Auth::user() == null) <li><a href="/auth/login">Login</a></li> @endif
            @if (Auth::user() != null) <li><a href="/auth/logout">Loguit</a></li> @endif
        </ul>
    </li>
</ul>