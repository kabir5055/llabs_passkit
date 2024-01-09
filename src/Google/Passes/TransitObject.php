<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Passes;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Validation\HexColor;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;
use Luminouslabs\PassesKit\Google\Components\Transit\PurchaseDetails;
use Luminouslabs\PassesKit\Google\Components\Transit\TicketLeg;
use Luminouslabs\PassesKit\Google\Components\Transit\TicketRestrictions;
use Luminouslabs\PassesKit\Google\Enumerators\Transit\ConcessionCategory;
use Luminouslabs\PassesKit\Google\Enumerators\Transit\PassengerType;
use Luminouslabs\PassesKit\Google\Enumerators\Transit\TicketStatus;
use Luminouslabs\PassesKit\Google\Enumerators\Transit\TripType;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class TransitObject extends BaseObject
{
    /** @var string */
    final public const IDENTIFIER = 'transitObject';

    /**
     * Optional.
     * A copy of the inherited fields of the parent class. These fields are retrieved during a GET.
     */
    public ?TransitClass $classReference;

    /**
     * Optional.
     * The number of the ticket. This is a unique identifier for the ticket in the transit operator's system.
     */
    public ?string $ticketNumber;

    /**
     * Optional.
     * The number of passengers.
     */
    #[ValueIn([
        PassengerType::PASSENGER_TYPE_UNSPECIFIED,
        PassengerType::SINGLE_PASSENGER,
        PassengerType::MULTIPLE_PASSENGERS,
    ])]
    #[CastWith(LegacyValueCaster::class, PassengerType::class)]
    public ?string $passengerType;

    /**
     * Optional.
     * The name(s) of the passengers the ticket is assigned to. The above passengerType field is meant to
     * give Google context on this field.
     */
    public ?string $passengerNames;

    /**
     * Optional.
     * This id is used to group tickets together if the user has saved multiple tickets for the same trip.
     */
    public ?string $tripId;

    /**
     * Optional.
     * The status of the ticket. For states which affect display, use the state field instead.
     */
    #[ValueIn([
        TicketStatus::TICKET_STATUS_UNSPECIFIED,
        TicketStatus::USED,
        TicketStatus::REFUNDED,
        TicketStatus::EXCHANGED,
    ])]
    #[CastWith(LegacyValueCaster::class, TicketStatus::class)]
    public ?string $ticketStatus;

    /**
     * Optional.
     * A custom status to use for the ticket status value when ticketStatus does not provide the
     * right option. Both ticketStatus and customTicketStatus may not be set.
     */
    public ?LocalizedString $customTicketStatus;

    /**
     * Optional.
     * The concession category for the ticket.
     */
    #[ValueIn([
        ConcessionCategory::CONCESSION_CATEGORY_UNSPECIFIED,
        ConcessionCategory::ADULT,
        ConcessionCategory::CHILD,
        ConcessionCategory::SENIOR,
    ])]
    #[CastWith(LegacyValueCaster::class, ConcessionCategory::class)]
    public ?string $concessionCategory;

    /**
     * Optional.
     * A custom concession category to use when concessionCategory does not provide the right option.
     * Both concessionCategory and customConcessionCategory may not be set.
     */
    public ?LocalizedString $customConcessionCategory;

    /**
     * Optional.
     * Information about what kind of restrictions there are on using this ticket. For example,
     * which days of the week it must be used, or which routes are allowed to be taken.
     */
    public ?TicketRestrictions $ticketRestrictions;

    /**
     * Optional.
     * Purchase details for this ticket.
     */
    public ?PurchaseDetails $purchaseDetails;

    /**
     * Optional.
     * A single ticket leg contains departure and arrival information along with boarding and seating
     * information. If more than one leg is to be specified then use the ticketLegs field instead.
     * Both ticketLeg and ticketLegs may not be set.
     */
    public ?TicketLeg $ticketLeg;

    /**
     * Optional.
     * Each ticket may contain one or more legs. Each leg contains departure and arrival information along
     * with boarding and seating information. If only one leg is to be specified then use the ticketLeg field
     * instead. Both ticketLeg and ticketLegs may not be set.
     *
     * @var TicketLeg[]
     */
    #[CastWith(ArrayCaster::class, TicketLeg::class)]
    public array $ticketLegs = [];

    /**
     * Optional.
     * The background color for the card. If not set the dominant color of the hero image is used, and if no
     * hero image is set, the dominant color of the logo is used.
     */
    #[HexColor]
    public ?string $hexBackgroundColor;

    /**
     * Required.
     * The type of trip this transit object represents. Used to determine which symbol to use between
     * the origin and destination.
     */
    #[ValueIn([TripType::TRIP_TYPE_UNSPECIFIED, TripType::ROUND_TRIP, TripType::ONE_WAY])]
    #[CastWith(LegacyValueCaster::class, TripType::class)]
    #[Required]
    public ?string $tripType;
}
