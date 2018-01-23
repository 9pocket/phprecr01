<?php

namespace Model;

class Category
{
    /** @var string */
    private $name;
    /** @var boolean */
    private $isRoot = false;
    /** @var Category[] */
    private $children = [];

    public function __construct($name, $isRoot = false)
    {
        $this->name = $name;
        $this->isRoot = $isRoot;
    }

    /**
     * @param Category $c
     * @return $this
     */
    public function addChild(Category $c)
    {
        $this->children[] = $c;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRoot()
    {
        return $this->isRoot;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return Category[]
     */
    public function children()
    {
        return $this->children;
    }

    /**
     * @return boolean
     */
    public function hasChildren()
    {
        return (bool) count($this->children);
    }
}
