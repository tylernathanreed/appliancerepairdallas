<?php

namespace App\Support\Database\Configurant;

use Illuminate\Database\Eloquent\Builder as Eloquent;
use Symfony\Component\Debug\Exception\FatalErrorException;

class Builder extends Eloquent
{
	/**
	 * Creates a new builder instance.
	 *
	 * @return $this
	 */
	public function __construct()
	{
		$this->query = new Repository;
	}

    /**
     * Create a new instance of the model being queried.
     *
     * @param  array  $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function newModelInstance($attributes = [])
    {
        return $this->model->newInstance($attributes);
    }
}