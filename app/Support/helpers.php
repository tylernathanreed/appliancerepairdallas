<?php

use App\Support\Contacts\Address;

if(!function_exists('address')) {

    /**
     * Creates and returns a new address from the given components.
     *
     * @param  string|array  $components
     *
     * @return array
     */
    function address($components = 'primary')
    {
        // Check for a configuration reference
        if(is_string($components)) {

            // Determine the components from configuration
            $components = config('branding.contacts.addresses.' . $components);

        }

        // Create and return a new address
        return new Address($components);
    }

}

if(!function_exists('popover')) {

    /**
     * Returns the html for the specified popover.
     *
     * @param  string       $snippet    The text that acts as the popover.
     * @param  string       $content    The content of the popover.
     * @param  string|null  $title      The title of the popover.
     * @param  string       $placement  The relative placement of the popover.
     *
     * @return string
     */
    function popover($snippet, $content, $placement = 'right', $title = null)
    {
        // Render and escape views
        if($content instanceof \Illuminate\View\View) {
            $content = e($content->render());
        }

        // Check for empty Content
        if(empty($content)) {
            return $snippet;
        }

        // Check for snippet as title
        if(is_null($title)) {
        	$title = $snippet;
        }

        // Return the popover
        return "<a href=\"#\" class=\"pt-popover\" data-toggle=\"popover\" data-placement=\"{$placement}\" data-content=\"{$content}\" title=\"\" data-original-title=\"{$title}\">{$snippet}</a>";
    }

}