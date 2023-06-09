<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
public function authorize()
{
return true;
}

public function rules()
{
return [
'name' => 'required|string|min:2',
'email' => 'required|email',
'password' => 'required|string|min:8',
];
}
}
