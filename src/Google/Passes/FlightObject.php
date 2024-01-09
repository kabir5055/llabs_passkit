<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Passes;

use Luminouslabs\PassesKit\Common\Validation\HexColor;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Components\Common\Image;
use Luminouslabs\PassesKit\Google\Components\Flight\BoardingAndSeatingInfo;
use Luminouslabs\PassesKit\Google\Components\Flight\ReservationInfo;

class FlightObject extends BaseObject
{
    /** @var string */
    final public const IDENTIFIER = 'flightObject';

    /**
     * Optional.
     * A copy of the inherited fields of the parent class. These fields are retrieved during a GET.
     */
    public ?FlightClass $classReference;

    /**
     * Required.
     * Passenger name as it would appear on the boarding pass.
     */
    #[Required]
    public ?string $passengerName;

    /**
     * Optional.
     * Passenger specific information about boarding and seating.
     */
    public ?BoardingAndSeatingInfo $boardingAndSeatingInfo;

    /**
     * Required.
     * Information about flight reservation.
     */
    #[Required]
    public ?ReservationInfo $reservationInfo;

    /**
     * Optional.
     * An image for the security program that applies to the passenger.
     */
    public ?Image $securityProgramLogo;

    /**
     * Optional.
     * The background color for the card. If not set the dominant color of the hero image is used, and if no hero
     * image is set, the dominant color of the logo is used. The format is #rrggbb where rrggbb is a hex RGB triplet,
     * such as #ffcc00. You can also use the shorthand version of the RGB triplet which is #rgb, such as #fc0.
     */
    #[HexColor]
    public ?string $hexBackgroundColor;
}
