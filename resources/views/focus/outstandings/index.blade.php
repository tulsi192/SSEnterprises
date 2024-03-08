@extends ('core.layouts.app')

@section ('title', trans('labels.backend.routes.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.routes.management') }}</h1>
@endsection

@section('content')
    <div class="">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h4 class="content-header-title mb-0">{{ trans('general.bill') }}</h4>

                </div>
                {{-- <div class="content-header-right col-md-6 col-12">
                    <div class="media width-250 float-right">

                        <div class="media-body media-right text-right">
                            @include('focus.route.partials.routes-header-buttons')
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">

                                <div class="card-body">
                                    <table id="invoices-table"
                                           class="table table-striped table-bordered zero-configuration" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('invoices.id') }}</th>
                                            <th>{{ trans('invoices.invoicedate') }}</th>
                                            <th>{{ trans('invoices.retailer') }}</th>
                                            <th>{{ trans('invoices.total') }}</th>
                                            <th>{{ trans('invoices.Pendingamount') }}</th>
                                           

                                            {{-- <th>{{ trans('routes.code') }}</th>
                                            <th>{{ trans('routes.sales') }}</th> --}}
                                            <th>{{ trans('invoices.created') }}</th>
                                           
                                            <th>{{ trans('labels.general.actions') }}</th>
                                           
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td colspan="100%" class="text-center text-success font-large-1"><i
                                                        class="fa fa-spinner spinner"></i></td>
                                        </tr>
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
    {{ Html::script(mix('js/dataTable.js')) }}
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

            var dataTable = $('#invoices-table').dataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                language: {
                    @lang('datatable.strings')
                },
                ajax: {
                    url: '{{ route("biller.outstandingbills.gettable") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'DT_Row_Index', name: 'id'},
                    {data: 'id', name: 'id'}, 
                    {data:'invoicedate',name:'invoicedate'},
            
                    {data:'Retailer',name:'Retailer'},
                    {data:'total',name:'total'},
                    {data:'pending',name:'pending'},
                    {data: 'created_at', name: 'created_at'},
                 
                    
                    {data: 'action', name: 'action', searchable: false, sortable: false}
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
            $('#invoices-table_wrapper').removeClass('form-inline');

        }
    </script>
@endsection
