<?php
// no direct access
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Event\Event;
use Joomla\Event\SubscriberInterface;

class plgContentdemo extends JPlugin
{
    public function onContentBeforeDisplay($context, &$article, &$params, $limitstart)
    {
        return "<p>Hello World! i am finally working</p>";
    }
}
?>