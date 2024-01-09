<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Enumerators\DateFormat;
use Spatie\DataTransferObject\Attributes\CastWith;

class FieldReference extends Component
{
    /**
     * Required.
     * Path to the field being referenced, prefixed with "object" or "class" and separated with dots.
     * For example, it may be the string "object.purchaseDetails.purchasePrice".
     */
    #[Required]
    public ?string $fieldPath;

    /**
     * Optional.
     * Only valid if the fieldPath references a date field. Chooses how the date field will be
     * formatted and displayed in the UI.
     */
    #[ValueIn([
        DateFormat::DATE_FORMAT_UNSPECIFIED,
        DateFormat::DATE_ONLY,
        DateFormat::TIME_ONLY,
        DateFormat::DATE_YEAR,
        DateFormat::DATE_TIME,
        DateFormat::DATE_TIME_YEAR,
    ])]
    #[CastWith(LegacyValueCaster::class, DateFormat::class)]
    public ?string $dateFormat;
}
