<?php
namespace Chenframe\Promise\Container;

use Psr\Container\ContainerInterface;

interface Container extends ContainerInterface
{
    public function bind($abstract);

    public function make($abstract , array $parameters = []);
}