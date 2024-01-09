<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Flight;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;

class FrequentFlyerInfo extends Component
{
    /**
     * Optional.
     * Frequent flyer program name. eg: "Lufthansa Miles & More".
     */
    public ?LocalizedString $frequentFlyerProgramName;

    /**
     * Required.
     * Frequent flyer number.
     */
    #[Required]
    public ?string $frequentFlyerNumber;
}
