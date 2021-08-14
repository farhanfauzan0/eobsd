@extends('master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <form method="POST" action="{{ route('info.post') }}">
                    {{-- @method('PUT') --}}
                    @csrf
                    <p style="text-align: center; font-weight: bold; font-size: 25px">INFO PENDAFTARAN</p>
                    <textarea class="summernote" name="info">{{ !empty($data->desc) ? $data->desc : '' }}</textarea>
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
