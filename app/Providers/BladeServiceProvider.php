<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
	///////////////////
	//* Boot Method *//
	///////////////////
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
    	// Boot all Compiler Methods
    	$this->bootCompilers();
	}

	/**
	 * Calls all Methods within this Class that start with 'compile'
	 * and are followed by a Capital Letter.
	 *
	 * @return void
	 */
	protected function bootCompilers()
	{
	    // Determine all Class Methods
	    $methods = get_class_methods(static::class);

	    // Only use Methods that start with 'compile' and a Capital Letter
	    $filter = array_filter($methods, function($method) {
	        return starts_with($method, 'compile') && substr($method, 7, 1) === strtoupper(substr($method, 7, 1));
	    });

	    // Call each Method
	    foreach($filter as $method)
	        $this->$method();
	}

	///////////////////////
	//* Register Method *//
	///////////////////////
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	//////////////////
	//* Directives *//
	//////////////////
	/**
	 * Add @optional and @endoptional for Complex Yielding.
	 *
	 * @return void
	 */
	protected function compileOptional()
	{
		// Add @optional for Complex Yielding
		Blade::directive('optional', function($expression) {
			return "<?php if(trim(\$__env->yieldContent({$expression}))): ?>";
		});

		// Add @endoptional for Complex Yielding
		Blade::directive('endoptional', function($expression) {
			return "<?php endif; ?>";
		});
	}

	protected function compileIcon()
	{
		// Add @icon for Icon Injection
		Blade::directive('icon', function($expression) {
			return "<?php echo icon({$expression}) ?>";
		});
	}

	protected function compileTooltip()
	{
	    // Add @tooltip directive.
	    Blade::directive('tooltip', function($expression) {
			return "<?php echo tooltip({$expression}) ?>";
		});
	}
	
	protected function compilePopover()
	{
	    // Add @popover directive.
	    Blade::directive('popover', function($expression) {
			return "<?php echo popover({$expression}) ?>";
		});
	}
}