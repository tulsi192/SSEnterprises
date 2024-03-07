

<div class='form-group'>
    {{ Form::label( 'bill no.', trans('cheques.bill'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('bill', null, ['class' => 'form-control round', 'placeholder' => trans('cheques.bill'),'required'=>'']) }}
    </div>
</div>
<div class='form-group'>
    {{ Form::label( 'amount', trans('cheques.amount'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('amount', null, ['class' => 'form-control round', 'placeholder' => trans('cheques.amount'),'required'=>'']) }}
    </div>
</div>
<div class='form-group'>
    {{ Form::label( 'retailer', trans('cheques.retailer'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('retailer', null, ['class' => 'form-control round', 'placeholder' => trans('cheques.retailer'),'required'=>'']) }}
    </div>
</div>

<div class='form-group'>
    {{ Form::label( 'cheque/neft', trans('cheques.type'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        <select class="form-control round" name="type">

            <option value="cheque">{{trans('cheques.chequety')}}</option>
            <option value="neft">{{trans('cheques.neftty')}}</option>

        </select>
    </div>
</div>
<div class='form-group'>
    {{ Form::label( 'cheque', trans('cheques.number'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('cheque/neft no.', null, ['class' => 'form-control round', 'placeholder' => trans('cheques.number')]) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label( 'Cheque/NEFT Date', trans('cheques.date'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
            {{ Form::text('cheque/neft date', null, ['class' => 'form-control round required', 'placeholder' => trans('general.date'),'data-toggle'=>'datepicker','autocomplete'=>'false']) }}
    </div>
        </div>
<div class='form-group'>
    {{ Form::label( 'bankname', trans('banks.bank'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        <select class="form-control round" name="bank">
            @foreach($bankNames as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                   
                  
            
                </select>
               
    </div>
</div>
<div class='form-group'>
    {{ Form::label( 'Warehouse', trans('cheques.warehouse'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
       
    <select class="form-control round" name="warehouse_id">
@foreach ($warehouses as $warehouse)
<option value="{{$warehouse->id}}">{{$warehouse->title}}</option>
@endforeach
       
      

    </select>
</div>
</div>


@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $(document).ready(function () {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
