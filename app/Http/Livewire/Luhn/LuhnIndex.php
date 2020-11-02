<?php

namespace App\Http\Livewire\Luhn;

use Faker\Calculator\Luhn as LuhnAlgortihm;
use Livewire\Component;

class LuhnIndex extends Component
{
    public $number_card, $expiry_number, $date, $cvv;

    public function render()
    {
        return view('livewire.luhn.luhn-index');
    }

    public function store()
    {
        $vaild = LuhnAlgortihm::isValid($this->number_card);
        //$checkDigit = Luhn::computeCheckDigit($this->number_card);
        //$checkSum = Luhn::computeCheckSum($this->number_card);

        dd($vaild);
    }
}
