<?php

declare(strict_types=1);

namespace App;
class Klasa
{
    public function index(): string
    {
        return 'To jest index z Klasa';
    }

    public function create(): string
    {
        return '<form action="/klasa/create" method="post">
                <input type="text" name="amount"><input type="submit">
                </form>';
    }

    public function store()
    {
        $amount = $_POST['amount'];

        print_r($amount);
    }
}