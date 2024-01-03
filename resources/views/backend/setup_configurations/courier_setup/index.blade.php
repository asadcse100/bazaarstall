@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Steadfast Courier Settings')}}</h5>
            </div>
            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                   @csrf
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="control-label">{{translate('Steadfast Api Key')}}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="ntext" class="form-control" name="steadfast_api_key" placeholder="{{ translate('steadfast_api_key') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="control-label">{{translate('Steadfast Secret Key')}}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="ntext" class="form-control" name="steadfast_secret_key" placeholder="{{ translate('steadfast_secret_key') }}" required>
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
