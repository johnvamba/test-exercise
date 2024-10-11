<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination; 
use App\Models\Item; 

class Opportunities extends Component
{
    use WithPagination; 
    
    public $perPage = 20; // Default number of items per page  

    public $textQuery = "";

    public $options = [20, 50, 100, 250]; // Options for items per page 
    
    protected $queryString = ['perPage', 'textQuery']; // Keep perPage in the URL 
    
    public function updatingPerPage() 
    {
        $this->resetPage(); // Reset to the first page when perPage changes  
    } 

    public function render()
    {
        $textQuery = $this->textQuery;
        $items = Item::when($this->textQuery != "", function($query) use ($textQuery){
                $query->where('name', 'like', "%". $textQuery ."%")
                    ->orWhere('name', '=', $textQuery);
            })->paginate($this->perPage); 

        return view('livewire.opportunities', [ 
            'items' => $items 
        ]); 

    }
}
