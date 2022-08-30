<x-app-layout>
    <x-slot name="header"> 
        <div class=" card px-3 py-1">
            <div class="row mb-3 mt-3">
                <div class="col-lg-6">
                  <input onkeyup="getFilterProducts()" type="number" class="form-control min-price price-input" name="min_price" id="min_price" placeholder="Min Price">
                </div>
                <div class="col-lg-6">
                  <input onkeyup="getFilterProducts()"  type="number" class="form-control min-price price-input" name="max_price" id="max_price" placeholder="Max Price">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <livewire:product.filter />
                </div>
              </div>
            </div>
        </div>              
    </x-slot>
</x-app-layout>