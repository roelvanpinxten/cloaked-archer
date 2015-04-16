<ul class="nav nav-tabs">
    <li @if ($activeMenu == "home") class="active" @endif ><a href="#">Home</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/provider">Providers
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="/provider/Tele2">Tele2</a></li>
            <li><a href="/provider/KPN">KPN</a></li>
            <li><a href="/provider/Hi">Hi</a></li>
            <li><a href="/provider/T-Mobile">T-Mobile</a></li>
            <li><a href="/provider/BEN">BEN</a></li>
            <li><a href="/provider">Alle providers</a></li>
        </ul>
    </li>
    <li  @if ($activeMenu == "subscription") class="active" @endif class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/provider">Proposities
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="/subscription/create">Toevoegen</a></li>
            <li><a href="/subscription">Alle proposities</a></li>
            <li><a href="/dixons/">Creëer HTML</a></li>
        </ul>
    </li>
    <li class="dropdown pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/provider">
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