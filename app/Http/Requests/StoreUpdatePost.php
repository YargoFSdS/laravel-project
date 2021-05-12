<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;
class StoreUpdatePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->segment(2);
        $rules =  [
            'title'   => ['required',
                         'min:3',
                         'max:160',
                         ValidationRule::unique('posts')->ignore($id)
            ],
            'content' =>  ['nullable', 'min:5', 'max:10000'],
            'image'   => ['required','image']
        ];
        if($this->method() == 'PUT'){
            $rules['image'] = ['nullable','image'];
        }
        return $rules;
    }

    public function messages(){
        return [
            'title.required' => 'O título é obrigatório',
            'title.min'      => 'O campo título deve conter ao menos 3 caracteres',
            'title.max'      => 'O título é deve conter no máximo 160 caracteres',
            'content.min'    => 'O conteúdo deve conter pelo menos 5 caracteres',
            'image.required' => 'O campo imagem é obrigatório',
        ];
    }
}
