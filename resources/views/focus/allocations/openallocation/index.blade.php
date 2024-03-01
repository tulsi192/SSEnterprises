@extends ('core.layouts.app')

@section('title', trans('labels.backend.allocations.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.allocations.management') }}</h1>
@endsection

@section('content')
    <div class="">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h4 class="content-header-title mb-0">{{ trans('allocations.management') }}</h4>

                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="media width-250 float-right">

                        <div class="media-body media-right text-right">
                            @include('focus.allocations.openallocation.partials.allocations-header-buttons')
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">

                                <div class="card-body">
                                    <table id="routes-table" class="table table-striped table-bordered zero-configuration"
                                        cellspacing="0" width="100%">
                                        <thead>

                                            <tr>
                                                <th>#</th>
                                                <th>{{ trans('routes.allocationnumber') }}</th>
                                                <th>{{ trans('routes.wharehouse') }}</th>
                                                <th>{{ trans('routes.code') }}</th>
                                                <th>{{ trans('routes.employee') }}</th>
                                                <th>{{ trans('routes.sales') }}</th>


                                                <th>{{ trans('labels.general.actions') }}</th>

                                            </tr>
                                        </thead>


                                        <tbody>


                                            @foreach ($allocation as $key => $allocations)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $allocations['allocation_number'] }}</td>
                                                    <td>{{ optional($allocations['warehouse'])['title'] }}</td>
                                                    <td>
                                                        @foreach (explode(', ', $routeNames[$key]) as $name)
                                                            {{ $name }},
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @php
                                                            $userNamesArray = explode(', ', $userNames[$key]);
                                                            if (count($userNamesArray) > 1) {
                                                                array_pop($userNamesArray); // Remove the last element from the array
                                                                echo implode(', ', $userNamesArray); // Display the remaining elements
                                                            } elseif (count($userNamesArray) == 1) {
                                                                echo $userNamesArray[0]; // Display single user directly in employee column
                                                            }
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        @php
                                                            $userNamesArray = explode(', ', $userNames[$key]);
                                                            if (count($userNamesArray) > 1) {
                                                                echo end($userNamesArray); // Display the last element of the array (salesman)
                                                            }
                                                        @endphp
                                                    </td>
                                                </tr>
                                            @endforeach







                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    {{-- For DataTables --}}
    {{-- {{ Html::script(mix('js/dataTable.js')) }}
    <script>
        $(function () {
            setTimeout(function () {
                draw_data()
            }, {{config('master.delay')}});
        });

        function draw_data() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var dataTable = $('#routes-table').dataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                language: {
                    @lang('datatable.strings')
                },
                ajax: {
                    url: '{{ route("biller.routes.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'DT_Row_Index', name: 'id'},
                    {data: 'Routename', name: 'Routename'},
                    {data: 'Routecode', name: 'Routecode'},
                    {data: 'sales_name', name: 'sales_name'}, 
                    {data: 'created_at', name: 'created_at'},
                 
                    
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'Blfrtip',
                buttons: {
                    buttons: [

                        {extend: 'csv', footer: true, exportOptions: {columns: [0, 1, 2,3]}},
                        {extend: 'excel', footer: true, exportOptions: {columns: [0, 1, 2,3]}},
                        {extend: 'print', footer: true, exportOptions: {columns: [0, 1, 2,3]}}
                    ]
                }
            });
            $('#routes-table_wrapper').removeClass('form-inline');

        }
    </script> --}}
@endsection