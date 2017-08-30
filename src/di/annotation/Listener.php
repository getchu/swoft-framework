<?php

namespace swoft\di\annotation;

/**
 * 监听器注解
 *
 * @Annotation
 * @Target("CLASS")
 *
 * @uses      Listener
 * @version   2017年08月30日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Listener
{
    /**
     * 监听事件名称
     *
     * @var string
     */
    private $event;

    /**
     * AutoController constructor.
     *
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->event = $values['value'];
        }

        if (isset($values['event'])) {
            $this->event = $values['event'];
        }
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }
}