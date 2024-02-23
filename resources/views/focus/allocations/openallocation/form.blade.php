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
                <select class="form-control" name="bill_id" id="Addition">
                    @foreach ($bills as $bill)
                        <option value="{{ $bill['id'] }}">{{ $bill['id'] }}{{ $bill['name'] }}</option>
                    @endforeach
                </select>
                <a href="#" class="add-bill btn btn-primary">Add bill</a>
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

    <table class="table" id="biiltable">
        <thead>
            <tr>
                <th>S. No.</th>
                <th>Bill No.</th>
                <th>Date</th>
                <th>Retailer Name</th>
                <th>Amount</th>
               
                <th>Past Coll.</th>
                <th>CD</th>
                <th>Pending Amount</th>
                <th>Today's Coll.</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody class="billTable tbody">
            <!-- Rows will be dynamically added here -->
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



                function updateSerialNumbers() {
        $('.billTable tbody tr').each(function(index) {
            $(this).find('td:first').text(index + 1);
        });
    }
                $('.billTable').on('click', '.btn-danger', function(e) {
        e.preventDefault();
        
        // Find the parent <tr> element and remove it
        $(this).closest('tr').remove();
        updateSerialNumbers();
    });
                let i=1
                
    $('.add-bill').click(function(e) {
        e.preventDefault();
        var selectedBillId = $('#Addition').val();
        
        // Fetch relevant bill data using AJAX
        $.ajax({
            url: '/bills/' + selectedBillId, // Route that returns bill details
            type: 'GET',
            success: function(data) {
              

                // Constructing the new row
                var newRow = "<tr>" +



                   
                 
             
                    "<td></td>" + 
                    "<td>" + data[0]?.id + "</td>" +
                    "<td>"+ data[0]?.invoicedate +"</td>" +
                    "<td>"+ data[0]?.name +"</td>" +
                    "<td>"+ data[0]?.total +"</td>" +
                 
                    "<td>" + (data[0]?.pastcollection ?? 0) + "</td>"+
                    "<td>" + (data[0]?.cd ?? 0) + "</td>"+
                    "<td>" + (data[0]?.total - data[0]?.pamnt ?? 0) + "</td>" +
                    "<td>" + (data[0]?.todays ?? 0) + "</td>"+
                    "<td><button class='btn btn-danger btn-sm '>x</button></td>" +
                    "</tr>";

                // Appending the new row to the table body
                $('.billTable').append(newRow);
                updateSerialNumbers();
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    });
});






  
      
        </script>
       
            
    @endsection