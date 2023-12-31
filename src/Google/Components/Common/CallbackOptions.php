<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Contains;
use Luminouslabs\PassesKit\Common\Validation\Required;

class CallbackOptions extends Component
{
    /**
     * Required.
     * The HTTPS url configured by the merchant. The URL should be hosted on HTTPS and robots.txt should allow
     * the URL path to be accessible by UserAgent:Google-Valuables.
     */
    #[Required]
    #[Contains('https://')]
    public ?string $url;

    /**
     * Optional.
     * URL for the merchant endpoint that would be called to request updates. The URL should be hosted on HTTPS
     * and robots.txt should allow the URL path to be accessible by UserAgent:Google-Valuables.
     */
    #[Contains('https://')]
    public ?string $updateRequestUrl;
}
