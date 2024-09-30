<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ClubScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if ($user = auth()->user()) {
            $builder->where('club_id', $user->club_id);
        }
    }
}
