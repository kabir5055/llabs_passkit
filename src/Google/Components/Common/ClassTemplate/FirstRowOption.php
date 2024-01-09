<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Enumerators\TransitOption;
use Spatie\DataTransferObject\Attributes\CastWith;

class FirstRowOption extends Component
{
    /** Optional. */
    #[ValueIn([
        TransitOption::ORIGIN_AND_DESTINATION_CODES,
        TransitOption::ORIGIN_AND_DESTINATION_NAMES,
        TransitOption::ORIGIN_NAME,
        TransitOption::TRANSIT_OPTION_UNSPECIFIED,
    ])]
    #[CastWith(LegacyValueCaster::class, TransitOption::class)]
    public ?string $transitOption;

    /** Optional. */
    public ?FieldSelector $fieldOption;
}
