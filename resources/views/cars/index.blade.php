@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Autók</h1>
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="/cars/search-by-name" method="post">
                @csrf
                <div class="row">
                    <label class="col-sm-2 col-form-label">Megnevezés</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" value="{{ $name }}" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary" name="btn_search" type="submit">Keresés</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6">
                <form action="/cars/search-by-origin" method="post">
                    @csrf
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Származási hely:</label>
                        <div class="col-sm-6">
                            <select name="origin" class="form-control">
                                @foreach ($origins as $origin)
                                    @if ($origin == $origin2)
                                        <option value="{{ $origin }}" selected >{{ $origin }}</option>
                                    @else
                                        <option value="{{ $origin }}" >{{ $origin }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" name="btn_search" type="submit">Keresés</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/search" method="post">
                @csrf
                <label class="col-sm-2 col-form-label">Megnevezés</label>
                    <div class="col-sm-4">
                        <input type="text" name="name2" value="" class="form-control">
                    </div>


                    <label class="col-sm-2 col-form-label">Származási hely: </label>
                    <div class="col-sm-3">
                        <select name="origin3" class="form-control">
                            <option value="0" selected>Kérem válasszon</option>
                            @foreach ($origins as $origin)
                                @if ($origin == $origin2)

                                @else
                                    <option value="" ></option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-2">
                        <button class="btn btn-primary" name="btn_search" type="submit">Keresés</button>
                    </div>
            </form>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Név</th>
                    <th>Fogyaszás</th>
                    <th>Hengerek száma</th>
                    <th>Teljesítmény</th>
                    <th>Gyorsulás</th>
                    <th>Származási hely</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car['Name'] }}</td>
                        @if ($car['Miles_per_Gallon'] == '')
                            <td>-</td>
                        @else
                        <td>{{ $car['Miles_per_Gallon'] }}</td>
                        @endif
                        <td>{{ $car['Cylinders'] }}</td>
                        <td>{{ $car['Horsepower'] }}</td>
                        <td>{{ $car['Acceleration'] }}</td>
                        <td>{{ $car['Origin'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
