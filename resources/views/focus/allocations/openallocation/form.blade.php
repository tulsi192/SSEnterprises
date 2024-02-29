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
                <select class="form-control" name="bill_ids[]" id="Addition" multiple>

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

                <div id="selectedValues1"></div>

                <!-- Hidden input field to store selected values -->
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
                    <div id="selectedValues"></div>

                    <!-- Hidden input field to store selected values -->
                    <input type="hidden" name="selectedValues" id="selectedValuesInput">
                    {{-- <a href="#" class="add-route" data-target="route">add</a> --}}
                </div>



            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <p>Bill Count: 2</p>
            </div>
            <div class="col-sm-9">
                <p class="selected-employees">Selected Employees:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p>Amount: 0</p>
            </div>
            <div class="col-sm-3">
                <p>Selected Routes:</p>
                <div class="selected-routes"></div>
            </div>
        </div>
    </div>

    <table class="billTable">
        <thead>
            <tr>
                <th>Bill No.</th>
                <th>Date</th>
                <th>Retailer Name</th>
                <th>Amount</th>

                {{-- <th>Past Coll.</th>
                <th>CD</th> --}}
                <th>Pending Amount</th>
                {{-- <th>Today's Coll.</th> --}}
                <!-- Add other relevant columns here -->
            </tr>
        </thead>
        <tbody id="billDetailsBody">
            <!-- Rows will be dynamically inserted here -->
        </tbody>
    </table>



    @section('after-scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                // Function to add a route to the selected routes list
                // function addSelectedRoute(selectedRoute) {
                //     $('.selected-routes').append('<span class="selected-route-item"><span>' + selectedRoute +
                //         '</span><button class="remove-route btn btn-danger btn-sm">x</button></span>');
                // }
                // function addSelectedEmployee(selectedEmployee) {
                //     $('.selected-employees').append('<span class="selected-employee-item"><span>' + selectedEmployee +
                //         '</span><button class="remove-employee btn btn-danger btn-sm">x</button></span>');
                // }
                // Event listener for click events on the add-route button
                //             $('.add-route').click(function(event) {
                //                 event.preventDefault();
                //                 var targetId = $(this).data('target');
                //                 var selectedRoutes = []; 
                //                 // var selectedRoute = $('#' + targetId + ' option:selected').text();

                //                 $('#' + targetId + ' option:selected').each(function() {
                //                     selectedRoutes.push($(this).text());
                // });
                // console.log(selectedRoutes);
                //                 addSelectedRoute(selectedRoutes); // Add the selected route to the list


                //             });
                // Event listener for click events on the remove-route button
                // $(document).on('click', '.remove-route', function() {
                //     $(this).parent('.selected-route-item')
                // .remove(); // Remove the parent element containing the selected route
                // });
                //     $('.add-employee').click(function(event) {
                //         event.preventDefault();
                //         var targetId = $(this).data('target');
                //         var selectedEmployee = $('#' + targetId + ' option:selected').text();
                //         addSelectedEmployee(selectedEmployee); // Add the selected route to the list
                //     });
                //     // Event listener for click events on the remove-route button
                //     $(document).on('click', '.remove-employee', function() {
                //         $(this).parent('.selected-employee-item')
                //     .remove(); // Remove the parent element containing the selected route
                //     });
            });
        </script>


        <script>
            $(document).ready(function() {
                // Define an object to store bill details
                var billDetails = {};

                // Populate billDetails object with bill details from PHP
                @foreach ($bills as $bill)
                    billDetails['{{ $bill->id }}'] = {
                        id: '{{ $bill->id }}',
                        invoicedate: '{{ $bill->invoicedate}}',
                        name: '{{ $bill->name }}',
                        total: '{{ round($bill->total) }}',
                        pamnt: '{{round($bill->pamnt)}}',

                    };
                @endforeach

                // Attach change event handler to #Addition select element
                $('#Addition').change(function() {
                    // Get the selected bill IDs
                    var selectedBillIds = $(this).val();

                    // Loop through each selected bill ID
                    selectedBillIds.forEach(function(selectedBillId) {
                        // Retrieve the details of the selected bill using the billDetails object
                        var selectedBillDetails = billDetails[selectedBillId];
                   
                        if (selectedBillDetails) {
                            var difference = selectedBillDetails.total - selectedBillDetails.pamnt;
                            
                            // Create a new row element with bill details and a remove button
                            var newRow = '<tr>' +
                                '<td>' + selectedBillDetails.id + '</td>' +
                                '<td>' + selectedBillDetails.invoicedate + '</td>' +
                                '<td>' + selectedBillDetails.name + '</td>' +
                                '<td>' + selectedBillDetails.total + '</td>' +
                                '<td>' + difference + '</td>' +
                              
                                '<td><button class="btn btn-danger btn-sm remove-bill">Remove</button></td>' +
                                '</tr>';

                            // Append the new row to the table body
                            $('#billDetailsBody').append(newRow);
                        } else {
                            console.error('No details found for the selected bill ID: ' +
                                selectedBillId);
                        }
                    });

                    // Update the value of the hidden input field with all selected bill IDs
                    updateHiddenInput();
                });

                // Event delegation to handle remove button clicks
                $('#billDetailsBody').on('click', '.remove-bill', function() {
                    $(this).closest('tr').remove(); // Remove the row from the table
                    updateHiddenInput(); // Update the hidden input field
                });

                // Function to update the hidden input field with the selected bill IDs
                function updateHiddenInput() {
                    var selectedBillIds = [];

                    // Loop through each row in the table to get the bill IDs
                    $('#billDetailsBody tr').each(function() {
                        var billId = $(this).find('td:first').text(); // Get the bill ID from the first column
                        selectedBillIds.push(billId);
                    });

                    // Update the value of the hidden input field with all selected bill IDs
                    $('#billIdsInput').val(selectedBillIds.join(','));
                }
            });
        </script>

        <!-- JavaScript code -->
        <!-- JavaScript code -->
        <!-- JavaScript code -->






















        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectElement = document.getElementById('routeSelect');
                const selectedValuesContainer = document.getElementById('selectedValues');
                const selectedValuesInput = document.getElementById('selectedValuesInput');

                // Object to store selected values (id and name)
                let selectedValues = {};

                // Function to update selected values
                function updateSelectedValues() {
                    // Clear previous content
                    selectedValuesContainer.innerHTML = '';

                    // Iterate over all selected values and add them to the container
                    for (const id in selectedValues) {
                        const selectedValue = document.createElement('div');
                        selectedValue.textContent = selectedValues[id];

                        // Create a remove button for the selected value
                        const removeButton = document.createElement('button');
                        removeButton.textContent = '✖';
                        removeButton.dataset.id = id;
                        removeButton.addEventListener('click', function() {
                            const idToRemove = this.dataset.id;
                            delete selectedValues[idToRemove];
                            updateSelectedValues();
                        });

                        // Append the remove button to the selected value
                        selectedValue.appendChild(removeButton);

                        selectedValuesContainer.appendChild(selectedValue);
                    }

                    // Update the hidden input field with selected values
                    selectedValuesInput.value = JSON.stringify(selectedValues);
                }

                // Event listener for changes in the select element
                selectElement.addEventListener('change', function() {
                    // Get all selected options
                    const selectedOptions = Array.from(this.selectedOptions);

                    // Iterate over each selected option
                    selectedOptions.forEach(option => {
                        // If the option is not already in the selected values object, add it
                        if (!selectedValues.hasOwnProperty(option.value)) {
                            selectedValues[option.value] = option.text;
                        }
                    });

                    // Update selected values
                    updateSelectedValues();
                });
            });
        </script>




        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectElement = document.getElementById('employeeSelect');
                const selectedValuesContainer = document.getElementById('selectedValues1');
                const selectedValuesInput1 = document.getElementById('selectedValuesInput1');

                // Object to store selected values (id and name)
                let selectedValues1 = {};

                // Function to update selected values
                function updateSelectedValues() {
                    // Clear previous content
                    selectedValuesContainer.innerHTML = '';

                    // Iterate over all selected values and add them to the container
                    for (const id in selectedValues1) {
                        const selectedValue1 = document.createElement('div');
                        selectedValue1.textContent = selectedValues1[id];

                        // Create a remove button for the selected value
                        const removeButton = document.createElement('button');
                        removeButton.textContent = '✖';
                        removeButton.dataset.id = id;
                        removeButton.addEventListener('click', function() {
                            const idToRemove = this.dataset.id;
                            delete selectedValues1[idToRemove];
                            updateSelectedValues();
                        });

                        // Append the remove button to the selected value
                        selectedValue1.appendChild(removeButton);

                        selectedValuesContainer.appendChild(selectedValue1);
                    }

                    // Update the hidden input field with selected values
                    selectedValuesInput1.value = JSON.stringify(selectedValues1);
                }

                // Event listener for changes in the select element
                selectElement.addEventListener('change', function() {
                    // Get all selected options
                    const selectedOptions = Array.from(this.selectedOptions);

                    // Iterate over each selected option
                    selectedOptions.forEach(option => {
                        // If the option is not already in the selected values object, add it
                        if (!selectedValues1.hasOwnProperty(option.value)) {
                            selectedValues1[option.value] = option.text;
                        }
                    });

                    // Update selected values
                    updateSelectedValues();
                });
            });
        </script>
    @endsection
