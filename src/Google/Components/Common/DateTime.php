<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Casters\ISO8601DateCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Spatie\DataTransferObject\Attributes\CastWith;

class DateTime extends Component
{
    /**
     * Required.
     * An ISO 8601 extended format date/time with optional offset.
     */
    #[Required]
    #[CastWith(ISO8601DateCaster::class)]
    public ?string $date;
}
