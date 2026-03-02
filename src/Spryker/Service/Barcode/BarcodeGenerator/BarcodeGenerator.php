<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\Barcode\BarcodeGenerator;

use Generated\Shared\Transfer\BarcodeResponseTransfer;

class BarcodeGenerator implements BarcodeGeneratorInterface
{
    /**
     * @var \Spryker\Service\Barcode\BarcodeGenerator\BarcodeGeneratorPluginResolverInterface
     */
    protected $pluginResolver;

    public function __construct(BarcodeGeneratorPluginResolverInterface $pluginResolver)
    {
        $this->pluginResolver = $pluginResolver;
    }

    public function generateBarcode(string $text, ?string $generatorPlugin): BarcodeResponseTransfer
    {
        return $this->pluginResolver
            ->getBarcodeGeneratorPlugin($generatorPlugin)
            ->generate($text);
    }
}
