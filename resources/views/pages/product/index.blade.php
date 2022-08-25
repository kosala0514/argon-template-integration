@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class=" card p-5" role="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="text" name="name" placeholder="Product Name" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="price" class="form-control" placeholder="Product Price" required />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <input class="form-control dropify" name="images" type="file" accept="image/jpg, image/jpeg, image/png" required>
                      </div>
                    </div>
                    <div class="d-grid mt-3">
                            <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                  </form>

            </div>
            <div class="col-lg-12 text-center">
                <div class="row mt-5 mb-5">
                        @foreach ($items as $key => $item)
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
                                      <p class="card-text">Status :
                                        @if ($item->status == 0)
                                                    <span > Inactive </span>
                                                @else
                                                    <span > Active </span>
                                                @endif
                                      </p>
                                                <a class="btn btn-success" href="{{ route('product.status', $item->id) }}"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                                                <a class="btn btn-info" href="javascript:void(0)" ><i onclick="itemEditModal({{ $item->id }})" class="fa-solid fa-pencil"></i></a>
                                                <a class="btn btn-danger" href="{{ route('product.delete', $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>

                                    </div>
                                  </div>
                                </div>
                              </div>
                             </div>
                        {{-- <div class="col-lg-4">
                        <div class="card mb-3" style="width: 18rem;height: 22rem;">
                            <img style="width: 18rem;height: 22rem;" src="{{ config('images.access_path') }}/{{ $item->image->name }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Name : {{ $item->name }}</h5>
                              <p class="card-text">Price(Rs) : {{ $item->price }}</p>
                              <p class="card-text">Status :
                                @if ($item->status == 0)
                                            <span > Inactive </span>
                                        @else
                                            <span > Active </span>
                                        @endif
                              </p>
                                        <a class="btn btn-success" href="{{ route('product.status', $item->id) }}">Status</a>
                                        <a class="btn btn-info" href="javascript:void(0)" ><i onclick="itemEditModal({{ $item->id }})">Edit</i></a>
                                        <a class="btn btn-danger" href="{{ route('product.delete', $item->id) }}">Delete</a>

                            </div>
                        </div>
                    </div> --}}
                        @endforeach

                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="edititem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Update Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="itemEditContent">

        </div>
      </div>
    </div>
  </div>

@endsection

@push('css')
    <style>
        .page-title{
            padding: 15px;
            color: rgb(28, 11, 44);
            font-size:1.5rem;
        }
        .content-container{
            padding: 15px;
        }
    </style>
@endpush

@push('js')
<script>
    function itemEditModal(item_id){
        var data = {
            item_id:item_id,
        };
        $.ajax({
            url: "{{ route('product.edit') }}",
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            dataType:'',
            data:data,
            success: function (response){
                $('#edititem').modal('show');
                $('#itemEditContent').html(response);
            }
        });
    }
</script>
@endpush
