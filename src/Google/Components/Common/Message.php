<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Enumerators\MessageType;
use Spatie\DataTransferObject\Attributes\CastWith;

class Message extends Component
{
    /**
     * Optional.
     * The message header.
     */
    public ?string $header;

    /**
     * Optional.
     * The message body.
     */
    public ?string $body;

    /**
     * Optional.
     * The period of time that the message will be displayed to users.
     */
    public ?TimeInterval $displayInterval;

    /**
     * Optional.
     * The ID associated with a message. This field is here to enable ease of management of messages.
     */
    public ?string $id;

    /**
     * Optional.
     * The type of the message. Currently, this can only be set for offers.
     */
    #[ValueIn([MessageType::EXPIRATION_NOTIFICATION, MessageType::MESSAGE_TYPE_UNSPECIFIED, MessageType::TEXT])]
    #[CastWith(LegacyValueCaster::class, MessageType::class)]
    public ?string $messageType;

    /**
     * Optional.
     * Translated strings for the message header.
     */
    public ?LocalizedString $localizedHeader;

    /**
     * Optional.
     * Translated strings for the message body.
     */
    public ?LocalizedString $localizedBody;
}
