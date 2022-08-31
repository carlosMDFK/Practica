<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Orga;
use Livewire\WithPagination;

class DatosGenerales extends Component
{
    use WithPagination;

    public $search, $post;
    public $sort = 'id';
    public $direction = 'asc';


    public $ver_post = false;
    public $ver_direc = false;
    //edit
    public $open_edit = false;
    public $direct_edit = false;

    protected $listeners = ['render', 'delete'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'post.rut' => 'sometimes',
        'post.nombre' => 'sometimes',
        'post.regis' => 'sometimes',
        'post.fojas' => 'sometimes',
        'post.tipo' => 'sometimes',
        'post.detalle' => 'sometimes',
        'post.zona' => 'sometimes',
        'post.sector' => 'sometimes',
        'post.direc' => 'sometimes',
        'post.fonosede' => 'sometimes',
        'post.uvecinal' => 'sometimes',
        'post.ffunda' => 'sometimes',
        'post.nsocios' => 'sometimes',
        'post.fincrip' => 'sometimes',
        'post.ndecpj' => 'sometimes',
        'post.fdecpj' => 'sometimes',
        'post.obs' => 'sometimes',
        'post.desde' => 'sometimes',
        'post.hasta' => 'sometimes',
        'post.rutpresi' => 'sometimes',
        'post.npresi' => 'sometimes',
        'post.direcpresi' => 'sometimes',
        'post.fonopresi' => 'sometimes',
        'post.rutsecre' => 'sometimes',
        'post.nsecre' => 'sometimes',
        'post.direcsecre' => 'sometimes',
        'post.fonosecre' => 'sometimes',
        'post.rutteso' => 'sometimes',
        'post.nteso' => 'sometimes',
        'post.directeso' => 'sometimes',
        'post.fonoteso' => 'sometimes',
        'post.rutdirec1' => 'sometimes',
        'post.ndirec1' => 'sometimes',
        'post.direcdirec1' => 'sometimes',
        'post.fonodirec1' => 'sometimes',
        'post.rutdirec2' => 'sometimes',
        'post.ndirec2' => 'sometimes',
        'post.direcdirec2' => 'sometimes',
        'post.fonodirec2' => 'sometimes'

    ];
    //endedit

    public function render()
    {
        $posts = Orga::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->orWhere('sector', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate(15);

        return view('livewire.datos-generales', compact('posts'));
    }

    public function order($sort)
    {

        if ($this->sort == $sort) {

            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function edit(Orga $post)
    {
        $this->post = $post;
        $this->open_edit = true;
    }

    public function editDirec(Orga $post)
    {
        $this->post = $post;
        $this->direct_edit = true;
    }

    public function ver(Orga $post)
    {
        $this->post = $post;
        $this->ver_post = true;
    }

    public function verDirec(Orga $post)
    {
        $this->post = $post;
        $this->ver_direc = true;
    }

    public function update()
    {
        $this->validate();
        $this->post->save();

        $this->reset(['open_edit', 'direct_edit']);

        $this->emit('alert', 'El registro se actualizó exitosamente');
    }

    public function delete(Orga $post)
    {
        $post->delete();
    }
}
