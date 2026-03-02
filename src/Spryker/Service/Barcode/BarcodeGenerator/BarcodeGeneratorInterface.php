<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\Barcode\BarcodeGenerator;

use Generated\Shared\Transfer\BarcodeResponseTransfer;

interface BarcodeGeneratorInterface
{
    public function generateBarcode(string $text, ?string $generatorPlugin): BarcodeResponseTransfer;
}
