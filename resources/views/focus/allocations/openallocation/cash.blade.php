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
                <label for="cashAmount" class="form-label">Cash Amount:</label>
                <input type="text" class="form-control cashAmountInput" id="cashAmount_{{ $invoice->id }}" name="cashAmount" placeholder="Enter cash amount for Invoice {{ $invoice->id }}">
            </div>
        </form>
    </div>


    
       

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary saveCashBtn" data-invoice="{{ $invoice->id }}" data-dismiss="modal">Save changes</button>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all the buttons with class 'saveCashBtn'
        var saveCashButtons = document.querySelectorAll('.saveCashBtn');

        // Loop through each button
        saveCashButtons.forEach(function(button) {
            // Check if the button already has the 'listener-attached' class
            if (!button.classList.contains('listener-attached')) {
                // Add event listener to the button
                button.addEventListener('click', function() {
                    // Get the target invoice ID from the button's data-invoice attribute
                    var invoiceId = button.getAttribute('data-invoice');
                    
                    // Get the cash amount from the corresponding input field
                    var cashAmount = parseFloat(document.getElementById('cashAmount_' + invoiceId).value.trim());

                    // Get the pending amount from the corresponding <td> element
                    var pendingAmountCell = document.getElementById('pendingAmount_' + invoiceId);
                    var pendingAmount = parseFloat(pendingAmountCell.textContent.trim());

                    // Subtract the cash amount from the pending amount
                    var updatedPendingAmount = pendingAmount - cashAmount;

                    // Update the inner HTML of the <td> element to display the updated pending amount
                    pendingAmountCell.textContent = updatedPendingAmount.toFixed(2);

                    // Update the status
                    var statusCell = document.getElementById('statusCell_' + invoiceId);
                    if (statusCell) {
                        // Check if the status cell already has content
                        if (statusCell.innerHTML.trim() !== '') {
                            // Append the status with a comma
                            statusCell.innerHTML += ', Cash'; // Update this with your desired status
                        } else {
                            // Set the status
                            statusCell.innerHTML = 'Cash'; // Update this with your desired status
                        }
                    }

                    // Close the modal after updating the entered amount
                    var cashModal = document.getElementById('cashModal_' + invoiceId);
                    if (cashModal) {
                        var bootstrapModal = new bootstrap.Modal(cashModal);
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
        var saveCashButtons = document.querySelectorAll('.saveCashBtn');

        saveCashButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var invoiceId = this.dataset.invoice;
                var cashAmountInput = document.getElementById('cashAmount_' + invoiceId);
                var displayElement = document.getElementById('displayAmount_' + invoiceId);
                
                if (cashAmountInput && displayElement && !button.clicked) {
                    var newCashAmount = parseFloat(cashAmountInput.value.trim());
                    var existingAmount = parseFloat(displayElement.textContent.trim()) || 0;
                    var totalAmount = existingAmount + newCashAmount;
                    displayElement.textContent = totalAmount.toFixed(2);
                    button.clicked = true; // Mark the button as clicked

                    console.log('Final Total amount:', totalAmount);
                    // Perform further actions with the final total here
                }
            });
        });
    });
</script>









