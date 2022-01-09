<?php

/* This test class will be used as a
base to the Calculator class */
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    private $fistNumber;
    private $secondNumber;

    #region
    public function setFistNumber(float $fistNumber = 0): void {
        $this->fistNumber   = $this->validateNumber($fistNumber);
    }

    public function getFistNumber(): float {
        return $this->fistNumber;
    }

    public function setSecondNumber(float $secondNumber = 0): void {
        $this->secondNumber = $this->validateNumber($secondNumber);
    }

    public function getSecondNumber(): float {
        return $this->secondNumber;
    }

    public function validateNumber(float $number) {

        if(!(is_numeric($number))) {
            throw new \TypeError('The number is invalid!');
            die;
        }
        else {
            return $number;
        }
    }
    #endregion

    public function testTestTheSumBetweenTwoNumbers(): void {

        $this->setFistNumber(55);
        $this->setSecondNumber(92);

        $this->assertEquals(147, ($this->getFistNumber() + $this->getSecondNumber()));
    }

    public function testTestTheSubtractionBetweenTwoNumbers(): void {

        $this->setFistNumber(154);
        $this->setSecondNumber(76);

        $this->assertEquals(78, ($this->getFistNumber() - $this->getSecondNumber()));
    }

    public function testTestTheMultiplicationBetweenTwoNumbers(): void {

        $this->setFistNumber(72);
        $this->setSecondNumber(6);

        $this->assertEquals(432, ($this->getFistNumber() * $this->getSecondNumber()));
    }

    public function testTestTheDivisionBetweenTwoNumbers(): void {

        $this->setFistNumber(862);
        $this->setSecondNumber(2);

        $this->assertEquals(431, ($this->getFistNumber() / $this->getSecondNumber()));
    }

    public function testTestNumberValidation(): void {

        $this->expectException(TypeError::class);

        $this->setFistNumber('a');
    }
}
?>