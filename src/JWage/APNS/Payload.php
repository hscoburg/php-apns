<?php

namespace JWage\APNS;

class Payload
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $deepLink;

    /**
     * Construct.
     *
     * @param string $title
     * @param string $body
     * @param string $deepLink
     */
    public function __construct($title, $body, $deepLink = null)
    {
        $this->title = $title;
        $this->body = $body;
        $this->deepLink = $deepLink;
    }

    /**
     * Gets payload array structure.
     *
     * @return array $payload
     */
    public function getPayload()
    {
        return array(
            'aps' => array(
                'alert' => array(
                    'title' => $this->title,
                    'body' => $this->body,
                ),
                'url-args' => array(
                    $this->deepLink,
                ),
            ),
        );
    }
}
