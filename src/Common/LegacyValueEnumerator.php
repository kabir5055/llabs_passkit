<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Common;

interface LegacyValueEnumerator
{
    public function mapLegacyValues(string $value): string;
}
