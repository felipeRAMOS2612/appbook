<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RutValidationRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Implementa la lógica de validación del RUT aquí
        // Devuelve true si el RUT es válido, false en caso contrario

        $rut = preg_replace('/[^0-9kK]/', '', $value);

        if (strlen($rut) < 8) {
            return false;
        }

        $dv = substr($rut, -1);
        $numero = substr($rut, 0, -1);

        $suma = 0;
        $multiplo = 2;

        for ($i = strlen($numero) - 1; $i >= 0; $i--) {
            $suma += $numero[$i] * $multiplo;
            $multiplo = ($multiplo < 7) ? $multiplo + 1 : 2;
        }

        $digito = 11 - ($suma % 11);

        if ($digito == 11) {
            $digito = 0;
        }

        return ($digito == 10 && strtoupper($dv) == 'K') || ($digito == strtoupper($dv));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El RUT no es válido.';
    }
}

