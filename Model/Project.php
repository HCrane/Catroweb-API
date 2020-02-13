<?php
/**
 * Project
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
 * Class representing the Project model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Project 
{
        /**
     * @var string|null
     * @SerializedName("id")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $id;

    /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

    /**
     * @var string|null
     * @SerializedName("author")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $author;

    /**
     * @var string|null
     * @SerializedName("description")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $description;

    /**
     * @var string|null
     * @SerializedName("version")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $version;

    /**
     * @var int|null
     * @SerializedName("views")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $views;

    /**
     * @var int|null
     * @SerializedName("download")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $download;

    /**
     * @var bool|null
     * @SerializedName("private")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $private;

    /**
     * Available flavors
     *
     * @var string|null
     * @SerializedName("flavor")
     * @Assert\Choice({ "pocketcode", "pocketalice", "pocketgalaxy", "pocketphiro", "phirocode", "luna", "create@school", "embroidery", "arduino" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $flavor;

    /**
     * @var int|null
     * @SerializedName("uploaded")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $uploaded;

    /**
     * @var string|null
     * @SerializedName("uploaded_string")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $uploadedString;

    /**
     * @var string|null
     * @SerializedName("screenshot_large")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $screenshotLarge;

    /**
     * @var string|null
     * @SerializedName("screenshot_small")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $screenshotSmall;

    /**
     * @var string|null
     * @SerializedName("projectUrl")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $projectUrl;

    /**
     * @var string|null
     * @SerializedName("downloadUrl")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $downloadUrl;

    /**
     * filesize in megabytes
     *
     * @var float|null
     * @SerializedName("filesize")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected $filesize;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->author = isset($data['author']) ? $data['author'] : null;
        $this->description = isset($data['description']) ? $data['description'] : null;
        $this->version = isset($data['version']) ? $data['version'] : null;
        $this->views = isset($data['views']) ? $data['views'] : null;
        $this->download = isset($data['download']) ? $data['download'] : null;
        $this->private = isset($data['private']) ? $data['private'] : null;
        $this->flavor = isset($data['flavor']) ? $data['flavor'] : 'pocketcode';
        $this->uploaded = isset($data['uploaded']) ? $data['uploaded'] : null;
        $this->uploadedString = isset($data['uploadedString']) ? $data['uploadedString'] : null;
        $this->screenshotLarge = isset($data['screenshotLarge']) ? $data['screenshotLarge'] : null;
        $this->screenshotSmall = isset($data['screenshotSmall']) ? $data['screenshotSmall'] : null;
        $this->projectUrl = isset($data['projectUrl']) ? $data['projectUrl'] : null;
        $this->downloadUrl = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->filesize = isset($data['filesize']) ? $data['filesize'] : null;
    }

    /**
     * Gets id.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets author.
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets author.
     *
     * @param string|null $author
     *
     * @return $this
     */
    public function setAuthor($author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets version.
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets version.
     *
     * @param string|null $version
     *
     * @return $this
     */
    public function setVersion($version = null)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets views.
     *
     * @return int|null
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Sets views.
     *
     * @param int|null $views
     *
     * @return $this
     */
    public function setViews($views = null)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Gets download.
     *
     * @return int|null
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * Sets download.
     *
     * @param int|null $download
     *
     * @return $this
     */
    public function setDownload($download = null)
    {
        $this->download = $download;

        return $this;
    }

    /**
     * Gets private.
     *
     * @return bool|null
     */
    public function isPrivate()
    {
        return $this->private;
    }

    /**
     * Sets private.
     *
     * @param bool|null $private
     *
     * @return $this
     */
    public function setPrivate($private = null)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Gets flavor.
     *
     * @return string|null
     */
    public function getFlavor()
    {
        return $this->flavor;
    }

    /**
     * Sets flavor.
     *
     * @param string|null $flavor  Available flavors
     *
     * @return $this
     */
    public function setFlavor($flavor = null)
    {
        $this->flavor = $flavor;

        return $this;
    }

    /**
     * Gets uploaded.
     *
     * @return int|null
     */
    public function getUploaded()
    {
        return $this->uploaded;
    }

    /**
     * Sets uploaded.
     *
     * @param int|null $uploaded
     *
     * @return $this
     */
    public function setUploaded($uploaded = null)
    {
        $this->uploaded = $uploaded;

        return $this;
    }

    /**
     * Gets uploadedString.
     *
     * @return string|null
     */
    public function getUploadedString()
    {
        return $this->uploadedString;
    }

    /**
     * Sets uploadedString.
     *
     * @param string|null $uploadedString
     *
     * @return $this
     */
    public function setUploadedString($uploadedString = null)
    {
        $this->uploadedString = $uploadedString;

        return $this;
    }

    /**
     * Gets screenshotLarge.
     *
     * @return string|null
     */
    public function getScreenshotLarge()
    {
        return $this->screenshotLarge;
    }

    /**
     * Sets screenshotLarge.
     *
     * @param string|null $screenshotLarge
     *
     * @return $this
     */
    public function setScreenshotLarge($screenshotLarge = null)
    {
        $this->screenshotLarge = $screenshotLarge;

        return $this;
    }

    /**
     * Gets screenshotSmall.
     *
     * @return string|null
     */
    public function getScreenshotSmall()
    {
        return $this->screenshotSmall;
    }

    /**
     * Sets screenshotSmall.
     *
     * @param string|null $screenshotSmall
     *
     * @return $this
     */
    public function setScreenshotSmall($screenshotSmall = null)
    {
        $this->screenshotSmall = $screenshotSmall;

        return $this;
    }

    /**
     * Gets projectUrl.
     *
     * @return string|null
     */
    public function getProjectUrl()
    {
        return $this->projectUrl;
    }

    /**
     * Sets projectUrl.
     *
     * @param string|null $projectUrl
     *
     * @return $this
     */
    public function setProjectUrl($projectUrl = null)
    {
        $this->projectUrl = $projectUrl;

        return $this;
    }

    /**
     * Gets downloadUrl.
     *
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * Sets downloadUrl.
     *
     * @param string|null $downloadUrl
     *
     * @return $this
     */
    public function setDownloadUrl($downloadUrl = null)
    {
        $this->downloadUrl = $downloadUrl;

        return $this;
    }

    /**
     * Gets filesize.
     *
     * @return float|null
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Sets filesize.
     *
     * @param float|null $filesize  filesize in megabytes
     *
     * @return $this
     */
    public function setFilesize($filesize = null)
    {
        $this->filesize = $filesize;

        return $this;
    }
}


