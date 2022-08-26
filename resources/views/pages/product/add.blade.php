<x-app-layout>
    <x-slot name="content">
        <form role="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
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
    </x-slot>
</x-app-layout>

