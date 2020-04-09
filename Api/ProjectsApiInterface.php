<?php
/**
 * ProjectsApiInterface
 * PHP version 5.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.34
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\Project;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * ProjectsApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface ProjectsApiInterface
{
  /**
   * Sets authentication method PandaAuth.
   *
   * @param string $value value of the PandaAuth authentication method
   */
  public function setPandaAuth($value);

  /**
   * Operation projectProjectIdGet.
   *
   * Get the information of a project
   *
   * @param string $project_id      UUID/ID of any given project (required)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\Project
   */
  public function projectProjectIdGet(string $project_id, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsFeaturedGet.
   *
   * Get the currently featured projects
   *
   * @param string $platform        (optional)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\FeaturedProject[]
   */
  public function projectsFeaturedGet(string $platform = null, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsGet.
   *
   * Get projects
   *
   * @param string $project_type    (required)
   * @param string $accept_language (optional)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\Project[]
   */
  public function projectsGet(string $project_type, string $accept_language = null, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsPost.
   *
   * Upload a catrobat project
   *
   * @param string       $checksum        Checksum of the *.catrobat file (required)
   * @param UploadedFile $file            *.catrobat file (required)
   * @param string       $accept_language (optional)
   * @param string       $flavor          Available flavors (optional)
   * @param bool         $private         Indicates whether a program should be private from the start. (optional)
   * @param int          $responseCode    The HTTP response code to return
   * @param array        $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return array
   */
  public function projectsPost(string $checksum, UploadedFile $file, string $accept_language = null, string $flavor = null, bool $private = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsSearchGet.
   *
   * Search for projects associated with a keywords
   *
   * @param string $query_string    (required)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\Project[]
   */
  public function projectsSearchGet(string $query_string, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsUserGet.
   *
   * Get the projects of the logged in user
   *
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\Project[]
   */
  public function projectsUserGet(string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation projectsUserUserIdGet.
   *
   * Get the public projects of a given user
   *
   * @param string $user_id         UUID/ID of any given user (required)
   * @param string $max_version     (optional)
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param string $flavor          (optional)
   * @param int    $responseCode    The HTTP response code to return
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\Project[]
   */
  public function projectsUserUserIdGet(string $user_id, string $max_version = null, int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);
}
