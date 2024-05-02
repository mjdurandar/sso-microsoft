<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class Customers extends Component
{   
    public $customers = [];

    public function mount()
    {
        $this->customers = Customer::all();
    }

    public function render()
    {   
        return view('livewire.customers');
    }

    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        return $this->redirect('/customers', navigate:true);
    }
}
