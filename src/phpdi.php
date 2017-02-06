<?php

use SaleProducts\Domain\Contracts\Repositories\ProductRepositoryInterface;
use SaleProducts\Infra\Repositories\ProductRepository;

return [
    ProductRepositoryInterface::class => DI\object(ProductRepository::class)
];
