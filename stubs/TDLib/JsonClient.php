<?php
namespace TDLib;

class JsonClient extends BaseJsonClient {
    private $defaultTimeout = 0.5;

    /**
     * @param float|null $timeout
     * @return string
     */
    public function receive(float $timeout = null):string
    {
    }

    /**
     * @param string $query - json-encoded string request
     * @param float|null $timeout
     * @return string - json-encoded library response
     * @throws \Exception
     */
    public function query(string $query, float $timeout = null):string
    {
    }

    /**
     * @return array[string] - array of all tdlib responses since the previous getReceivedResponses call
     */
    public function getReceivedResponses():array
    {
    }

    /**
     * @param string $key
     * @return string
     * @throws \Exception
     */
    public function checkDatabaseEncryptionKey(string $key):string
    {
    }

    /**
     * @param string $key
     * @param float|null $timeout
     * @return string
     * @throws \Exception
     */
    public function setDatabaseEncryptionKey(string $key = '', float $timeout = null):string
    {
    }

    /**
     * @param \TDApi\TDLibParameters $parameters
     * @param float|null $timeout
     * @return string
     * @throws \Exception
     */
    public function setTdlibParameters(\TDApi\TDLibParameters $parameters, float $timeout = null):string
    {
    }

    /**
     * @param string $phone_number
     * @return string
     * @throws \Exception
     */
    public function setAuthenticationPhoneNumber(string $phone_number, float $timeout = null):string
    {
    }

    /**
     * @param float $defaultTimeout - default timeout value in seconds. Default value is 0.5
     */
    public function setDefaultTimeout(float $defaultTimeout)
    {
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getAuthorizationState(float $timeout = null):string
    {
    }

//    public function acceptCall(int $call_id):string
//    {
//    }
//    public function acceptTermsOfService(string $terms_of_service_id):string
//    {
//    }
//    public function getAccountTtl():string
//    {
//    }
//    public function getActiveLiveLocationMessages():string
//    {
//    }
//    public function getActiveSessions():string
//    {
//    }
//    public function getAllPassportElements():string
//    {
//    }
//    public function getArchivedStickerSets(bool $is_masks = false, int $offset_sticker_set_id, float $limit):string
//    {
//    }
//    public function getAttachedStickerSets(int $file_id):string
//    {
//    }
//    public function searchPublicChats(string $query):string
//    {
//    }
}
