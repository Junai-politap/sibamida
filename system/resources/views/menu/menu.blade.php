@section('menu')
    <ul class="sub-menu">
        @foreach ($list_opd as $opd)
            <li>
                <a href="{{ url("master-aset/$opd->id") }}"  >{{ $opd->singkatan }}</a>
            </li>
        @endforeach
    </ul>
@endsection
