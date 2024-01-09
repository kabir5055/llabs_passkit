<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Apple\Components;

use Luminouslabs\PassesKit\Apple\Enumerators\TextAlignment;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Spatie\DataTransferObject\Attributes\Strict;

#[Strict]
class SecondaryField extends Field
{
    /**
     * Optional.
     * Alignment for the field’s contents. Defaults to NATURAL.
     */
    #[ValueIn([TextAlignment::LEFT, TextAlignment::CENTER, TextAlignment::RIGHT, TextAlignment::NATURAL])]
    public ?string $textAlignment;
}
