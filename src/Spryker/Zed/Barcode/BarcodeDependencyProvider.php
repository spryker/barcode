<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Barcode;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @method \Spryker\Zed\Barcode\BarcodeConfig getConfig()
 */
class BarcodeDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const SERVICE_BARCODE = 'SERVICE_BARCODE';

    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = parent::provideCommunicationLayerDependencies($container);
        $container = $this->addBarcodeService($container);

        return $container;
    }

    protected function addBarcodeService(Container $container): Container
    {
        $container->set(static::SERVICE_BARCODE, function (Container $container) {
            return $container->getLocator()->barcode()->service();
        });

        return $container;
    }
}
