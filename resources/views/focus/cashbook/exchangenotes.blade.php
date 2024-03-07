<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="" style="margin-left: 454px;">Notes Exchange</h5>
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
                        <th>Exchange Notes</th>
                        <th>Exchange notes value
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



    