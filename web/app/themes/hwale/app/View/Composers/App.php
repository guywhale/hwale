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
