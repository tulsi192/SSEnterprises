<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Expanse</h5>
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
                            @foreach ($expanse as $expanses)
                                <option value="{{ $expanses->id }}">{{ $expanses->Expansename }}</option>
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
                            @foreach ($warehouseexpanse as $warehouseexpanses)
                                <option value="{{ $warehouseexpanses->id }}">{{ $warehouseexpanses->title }}</option>
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