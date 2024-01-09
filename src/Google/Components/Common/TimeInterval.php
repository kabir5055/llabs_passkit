<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class TimeInterval extends Component
{
    /**
     * Required.
     * Start time of the interval.
     */
    #[Required]
    public ?DateTime $start;

    /**
     * Required.
     * End time of the interval.
     */
    #[Required]
    public ?DateTime $end;
}
