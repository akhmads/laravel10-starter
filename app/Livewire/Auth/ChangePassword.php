<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;

class ChangePassword extends Component
{
    public $set_id;
    public $current_password = '';
    public $new_password = '';
    public $confirm_password = '';

    public function render()
    {
        return view('livewire.auth.change-password');
    }

    public function store()
    {
        $valid = $this->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        $auth = Auth::user();
        $auth->password = Hash::make($this->new_password);
        $auth->save();

        $this->current_password = '';
        $this->new_password = '';
        $this->confirm_password = '';

        session()->flash('success', __('Password has been changed'));
    }
}
