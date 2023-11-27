<?php

namespace App\Livewire\User;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $sortColumn = "id";
    public $sortDir = "desc";
    public $sortLink = [];
    public $searchKeyword = '';
    public $confirmDeletion = false;
    public $set_id;

    public function render()
    {
        $user = User::orderby($this->sortColumn,$this->sortDir)->select('*');
        if(!empty($this->searchKeyword)){
            $user->orWhere('name','like',"%".$this->searchKeyword."%");
            $user->orWhere('email','like',"%".$this->searchKeyword."%");
        }
        $users = $user->paginate($this->perPage);

        return view('livewire.user.user-table',['users' => $users]);
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

        User::destroy($this->set_id);
        $this->confirmDeletion = false;
        session()->flash('success', __('User has been deleted'));
        return redirect()->to('/user');
    }
}
