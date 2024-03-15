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
                <label for="otherAmount" class="form-label">Other Amount:</label>
                <input type="text" class="form-control otherAmountInput" id="otherAmount_{{ $invoice->id }}" name="otherAmount" placeholder="Enter other amount for Invoice {{ $invoice->id }}">
            </div>
        </form>
    </div>


    
       

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary saveOtherBtn" data-invoice="{{ $invoice->id }}" data-dismiss="modal">Save changes</button>

    </div>
</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all the buttons with class 'saveCashBtn'
        var saveOtherButtons = document.querySelectorAll('.saveOtherBtn');

        // Loop through each button
        saveOtherButtons.forEach(function(button) {
            // Check if the button already has the 'listener-attached' class
            if (!button.classList.contains('listener-attached')) {
                // Add event listener to the button
                button.addEventListener('click', function() {
                    // Get the target invoice ID from the button's data-invoice attribute
                    var invoiceId = button.getAttribute('data-invoice');
                    
                    // Get the cash amount from the corresponding input field
                    var otherAmount = parseFloat(document.getElementById('otherAmount_' + invoiceId).value.trim());

                    // Get the pending amount from the corresponding <td> element
                    var pendingAmountCell = document.getElementById('pendingAmount_' + invoiceId);
                    var pendingAmount = parseFloat(pendingAmountCell.textContent.trim());

                    // Subtract the cash amount from the pending amount
                    var updatedPendingAmount = pendingAmount - otherAmount;

                    // Update the inner HTML of the <td> element to display the updated pending amount
                    pendingAmountCell.textContent = updatedPendingAmount.toFixed(2);

                    // Update the status
                    var statusCell = document.getElementById('statusCell_' + invoiceId);
                    if (statusCell) {
                        // Check if the status cell already has content
                        if (statusCell.innerHTML.trim() !== '') {
                            // Append the status with a comma
                            statusCell.innerHTML += ', Other'; // Update this with your desired status
                        } else {
                            // Set the status
                            statusCell.innerHTML = 'Other'; // Update this with your desired status
                        }
                    }

                    // Close the modal after updating the entered amount
                    var otherModal = document.getElementById('otherModal_' + invoiceId);
                    if (otherModal) {
                        var bootstrapModal = new bootstrap.Modal(otherModal);
                        bootstrapModal.hide();
                    }

                    // Perform any further actions here
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
        var otherAmountInputs = document.querySelectorAll('.otherAmountInput');

        // Loop through each input field
        otherAmountInputs.forEach(function(input) {
            // Add event listener for 'input' event
            input.addEventListener('input', function() {
                // Get all input values and calculate the sum
                var totalOtherAmount = 0;
                otherAmountInputs.forEach(function(input) {
                    var otherAmount = parseFloat(input.value) || 0;
                    totalOtherAmount += otherAmount;
                });

                // Display the total sum in a separate element
                var totalDisplayElement = document.getElementById('totalOtherAmount');
                if (totalDisplayElement) {
                    totalDisplayElement.textContent = totalOtherAmount.toFixed(2);
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var saveOtherButtons = document.querySelectorAll('.saveOtherBtn');

        saveOtherButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var invoiceId = this.dataset.invoice;
                var otherAmountInput = document.getElementById('otherAmount_' + invoiceId);
                var displayElement = document.getElementById('displayAmount_' + invoiceId);
                
                if (otherAmountInput && displayElement && !button.clicked) {
                    var newOtherAmount = parseFloat(otherAmountInput.value.trim());
                    var existingAmount = parseFloat(displayElement.textContent.trim()) || 0;
                    var totalAmount = existingAmount + newAmount;
                    displayElement.textContent = totalAmount.toFixed(2);
                    button.clicked = true; // Mark the button as clicked

                    console.log('Final Total amount:', totalAmount);
                    // Perform further actions with the final total here
                }
            });
        });
    });
</script>






