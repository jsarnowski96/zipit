@include('layouts.app')
@section('dedicated_servers')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">{{ __('Serwery zarządzane')}}</div>
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                    @foreach($dedicated_servers as $key => $data)
                    <div class="col-md-4">
                        <table class="table" style="display:table-cell;">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">{{$data->product_name}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="col">Model procesora</th>
                                <td>{{$data->cpu_model}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Ilość CPU</th>
                                <td>{{$data->cpu_count}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Liczba rdzeni</th>
                                <td>{{$data->vcore_amount}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Liczba wątków</th>
                                <td>{{$data->thread_amount}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Wielkość pamięci RAM</th>
                                <td>{{$data->memory_size}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Przestrzeń dyskowa</th>
                                <td>{{$data->disk_space}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Rodzaj dysku</th>
                                <td>{{$data->disk_type}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Rodzaj macierzy RAID</th>
                                <td>{{$data->raid_type}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Przepustowość</th>
                                <td>{{$data->bandwidth}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Maksymalny transfer miesięczny</th>
                                <td>{{$data->max_data_transfer}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Cena</th>
                                <td>{{$data->price}} zł</td>
                            </tr>
                            <tr>
                                <th scope="col">Cykl rozliczeniowy</th>
                                <td>
                                    @if($data->billing_cycle == 'monthly')
                                        miesięczny
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">Dostęp użytkownika ROOT</th>
                                <td>
                                    @if($data->root_enabled == 0)
                                        nie
                                    @else
                                        tak
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">SLA</th>
                                <td>{{$data->sla_level}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><br />
@endsection
@if(Route::has('dedicated_servers'))
    @yield('dedicated_servers')
@endif
@include('footer')