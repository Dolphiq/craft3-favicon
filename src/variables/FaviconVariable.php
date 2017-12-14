<?php
/**
 * favicon plugin for Craft CMS 3.x
 *
 * Create multi-platform favicons for your (mobile) website
 *
 * @link      https://dolphiq.nl
 * @copyright Copyright (c) 2017 Johan Zandstra
 */

namespace dolphiq\favicon\variables;

use dolphiq\favicon\Favicon;

use Craft;

/**
 * favicon Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.favicon }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Johan Zandstra
 * @package   Favicon
 * @since     1.0.0
 */
class FaviconVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.favicon.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.favicon.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
