<?php declare(strict_types=1);

namespace DummyPhar\DependencyInjection;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class DummyKernel extends Kernel
{
    public function registerBundles(): array
    {
        return [];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        var_dump(__DIR__ . '/../../config/services.yaml');
        var_dump(file_exists(__DIR__ . '/../../config/services.yaml'));

        $loader->load(__DIR__ . '/../../config/services.yaml');
    }
}
