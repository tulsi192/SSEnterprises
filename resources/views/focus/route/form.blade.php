<div class='form-group'>
    {{ Form::label( 'Route Name', trans('routes.name'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('Routename', null, ['class' => 'form-control round', 'placeholder' => trans('routes.name')]) }}
    </div>
</div>
<div class='form-group'>
    {{ Form::label( 'Route Code', trans('routes.code'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('Routecode', null, ['class' => 'form-control round', 'placeholder' => trans('routes.code')]) }}
    </div>
</div>

@section("after-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
           
        });
    </script>
@endsection
