<?php
/**
 * InvalidArgumentException
 *
 * @since     Mar 2023
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */

namespace AIKit\Dependencies\Qdrant\Exception;

use AIKit\Dependencies\Qdrant\Response;

class InvalidArgumentException extends \Exception
{
    protected Response $response;

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * @param Response $response
     */
    public function setResponse(Response $response): InvalidArgumentException
    {
        $this->response = $response;

        return $this;
    }
}