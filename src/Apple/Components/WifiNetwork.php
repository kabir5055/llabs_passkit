<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Apple\Components;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Spatie\DataTransferObject\Attributes\Strict;

#[Strict]
class WifiNetwork extends Component
{
    /**
     * Required.
     * The password for the WiFi network.
     */
    #[Required]
    public ?string $password;

    /**
     * Required.
     * The name for the WiFi network.
     */
    #[Required]
    public ?string $ssid;
}
