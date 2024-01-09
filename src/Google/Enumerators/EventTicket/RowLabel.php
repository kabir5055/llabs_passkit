<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Enumerators\EventTicket;

use Luminouslabs\PassesKit\Common\LegacyValueEnumerator;

final class RowLabel implements LegacyValueEnumerator
{
    /** @var string */
    public const ROW_LABEL_UNSPECIFIED = 'ROW_LABEL_UNSPECIFIED';

    /** @var string */
    public const ROW = 'ROW';

    public static function values(): array
    {
        return [self::ROW_LABEL_UNSPECIFIED, self::ROW];
    }

    public function mapLegacyValues(string $value): string
    {
        return str_replace(['row'], [self::ROW], $value);
    }
}
