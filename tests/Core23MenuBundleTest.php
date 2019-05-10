<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\MenuBundle\Tests;

use Core23\MenuBundle\Core23MenuBundle;
use Core23\MenuBundle\DependencyInjection\Compiler\MenuCompilerPass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Core23MenuBundleTest extends TestCase
{
    public function testItIsInstantiable(): void
    {
        $bundle = new Core23MenuBundle();

        static::assertInstanceOf(Core23MenuBundle::class, $bundle);
    }

    public function testBuild(): void
    {
        $containerBuilder = $this->createMock(ContainerBuilder::class);

        $containerBuilder->expects(static::once())->method('addCompilerPass')
            ->with(static::isInstanceOf(MenuCompilerPass::class))
        ;

        $bundle = new Core23MenuBundle();
        $bundle->build($containerBuilder);
    }
}
