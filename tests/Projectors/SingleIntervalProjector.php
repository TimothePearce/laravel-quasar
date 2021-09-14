<?php

namespace Laravelcargo\LaravelCargo\Tests\Projectors;

use Illuminate\Database\Eloquent\Model;
use Laravelcargo\LaravelCargo\Projector;

class SingleIntervalProjector extends Projector
{
    /**
     * Lists the time intervals used to compute the projections.
     */
    protected array $periods = ['5 minutes'];

    /**
     * The default projection content.
     */
    public static function defaultContent(): array
    {
        return [
            'number of logs' => 0,
        ];
    }

    /**
     * Compute the projection.
     */
    public function handle(array $content, Model $model): array
    {
        return [
            'number of logs' => $content['number of logs'] + 1,
        ];
    }
}
