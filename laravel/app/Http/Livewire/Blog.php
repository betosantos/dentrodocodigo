<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Categoria;

class Blog extends Component
{




    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.blog', compact('categorias'));
    }
}
