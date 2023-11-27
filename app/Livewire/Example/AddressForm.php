<?php

namespace App\Livewire\Example;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Address;

class AddressForm extends Component
{
    public $set_id;
    public $example_id;
    public $address;
    public $city;
    public $province;
    public $addressModal = false;
    public $confirmDeletion = false;

    public function render()
    {
        $addresses = Address::where('example_id',$this->example_id)->orderBy('id')->get();
        return view('livewire.example.address-form',['addresses' => $addresses]);
    }

    public function mount($example_id = '')
    {
        $this->example_id = $example_id;
    }

    public function store()
    {
        if(empty($this->set_id))
        {
            $valid = $this->validate([
                'address' => 'required',
                'city' => 'required',
                'province' => 'required',
            ]);

            $valid['example_id'] = $this->example_id;
            Address::create($valid);
            session()->flash('success', __('Address saved'));

        }
        else
        {
            $valid = $this->validate([
                'address' => 'required',
                'city' => 'required',
                'province' => 'required',
            ]);

            $address = Address::find($this->set_id);
            $address->update($valid);
            session()->flash('success', __('Address saved'));
        }

        $this->addressModal = false;
    }

    public function add()
    {
        $this->set_id = '';
        $this->address = '';
        $this->city = '';
        $this->province = '';

        $this->resetErrorBag();
        $this->resetValidation();
        $this->addressModal = true;
    }

    public function edit($id)
    {
        $address = Address::find($id);
        $this->set_id = $address->id ?? '';
        $this->address = $address->address ?? '';
        $this->city = $address->city ?? '';
        $this->province = $address->province ?? '';

        $this->resetErrorBag();
        $this->resetValidation();
        $this->addressModal = true;
    }

    public function delete()
    {
        Address::destroy($this->set_id);
        $this->confirmDeletion = false;
        $this->addressModal = false;
    }
}
