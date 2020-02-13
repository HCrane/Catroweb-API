<?php
/**
 * UploadError
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: 1.0.6
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the UploadError model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class UploadError 
{
        /**
     * @var int|null
     * @SerializedName("status")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $status;

    /**
     * @var string|null
     * @SerializedName("error")
     * @Assert\Choice({ "Token invalid", "Checksum invalid", "ZIP invalid", "XML invalid", "Flavor invalid" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $error;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->error = isset($data['error']) ? $data['error'] : null;
    }

    /**
     * Gets status.
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param int|null $status
     *
     * @return $this
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets error.
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets error.
     *
     * @param string|null $error
     *
     * @return $this
     */
    public function setError($error = null)
    {
        $this->error = $error;

        return $this;
    }
}


