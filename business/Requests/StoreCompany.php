<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCompany extends FormRequest
{

    public function authorize()
    {
        return true; // gate will be responsible for access
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [

      'name' => 'required|unique',
      'reg_nr' => 'required',
       'vat_nr' => 'nullable',
       'type' => 'nullable',
      'category' => 'nullable',


    ];
}
̈́}





























          ];
    }
}
