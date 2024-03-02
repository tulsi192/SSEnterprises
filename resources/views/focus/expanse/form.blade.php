<div class='form-group'>
    {{ Form::label( 'Expanse Name', trans('expanses.name'),['class' => 'col-lg-2 control-label']) }}
    <div class='col-lg-10'>
        {{ Form::text('Expansename', null, ['class' => 'form-control round', 'placeholder' => trans('expanses.name')]) }}
    </div>
</div>


@section("after-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
           
        });
    </script>
@endsection
