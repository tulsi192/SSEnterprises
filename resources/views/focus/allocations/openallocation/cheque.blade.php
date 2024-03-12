<div class="modal-content">
    <div class="modal-header">
        Retailer: {{ $invoice->customer->name }} | Bill No: {{ $invoice->tid }} | Date: {{ $invoice->invoicedate }} | Bill Amount: {{ $invoice->total }} | Pending Amount: {{ $invoice->total - $invoice->pamnt }}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form id="cashForm">
            @csrf

            <div class="mb-3">
                <label for="cashAmount" class="form-label">Cheque Amount:</label>
                <input type="text" class="form-control chequeAmountInput" id="chequeAmount_{{ $invoice->id }}" name="chequeAmount" placeholder="Enter cheque amount for Invoice {{ $invoice->id }}">
            </div>
        </form>
    </div>


    
       

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary saveChequeBtn" data-invoice="{{ $invoice->id }}" data-dismiss="modal">Save changes</button>

    </div>
</div>




<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Get all the buttons with class 'saveChequeBtn'
    var saveChequeButtons = document.querySelectorAll('.saveChequeBtn');

    // Loop through each button
    saveChequeButtons.forEach(function(button) {
        // Check if the button already has the 'listener-attached' class
        if (!button.classList.contains('listener-attached')) {
            // Add event listener to the button
            button.addEventListener('click', function() {
                // Get the target invoice ID from the button's data-invoice attribute
                var invoiceId = button.getAttribute('data-invoice');
                
                // Get the cheque amount from the corresponding input field
                var chequeAmount = document.getElementById('chequeAmount_' + invoiceId).value;
                
                // Perform any action with the cheque amount here
              
                
                // Close the modal after updating the entered amount
             
                // Get the <td> element where you want to display the status
                var statusCell = document.getElementById('statusCell_' + invoiceId);
                

                // Update the inner HTML of the <td> element to append the status
                if (statusCell) {
                    // Check if the status cell already has content
                    if (statusCell.innerHTML.trim() !== '') {
                        // Append the status with a comma
                        statusCell.innerHTML += ', Cheque'; // Update this with your desired status
                    } else {
                        // Set the status
                        statusCell.innerHTML = 'Cheque'; // Update this with your desired status
                    }
                }
                
                // Hide the modal
                var chequeModal = document.getElementById('chequeModal_' + invoiceId);
                if (chequeModal) {
                    var bootstrapModal = new bootstrap.Modal(chequeModal);
                    bootstrapModal.hide();
                }
            });

            // Add a class to mark that the listener has been attached
            button.classList.add('listener-attached');
        }
    });
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all input fields with class 'cashAmountInput'
        var chequeAmountInputs = document.querySelectorAll('.chequeAmountInput');

        // Loop through each input field
        chequeAmountInputs.forEach(function(input) {
            // Add event listener for 'input' event
            input.addEventListener('input', function() {
                // Get all input values and calculate the sum
                var totalChequeAmount = 0;
                chequeAmountInputs.forEach(function(input) {
                    var chequeAmount = parseFloat(input.value) || 0;
                    totalChequeAmount += chequeAmount;
                });

                // Display the total sum in a separate element
                var totalDisplayElement = document.getElementById('totalChequeAmount');
                if (totalDisplayElement) {
                    totalDisplayElement.textContent = totalChequeAmount.toFixed(2);
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all input fields with class 'cashAmountInput'
        var chequeAmountInputs = document.querySelectorAll('.chequeAmountInput');

        // Loop through each input field
        chequeAmountInputs.forEach(function(input) {
            // Add event listener for 'input' event
            input.addEventListener('input', function() {
                // Get the entered cash amount
                var chequeAmount = input.value;

                // Get the ID of the corresponding display element
                var displayElementId = 'displayAmount_' + input.id.split('_')[1];

                // Get the display element
                var displayElement = document.getElementById(displayElementId);

                // Update the display element with the entered cash amount
                if (displayElement) {
                    displayElement.textContent =chequeAmount;
                }
            });
        });
    });
</script>









