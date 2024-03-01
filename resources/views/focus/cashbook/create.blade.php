@extends ('core.layouts.app')

@section ('title', trans('labels.backend.cashbooks.management') . ' | ' . trans('labels.backend.cashbooks.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.cashbookd.management') }}
        <small>{{ trans('labels.backend.cashbooks.create') }}</small>
    </h1>
@endsection

@section('content')
    <div class="">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h4 class="content-header-title mb-0">{{ trans('day book') }}</h4>
                    <h3>{{ date('l, F j, Y') }}</h3>

                </div>

               

              
                <div class="content-header-right col-md-6 col-12">
                    <div class="">

                        <div class="">
                            @include('focus.cashbook.partials.cashbooks-header-buttons')
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">

                                <div class="card-body">
                                    {{ Form::open(['route' => 'biller.cashbooks.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-cashbook']) }}


                                    <div class="form-group">
                                        {{-- Including Form blade file --}}
                                        {{-- @include("focus.cashbook.form")
                                        <div class="edit-form-btn">
                                            {{ link_to_route('biller.cashbooks.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                                            {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                                            <div class="clearfix"></div>
                                        </div><!--edit-form-btn-->
                                    </div><!-- form-group -->

                                    {{ Form::close() }}
                                </div>


                            </div>
                        </div>
                    </div>
                </div> --}} 
            </div>
        </div>
    </div>
@endsection
