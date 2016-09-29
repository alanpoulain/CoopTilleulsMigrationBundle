<?php

/*
 * This file is part of the MigrationBundle package.
 *
 * (c) Vincent Chalamon <vincent@les-tilleuls.coop>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CoopTilleuls\MigrationBundle;

use CoopTilleuls\MigrationBundle\DependencyInjection\Compiler\LoaderCompilerPass;
use CoopTilleuls\MigrationBundle\DependencyInjection\Compiler\TransformerCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Vincent Chalamon <vincent@les-tilleuls.coop>
 */
final class CoopTilleulsMigrationBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new LoaderCompilerPass());
        $container->addCompilerPass(new TransformerCompilerPass());
    }
}
