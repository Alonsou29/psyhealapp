<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Rule;
use App\Models\Contact;

class InvalidEmail implements Rule
{
    public $email;
    /**
     * Create a new rule instance
     * 
     * @return void
     */

     public function __construct($email=null){
        $this->email = $email;
     }



        /**
         * Determine if the value is valid.
         *
         * @param  string  $attribute
         * @param  mixed  $value
         * @return bool
         */
        public function passes($attribute, $value)
        {
            return Contact::where('user_id', auth()->id())->whereHas('user',function($query) use ($value){
                $query->where('email', $value)->when($this->email,function($query){
                    $query->where('email', '!=',$this->email);
                });
            })->count() === 0;
        }
    
        /**
         * Get the validation error message for the rule.
         *
         * @param  string  $attribute
         * @return string
         */
        public function message()
        {
            return 'ya este contacto esta registrado';
        }
    }
