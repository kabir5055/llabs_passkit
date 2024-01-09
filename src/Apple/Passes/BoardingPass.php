<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Apple\Passes;

use Luminouslabs\PassesKit\Apple\Enumerators\TransitType;
use Luminouslabs\PassesKit\Apple\Traits\HasFields;
use Luminouslabs\PassesKit\Apple\Traits\HasGroupingIdentifier;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Spatie\DataTransferObject\Arr;
use Spatie\DataTransferObject\Attributes\Strict;

#[Strict]
class BoardingPass extends Pass
{
    use HasFields;
    use HasGroupingIdentifier;

    /**
     * Required.
     * Type of transit.
     *
     * @see TransitType
     */
    #[Required]
    #[ValueIn([TransitType::AIR, TransitType::BOAT, TransitType::BUS, TransitType::TRAIN, TransitType::GENERIC])]
    public ?string $transitType;

    public function toArray(): array
    {
        $array = parent::toArray();
        $keys = array_merge($this->fields(), ['transitType']);
        $fields = Arr::only($array, $keys);

        return array_merge(Arr::except($array, $keys), [
            'boardingPass' => $fields,
        ]);
    }
}
