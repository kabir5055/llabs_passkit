<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\AbstractClass;
use Luminouslabs\PassesKit\Google\Passes\AbstractObject;

interface ObjectRepositoryInterface
{
    public function index(string $classId, array $parameters = []): Component;

    public function get(string $id): Component;

    public function create(Component $instance): Component;

    public function update(AbstractClass|AbstractObject $instance): Component;
}
