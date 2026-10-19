<?php
namespace Psalm\SabreEventPlugin;

use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

/** @psalm-api */
class Plugin implements PluginEntryPointInterface
{
    #[\Override]
    public function __invoke(RegistrationInterface $psalm, ?SimpleXMLElement $config = null): void
    {
        $psalm->addStubFile(__DIR__ . '/stubs/coroutine.php');
        $psalm->addStubFile(__DIR__ . '/stubs/Promise.php');
    }
}
