<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Apple\Traits;

trait HasGroupingIdentifier
{
    /**
     * Optional.
     * Identifier used to group related passes. If a grouping identifier is specified, passes with the same style,
     * pass type identifier, and grouping identifier are displayed as a group. Otherwise, passes are grouped
     * automatically.
     */
    public ?string $groupingIdentifier;
}
