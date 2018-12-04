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

if(!function_exists('email')) {

    /**
     * Creates and returns a new email from the given address.
     *
     * @param  string   $email
     * @param  boolean  $mailTo
     *
     * @return array
     */
    function email($email = 'primary', $mailTo = false)
    {
        // Check for configuration reference
        if(strpos($email, '@') === false) {

            // Determine the email configuration
            $email = config('branding.contacts.emails.' . $email);

        }

        // Check for a mailto reference
        if($mailTo) {
            $email = "<a href=\"mailto:{$email}\">{$email}</a>";
        }

        // Return the email address
        return $email;
    }

}

if(!function_exists('phone')) {

    /**
     * Returns a formatting phone number using the given number.
     *
     * @param  string  $number
     *
     * @return array
     */
    function phone($number = 'primary')
    {
        // Determine the characters that can make up a phone number
        $characters = ['(', ')', '+', '-', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.'];

        // Check for configuration reference
        if(strlen($number) < 10 || strlen(str_replace($characters, '', $number)) == 0) {

            // Determine the phone configuration
            $number = config('branding.contacts.phones.' . $number);

        }

        // Return the phone number
        return $number;
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