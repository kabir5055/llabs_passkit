<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\EventTicket;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;

class EventVenue extends Component
{
    /**
     * Required.
     * The name of the venue, such as "AT&T Park".
     */
    #[Required]
    public ?LocalizedString $name;

    /**
     * Required.
     * The address of the venue, such as "24 Willie Mays Plaza\nSan Francisco, CA 94107". Address lines
     * are separated by line feed (\n) characters.
     */
    #[Required]
    public ?LocalizedString $address;
}
