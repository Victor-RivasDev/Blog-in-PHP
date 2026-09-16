<?php

namespace Framework;


class Validator
{
    protected $errors = [];

    public function __construct(
        protected array $data,
        protected array $rules = [],
        protected bool $autoRedirect = true
    ){
        $this->validate();
        if ($autoRedirect && !$this->passes()) {
            $this->redirectIfFailed();
        }
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
            'email'    => !filter_var($value, FILTER_VALIDATE_EMAIL) ? "El campo {$field} debe ser un correo electrónico válido" : null,
            default    => throw new \InvalidArgumentException("Regla de validación desconocida: {$name}"),
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
    protected function redirectIfFailed(): void
    {
        session()->setFlash('errors', $this->errors);

        back();
    }
    public static function make(array $data, array $rules, bool $autoRedirect = true): self
    {
        return new self($data, $rules, $autoRedirect);
    }
}