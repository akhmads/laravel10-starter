<?php

namespace App\Livewire\Example;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Example;

class ExampleTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortColumn = "id";
    public $sortDir = "desc";
    public $sortLink = [];
    public $searchKeyword = '';
    public $confirmDeletion = false;
    public $set_id;

    public $readyToLoad = false;
    public function loadTable()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $examples = '';
        if( $this->readyToLoad ){
            $example = Example::orderby($this->sortColumn,$this->sortDir)->select('*');
            if(!empty($this->searchKeyword)){
                $example->orWhere('name','like',"%".$this->searchKeyword."%");
            }
            $examples = $example->paginate($this->perPage);
        }

        return view('livewire.example.example-table',[
            'ready' => $this->readyToLoad,
            'examples' => $examples,
        ]);
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function sortOrder($columnName)
    {
        $this->sortColumn = $columnName;
        $this->sortDir = ($this->sortDir == 'asc') ? 'desc' : 'asc';
        $this->sortLink = [];
        $this->sortLink[$columnName] = $this->sortDir;
    }

    public function delete($id)
    {
        $this->confirmDeletion = true;
        $this->set_id = $id;
    }

    public function destroy()
    {

        Example::destroy($this->set_id);
        $this->confirmDeletion = false;
        session()->flash('success', __('Example has been deleted'));
        return redirect()->route('example');
    }
}
