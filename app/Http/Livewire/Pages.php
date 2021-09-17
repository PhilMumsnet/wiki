<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Pages extends Component
{
    /** @var Collection */
    public $pages;

    public function mount()
    {
        $this->pages = Page::all();
    }

    public function render()
    {
        return view('livewire.pages');
    }
}
