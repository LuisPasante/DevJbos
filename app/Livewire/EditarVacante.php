<?php

namespace App\Livewire;

use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use App\Models\Categoria;

class EditarVacante extends Component
{ 
    public $titulo;
    public $categoria;

    public $salario;

    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $imagenActual;
    public Vacante $vacante; 
    public function mount(Vacante $vacante){
        $this->vacante = $vacante;
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->empresa = $vacante->empresa;
        $this->ultimo_dia = $vacante->ultimo_dia->format('Y-m-d');
        $this->descripcion = $vacante->descripcion;
        $this->imagen = null; // para Livewire (archivo nuevo)
        $this->imagenActual = $vacante->imagen; // para mostrar la actual
    }
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
       
        return view('livewire.editar-vacante',[
            'salarios'=>$salarios,
            'categorias'=>$categorias
        ]);
    }
}
