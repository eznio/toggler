<?php

namespace eznio\toggler;


use eznio\toggler\interfaces\CachingStrategy;

class Toggler
{
    /** @var array */
    protected $flags = [];

    /** @var string|null */
    protected $user = null;

    /** @var string|null */
    protected $time = null;

    /** @var string|null */
    protected $environment = null;

    /** @var CachingStrategy|null */
    protected $cachingStrategy = null;

    /**
     * @return null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param null $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return null
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param null $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return CachingStrategy
     */
    public function getCachingStrategy()
    {
        return $this->cachingStrategy;
    }

    /**
     * @param CachingStrategy $cachingStrategy
     * @return $this
     */
    public function setCachingStrategy(CachingStrategy $cachingStrategy)
    {
        $this->cachingStrategy = $cachingStrategy;
        return $this;
    }

    /**
     * @param $fileName
     * @return $this
     */
    public function loadFromFile($fileName)
    {
        $this->flags = [];
        $this->appendFromFile($fileName);
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function loadFromUrl($url)
    {
        $this->flags = [];
        $this->appendFromUrl($url);
        return $this;
    }

    /**
     * @param $fileName
     */
    public function appendFromFile($fileName)
    {

    }

    /**
     * @param $url
     */
    public function appendFromUrl($url)
    {

    }

    /**
     * @param $featureFlag
     */
    public function isEnabled($featureFlag)
    {

    }

    /**
     * @param $data
     */
    protected function append($data)
    {

    }

    /**
     * @param $flagName
     */
    protected function getFlagValue($flagName)
    {

    }
}
