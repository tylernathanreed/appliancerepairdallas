<?php

namespace App\Support\Database\Configurant;

use Config;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    /**
     * Returns a new query builder that doesn't have any global scopes.
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newQueryWithoutScopes()
    {
        $builder = $this->newConfigurantBuilder();

        // Once we have the query builders, we will set the model instances so the
        // builder can easily access any information it may need from the model
        // while it is constructing and executing various queries against it.
        return $builder->setModel($this)
                    ->with($this->with)
                    ->withCount($this->withCount);
    }

    /**
     * Returns a new configurant query builder for this model.
     *
     * @return \App\Support\Database\Configurant\Builder
     */
    public function newConfigurantBuilder()
    {
    	return new Builder();
    }
}