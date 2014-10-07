<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use \Grav\Common\Grav;
use \Grav\Common\Page\Page;

class HighlightPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents() {
        return [
            'onPageInitialized' => ['onPageInitialized', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ];
    }

    /**
     * Initialize configuration
     */
    public function onPageInitialized()
    {
        $defaults = (array) $this->config->get('plugins.highlight');

        /** @var Page $page */
        $page = $this->grav['page'];
        if (isset($page->header()->highlight)) {
            $this->config->set('plugins.highlight', array_merge($defaults, $page->header()->highlight));
        }
    }

    /**
     * if enabled on this page, load the JS + CSS theme.
     */
    public function onTwigSiteVariables()
    {
        if ($this->config->get('plugins.highlight.enabled')) {
            $theme = $this->config->get('plugins.highlight.theme') ?: 'default';
            $this->grav['assets']->addCss('plugin://highlight/css/'.$theme.'.css');
            $this->grav['assets']->addJs('plugin://highlight/js/highlight.pack.js');
            $this->grav['assets']->addJs('plugin://highlight/js/init.js');
        }
    }
}
