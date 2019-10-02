<?php


namespace shApp\request;

/**
 * Interface RequestInterface
 *
 * @package shApp\request
 */
interface RequestInterface
{
    /**
     * Вернуть GET/POST параметр по ключу
     *
     * @param string $name
     * @return mixed|null
     */
    public function getParam($name);


    /**
     * Вернуть данные из тела запроса
     *
     * @return mixed|null
     */
    public function getContent();

    /**
     * Вернуть путь по которому обращаемся
     *
     * @return string
     */
    public function getPath();
}