<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class LinksModuleData extends Component
{
    /**
     * The list of URIs.
     *
     * @var Uri[]
     */
    #[CastWith(ArrayCaster::class, Uri::class)]
    public array $uris = [];
}
