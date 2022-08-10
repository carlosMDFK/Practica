<?php

namespace App\Http\Livewire;

use App\Models\Orga;
use Livewire\Component;

class CreateDirec extends Component
{
    public $open = false;

    public $rutpresi, $npresi, $direcpresi, $fonopresi, $rutsecre, $nsecre, $direcsecre, $fonosecre, $rutteso, $nteso, $directeso, $fonoteso, $rutdirec1, $ndirec1, $direcdirec1, $fonodirec1, $rutdirec2, $ndirec2, $direcdirec2, $fonodirec2;

    protected $rules = [
        'rutpresi' => 'required|min:1',
        'npresi' => 'required|min:1',
        'direcpresi' => 'required|min:1',
        'fonopresi' => 'required|min:1',
        'rutsecre' => 'required|min:1',
        'nsecre' => 'required|min:1',
        'direcsecre' => 'required|min:1',
        'fonosecre' => 'required|min:1',
        'rutteso' => 'required|min:1',
        'nteso' => 'required|min:1',
        'directeso' => 'required|min:1',
        'fonoteso' => 'required',
        'rutdirec1' => 'required|min:1',
        'ndirec1' => 'required',
        'direcdirec1' => 'required|min:1',
        'fonodirec1' => 'required',
        'rutdirec2' => 'required|min:1',
        'ndirec2' => 'required',
        'direcdirec2' => 'required',
        'fonodirec2' => 'required'
    ];

    /*public function updated($propertyName){
        $this->validateOnly($propertyName);
    }*/

    public function save(){

        $this->validate(); 

        Orga::create([
            'rutpresi' => $this->rutpresi,
            'npresi' => $this->npresi,
            'direcpresi' => $this->direcpresi,
            'fonopresi' => $this->fonopresi,
            'rutsecre' => $this->rutsecre,
            'nsecre' => $this->nsecre,
            'direcsecre' => $this->direcsecre,
            'fonosecre' => $this->fonosecre,
            'rutteso' => $this->rutteso,
            'nteso' => $this->nteso,
            'directeso' => $this->directeso,
            'fonoteso' => $this->fonoteso,
            'rutdirec1' => $this->rutdirec1,
            'ndirec1' => $this->ndirec1,
            'direcdirec1' => $this->direcdirec1,
            'fonodirec1' => $this->fonodirec1,
            'rutdirec2' => $this->rutdirec2,
            'ndirec2' => $this->ndirec2,
            'direcdirec2' => $this->direcdirec2,
            'fonodirec2' => $this->fonodirec2
        ]);

        $this->reset(['open', 'rutpresi', 'npresi', 'direcpresi', 'fonopresi', 'rutsecre', 'nsecre', 'direcsecre', 'fonosecre', 'rutteso', 'nteso', 'directeso', 'fonoteso', 'rutdirec1', 'ndirec1', 'direcdirec1', 'fonodirec1', 'rutdirec2', 'ndirec2', 'direcdirec2', 'fonodirec2']);

        $this->emitTo('show-directivas','render');
        $this->emit('alert', 'El registro se creo exitosamente');
    }


    public function render()
    {
        return view('livewire.create-direc');
    }

    public function updatingOpen(){
        if($this->open==false){
            $this->reset(['open', 'rutpresi', 'npresi', 'direcpresi', 'fonopresi', 'rutsecre', 'nsecre', 'direcsecre', 'fonosecre', 'rutteso', 'nteso', 'directeso', 'fonoteso', 'rutdirec1', 'ndirec1', 'direcdirec1', 'fonodirec1', 'rutdirec2', 'ndirec2', 'direcdirec2', 'fonodirec2']);
        }
    }
}
