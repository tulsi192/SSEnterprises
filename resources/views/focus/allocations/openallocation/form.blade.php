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
                    @foreach ($warehouses as $warehouse)
                        <option value="{{ $warehouse['id'] }}">{{ $warehouse['title'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class='col-lg-2'>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="allocationtype" value="current" id="Allocation type">
                        Current Bill
                    </label>
                    <label>
                        <input type="radio" name="allocationtype" value="past">
                        Past Bill
                    </label>
                    <label>
                        <input type="radio" name="allocationtype" value="both">
                        Both
                    </label>
                </div>
            </div>
            <div class='col-lg-2'>
                <p>selecting bills:</p>
                <select class="form-control" name="bill_ids[]" id="Addition" multiple >

                    @foreach ($bills as $bill)
                        <option value="{{ $bill->id }}">{{ $bill->id }}{{ $bill->name }}</option>
                    @endforeach

                </select>

                <input type="hidden" name="bill_ids" id="billIdsInput" value="">





            </div>


            <div class='col-lg-2'>
                <P>From:</P>
                <select class="form-control" name="fbill_id" id="add bill">
                    @foreach ($bills as $bill)
                        <option value="{{ $bill->id }}">{{ $bill->id }}{{ $bill->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class='col-lg-2'>
                <P>selecting salesman:</P>
                <select class="form-control" name="sales_id" id="routebill">
                    @foreach ($sellers as $seller)
                        <option value="{{ $seller['id'] }}">{{ $seller['first_name'] }}</option>
                    @endforeach
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
                    <select class="form-control" name="tobill_id" id="tobill">
                        @foreach ($bills as $bill)
                            <option value="{{ $bill->id }}">{{ $bill->id }}{{ $bill->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-lg-2'>
                    <P>Route Code:</P>
                    <select class="form-control" name="route[]" id="routeSelect" multiple>
                        <option value="">Select route</option>
                        @foreach ($routes as $route)
                            <option value="{{ $route->id }}">{{ $route->id }}{{ $route->Routecode }}</option>
                        @endforeach
                    </select>


                    <input type="hidden" name="selectedValues" id="selectedValuesInput">

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

        <script>
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
        </script>




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
    @endsection
