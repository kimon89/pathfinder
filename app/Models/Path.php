<?php

namespace App\Models;

/**
 * Represents a path.
 */
class Path
{
    /**
     * Array representing a path.
     *
     * @var array
     */
    protected $path;

    /**
     * Constructor.
     *
     * @param array $path [description]
     */
    public function __construct(array $path)
    {
        $this->path = $path;
    }

    /**
     * Returns the path.
     *
     * @return array [description]
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets the path.
     *
     * @param array $path [description]
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Returns the amount of hops of a path.
     *
     * @return int [description]
     */
    public function getHops()
    {
        return count($this->path) - 1;
    }

    /**
     * String representation of the path.
     *
     * @return string [description]
     */
    public function __toString()
    {
        $str = '';

        foreach ($this->path as $k => $node) {
            $str .= ($k == 0 ? '' : ' => ').$node;
        }

        return $str;
    }
}
