<?php
declare(strict_types=1);

namespace Yiisoft\Data\Reader\Filter\Processor\PhpVariable;

class GreaterThan extends Processor
{

    public function getOperator(): string
    {
        return \YiiSoft\Data\Reader\Filter\GreaterThan::getOperator();
    }

    public function execute(array $item, array $arguments): bool
    {
        [$field, $value] = $arguments;
        return $item[$field] > $value;
    }

}