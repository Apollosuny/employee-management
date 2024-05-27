<?php

abstract class Middlewares
{
    public $db;
    public $role;
    abstract function handle();
}
