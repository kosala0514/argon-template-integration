<div class="row">
    @forelse ($products as $product)
    <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ config('images.access_path') }}/{{ $product->image->name }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->price }}</p>
            </div>
        </div>
    </div>    
    @empty
        <h1>No Vehicles</h1>
    @endforelse
    <div>
        <div class="col-lg-12">
            {{ $products->render() }}
        </div>
    </div>
</div>