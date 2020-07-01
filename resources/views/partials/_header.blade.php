<header>
    <img src=" {{ asset('img/logo.png') }}" alt="Logo Boolean">
    <div>
        <ul>
            <li class="{{ Request::route()->getName() == 'homepage' ? 'active' : ' '}}">
                <a href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="{{ Request::route()->getName() == 'corso' ? 'active' : ' '}}">
                <a href="{{ route('corso') }}">Corso</a>
            </li>
            <li class="{{ Request::route()->getName() == 'dopo' ? 'active' : ' '}}">
                <a href="{{ route('dopo') }}">Dopo il corso</a>
            </li>
            <li class="{{ Request::route()->getName() == 'lezione' ? 'active' : ' '}}">
                <a href="{{ route('lezione') }}">Lezione gratuita</a>
            </li>
            <li class="{{ Request::route()->getName() == 'assunzioni' ? 'active' : ' '}}">
                <a href="{{ route('assunzioni') }}">Assumi i nostri studenti</a>
            </li>
            <li  class="btn-one">
                <a href="{{ route('candidature') }}">Candidati ora</a>
            </li>
        </ul>
    </div>
</header>
