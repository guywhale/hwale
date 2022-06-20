<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'cookieStatus' => $this->cookieStatus(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Check for cookie to run exploding letters animation.
     * Creates it if it doesn't exist.
     * Cookie status is always set to true when not on front
     * page, as we don't want animation timings applied to
     * the header and floating title on other pages.
     *
     * @return boolean
     */
    public function cookieStatus()
    {
        $cookieStatus = false;

        if (isset($_COOKIE['ShowExplodingLetters']) || !is_front_page()) {
            $cookieStatus = true;
        }

        return $cookieStatus;
    }
}
