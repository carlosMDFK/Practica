<?php

namespace App\Http\Livewire;

use App\Models\Orga;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false;

    public $rut, $nombre, $regis, $fojas, $tipo, $detalle, $zona, $sector, $direc, $fonosede, $uvecinal, $ffunda, $nsocios, $fincrip, $ndecpj, $fdecpj, $obs, $desde, $hasta;

    protected $rules = [
        'rut' => 'required|min:1',
        'nombre' => 'required|min:1',
        'regis' => 'required|min:1',
        'fojas' => 'required|min:1',
        'tipo' => 'required|min:1',
        'detalle' => 'required|min:1',
        'zona' => 'required|min:1',
        'sector' => 'required|min:1',
        'direc' => 'required|min:1',
        'fonosede' => 'required|min:1',
        'uvecinal' => 'required|min:1',
        'ffunda' => 'required',
        'nsocios' => 'required|min:1',
        'fincrip' => 'required',
        'ndecpj' => 'required|min:1',
        'fdecpj' => 'required',
        'obs' => 'required|min:1',
        'desde' => 'required',
        'hasta' => 'required'
    ];

    /*public function updated($propertyName){
        $this->validateOnly($propertyName);
    }*/

    public function save(){

        $this->validate(); 

        Orga::create([
            'rut' => $this->rut,
            'nombre' => $this->nombre,
            'regis' => $this->regis,
            'fojas' => $this->fojas,
            'tipo' => $this->tipo,
            'detalle' => $this->detalle,
            'zona' => $this->zona,
            'sector' => $this->sector,
            'direc' => $this->direc,
            'fonosede' => $this->fonosede,
            'uvecinal' => $this->uvecinal,
            'ffunda' => $this->ffunda,
            'nsocios' => $this->nsocios,
            'fincrip' => $this->fincrip,
            'ndecpj' => $this->ndecpj,
            'fdecpj' => $this->fdecpj,
            'obs' => $this->obs,
            'desde' => $this->desde,
            'hasta' => $this->hasta
        ]);

        $this->reset(['open', 'rut', 'nombre', 'regis', 'fojas', 'tipo', 'detalle', 'zona', 'sector', 'direc', 'fonosede', 'uvecinal', 'ffunda', 'nsocios', 'fincrip', 'ndecpj', 'fdecpj', 'obs', 'desde', 'hasta']);

        $this->emitTo('datos-generales','render');
        $this->emit('alert', 'El registro se creo exitosamente');
    }


    public function render()
    {
        return view('livewire.create-post');
    }

    public function updatingOpen(){
        if($this->open==false){
            $this->reset(['open', 'rut', 'nombre', 'regis', 'fojas', 'tipo', 'detalle', 'zona', 'sector', 'direc', 'fonosede', 'uvecinal', 'ffunda', 'nsocios', 'fincrip', 'ndecpj', 'fdecpj', 'obs', 'desde', 'hasta']);
        }
    }
}
