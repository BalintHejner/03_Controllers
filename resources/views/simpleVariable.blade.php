@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{($title)}}</h1>
    <p>{{($subTitle)}}</p>

    <p>Első gyümölcs: {{($fruits[0])}}</p>
    <h4>Gyümölcsök</h4>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{($fruit)}}</li>
        @endforeach
    </ul>

    <h4>Emberek:</h4>
    <ul>
        @foreach ($ages as $key => $data)
            <li>{{($key)}} : {{($data)}}</li>
        @endforeach
    </ul>


    <h4>Autók:</h4>
    <p>Többdimeziós tömb bejárása:</p>
    <ul>
        @foreach ($cars as $key => $data)
            @foreach ($cars[$key] as $key2 => $data2)
                @if (!is_array($data2))
                    <li>{{($key2)}} : {{($data2)}}</li>
                @else
                    <li>{{($key2)}}</li>
                    @foreach ($data2 as $partsData)
                        <ul>
                            <li>{{($partsData)}}</li>
                        </ul>
                    @endforeach
                @endif
            @endforeach
            <hr style="width: 200px">
        @endforeach
    </ul>

    <p>Saab egy alkatrésze: {{($cars[2]['Parts'][1])}}</p>

    <h4>Emberek:</h4>
    @foreach ($people as $person)
        <li>{{($person -> name)}} : {{($person -> age)}} : {{($person -> city)}}</li>
    @endforeach

</div>
@endsection
