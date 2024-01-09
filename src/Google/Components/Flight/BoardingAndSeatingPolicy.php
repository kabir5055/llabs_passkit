<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Flight;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Enumerators\Flight\BoardingPolicy;
use Luminouslabs\PassesKit\Google\Enumerators\Flight\SeatClassPolicy;
use Spatie\DataTransferObject\Attributes\CastWith;

class BoardingAndSeatingPolicy extends Component
{
    /**
     * Optional.
     * Indicates the policy the airline uses for boarding. If unset, Google will default to ZONE_BASED.
     *
     * @see BoardingPolicy
     */
    #[ValueIn([
        BoardingPolicy::BOARDING_POLICY_UNSPECIFIED,
        BoardingPolicy::ZONE_BASED,
        BoardingPolicy::GROUP_BASED,
        BoardingPolicy::BOARDING_POLICY_OTHER,
    ])]
    #[CastWith(LegacyValueCaster::class, BoardingPolicy::class)]
    public ?string $boardingPolicy;

    /**
     * Optional.
     * Seating policy which dictates how we display the seat class. If unset, Google will default to CABIN_BASED.
     */
    #[ValueIn([
        SeatClassPolicy::SEAT_CLASS_POLICY_UNSPECIFIED,
        SeatClassPolicy::CABIN_BASED,
        SeatClassPolicy::CLASS_BASED,
        SeatClassPolicy::TIER_BASED,
        SeatClassPolicy::SEAT_CLASS_POLICY_OTHER,
    ])]
    #[CastWith(LegacyValueCaster::class, SeatClassPolicy::class)]
    public ?string $seatClassPolicy;
}
