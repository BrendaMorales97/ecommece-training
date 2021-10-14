<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $name, $price, $description, $thumbnail;

    public function save()
    {
        $validate = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'thumbnail' => 'required'
        ]);

        $validate['thumbnail'] = $this->thumbnail->store('photos');

        $product = Product::create($validate);
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
