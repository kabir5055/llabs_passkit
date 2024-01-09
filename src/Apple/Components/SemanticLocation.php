<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Apple\Components;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Spatie\DataTransferObject\Attributes\Strict;

#[Strict]
class SemanticLocation extends Component
{
    /**
     * Required.
     * Latitude, in degrees, of the location.
     */
    #[Required]
    public ?float $latitude;

    /**
     * Required.
     * Longitude, in degrees, of the location.
     */
    #[Required]
    public ?float $longitude;
}
