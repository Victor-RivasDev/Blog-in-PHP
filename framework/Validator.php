<?php

namespace Framework;


class Validator
{
    protected $errors = [];

    public function __construct(
        protected array $data,
        protected array $rules = []
    ){
        $this->validate();
    }

    public function validate(): void 
    {
        foreach ($this->rules as $field => $rules) {
            $rules = explode('|', $rules);
            $value = trim($this->data[$field]);

            foreach($rules as $rule) {
                [$name, $param] = array_pad(explode(':', $rule), 2, null);

                if ($error = $this->hasError($name, $field, $value, $param)) {
                    $this->errors[] = $error;

                    break;
                }
            };

        }
    }

    protected function hasError(string $name, string $field, string $value, ?string $param): ?string
    {
        return match ($name) {
            'required' => $this->validateRequired($field, $value),
            'min'      => strlen($value) < (int)$param ? "El campo {$field} debe tener al menos {$param} caracteres" : null,
            'max'      => strlen($value) > (int)$param ? "El campo {$field} no puede tener más de {$param} caracteres" : null,
            'url'      => !filter_var($value, FILTER_VALIDATE_URL) ? "El campo {$field} debe ser una URL válida" : null,
            default    => null,
        };
    }
    protected function validateRequired(string $field, string $value): ?string
    {
        return ($value === null || $value === '') ? "El campo {$field} es obligatorio" : null;
    }

    public function passes(): bool
    {
        return empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }
}