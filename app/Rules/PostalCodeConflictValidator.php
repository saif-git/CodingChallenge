<?php

namespace App\Rules;

use App\Sale;
use Illuminate\Contracts\Validation\Rule;

class PostalCodeConflictValidator implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(!empty($value)){

            $verif = preg_match('/[0-9]{5}-[0-9]{3}$/',$value,$attr);

            if($verif){
                    $star = ['*'];
                    $post_code = str_replace($star,'00',$value);
                    if(strlen($value)==5){
                        return Sale::where('postal_codes','<=',$post_code)->where('sales_aria','<=',$value);
                    }
                    return false;
            }
            return false;
        }
        return false

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'this is not a valid post code';
    }
}
