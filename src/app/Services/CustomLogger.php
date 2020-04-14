<?php

namespace App\Services;

use Monolog\Logger;
use Illuminate\Log\Writer;
use Monolog\Handler\RotatingFileHandler;

class CustomLogger {

    /**
     * ログ種別
     */
    const QUERY       = 0;    // Queryログ
    const API         = 1;    // APIのエラーログ
    const FRONT       = 2;    // フロントのエラーログ
    const ADMIN       = 3;    // 管理サイトのエラーログ

    protected $logger;

    private $setting = array(

        self::QUERY => array(
            'file_path' => '/logs/database/query.log',
        ),
        self::API => array(
            'file_path' => '/logs/api/error.log',
        ),
        self::FRONT => array(
            'file_path' => '/logs/front/error.log',
        ),
        self::ADMIN => array(
            'file_path' => '/logs/admin/error.log',
        ),

    );

    /**
     * コンストラクタ
     *
     * @param string $type
     */
    public function __construct($type) {

      // ログの出力先
      $file_path = storage_path().$this->setting[$type]['file_path'];

      // monologの設定
      $logger = new Logger(env('APP_ENV'));
      $this->logger = new Writer($logger);

      // ファイルの設定（ログローテーションあり）
      $this->logger->useDailyFiles($file_path, config('app.log_max_files'), config('app.log_level'));

    }

    /**
     * エラーログ
     */
    public function error($message = '', $parameters = array()) {
      $this->logger->error ( $message, $parameters );
    }

    /**
     * 情報ログ
     */
    public function info($message = '', $parameters = array()) {
      $this->logger->info ( $message, $parameters );
    }

}
