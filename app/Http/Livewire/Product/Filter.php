<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithPagination;
use domain\Facades\ProductFacade;

class Filter extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $max_price, $min_price, $name;

    public function render()
    {
        $data['max_price'] = $this->max_price;
        $data['min_price'] = $this->min_price;

        $res['products'] = ProductFacade::filter($data);
        // $res['tc']=$this;

        return view('pages.customer.components.filter')->with($res);
    }

    public function getFilterProducts($max_price, $min_price){
        $this->max_price=$max_price;
        $this->min_price=$min_price;

        $this->gotoPage(1);
    }

    public function gotoPage($page){
        $this->page = $page;
        $this->emit('getFilterProducts');
    }
}
