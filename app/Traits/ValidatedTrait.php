<?php

namespace App\Traits;

trait ValidatedTrait
{
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();
        $validated['club_id'] = $this->user()->club_id ?? '';

        return $validated;
    }
}
