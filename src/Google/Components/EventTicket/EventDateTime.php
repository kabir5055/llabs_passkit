<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\EventTicket;

use Luminouslabs\PassesKit\Common\Casters\ISO8601DateCaster;
use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;
use Luminouslabs\PassesKit\Google\Enumerators\DoorsOpenLabel;
use Spatie\DataTransferObject\Attributes\CastWith;

class EventDateTime extends Component
{
    /**
     * Optional.
     * The date/time when the doors open at the venue.
     * ISO 8601 + optional offset.
     */
    #[CastWith(ISO8601DateCaster::class)]
    public ?string $doorsOpen;

    /**
     * Optional.
     * The date/time when the event starts.
     * ISO 8601 + optional offset.
     */
    #[CastWith(ISO8601DateCaster::class)]
    public ?string $start;

    /**
     * Optional.
     * The date/time when the event ends.
     * ISO 8601 + optional offset.
     */
    #[CastWith(ISO8601DateCaster::class)]
    public ?string $end;

    /**
     * Optional.
     * The label to use for the doors open value (doorsOpen) on the card detail view.
     */
    #[ValueIn([DoorsOpenLabel::DOORS_OPEN, DoorsOpenLabel::GATES_OPEN, DoorsOpenLabel::DOORS_OPEN_LABEL_UNSPECIFIED])]
    #[CastWith(LegacyValueCaster::class, DoorsOpenLabel::class)]
    public ?string $doorsOpenLabel;

    /**
     * Optional.
     * A custom label to use for the doors open value (doorsOpen) on the card detail view.
     */
    public ?LocalizedString $customDoorsOpenLabel;
}
