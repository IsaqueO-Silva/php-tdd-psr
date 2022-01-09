<?php

namespace Isaque\Calculator;

class Calculator
{
    private $fistNumber;
    private $secondNumber;

    #region
    public function setFistNumber(float $fistNumber = 0): void
    {
        $this->fistNumber   = $this->validateNumber($fistNumber);
    }

    public function getFistNumber(): float
    {
        return $this->fistNumber;
    }

    public function setSecondNumber(float $secondNumber = 0): void
    {
        $this->secondNumber = $this->validateNumber($secondNumber);
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }

    public function validateNumber(float $number)
    {

        if (!(is_numeric($number))) {
            throw new \TypeError('The number is invalid!');
            die;
        } else {
            return $number;
        }
    }
    #endregion

    public function sum(): string
    {

        return json_encode(($this->getFistNumber() + $this->getSecondNumber()));
    }

    public function subtract(): string
    {

        return json_encode(($this->getFistNumber() - $this->getSecondNumber()));
    }

    public function multiply(): string
    {

        return json_encode(($this->getFistNumber() * $this->getSecondNumber()));
    }

    public function division(): string
    {

        return json_encode(($this->getFistNumber() / $this->getSecondNumber()));
    }
}
