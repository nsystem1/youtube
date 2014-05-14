<?php namespace Vinelab\Youtube\Exceptions;

use RuntimeException;

class VideoException extends RuntimeException {

    /**
     * The error messages.
     * @var array
     */
    protected $messages; 

    /**
     * create an instance of this class
     * @param array $messages 
     */
    public function __construct($messages = [])
    {
        if( ! is_array($messages) )
        {
            $messages = [$messages];
        }

        $this->messages = $messages;
    }

    /**
     * return the error message
     * @return string
     */
    public function messages()
    {
        return $this->messages;
    }
}