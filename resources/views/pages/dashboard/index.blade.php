@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($items as $item)
    <div class="col-lg-4">
        <div class="card mb-3">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
              <a href="javascript:;" class="d-block">
                <img src="{{ config('images.access_path') }}/{{ $item->image->name }}" class="img-fluid border-radius-lg">
              </a>
            </div>

            <div class="card-body pt-2">
              <div class="author align-items-center">
                <img src="{{ config('images.access_path') }}/{{ $item->image->name }}" alt="..." class="avatar shadow">
                <div class="name ps-3">
                  <span>Name : {{ $item->name }}</span>
                  <div class="stats">
                    <small>Price : {{ $item->price }}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
         @endforeach
</div>
@endsection
