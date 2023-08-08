@section('menu')
    <ul class="sub-menu">
        @foreach ($list_opd as $opd)
            <li>
                <a href="{{ url("assets/$opd->id") }}"  >{{ $opd->singkatan }}</a>
            </li>
        @endforeach
    </ul>
@endsection
