<?php

namespace Symfony\Component\Validator;

/**
 * @extends \Traversable<mixed, ConstraintViolationInterface>
 */
interface ConstraintViolationListInterface extends \Traversable, \Countable, \ArrayAccess
{
}
