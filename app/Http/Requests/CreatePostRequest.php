<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
        return [
            'title'=>['required','max:50'],
            'description'=>'required',
            'file'=>['required','max:1000','mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'لطفا عنوان خود را وارد نمایید',
            'title.max'=>'تعداد کاراکتر های عنوان شما باید بیش از 2 کاراکتر باشد',
            'description.required'=>'لطفا توضیحات مطلب را وارد نمایید',
            'file.required'=>'لطفا تصویر خود انتخاب نمایید',
            'file.max'=>'حجم تصویر شما نباید بیش از 1 مگابایت باشد',
            'file.mimes'=>'فرمت تصویر شما باید jpeg یا png یا jpg باشد'

        ];
    }
}
