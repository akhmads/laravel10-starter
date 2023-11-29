<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangeProfile extends Component
{
    public $set_id;
    public $name = '';
    public $email = '';

    public function render()
    {
        return view('livewire.auth.change-profile');
    }

    public function mount(Request $request)
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function store()
    {
        $valid = $this->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:200', Rule::unique('users')->ignore(Auth::user()->id)],
        ]);

        $auth = Auth::user();
        $auth->name = $this->name;
        $auth->email = $this->email;
        $auth->save();
   
        session()->flash('success', __('Profile saved'));
    }
}
