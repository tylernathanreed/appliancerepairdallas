<?php

namespace App\Models;

class Testimonial extends ConfigurationModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'testimonials';

    /**
     * Overrides the {@see $this->image} accessor to reference an asset file.
     *
     * @param  string  $image
     *
     * @return string
     */
    public function getImageAttribute($image)
    {
	    return asset($image);
    }
}
