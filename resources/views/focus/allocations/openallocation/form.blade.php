<div class='form-group'>
    <div class="row">
        {{ Form::label('warehouse', trans('Warehouse'), ['class' => 'col-lg-3 control-label']) }}

        {{ Form::label('Allocation type', trans('Allocation type'), ['class' => 'col-lg-2 control-label']) }}
        {{ Form::label('Addition', trans('Additional Bill'), ['class' => 'col-lg-2 control-label']) }}
        {{ Form::label('add bill', trans('Add Bills'), ['class' => 'col-lg-2 control-label']) }}
        {{ Form::label('routebill', trans('Route Bills'), ['class' => 'col-lg-3 control-label']) }}
    </div>
    <div>
        <div class="row">
            <div class='col-lg-3'>
                <select class="form-control" name="warehouse_id" id="warehouse">
                    <option value="">Select Warehouse</option>
                    @foreach ($warehouses as $warehouse)
                        <option value="{{ $warehouse['id'] }}">{{ $warehouse['title'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class='col-lg-2'>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="allocationtype" value="current" id="allocationCurrent">
                        Current Bill
                    </label>
                    <label>
                        <input type="radio" name="allocationtype" value="past" id="allocationPast">
                        Past Bill
                    </label>
                    <label>
                        <input type="radio" name="allocationtype" value="both" id="allocationBoth">
                        Both
                    </label>
                </div>
            </div>
            <div class='col-lg-2'>
                <p>Selecting bills:</p>
                <select class="form-control" name="bill_ids[]" id="Addition" multiple>
                    <!-- Options will be populated dynamically -->
                </select>
                <input type="hidden" name="bill_ids" id="billIdsInput" value="">
            </div>


            <div class='col-lg-2'>
                <P>From:</P>
                <select class="form-control" name="fbill_id" id="addBill">
                    <!-- Options will be populated dynamically -->
                </select>
            </div>
            <div class='col-lg-2'>
                <p>Selecting salesman:</p>
                <select class="form-control" name="sales_id" id="routebill" disabled>
                    <option value="">Select Salesman</option>
                </select>
            </div>
        </div>
    </div>
    <div class='form-group'>
        <div>
            <div class="row">
                <div class='col-lg-3'>
                    <P>Employee</P>
                    <select class="form-control" name="employee[]" id="employeeSelect" multiple>
                        <option value="">Select employee</option>
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->first_name }}</option>
                        @endforeach
                    </select>

                </div>



                <input type="hidden" name="selectedValues1" id="selectedValuesInput1">






                <div class='col-lg-2'>
                </div>
                <div class='col-lg-2'>
                </div>
                <div class='col-lg-2'>
                    <P>To:</P>
                    <select class="form-control" name="tobill_id" id="toBill">
                        <!-- Options will be populated dynamically -->
                    </select>
                </div>
                
                <div class='col-lg-2'>
                    <p>Route Code:</p>
                    <select class="form-control" name="routeSelect" id="routeSelect" disabled>
                        <!-- Options will be appended dynamically here -->
                    </select>
                </div>



            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <p>Bill Count: 2</p>
            </div>
            <div class="col-sm-9">
                <p>Selected Employees:<span id="selectedValues1"></span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p>Amount: 0</p>
            </div>
            <div class="col-sm-3">
                <p>Selected Routes:<span id="selectedValues"></span></p>
            </div>
        </div>
    </div>

    <table class="billTable table">
        <thead>
            <tr>
                <th>Bill No.</th>
                <th>Invoice date</th>
                <th>Retailer Name</th>
                <th>Amount</th>


                <th>Pending Amount</th>
                <th>Remove</th>

            </tr>
        </thead>
        <tbody id="billDetailsBody">

        </tbody>
    </table>



    @section('after-scripts')
        <script type="text/javascript">
            $(document).ready(function() {

            });
        </script>


        <script>
            $(document).ready(function() {

                var billDetails = {};


                @foreach ($bills as $bill)
                    billDetails['{{ $bill->id }}'] = {
                        id: '{{ $bill->id }}',
                        invoicedate: '{{ $bill->invoicedate }}',
                        name: '{{ $bill->name }}',
                        total: '{{ round($bill->total) }}',
                        pamnt: '{{ round($bill->pamnt) }}',

                    };
                @endforeach


                $('#Addition').change(function() {

                    var selectedBillIds = $(this).val();


                    selectedBillIds.forEach(function(selectedBillId) {

                        var selectedBillDetails = billDetails[selectedBillId];

                        if (selectedBillDetails) {
                            var difference = selectedBillDetails.total - selectedBillDetails.pamnt;


                            var newRow = '<tr>' +
                                '<td>' + selectedBillDetails.id + '</td>' +
                                '<td>' + selectedBillDetails.invoicedate + '</td>' +
                                '<td>' + selectedBillDetails.name + '</td>' +
                                '<td>' + selectedBillDetails.total + '</td>' +
                                '<td>' + difference + '</td>' +

                                '<td><button class="btn btn-danger btn-sm remove-bill">X</button></td>' +
                                '</tr>';


                            $('#billDetailsBody').append(newRow);
                        } else {
                            console.error('No details found for the selected bill ID: ' +
                                selectedBillId);
                        }
                    });


                    updateHiddenInput();
                });


                $('#billDetailsBody').on('click', '.remove-bill', function() {
                    $(this).closest('tr').remove();
                    updateHiddenInput();
                });


                function updateHiddenInput() {
                    var selectedBillIds = [];


                    $('#billDetailsBody tr').each(function() {
                        var billId = $(this).find('td:first').text();
                        selectedBillIds.push(billId);
                    });


                    $('#billIdsInput').val(selectedBillIds.join(','));
                }
            });
        </script>

        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectElement = document.getElementById('routeSelect');
                const selectedValuesContainer = document.getElementById('selectedValues');
                const selectedValuesInput = document.getElementById('selectedValuesInput');


                let selectedValues = {};


                function updateSelectedValues() {

                    selectedValuesContainer.innerHTML = '';


                    for (const id in selectedValues) {
                        const selectedValue = document.createElement('span');
                        selectedValue.textContent = selectedValues[id];


                        const removeButton = document.createElement('button');
                        removeButton.textContent = '✖';
                        removeButton.dataset.id = id;
                        removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
                        removeButton.addEventListener('click', function() {
                            const idToRemove = this.dataset.id;
                            delete selectedValues[idToRemove];
                            updateSelectedValues();
                        });


                        selectedValue.appendChild(removeButton);

                        selectedValuesContainer.appendChild(selectedValue);
                    }


                    selectedValuesInput.value = JSON.stringify(selectedValues);
                }


                selectElement.addEventListener('change', function() {

                    const selectedOptions = Array.from(this.selectedOptions);


                    selectedOptions.forEach(option => {

                        if (!selectedValues.hasOwnProperty(option.value)) {
                            selectedValues[option.value] = option.text;
                        }
                    });


                    updateSelectedValues();
                });
            });
        </script> --}}




        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectElement = document.getElementById('employeeSelect');
                const selectedValuesContainer = document.getElementById('selectedValues1');
                const selectedValuesInput1 = document.getElementById('selectedValuesInput1');


                let selectedValues1 = {};


                function updateSelectedValues() {

                    selectedValuesContainer.innerHTML = '';


                    for (const id in selectedValues1) {
                        const selectedValue1 = document.createElement('span');
                        selectedValue1.textContent = selectedValues1[id];


                        const removeButton = document.createElement('button');
                        removeButton.textContent = '✖';
                        removeButton.dataset.id = id;
                        removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
                        removeButton.addEventListener('click', function() {
                            const idToRemove = this.dataset.id;
                            delete selectedValues1[idToRemove];
                            updateSelectedValues();
                        });


                        selectedValue1.appendChild(removeButton);

                        selectedValuesContainer.appendChild(selectedValue1);
                    }


                    selectedValuesInput1.value = JSON.stringify(selectedValues1);
                }


                selectElement.addEventListener('change', function() {

                    const selectedOptions = Array.from(this.selectedOptions);


                    selectedOptions.forEach(option => {

                        if (!selectedValues1.hasOwnProperty(option.value)) {
                            selectedValues1[option.value] = option.text;
                        }
                    });


                    updateSelectedValues();
                });
            });
        </script>


<script>
    $(document).ready(function() {
        $('#warehouse').change(function() {
            var warehouseId = $(this).val();
            if (warehouseId) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('getSalesmenByWarehouse') }}?warehouse_id=" + warehouseId,
                    success: function(res) {
                        if (res && res.length > 0) {
                            $("#routebill").empty();
                            $("#routebill").removeAttr('disabled');
                            $.each(res, function(index, salesman) {
                                $("#routebill").append('<option value="' + salesman.id + '">' + salesman.first_name + ' ' + salesman.last_name + '</option>');
                            });
                            // Trigger change event after populating salesman dropdown
                            $('#routebill').trigger('change');
                        } else {
                            $("#routebill").empty();
                            $("#routebill").attr('disabled', true);
                        }
                    }
                });
            } else {
                $("#routebill").empty();
                $("#routebill").attr('disabled', true);
            }
        });

        $('#routebill').change(function() {
            var salesmanId = $(this).val();
            if (salesmanId) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('getRoutesBySalesman') }}?salesman_id=" + salesmanId,
                    success: function(res) {

                        console.log(res);
                        if (res && res.length > 0) {
                            $("#routeSelect").empty();
                            $("#routeSelect").removeAttr('disabled');
                            $.each(res, function(index, route) {
    $("#routeSelect").append('<option value="' + route.id + '">' + route.Routename + '</option>');
});
                        } else {
                            $("#routeSelect").empty();
                            $("#routeSelect").attr('disabled', true);
                        }
                    }
                });
            } else {
                $("#routeSelect").empty();
                $("#routeSelect").attr('disabled', true);
            }
        });
    });
</script>
<script>
  $(document).ready(function() {
    $('input[type=radio][name=allocationtype], #warehouse').change(function() {
        var selectedAllocationType = $('input[type=radio][name=allocationtype]:checked').val();
        var selectedWarehouseId = $('#warehouse').val();
       
        var filteredBills = {!! json_encode($filteredBills) !!};     

        if (!Array.isArray(filteredBills)) {
            console.error('Bills data is not an array:', filteredBills);
            return;
        }
        
        // Filter bills based on warehouse ID
        filteredBills = filteredBills.filter(function(bill) {
            return bill.warehouse_id == selectedWarehouseId;
        });

        if (selectedAllocationType === 'current') {
            // Apply current month filter
            filteredBills = filteredBills.filter(function(bill) {
                var currentDate = new Date();
                var invoiceDate = new Date(bill.invoicedate);
                return invoiceDate.getMonth() === currentDate.getMonth() && 
                       invoiceDate.getFullYear() === currentDate.getFullYear();
            });
        } else if (selectedAllocationType === 'past') {
            // Apply past month filter
            filteredBills = filteredBills.filter(function(bill) {
                var currentDate = new Date();
                var invoiceDate = new Date(bill.invoicedate);
                return invoiceDate.getMonth() !== currentDate.getMonth() || 
                       invoiceDate.getFullYear() !== currentDate.getFullYear();
            });
        }
        
        // Update the bill select options
        updateBillSelectOptions(filteredBills);
    });

    // Function to update the bill select options
    function updateBillSelectOptions(bills) {
        $('#Addition, #addBill, #toBill').empty();
        bills.forEach(function(bill) {
            $('#Addition, #addBill, #toBill').append('<option value="' + bill.id + '">' + bill.id + ' ' + bill.name + '</option>');
        });
    }
});

</script>


    @endsection
