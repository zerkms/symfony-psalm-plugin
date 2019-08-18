<?php

namespace Symfony\Component\DependencyInjection;

class ContainerBuilder extends Container implements TaggedContainerInterface
{
    /**
     * @param string $name
     * @param bool $throwOnAbstract
     * @return array<string, array{priority: null|int}[]>
     */
    public function findTaggedServiceIds($name, $throwOnAbstract = false) {}
}
