<div class="">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="#" class="btn btn-secondary" id="openModalTransfer"><i class="fa fa-book"></i>
            {{ trans('Transfer to main Cashbook') }}</a>

        <a href="#" class="btn btn-secondary" id="openModalExchange"><i class="fa fa-exchange"></i>
            {{ trans('Note Exchange') }}</a>


        <a href="#" class="btn btn-secondary" id="openModalIncome"><i class="fa fa-plus"></i>
            {{ trans('Add Income') }}</a>

        <a href="#" class="btn btn-secondary" id="openModalExpanse"><i class="fa fa-plus"></i>
            {{ trans('Add Expanses') }}</a>
        <a href="{{ route('biller.cashbooks.index') }}" class="btn btn-secondary"><i
                class="fa fa-arrow-circle-o-down"></i> {{ trans('Add Bank Deposite') }}</a>
        <a href="{{ route('biller.cashbooks.index') }}" class="btn btn-secondary"><i class="fa fa-times"></i>
            {{ trans('close Daybook') }}</a>


        {{-- <a href="{{ route( 'biller.cashbooks.index' ) }}" class="btn btn-info  btn-lighten-2 round"><i
                    class="fa fa-list-alt"></i> {{trans( 'general.list' )}}</a>
        @permission('transaction-manage')
        <a href="{{ route( 'biller.cashbooks.create' ) }}"
           class="btn btn-pink  btn-lighten-3 round"><i
                    class="fa fa-plus-circle"></i> {{trans( 'general.create' )}}</a>
        @endauth --}}
    </div>
</div>
<div class="clearfix"></div>
<div class="modal fade" id="incomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Income</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="incomeForm" action="{{ route('biller.cashbooks.store') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <!-- Dropdown 1 -->
                        <div class="form-group col">
                            <label for="dropdown1">Category:</label>
                            <select class="form-control" id="dropdown1" name="income_id">
                                <option value="" disabled selected>Select Category</option>
                                @foreach ($income as $incomes)
                                    <option value="{{ $incomes->id }}">{{ $incomes->Incomename }}</option>
                                @endforeach
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <!-- Dropdown 2 -->
                        <div class="form-group col">
                            <label for="dropdown2">Employee:</label>
                            <select class="form-control" id="dropdown2" name="user_id">
                                <option value="" disabled selected>Select Employee</option>
                                @foreach ($employee as $employees)
                                    <option value="{{ $employees->id }}">{{ $employees->first_name }}</option>
                                @endforeach
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <!-- Dropdown 3 -->
                        <div class="form-group col">
                            <label for="dropdown3">Warehouse:</label>
                            <select class="form-control" id="dropdown3" name="warehouse_id">
                                <option value="" disabled selected>Select Warehouse</option>
                                @foreach ($warehouse as $warehouse)
                                    <option value="{{ $warehouse->id }}">{{ $warehouse->title }}</option>
                                @endforeach


                                <!-- Add more options as needed -->
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="dropdown3">Amount:</label>
                            <input type="number" class="form-control" name="amount" id="amountInput"
                                placeholder="amount" step="1">
                        </div>

                        <div class="form-group col sm 4">
                            <label for="dropdown3">Narration:</label>
                            <input type="text" class="form-control" placeholder="Narration" name="narration">
                        </div>
                    </div>

                    <!-- New Form Below Input Fields -->
                    <!-- New Form Below Input Fields -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Notes</h5> <!-- New heading centered -->

                                        <div class="row mb-3">
                                            <div class="col">
                                                <span class="align-middle mr-2">2000 X </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="calculate1" step="1" name="2000">
                                                <span id="result1" class="result-span"></span>
                                            </div>
                                            <div class="col">
                                                <span class="align-middle mr-2">500 X </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="calculate2" step="1" name="500">
                                                <span id="result2" class="result-span"></span>
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <span class="align-middle mr-2">200 X </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="calculate3" step="1">
                                                <span id="result3" class="result-span"></span>
                                            </div>
                                            <span></span>
                                            <div class="col">
                                                <span class="align-middle mr-2">100 X </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="calculate4" step="1" name="100">
                                                <span id="result4" class="result-span"></span>
                                            </div>
                                            <span></span>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <span class="align-middle mr-2">50 X </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="calculate5" step="1" name="50">
                                                <span id="result5" class="result-span"></span>
                                            </div>
                                            <span></span>
                                            <div class="col">
                                                <span class="align-middle mr-2">20 X </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="calculate6" step="1" name="20">
                                                <span id="result6" class="result-span"></span>
                                            </div>
                                            <span></span>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <span class="align-middle mr-2">10 X </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="calculate7" step="1" name="10">
                                                <span id="result7" class="result-span"></span>
                                            </div>
                                            <span></span>
                                            <div class="col">
                                                <span class="align-middle mr-2">coins </span>
                                                <input type="number" class="form-control calculate-input"
                                                    id="exampleFormControlInput8" step="1" name="coin">
                                                <span id="result8" class="result-span"></span>
                                            </div>
                                            <span></span>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col">
                                                <span class="align-middle mr-2">Total</span>
                                                <input type="number" class="form-control" id="totalamount"
                                                    step="1">
                                            </div>

                                            <div class="col">
                                                <span id="differenceSpan"></span>
                                                <span class="align-middle mr-2">excess/short</span>
                                                <input type="number" class="form-control"
                                                    id="exampleFormControlInput9" step="1">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of New Form -->

                    <!-- End of New Form -->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-secondary">Save changes</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>




            </form>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="expanseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
@include('focus.cashbook.expanse')
</div>
<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="" style="margin-left: 454px;">Transfer to Main Cash Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="transferForm" action="" method="POST">
                    @csrf

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Denomination</th>
                                <th>Available Notes</th>
                                <th>Transfer to Main Cash Book </th>
                                <th>Calculated Value
                                </th>




                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="denomination">2000</td>
                                <td class="notes">0</td>
                                <td> <input type="number" class="form-control denomination-input" id=""
                                        step="1" name="2000"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>
                                <td class="denomination">500</td>
                                <td class="notes">255</td>
                                <td> <input type="number" class="form-control denomination-input" id=""
                                        step="1" name="500"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>
                                <td class="denomination">200</td>
                                <td class="notes">44</td>
                                <td> <input type="number" class="form-control denomination-input" id=""
                                        step="1" name="200"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>
                                <td class="denomination">100</td>
                                <td class="notes">76</td>
                                <td> <input type="number" class="form-control denomination-input" id=""
                                        step="1" name="100"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>
                                <td class="denomination">50</td>
                                <td class="notes">33</td>
                                <td> <input type="number" class="form-control denomination-input" id=""
                                        step="1" name="50"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>
                                <td class="denomination">20</td>
                                <td class="notes">50</td>
                                <td> <input type="number" class="form-control denomination-input" id=""
                                        step="1" name="20"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>
                                <td class="denomination">10</td>
                                <td class="notes">77</td>
                                <td> <input type="number" class="form-control denomination-input" id=""
                                        step="1" name="10"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>
                                <td class="denominationcoins">Coins</td>
                                <td class="coins">116</td>
                                <td><input type="number" class="form-control denomination-coins-input"
                                        id="" step="1" name="coins"></td>
                                <td><span class="calculated-value"></span></td>
                            </tr>
                            <tr>

                                <td>total</td>
                                {{-- <td>total</td> --}}
                                <td id="denominationavailable"></td>

                                <td class="total-sum"></td>
                                <td class="total-sum"></td>
                            </tr>

                        </tbody>
                    </table>




            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-secondary">Save changes</button>

            </div>




            </form>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="exchangeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
    @include('focus.cashbook.exchangenotes');
    </div>
</div>

@section('after-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#openModalExchange').click(function() {
                $('#exchangeModal').modal('show'); // Show the modal when the button is clicked
            });
        });
    </script>











    <script>
        $(document).ready(function() {
            $('#openModalIncome').click(function() {
                $('#incomeModal').modal('show'); // Show the modal when the button is clicked
            });
        });
    </script>
    <script>
  $(document).ready(function() {
            $('#openModalExpanse').click(function() {
                $('#expanseModal').modal('show'); // Show the modal when the button is clicked
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#openModalTransfer').click(function() {
                $('#transferModal').modal('show');
                calculateTotal1(); // Show the modal when the button is clicked
            });
        });
    </script>

<script>
    $(document).ready(function() {
        $('#openModalExpanse').click(function() {
            $('#expanseModal').modal('show');
            calculateTotal1(); // Show the modal when the button is clicked
        });
    });
</script>
    <script>
        // Get input and result elements
        // Get input and result elements
        const inputs = document.querySelectorAll('.calculate-input');
        const resultSpans = document.querySelectorAll('.result-span');
        const sumInput = document.getElementById('totalamount');
        const amountInput = document.getElementById('amountInput'); // Get the amount input field
        const differenceInput = document.getElementById('exampleFormControlInput9');
        const totalIncome = 1000; // Update this with the actual total income value

        // Add event listener to each input for changes
        inputs.forEach((input, index) => {
            input.addEventListener('input', calculateTotal);
        });

        // Function to calculate the total amount and update the difference
        function calculateTotal() {
            // Calculate the sum of all result values
            let totalSum1 = 0;
            resultSpans.forEach(resultSpan => {
                if (resultSpan.textContent.trim() !== '') {
                    totalSum1 += parseInt(resultSpan.textContent);
                }
            });
            // Display the total sum in the sumInput field
            sumInput.value = totalSum1;

            // Get the entered amount value
            const enteredAmount = parseInt(amountInput.value);

            // Calculate the difference between totalIncome and the total sum
            const difference = enteredAmount - totalSum1;

            // Display the difference in the differenceInput field
            differenceInput.value = difference.toFixed(2); // Display difference to two decimal places
            if (difference > 0) {
                differenceInput.style.color = 'red'; // Excess amount, display in green
            } else if (difference < 0) {
                differenceInput.style.color = 'green'; // Short amount, display in red
            } else {
                differenceInput.style.color = 'black'; // No difference, display in black
            }
        }

        // Add event listener to the amount input field for changes
        amountInput.addEventListener('input', function() {
            calculateTotal();
        });

        // Add event listener to each input for changes
        inputs.forEach((input, index) => {
            input.addEventListener('input', function() {
                // Get the value of the input
                const inputValue = parseInt(input.value);

                // Get the number from the corresponding span
                const spanValue = parseInt(input.parentElement.querySelector('.align-middle').textContent);

                // Check if input value is not empty and greater than zero
                if (!isNaN(inputValue) && inputValue !== 0) {
                    // Check if the input field is for "coins"
                    if (input.parentElement.querySelector('.align-middle').textContent.trim() === 'coins') {
                        // Display the entered value directly
                        resultSpans[index].textContent = inputValue;
                    } else {
                        // Calculate the result
                        const result = inputValue * spanValue;
                        // Update the corresponding result span
                        resultSpans[index].textContent = result;
                    }
                } else {
                    // If input value is empty or zero, display an empty string
                    resultSpans[index].textContent = '0.00';
                }

                // Recalculate the total and difference after input change
                calculateTotal();
            });
        });
    </script>



    </body>

    </html>














    <script>
        // Add event listeners to all Transfer to Main Cash Book input fields
        const transferInputs = document.querySelectorAll('.denomination-input, .denomination-coins-input');
        transferInputs.forEach(input => {
            input.addEventListener('input', updateCalculatedValue1);
        });

        // Function to update calculated value
        function updateCalculatedValue1() {
            const isCoin = this.classList.contains('denomination-coins-input');
            const denomination = isCoin ? 1 : parseInt(this.parentElement.previousElementSibling.previousElementSibling
                .textContent);
            const availableNotes = isCoin ? parseInt(this.parentElement.previousElementSibling.textContent) : parseInt(this
                .parentElement.previousElementSibling.textContent);
            const quantity = parseInt(this.value);
            const calculatedValueElement = this.parentElement.nextElementSibling.querySelector('.calculated-value');

            // Check if input is a valid number
            if (!isNaN(quantity)) {
                if (quantity > availableNotes) {
                    calculatedValueElement.textContent = "Not available notes";
                    calculatedValueElement.style.color = "red"; // Apply red color directly
                } else {
                    const calculatedValue = denomination * quantity;
                    calculatedValueElement.textContent = calculatedValue;
                    calculatedValueElement.style.color = "black"; // Reset color to black
                }
            } else {
                calculatedValueElement.textContent = ""; // Clear the calculated value if input is invalid
            }

            // Update total sum
            updateTotalSum1();
        }

        // Function to update total sum
        function updateTotalSum1() {
            const calculatedValues = document.querySelectorAll('.calculated-value');
            let totalSum2 = 0;

            calculatedValues.forEach(calculatedValue => {
                if (calculatedValue.textContent !== "Not available notes" && calculatedValue.textContent !== "") {
                    totalSum2 += parseInt(calculatedValue.textContent);
                }
            });

            // Update the content of the td elements with the class total-sum
            const totalSumCells = document.querySelectorAll('.total-sum');
            totalSumCells.forEach(cell => {
                cell.textContent = totalSum2;
            });
        }
    </script>


    <script>
        function calculateTotal1() {
        var rows = document.querySelectorAll('.table tbody tr');
        var totalSum3 = 0;

        rows.forEach(function(row) {
            var denominationElement = row.querySelector('.denomination');
            var notesElement = row.querySelector('.notes');

            if (denominationElement && notesElement) {
                var denomination = parseInt(denominationElement.textContent);
                var availableNotes = parseInt(notesElement.textContent);

                if (!isNaN(denomination) && !isNaN(availableNotes)) {
                    totalSum3 += denomination * availableNotes;
                   
                }

            }
    
        });
        var coinsAvailableNotes = parseInt(document.querySelector('.coins').textContent);
        totalSum3 += coinsAvailableNotes;

        document.getElementById('denominationavailable').textContent = totalSum3;
       
        
    }
    </script>







    <script>
        $(document).ready(function() {
            $('#incomeModal').on('click', '.modal-footer .btn-primary', function(e) {
                // No need to prevent default form submission behavior
            });
        });
    </script>
@endsection
