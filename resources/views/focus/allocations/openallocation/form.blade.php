<div class='form-group'>
    <div class="row">
        {{ Form::label('warehouse', trans('Warehouse'), ['class' => 'col-lg-3 control-label']) }}
        {{ Form::label('Allocation type', trans('Allocation type'), ['class' => 'col-lg-2 control-label']) }}
        {{ Form::label('Additional bill', trans('Additional Bill'), ['class' => 'col-lg-2 control-label']) }}
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
                        <input type="radio" name="bill" value="current" id="Allocation type">
                        Current Bill
                    </label>
                    <label>
                        <input type="radio" name="bill" value="past">
                        Past Bill
                    </label>
                    <label>
                        <input type="radio" name="bill" value="both">
                        Both
                    </label>
                </div>
            </div>
            <div class='col-lg-2'>
                <p>selecting bills:</p>
                <select class="form-control" name="bill_id" id="AdditionalBill">
                    @foreach ($bills as $bill)
                        <option value="{{ $bill['id'] }}">{{ $bill['id'] }}{{ $bill['name'] }}</option>
                    @endforeach
                </select>
                <a href="#" class="add-bill btn btn-primary">Add</a>
            </div>
            
            
            <div class='col-lg-2'>
                <P>From:</P>
                <select class="form-control" name="fbill_id" id="add bill">
                    @foreach ($bills as $bill)
                        <option value="{{ $bill['id'] }}">{{ $bill['id'] }}{{ $bill['name'] }}</option>
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
                    <select class="form-control" name="employee_id" id="employee">
                        @foreach ($employees as $employee)
                            <option value="{{ $employee['id'] }}">{{ $employee['first_name'] }}</option>
                        @endforeach
                    </select>
                    <a href="#" class="add-employee" data-target="employee">add</a>
                </div>
                <div class='col-lg-2'>
                </div>
                <div class='col-lg-2'>
                </div>
                <div class='col-lg-2'>
                    <P>To:</P>
                    <select class="form-control" name="tobill_id" id="tobill">
                        @foreach ($bills as $bill)
                            <option value="{{ $bill['id'] }}">{{ $bill['id'] }}{{ $bill['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-lg-2'>
                    <P>Route Code:</P>
                    <select class="form-control" name="route_id" id="route">
                        @foreach ($routes as $route)
                            <option value="{{ $route['id'] }}">{{ $route['id'] }}{{ $route['Routecode'] }}</option>
                        @endforeach
                    </select>
                    <a href="#" class="add-route" data-target="route">add</a>
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

    <table class="table">
        <thead>
            <tr>
                <th>S. No.</th>
                <th>Bill No.</th>
                <th>Date</th>
                <th>Retailer Name</th>
                <th>Amount</th>
                <th>Sale Return</th>
                <th>Past Coll.</th>
                <th>CD</th>
                <th>Pending Amount</th>
                <th>Today's Coll.</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody class="billTable tbody">
            <tr>
                <td>1</td>
                <td>1001</td>
                <td>2024-02-25</td>
                <td>Retailer 1</td>
                <td>$100.00</td>
                <td>$10.00</td>
                <td>$20.00</td>
                <td>$5.00</td>
                <td>$75.00</td>
                <td>$25.00</td>
                <td>
                    <button class="btn btn-danger btn-sm">x</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    
    
    @section('after-scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                // Function to add a route to the selected routes list
                function addSelectedRoute(selectedRoute) {
                    $('.selected-routes').append('<span class="selected-route-item"><span>' + selectedRoute +
                        '</span><button class="remove-route btn btn-danger btn-sm">x</button></span>');
                }
                function addSelectedEmployee(selectedEmployee) {
                    $('.selected-employees').append('<span class="selected-employee-item"><span>' + selectedEmployee +
                        '</span><button class="remove-employee btn btn-danger btn-sm">x</button></span>');
                }
                // Event listener for click events on the add-route button
                $('.add-route').click(function(event) {
                    event.preventDefault();
                    var targetId = $(this).data('target');
                    var selectedRoute = $('#' + targetId + ' option:selected').text();
                    addSelectedRoute(selectedRoute); // Add the selected route to the list
                });
                // Event listener for click events on the remove-route button
                $(document).on('click', '.remove-route', function() {
                    $(this).parent('.selected-route-item')
                .remove(); // Remove the parent element containing the selected route
                });
                $('.add-employee').click(function(event) {
                    event.preventDefault();
                    var targetId = $(this).data('target');
                    var selectedEmployee = $('#' + targetId + ' option:selected').text();
                    addSelectedEmployee(selectedEmployee); // Add the selected route to the list
                });
                // Event listener for click events on the remove-route button
                $(document).on('click', '.remove-employee', function() {
                    $(this).parent('.selected-employee-item')
                .remove(); // Remove the parent element containing the selected route
                });
            });
            $(document).ready(function() {
    // Event listener for the "add" link
    $('.add-bill').click(function(event) {
        event.preventDefault();

        // Get the selected bill ID
        var selectedBillId = $('#AdditionalBill').val();

        // Make an AJAX request to retrieve the bill details
        $.ajax({
            url: '/bills/' + selectedBillId,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Append the retrieved bill details to the table
                $('.billTable tbody').append(
                    '<tr>' +
                        '<td>' + response.serialNumber + '</td>' + 
                        '<td>' + response.billNumber + '</td>' + 
                        '<td>' + response.date + '</td>' + 
                        '<td>' + response.retailerName + '</td>' + 
                        '<td>' + response.amount + '</td>' + 
                        '<td>' + response.saleReturn + '</td>' + 
                        '<td>' + response.pastCollection + '</td>' + 
                        '<td>' + response.cd + '</td>' + 
                        '<td>' + response.pendingAmount + '</td>' + 
                        '<td>' + response.todaysCollection + '</td>' + 
                        '<td><button class="btn btn-danger btn-sm remove-bill">Remove</button></td>' + 
                    '</tr>'
                );
            },
            error: function(xhr, status, error) {
                console.error(error); // Handle errors if any
            }
        });
    });

    // Event listener for the "remove" button within table rows
    $(document).on('click', '.remove-bill', function() {
        $(this).closest('tr').remove(); // Remove the entire row when the remove button is clicked
    });
});
  
      
        </script>
       
            
    @endsection
