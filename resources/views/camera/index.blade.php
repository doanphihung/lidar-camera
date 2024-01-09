@extends('layout.master')
@section('title', __('label.camera.title'))
@section('content-header', __('label.camera.title'))
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card" id="camera-01">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">CAM 1</h3>
                    </div>
                </div>
                <div class="card-body camera-display" data-toggle="modal" data-target="#modal-xl">
                    <img src="{{ asset('images/no-signal1.jpg') }}" style="width: 100%; height: 100%">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">CAM 2</h3>
                    </div>
                </div>
                <div class="card-body camera-display" data-toggle="modal" data-target="#modal-xl">
                    <img src="{{ asset('images/no-signal1.jpg') }}" style="width: 100%; height: 100%">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">CAM 3</h3>
                    </div>
                </div>
                <div class="card-body camera-display" data-toggle="modal" data-target="#modal-xl">
                    <img src="{{ asset('images/no-signal1.jpg') }}" style="width: 100%; height: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">CAM 4</h3>
                    </div>
                </div>
                <div class="card-body camera-display" data-toggle="modal" data-target="#modal-xl">
                    <img src="{{ asset('images/no-signal1.jpg') }}" style="width: 100%; height: 100%">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">CAM 5</h3>
                    </div>
                </div>
                <div class="card-body camera-display" data-toggle="modal" data-target="#modal-xl">
                    <img src="{{ asset('images/no-signal1.jpg') }}" style="width: 100%; height: 100%">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">CAM 6</h3>
                    </div>
                </div>
                <div class="card-body camera-display" data-toggle="modal" data-target="#modal-xl">
                    <img src="{{ asset('images/no-signal1.jpg') }}" style="width: 100%; height: 100%">
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-xl" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">CAM</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/no-signal1.jpg') }}" style="width: 100%; height: 100%">
                </div>
                <div class="modal-footer justify-content-between">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('scripts')
@endpush