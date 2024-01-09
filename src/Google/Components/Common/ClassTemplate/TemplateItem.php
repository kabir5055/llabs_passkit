<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Enumerators\PredefinedItem;
use Spatie\DataTransferObject\Attributes\CastWith;

class TemplateItem extends Component
{
    /**
     * Optional.
     * A reference to a field to display.
     */
    public ?FieldSelector $firstValue;

    /**
     * Optional.
     * A reference to a field to display. This may only be populated if the firstValue field is populated.
     */
    public ?FieldSelector $secondValue;

    /**
     * Optional.
     * A predefined item to display. Only one of firstValue or predefinedItem may be set.
     */
    #[ValueIn([
        PredefinedItem::FLIGHT_NUMBER_AND_OPERATING_FLIGHT_NUMBER,
        PredefinedItem::FREQUENT_FLYER_PROGRAM_NAME_AND_NUMBER,
        PredefinedItem::PREDEFINED_ITEM_UNSPECIFIED,
    ])]
    #[CastWith(LegacyValueCaster::class, PredefinedItem::class)]
    public ?string $predefinedItem;
}
