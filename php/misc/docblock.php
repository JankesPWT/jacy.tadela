<?php
namespace App;

/**
 * Summary of Transaction
 * @author Jacek Jankes Polit <jankes@jankes.com.pl>
 * @copyright (c) 2023
 * @package
 * @property mixed $name
 */
class Transaction 
{
    /** @var mixed */ //type hint przed PHP7.4
    private $customer;
    /** @var float */ 
    private float $amount;

    /**
     * Summary of process - dotyczy tylko jednej metody
     * @param string $customer //to samo co typ hint
     * @param int $amount
     * 
     * @return bool 
     * 
     * @throws \Exception //jakie wyjątki może zwracać
     * 
     * @author Jacek Jankes Polit <jankes@jankes.com.pl>
     */
    public function process(string $customer, int $amount): bool
    {
        //

        return true;
    }
    
    /**
     * Summary of update
     * @param string $name
     * @param int $sum
     * @return int
     * @author Jacek Jankes Polit <jankes@jankes.com.pl>
     */
    public function update(string $name, int $sum): int
    {
        return true;
    }
    
}
