<div class='form-group'>
    {{ Form::label( 'Income Name', trans('incomes.name'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('Incomename', null, ['class' => 'form-control round', 'placeholder' => trans('incomes.name')]) }}
    </div>
</div>


@section("after-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
           
        });
    </script>
@endsection
