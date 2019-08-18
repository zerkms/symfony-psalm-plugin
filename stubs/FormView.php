<?php

namespace Symfony\Component\Form;

class FormView implements \ArrayAccess, \IteratorAggregate, \Countable
{
    /** @var array */
    public $vars = [
        'value' => null,
        'attr' => [],
    ];
}
