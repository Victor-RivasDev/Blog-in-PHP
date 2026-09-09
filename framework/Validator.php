<?php

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
                var_dump(
                    explode(':', $rule)
                );
                die();
            }

            var_dump($field);
            die();
        }
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