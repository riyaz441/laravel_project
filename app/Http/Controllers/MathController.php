<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Calculator;

class MathController extends Controller
{
    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function add()
    {
        $result = $this->calculator->add(5, 10);

        return "Result: " . $result;
    }
}
