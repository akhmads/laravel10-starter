<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserForm extends Component
{
    public $set_id;
    public $name = '';
    public $email = '';
    public $password = '';

    public function render()
    {
        return view('livewire.user.user-form');
    }

    public function mount(Request $request)
    {
        $user = User::Find($request->id);
        $this->set_id = $user->id ?? '';
        $this->name = $user->name ?? '';
        $this->email = $user->email ?? '';
    }

    public function store()
    {
        if(empty($this->set_id))
        {
            $valid = $this->validate([
                'name' => 'required',
                'email' => ['required', 'email', 'max:200', Rule::unique('users')],
                'password' => ['required','string','min:8'],
            ]);

            $valid['password'] = Hash::make($this->password);
            $user = User::create($valid);
            session()->flash('success', __('User saved'));
            return redirect()->route('user.form',$user->id);
        }
        else
        {
            $valid = $this->validate([
                'name' => 'required',
                'email' => ['required', 'email', 'max:200', Rule::unique('users')->ignore($this->set_id)],
                'password' => ['nullable','string','min:8'],
            ]);
            $user = User::find($this->set_id);

            if( empty($this->password) ){
                unset($valid['password']);
            }else{
                $valid['password'] = Hash::make($this->password);
            }

            $user->update($valid);
            session()->flash('success', __('User saved'));
        }
    }
}
