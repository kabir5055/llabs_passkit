<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Flight;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\MaxLength;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;

class AirportInfo extends Component
{
    /**
     * Required.
     * Three character IATA airport code. This is a required field for origin and destination.
     */
    #[Required]
    #[MaxLength(3)]
    public ?string $airportIataCode;

    /**
     * Optional.
     * Terminal name. Eg: "INTL" or "I".
     */
    public ?string $terminal;

    /**
     * Optional.
     * A name of the gate. Eg: "B59" or "59".
     */
    public ?string $gate;

    /**
     * Optional.
     * Optional field that overrides the airport city name defined by IATA. By default, Google takes the
     * airportIataCode provided and maps it to the official airport city name defined by IATA.
     */
    public ?LocalizedString $airportNameOverride;
}
