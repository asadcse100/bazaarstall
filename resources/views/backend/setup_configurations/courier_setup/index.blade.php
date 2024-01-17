@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Steadfast Courier Settings')}}</h5>
            </div>
            <form action="{{ route('steadfast_courier.update') }}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="col-from-label">{{translate('Steadfast Courier')}}</label>
                        </div>
                        <div class="col-md-2">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input value="1" name="steadfast_courier" type="checkbox" @if (get_setting('steadfast_courier')==1) checked @endif>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="col-from-label">{{translate('Steadfast Auto Order Place')}}</label>
                        </div>
                        <div class="col-md-2">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input value="1" name="steadfast_auto_order_place" type="checkbox" @if (get_setting('steadfast_auto_order_place')==1) checked @endif>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <input type="hidden" name="types[]" value="STEADFAST_API_KEY">
                        <div class="col-md-4">
                            <label class="control-label">{{translate('Steadfast Api Key')}}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="STEADFAST_API_KEY" value="{{ env('STEADFAST_API_KEY') }}" placeholder="{{ translate('Steadfast Api key') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <input type="hidden" name="types[]" value="STEADFAST_SECRET_KEY">
                        <div class="col-md-4">
                            <label class="control-label">{{translate('Steadfast Secret Key')}}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="STEADFAST_SECRET_KEY" value="{{ env('STEADFAST_SECRET_KEY') }}" placeholder="{{ translate('steadfast secret key') }}" required>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection