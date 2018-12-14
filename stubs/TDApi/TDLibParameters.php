<?php
namespace TDApi;

class TDLibParameters {
    const USE_TEST_DC = "use_test_dc";
    const DATABASE_DIRECOTRY = "database_directory";
    const FILES_DIRECTORY = "files_directory";
    const USE_FILE_DATABASE = "use_file_database";
    const USE_CHAT_INFO_DATABASE = "use_chat_info_database";
    const USE_MESSAGE_DATABASE = "use_message_database";
    const USE_SECRET_CHATS = "use_secret_chats";
    const API_ID = "api_id";
    const API_HASH = "api_hash";
    const SYSTEM_LANGUAGE_CODE = "system_language_code";
    const DEVICE_MODEL = "device_model";
    const SYSTEM_VERSION = "system_version";
    const APPLICATION_VERSION = "application_version";
    const ENABLE_STORAGE_OPTIMIZER = "enable_storage_optimizer";
    const IGNORE_FILE_NAMES = "ignore_file_names";

    /**
     * @param string $name
     * @param int|string|bool $value
     * @throws \Exception
     */
    public function setParameter(string $name, $value)
    {
    }

    public function __debugInfo()
    {
        return [];
    }
}