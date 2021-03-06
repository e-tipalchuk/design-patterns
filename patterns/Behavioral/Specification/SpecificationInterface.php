<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Interface SpecificationInterface
 * @package DesignPatterns\Behavioral\Specification
 */
interface SpecificationInterface
{
    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool;
}
