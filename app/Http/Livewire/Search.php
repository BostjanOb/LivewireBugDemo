<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public ?string $group = '';
    public ?string $q = null;

    protected $queryString = [
        'group',
        'q'     => ['except' => '']
    ];

    public function render()
    {
        return view('livewire.search')
            ->layout('components.layouts');
    }
}
