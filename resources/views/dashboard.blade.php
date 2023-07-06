@extends('layouts.app')

@section('title', __('Dashboard'))

@section('content')

    <div class="card card-default color-palette-box">
        <div class="card-header">
            <h3 class="card-title">
                Welcome
            </h3>
        </div>
        <div class="card-body">
            <div class="col-12">
                <h5> @lang('Welcome to the Dashboard')</h5>
            </div>

            <!-- /.row -->
        </div>
        <!-- /.card-body -->
    </div>
@endsection
