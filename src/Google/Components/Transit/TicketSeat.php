<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Transit;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;
use Luminouslabs\PassesKit\Google\Enumerators\Transit\FareClass;
use Spatie\DataTransferObject\Attributes\CastWith;

class TicketSeat extends Component
{
    /**
     * Optional.
     * The fare class of the ticketed seat.
     *
     * @see FareClass
     */
    #[ValueIn([FareClass::FARE_CLASS_UNSPECIFIED, FareClass::ECONOMY, FareClass::FIRST, FareClass::BUSINESS])]
    #[CastWith(LegacyValueCaster::class, FareClass::class)]
    public ?string $fareClass;

    /**
     * Optional.
     * A custom fare class to be used if no fareClass applies. Both fareClass and customFareClass may not be set.
     */
    public ?LocalizedString $customFareClass;

    /**
     * Optional.
     * The identifier of the train car or coach in which the ticketed seat is located. Eg. "10".
     */
    public ?string $coach;

    /**
     * Optional.
     * The identifier of where the ticketed seat is located. Eg. "42". If there is no specific
     * identifier, use seatAssigment instead.
     */
    public ?string $seat;

    /**
     * Optional.
     * The passenger's seat assignment. Eg. "no specific seat". To be used when there is no
     * specific identifier to use in seat.
     */
    public ?LocalizedString $seatAssignment;
}
