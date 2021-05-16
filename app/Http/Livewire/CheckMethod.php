<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckMethod extends Component
{
    public $tarjeta = false; // status = PAGADO
    public $transferencia = false; // status = PAGADO
    public $efectivo = false; // status = PENDIENTE

    public function render()
    {
        return view('livewire.check-method');
    }
    
}
