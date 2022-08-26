<x-app-layout>
    <x-slot name="header">
        <div class="row px-3">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                      <li class="breadcrumb-item text-sm">
                        <a class="text-white" href="#">
                            <i class="fa-solid fa-house"></i>
                        </a>
                      </li>
                      <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white" href="javascript:;">Products</a>
                      </li>
                      <li class="breadcrumb-item text-sm text-white active" aria-current="page">All</li>
                    </ol>
                  </nav>
            </div>
            <div class="col-lg-6">
                <div width="10px" class="text-right">
                    <button type="button" class="btn btn-primary">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="content">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0" id="productTable">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="{{ config('images.access_path') }}/{{ $item->image->name }}" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-xs">{{ $item->name }}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">{{ $item->price }}</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                @if ($item->status == 0)
                                        <span class="badge badge-sm badge-danger">Inactive</span>
                                    @else
                                        <span class="badge badge-sm badge-success">Active</span>
                                    @endif
                            </td>
                            <td class="align-middle">
                                <a class="badge badge-sm badge-primary" href="{{ route('product.status', $item->id) }}"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                                <a class="badge badge-sm badge-info" href="javascript:void(0)" ><i onclick="itemEditModal({{ $item->id }})" class="fa-solid fa-pencil"></i></a>
                                <a class="badge badge-sm badge-warning" href="{{ route('product.delete', $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    <div class="modal fade" id="edititem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Update Product</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="itemEditContent">
            </div>
          </div>
        </div>
      </div>
    </x-slot>
</x-app-layout>
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
<script>
    $(document).ready( function () {
        $('#productTable').DataTable({
            "language": {
                "emptyTable": "No data available in the table",
                "paginate": {
                    "previous": '<i class="fa-solid fa-angles-left"></i>',
                    "next": '<i class="fa-solid fa-angles-right"></i>'
                },
                "sEmptyTable": "No data available in the table"
            }
        });
    } );
</script>
@endpush
