<?php
namespace Zerkms\SymfonyPsalmPlugin;

use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

class Plugin implements PluginEntryPointInterface
{
    public function __invoke(RegistrationInterface $psalm, ?SimpleXMLElement $config = null): void
    {
        $psalm->addStubFile(__DIR__ . '/stubs/ContainerBuilder.php');
        $psalm->addStubFile(__DIR__ . '/stubs/FormView.php');
        $psalm->addStubFile(__DIR__ . '/stubs/ParameterBag.php');
        $psalm->addStubFile(__DIR__ . '/stubs/ConstraintViolationListInterface.php');
    }
}
