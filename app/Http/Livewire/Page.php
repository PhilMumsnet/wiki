<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page as PageModel;

class Page extends Component
{
    /** @var PageModel */
    public $page;

    public function mount(PageModel $page)
    {
        $this->page = $page;
    }
    public function render()
    {
        return view('livewire.page');
    }
}
