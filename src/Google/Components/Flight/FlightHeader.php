<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Flight;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class FlightHeader extends Component
{
    /**
     * Required.
     * Information about airline carrier. This is a required property of flightHeader.
     */
    #[Required]
    public ?FlightCarrier $carrier;

    /**
     * Required.
     * The flight number without IATA carrier code. This field should contain only digits.
     * This is a required property of flightHeader.
     */
    #[Required]
    public ?string $flightNumber;

    /**
     * Optional.
     * Information about operating airline carrier.
     */
    public ?FlightCarrier $operatingCarrier;

    /**
     * Optional.
     * The flight number used by the operating carrier without IATA carrier code.
     * This field should contain only digits.
     */
    public ?string $operatingFlightNumber;
}
