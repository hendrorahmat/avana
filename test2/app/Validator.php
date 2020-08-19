<?php

namespace App;

use App\ExcelValidator;

class Validator
{
    /**
     * @var ExcelValidator
     */
    private $validator;

    public function __construct(ExcelValidator $excelValidator)
    {
        $this->validator = $excelValidator;
    }

    public function validate(): ExcelValidator
    {
        return $this->validator->validate();
    }
}
