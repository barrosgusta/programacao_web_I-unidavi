
@extends("layout/app")
@section("title")
    <strong>Bem vindo!!</strong>
@endsection
@section("content")
    <form method="GET" action="{{url('cost')}}" class="flex flex-col gap-2">
        @csrf
        <select class="border p-2 rounded-lg" name="fueltype" id="fueltype">
            @foreach($fueltypes as $fueltype)
                <option value="{{$fueltype}}">{{$fueltype}}</option>
            @endforeach
        </select>

        <input class="w-96 border p-2 rounded-lg" type="number" name="fuelprice" id="fuelprice" placeholder="Digite o preço do combustível">
        <input class="w-96 border p-2 rounded-lg" type="number" name="tripdistance" id="tripdistance" placeholder="Digite a distância a ser percorrida em Km">
        <input class="w-96 border p-2 rounded-lg" type="number" name="vehicleconsumption" id="vehicleconsumption" placeholder="Digite o consumo de combustível do veiculo(Km/l)">

        <button class="mt-4 py-1 border rounded-lg shadow-md hover:bg-indigo-500 hover:text-white transition-all" type="submit">Enviar</button>
    </form>
@endsection