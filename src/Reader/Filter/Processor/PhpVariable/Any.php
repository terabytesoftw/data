<?php
declare(strict_types=1);

namespace Yiisoft\Data\Reader\Filter\Processor\PhpVariable;


class Any extends GroupFilter
{

    protected function checkResults(array $results): bool
    {
        return false;
    }

    public function getOperator(): string
    {
        return \Yiisoft\Data\Reader\Filter\Any::getOperator();
    }

    protected function checkResult($result): ?bool
    {
        return $result ? true : null;
    }
}