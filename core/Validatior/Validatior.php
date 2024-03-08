<?php

namespace App\Core\Validator;

class Validator
{
    private array $errors = [];
    private array $data;

    public function validate(array $data, array $rules): bool
    {
        $this->errors = [];
        $this->data = $data;

        foreach ($rules as $key => $rule) {
            $rules = $rule;

            foreach ($rules as $rule) {
                $rule = explode(':', $rule);

                $rullName = $rule[0];
                $rullValue = $rule[1] ?? null;

                $error = $this->validateRule($key, $rullName, $rullValue);

                if ($error) {
                    $this->errors[$key][] = $error;
                }
            }
        }
        return empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function validateRule(string $key, string $ruleName, string $ruleValue = null): string|false
    {
        $value = $this->data[$key];

        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    return 'Field is required';
                }
                break;
            case 'min':
                if (strlen($value) < $ruleValue) {
                    return "Field must be at least $ruleValue characters long";
                }
                break;
            case 'max':
                if (strlen($value) > $ruleValue) {
                    return "Field must be at most $ruleValue characters long";
                }
                break;
            case 'email':
                if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    return 'Field must be a valid email adress';
                }
                break;
        }
        return false;
    }
}