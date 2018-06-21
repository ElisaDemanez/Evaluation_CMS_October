<?php namespace Simplon\Evaluation;

use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;

/**
 * Evaluation Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Evaluation',
            'description' => 'Hours of suffering',
            'author'      => 'Simplon',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
        $alias = AliasLoader::getInstance();
        $alias->alias('Inspiring', 'Illuminate\Foundation\Inspiring');
    }

}
