<div class="row">
    <div class='col-md-3'>
        <div class='form-group'>
            {{ Form::label('allocation', trans('cashbooks.allocation'), ['class' => 'col-6 control-label']) }}
            <div class='col'>
                {{ Form::text('allocation_no', null, ['class' => 'form-control round', 'placeholder' => trans('cashbooks.allocation'), 'autocomplete' => 'off']) }}
            </div>
        </div>
    </div>
    <div class='col-md-3'>
        <div class='form-group'>
            {{ Form::label('employee', trans('general.employee'), ['class' => 'col-6 control-label']) }}
            <div class='col'>
                {{ Form::text('employee', null, ['class' => 'form-control round', 'placeholder' => trans('general.employee'), 'autocomplete' => 'off']) }}
            </div>
        </div>
    </div>
    <div class='col-md-6'>
        <div class='form-group'>
            {{ Form::label('date', trans('cashbooks.date'), ['class' => 'col control-label']) }}
            <div class='col-6'>
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="text" class="form-control round required"
                        placeholder="{{ trans('cashbooks.date') }}*" name="date" data-toggle="datepicker"
                        required="required">
                    <div class="form-control-position">
                        <span class="fa fa-calendar" aria-hidden="true"></span>
                    </div>

                </fieldset>
            </div>
        </div>
    </div>

</div>
<div class="row">


    <div class='col-md-6'>
        <div class='form-group'>
            {{ Form::label('refrences', trans('cashbooks.refrences'), ['class' => 'col control-label']) }}
            <div class="col">
                {{ Form::text('refrence', null, ['class' => 'form-control round', 'placeholder' => trans('cashbooks.refrences'), 'autocomplete' => 'off']) }}
            </div>
        </div>
    </div>
</div>

<div class='row'>
    <div class='col-md-3'>
        <div class='form-group'>
            {{ Form::label('inflow', trans('cashbooks.inflow'), ['class' => 'col control-label']) }}
            <div class="col">
                {{ Form::text('inflow', numberFormat(0), ['class' => 'form-control round', 'id' => 'inflow', 'placeholder' => trans('cashbooks.inflow') . '*', 'onkeypress' => 'return isNumber(event)']) }}
            </div>
        </div>
    </div>
    <div class='col-md-3'>
        <div class='form-group'>
            {{ Form::label('outflow', trans('cashbooks.outflow'), ['class' => 'col control-label']) }}
            <div class="col">
                {{ Form::text('outflow', numberFormat(0), ['class' => 'form-control round', 'id' => 'outflow', 'placeholder' => trans('cashbooks.outflow') . '*', 'onkeypress' => 'return isNumber(event)']) }}
            </div>
        </div>
    </div>
    <div class='col-md-3'>
        <div class='form-group'>
            {{ Form::label('nature', trans('cashbooks.nature'), ['class' => 'col-12 control-label']) }}
            <div class='col'>
                {{ Form::text('nature', null, ['class' => 'form-control round', 'placeholder' => trans('cashbooks.nature'), 'autocomplete' => 'off']) }}
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {{ Form::label('balance', trans('cashbooks.balance'), ['class' => 'col control-label']) }}
        {{ Form::text('balance',$previousbalance, ['class' => 'form-control', 'id' => 'balance', 'readonly' => 'readonly']) }}

    </div>


</div>


<br>


@section('after-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="datepicker"]').datepicker({
                autoHide: true,
                format: '{{ config('core.user_date_format') }}'
            });
            $('[data-toggle="datepicker"]').datepicker('setDate', '{{ date(config('core.user_date_format')) }}');
        });


      
    </script>
<script>
    
    function updateBalance() {
        const inflow = parseFloat(document.getElementById('inflow').value) || 0;
        const outflow = parseFloat(document.getElementById('outflow').value) || 0;
        const balance=parseFloat(document.getElementById('balance').value) || 0;

    
        if (inflow !== 0) {
            balance =(balance+inflow);
            
            document.getElementById('outflow').value = ""; // Clear outflow value if inflow is entered
        } else if (outflow !== 0) {
            balance =(balance-outflow); // Use negative value for outflow
            document.getElementById('inflow').value = ""; // Clear inflow value if outflow is entered
        }

        document.getElementById('balance').value = balance.toFixed(2);
    }

    // Call updateBalance() function whenever the inflow or outflow values change
    document.getElementById('inflow').addEventListener('input', updateBalance);
    document.getElementById('outflow').addEventListener('input', updateBalance);
</script>

    
@endsection
