<?php

namespace Parsavix\WordPress;

/**
 * A basic foundation to create WordPress plugins.
 */
class PluginFramework
{
    /**
     * Plugin ID.
     *
     * @var string
     */
    private $id;

    /**
     * Constructor.
     *
     * @param string $id Plugin ID.
     */
    public function __construct($id)
    {
        $this->id = $id;
    }
}