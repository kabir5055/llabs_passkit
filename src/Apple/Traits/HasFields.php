<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Apple\Traits;

use Luminouslabs\PassesKit\Apple\Components\AuxiliaryField;
use Luminouslabs\PassesKit\Apple\Components\Field;
use Luminouslabs\PassesKit\Apple\Components\SecondaryField;
use Luminouslabs\PassesKit\Common\Validation\MaxItems;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

trait HasFields
{
    /** @var SecondaryField[] */
    #[CastWith(ArrayCaster::class, SecondaryField::class)]
    #[MaxItems(3)]
    public array $headerFields = [];

    /** @var Field[] */
    #[CastWith(ArrayCaster::class, Field::class)]
    #[MaxItems(2)]
    public array $primaryFields = [];

    /** @var SecondaryField[] */
    #[CastWith(ArrayCaster::class, SecondaryField::class)]
    #[MaxItems(4)]
    public array $secondaryFields = [];

    /** @var AuxiliaryField[] */
    #[CastWith(ArrayCaster::class, AuxiliaryField::class)]
    #[MaxItems(5)]
    public array $auxiliaryFields = [];

    /** @var Field[] */
    #[CastWith(ArrayCaster::class, Field::class)]
    public array $backFields = [];

    protected function fields(): array
    {
        return ['headerFields', 'primaryFields', 'secondaryFields', 'auxiliaryFields', 'backFields'];
    }
}
