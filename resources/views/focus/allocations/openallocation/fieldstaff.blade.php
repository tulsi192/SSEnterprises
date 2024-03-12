@extends ('core.layouts.app')

@section('title', trans('labels.backend.cashbooks.management') . ' | ' . trans('labels.backend.cashbooks.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.cashbookd.management') }}
        <small>{{ trans('labels.backend.cashbooks.create') }}</small>
    </h1>
@endsection

@section('content')
    <div class="">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">



                </div>
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h4 class="content-header-title mb-0">{{ trans('Fieldstaff Hisab') }}</h4>



                </div>
                <div class="content-header-left col-md-4 col-12 mb-2">



                </div>
            </div>
            <hr>
            <div class="content-body">

                <div class="row">
                    <div class="col-md-6">
                        Allocation:<span>{{ $allocationdata->allocation_number }}</span>
                        Warehouse:<span>{{ $allocationdata->warehouse->title }}</span>
                        Employee:<span>
                            @foreach ($usernames as $employees)
                                {{ $employees . ',' }}
                            @endforeach

                        </span>
                        Route:<span>

                            @foreach ($route_name as $name)
                                {{ $name . ',' }}
                            @endforeach
                        </span>
                    </div>
                    <div class="col-md-6">
                        <table border="1">
                            <tr>
                                <th>Particulars</th>
                                <th>Total Bills</th>

                                <th>FSR</th>
                                <th>Resend</th>
                                <th>Delivered</th>
                            </tr>
                            <tr>
                                <td>No. of Bills</td>
                                <td>{{ $count }}</td>
                                <td>{{ 0 }}</td>
                                <td>{{ 0 }}</td>
                                <td>{{ $count }}</td>
                            </tr>
                            <tr>
                                <th>Particulars</th>
                                <th>Total Value</th>

                                <th>Cash</th>
                                <th>Cheque/NEFT</th>
                                <th>Other Adj</th>
                                <th>SR/FSR</th>
                                <th>Credit</th>
                                <th>Resend</th>
                            </tr>
                            <tr>
                                <td>No. of Bills</td>
                                <td>{{ $amount }}</td>
                                <td  id="totalCashAmount"></td>
                                <td id="totalChequeAmount"></td>
                                <td>{{ 0 }}</td>
                                <td>{{ 0 }}</td>
                                <td>{{ 0 }}</td>
                                <td>{{ 0 }}</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </table>
                    </div>
                </div>


            </div>


            <div class="table-responsive">
                <table class="table table-striped" style="margin-top: 50px; text-align: center;">
                    <tr>
                        <th colspan="8" style="text-align: center;">Past Bills</th>
                    </tr>
                    <tr>
                        <th> S. No.</th>

                        <th>Bill No.</th>
                        <th>Bill Date</th>
                        <th>Retailer Name</th>
                        <th>Bill Amount</th>
                        <th>Past SR</th>
                        <th>Past Collection</th>
                        <th>Today's SR</th>
                        <th>Today's Collection</th>
                        <th>Pending Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @php $serialNumber = 1; @endphp
                    @foreach ($invoicebillsdata as $invoice)
                        <tr>
                            <td>{{ $serialNumber++ }}</td>
                            <td>{{ $invoice->tid }}</td>
                            <td>{{ $invoice->invoicedate }}</td>
                            <td>{{ $invoice->customer->name }}</td>
                            <td>{{ $invoice->total}}</td>
                            <td>{{ 0 }}</td>
                            <td>{{ 0 }}</td>
                            <td>{{0}}</td>
                            <td id="displayAmount_{{ $invoice->id }}"></td>
                            <td id="pendingAmount_{{ $invoice->id }}">{{ $invoice->total - $invoice->pamnt }}</td>
                            <td id="statusCell_{{ $invoice->id }}"></td>
                            <td>
                                <a href="#">SR</a>
                                <a href="#" class="openModalCash" data-target="{{ 'cashModal_' . $invoice->id }}">Cash</a>
                               
                                <div class="modal fade" id="{{ 'cashModal_' . $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        @include('focus.allocations.openallocation.cash');
                                    </div>
                                </div>
                                
                                <a href="#" class="openModalCheque" data-target="{{ 'chequeModal_' . $invoice->id }}">Cheque</a>
                                <div class="modal fade" id="{{ 'chequeModal_' . $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        @include('focus.allocations.openallocation.cheque');
                                    </div>
                                </div>
                                <a href="#" class="openModalNeft" data-target="{{ 'neftModal_' . $invoice->id }}">NEFT</a>
                                <div class="modal fade" id="{{ 'neftModal_' . $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        @include('focus.allocations.openallocation.neft');
                                    </div>
                                </div>
                                <a href="#" class="openModalOther" data-target="{{ 'otherModal_' . $invoice->id }}">Other</a>
                                <div class="modal fade" id="{{ 'otherModal_' . $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        @include('focus.allocations.openallocation.other');
                                    </div>
                                </div>
                                <a href="#">Bill</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>


           

        </div>
    </div>

    @section("after-scripts")
 
    <script>
        document.querySelectorAll('.openModalCash').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default behavior of the link
                var targetModalId = this.getAttribute('data-target');
                $('#' + targetModalId).modal('show'); // Show the modal corresponding to the clicked link
            });
        });
        document.querySelectorAll('.openModalCheque').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default behavior of the link
                var targetModalId = this.getAttribute('data-target');
                $('#' + targetModalId).modal('show'); // Show the modal corresponding to the clicked link
            });
        });
        document.querySelectorAll('.openModalNeft').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default behavior of the link
                var targetModalId = this.getAttribute('data-target');
                $('#' + targetModalId).modal('show'); // Show the modal corresponding to the clicked link
            });
        });
        document.querySelectorAll('.openModalOther').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default behavior of the link
                var targetModalId = this.getAttribute('data-target');
                $('#' + targetModalId).modal('show'); // Show the modal corresponding to the clicked link
            });
        });
    </script>
  




@endsection
@endsection
