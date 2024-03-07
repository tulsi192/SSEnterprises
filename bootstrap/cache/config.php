<?php return array (
  'access' => 
  array (
    'users_table' => 'users',
    'role' => 'App\\Models\\Access\\Role\\Role',
    'roles_table' => 'roles',
    'permission' => 'App\\Models\\Access\\Permission\\Permission',
    'permissions_table' => 'permissions',
    'permission_role_table' => 'permission_role',
    'permission_user_table' => 'permission_user',
    'role_user_table' => 'role_user',
    'countries_table' => 'countries',
    'states_table' => 'states',
    'cities_table' => 'cities',
    'settings_table' => 'settings',
    'history_types_table' => 'history_types',
    'history_table' => 'history',
    'notifications_table' => 'notifications',
    'menus_table' => 'menus',
    'menu_items_table' => 'menu_items',
    'users' => 
    array (
      'registration' => true,
      'default_role' => 2,
      'confirm_email' => true,
      'change_email' => false,
      'requires_approval' => false,
    ),
    'roles' => 
    array (
      'role_must_contain_permission' => true,
    ),
    'socialite_session_name' => 'socialite_provider',
    'captcha' => 
    array (
      'registration' => false,
    ),
    'constants' => 
    array (
      'default_country' => 1,
    ),
  ),
  'analytics' => 
  array (
    'google-analytics' => 'UA-XXXXX-X',
  ),
  'api' => 
  array (
    'register' => 
    array (
      'release_token' => true,
    ),
    'reset_password' => 
    array (
      'release_token' => false,
    ),
  ),
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:u21nOmn9Q+fhrNYQBhtCZ7Ihcyt1lRyJlMFNDnJLiX0=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AccessServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'App\\Providers\\ComposerServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'crm' => 
      array (
        'driver' => 'session',
        'provider' => 'crm',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Access\\User\\User',
      ),
      'crm' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\customer\\CustomerLogin',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 6,
        'throttle' => 6,
      ),
      'crm' => 
      array (
        'provider' => 'crm',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'backend' => 
  array (
    'theme' => 'purple',
    'layout' => 'fixed',
  ),
  'backup' => 
  array (
    'backup' => 
    array (
      'name' => 'Laravel',
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
            0 => 'D:\\erp\\SSEnterprises',
          ),
          'exclude' => 
          array (
            0 => 'D:\\erp\\SSEnterprises\\vendor',
            1 => 'D:\\erp\\SSEnterprises\\node_modules',
          ),
          'follow_links' => false,
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'database_dump_compressor' => NULL,
      'destination' => 
      array (
        'filename_prefix' => '',
        'disks' => 
        array (
          0 => 'local',
        ),
      ),
      'temporary_directory' => 'D:\\erp\\SSEnterprises\\storage\\app/backup-temp',
    ),
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Spatie\\Backup\\Notifications\\Notifications\\BackupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\BackupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\HealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Spatie\\Backup\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => 'your@example.com',
        'from' => 
        array (
          'address' => 'hello@example.com',
          'name' => 'Laravel',
        ),
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => NULL,
        'username' => NULL,
        'icon' => NULL,
      ),
    ),
    'monitor_backups' => 
    array (
      0 => 
      array (
        'name' => 'Laravel',
        'disks' => 
        array (
          0 => 'local',
        ),
        'health_checks' => 
        array (
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays' => 1,
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumStorageInMegabytes' => 5000,
        ),
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'default_strategy' => 
      array (
        'keep_all_backups_for_days' => 7,
        'keep_daily_backups_for_days' => 16,
        'keep_weekly_backups_for_weeks' => 8,
        'keep_monthly_backups_for_months' => 4,
        'keep_yearly_backups_for_years' => 2,
        'delete_oldest_backups_when_using_more_megabytes_than' => 5000,
      ),
    ),
  ),
  'banks' => 
  array (
    'bank1' => 'BAK OF BARODA',
    'bank2' => 'HDFC',
    'bank3' => 'INDI',
    'bank4' => 'Central Bank of India',
    'bank5' => 'UTKARSH SMALL FINANCE BANK',
    'bank6' => 'Axis Bank',
    'bank7' => 'Bank of Baroda',
    'bank8' => 'Canara Bank',
    'bank9' => 'HDFC Bank',
    'bank10' => 'ICICI Bank',
  ),
  'bitly' => 
  array (
    'accesstoken' => '',
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'D:\\erp\\SSEnterprises\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'config-variables' => 
  array (
    'default_db_host' => 'localhost',
    'default_db_port' => 3306,
    'default_db_username' => 'root',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 86400,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'bommana',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'bommana',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'rose_',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'bommana',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'bommana',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
    ),
    'index_column' => 'DT_Row_Index',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
    ),
    'builders' => 
    array (
      'Illuminate\\Database\\Eloquent\\Relations\\Relation' => 'eloquent',
      'Illuminate\\Database\\Eloquent\\Builder' => 'eloquent',
      'Illuminate\\Database\\Query\\Builder' => 'query',
      'Illuminate\\Support\\Collection' => 'collection',
    ),
    'nulls_last_sql' => '%s %s NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\Users\\admin\\AppData\\Local\\Temp',
      'remote_disk' => NULL,
    ),
  ),
  'features' => 
  array (
    0 => 'stock',
    1 => 'crm',
    2 => 'project',
    3 => 'stock',
    4 => 'stock',
    5 => 'promo',
    6 => 'reports',
    7 => 'import',
    8 => 'export',
    9 => 'transactions',
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\erp\\SSEnterprises\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\erp\\SSEnterprises\\storage\\app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'D:\\erp\\SSEnterprises\\public\\storage' => 'D:\\erp\\SSEnterprises\\storage\\app/public',
    ),
  ),
  'general' => 
  array (
    'allowed' => '<strong><br><b><i><u><p>',
    'editor' => '[\'style\', [\'bold\', \'italic\', \'underline\', \'clear\']],[\'codeview\', [\'codeview\']]',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'installer' => 
  array (
    'core' => 
    array (
      'minPhpVersion' => '8.0.2',
    ),
    'final' => 
    array (
      'key' => true,
      'publish' => false,
    ),
    'requirements' => 
    array (
      'php' => 
      array (
        0 => 'openssl',
        1 => 'pdo',
        2 => 'mbstring',
        3 => 'tokenizer',
        4 => 'JSON',
        5 => 'cURL',
        6 => 'gd',
        7 => 'zip',
        8 => 'zlib',
        9 => 'fileinfo',
      ),
      'apache' => 
      array (
        0 => 'mod_rewrite',
      ),
    ),
    'permissions' => 
    array (
      'storage/framework/' => '755',
      'storage/app/public/' => '755',
      'storage/app/public/files/' => '755',
      'storage/app/public/img/' => '755',
      'storage/app/public/qr/' => '755',
      'storage/app/public/temp/' => '755',
      'storage/logs/' => '755',
      'bootstrap/cache/' => '755',
    ),
    'environment' => 
    array (
      'form' => 
      array (
        'rules' => 
        array (
          'app_name' => 'required|string|max:50',
          'environment' => 'required|string|max:50',
          'environment_custom' => 'required_if:environment,other|max:50',
          'app_log_level' => 'required|string|max:50',
          'app_url' => 'required|url',
          'database_connection' => 'required|string|max:50',
          'database_hostname' => 'required|string|max:50',
          'database_port' => 'required|numeric',
          'database_name' => 'required|string|max:50',
          'database_username' => 'required|string|max:50',
          'broadcast_driver' => 'required|string|max:50',
          'cache_driver' => 'required|string|max:50',
          'session_driver' => 'required|string|max:50',
          'queue_driver' => 'required|string|max:50',
          'redis_hostname' => 'required|string|max:50',
          'redis_password' => 'required|string|max:50',
          'redis_port' => 'required|numeric',
          'mail_driver' => 'required|string|max:50',
          'mail_host' => 'required|string|max:50',
          'mail_port' => 'required|string|max:50',
          'mail_username' => 'required|string|max:50',
          'mail_password' => 'required|string|max:50',
          'mail_encryption' => 'required|string|max:50',
          'pusher_app_id' => 'max:50',
          'pusher_app_key' => 'max:50',
          'pusher_app_secret' => 'max:50',
          'purchase_code' => 'required|string|max:100',
        ),
      ),
    ),
    'installed' => 
    array (
      'redirectOptions' => 
      array (
        'route' => 
        array (
          'name' => 'welcome',
          'data' => 
          array (
          ),
        ),
        'abort' => 
        array (
          'type' => '404',
        ),
        'dump' => 
        array (
          'data' => 'Dumping a not found message.',
        ),
      ),
    ),
    'installedAlreadyAction' => 'biller.index',
    'updaterEnabled' => 'false',
  ),
  'locale' => 
  array (
    'public_path' => '/public_html',
    'status' => true,
    'languages' => 
    array (
      'en' => 
      array (
        0 => 'en',
        1 => 'en_US',
        2 => false,
        3 => 'us',
      ),
      'ar' => 
      array (
        0 => 'ar',
        1 => 'ar_AE',
        2 => true,
        3 => 'sa',
      ),
      'bn' => 
      array (
        0 => 'bn',
        1 => 'bn_BD',
        2 => false,
        3 => 'bd',
      ),
      'zh' => 
      array (
        0 => 'zh',
        1 => 'zh_CN',
        2 => false,
        3 => 'cn',
      ),
      'cs' => 
      array (
        0 => 'cs',
        1 => 'cs_CZ',
        2 => false,
        3 => 'cz',
      ),
      'nl' => 
      array (
        0 => 'nl',
        1 => 'nl_NL',
        2 => false,
        3 => 'nl',
      ),
      'fl' => 
      array (
        0 => 'fi',
        1 => 'fi_FI',
        2 => false,
        3 => 'ph',
      ),
      'fr' => 
      array (
        0 => 'en',
        1 => 'en_US',
        2 => false,
        3 => 'fr',
      ),
      'de' => 
      array (
        0 => 'de',
        1 => 'de_DE',
        2 => false,
        3 => 'de',
      ),
      'el' => 
      array (
        0 => 'el',
        1 => 'el_GR',
        2 => false,
        3 => 'gr',
      ),
      'he' => 
      array (
        0 => 'he',
        1 => 'he_IL',
        2 => true,
        3 => 'il',
      ),
      'hi' => 
      array (
        0 => 'hi',
        1 => 'hi_IN',
        2 => false,
        3 => 'in',
      ),
      'id' => 
      array (
        0 => 'id',
        1 => 'id_ID',
        2 => false,
        3 => 'id',
      ),
      'it' => 
      array (
        0 => 'it',
        1 => 'it_IT',
        2 => false,
        3 => 'it',
      ),
      'ja' => 
      array (
        0 => 'ja',
        1 => 'ja_JP ',
        2 => false,
        3 => 'jp',
      ),
      'jv' => 
      array (
        0 => 'jv',
        1 => 'jv_ID ',
        2 => false,
        3 => 'id',
      ),
      'km' => 
      array (
        0 => 'km',
        1 => 'km_TH ',
        2 => false,
        3 => 'kh',
      ),
      'ko' => 
      array (
        0 => 'ko',
        1 => 'ko_KO ',
        2 => false,
        3 => 'kr',
      ),
      'pt_BR' => 
      array (
        0 => 'pt',
        1 => 'pt_BR',
        2 => false,
        3 => 'pt',
      ),
      'pl' => 
      array (
        0 => 'pl',
        1 => 'pl_PL ',
        2 => false,
        3 => 'pl',
      ),
      'ro' => 
      array (
        0 => 'ro',
        1 => 'ro_RO ',
        2 => false,
        3 => 'ro',
      ),
      'ru' => 
      array (
        0 => 'ru',
        1 => 'ru-RU',
        2 => false,
        3 => 'ru',
      ),
      'es' => 
      array (
        0 => 'es',
        1 => 'es_ES',
        2 => false,
        3 => 'es',
      ),
      'sv' => 
      array (
        0 => 'sv',
        1 => 'sv_SE',
        2 => false,
        3 => 'sv',
      ),
      'th' => 
      array (
        0 => 'th',
        1 => 'th_TH',
        2 => false,
        3 => 'th',
      ),
      'tr' => 
      array (
        0 => 'tr',
        1 => 'tr_TR',
        2 => false,
        3 => 'tr',
      ),
      'vi' => 
      array (
        0 => 'vi',
        1 => 'vi_VN',
        2 => false,
        3 => 'vi',
      ),
      'ur' => 
      array (
        0 => 'ur',
        1 => 'ur_PK',
        2 => true,
        3 => 'pk',
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\erp\\SSEnterprises\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\erp\\SSEnterprises\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'D:\\erp\\SSEnterprises\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'mailhog',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'D:\\erp\\SSEnterprises\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'master' => 
  array (
    'key' => '34185625',
    'file_size' => 2048,
    'printer' => 'network',
    'captcha' => NULL,
    'fixed_url' => NULL,
    'delay' => 1500,
  ),
  'messenger' => 
  array (
    'message_model' => 'Cmgmyr\\Messenger\\Models\\Message',
    'participant_model' => 'Cmgmyr\\Messenger\\Models\\Participant',
    'thread_model' => 'Cmgmyr\\Messenger\\Models\\Thread',
    'messages_table' => NULL,
    'participants_table' => NULL,
    'threads_table' => NULL,
    'user_model' => 'App\\Models\\Access\\User\\User',
  ),
  'module' => 
  array (
    'pages' => 
    array (
      'table' => 'pages',
    ),
    'email_templates' => 
    array (
      'table' => 'email_templates',
      'placeholders_table' => 'email_template_placeholders',
      'types_table' => 'email_template_types',
    ),
    'blog_tags' => 
    array (
      'table' => 'blog_tags',
    ),
    'blog_categories' => 
    array (
      'table' => 'blog_categories',
    ),
    'blogs' => 
    array (
      'table' => 'blogs',
    ),
    'faqs' => 
    array (
      'table' => 'faqs',
    ),
    'plans' => 
    array (
      'table' => 'plans',
    ),
    'geos' => 
    array (
      'table' => 'geos',
    ),
    'customers' => 
    array (
      'table' => 'customers',
    ),
    'customergroups' => 
    array (
      'table' => 'customer_groups',
    ),
    'warehouses' => 
    array (
      'table' => 'warehouses',
    ),
    'productcategories' => 
    array (
      'table' => 'product_categories',
    ),
    'products' => 
    array (
      'table' => 'products',
    ),
    'invoices' => 
    array (
      'table' => 'invoices',
    ),
    'additionals' => 
    array (
      'table' => 'additionals',
    ),
    'currencies' => 
    array (
      'table' => 'currencies',
    ),
    'terms' => 
    array (
      'table' => 'terms',
    ),
    'customfields' => 
    array (
      'table' => 'custom_fields',
    ),
    'prefixes' => 
    array (
      'table' => 'prefixes',
    ),
    'accounts' => 
    array (
      'table' => 'accounts',
    ),
    'transactions' => 
    array (
      'table' => 'transactions',
    ),
    'templates' => 
    array (
      'table' => 'templates',
    ),
    'transactioncategories' => 
    array (
      'table' => 'transaction_categories',
    ),
    'productvariables' => 
    array (
      'table' => 'product_variables',
    ),
    'hrms' => 
    array (
      'table' => 'users',
    ),
    'banks' => 
    array (
      'table' => 'banks',
    ),
    'usergatewayentries' => 
    array (
      'table' => 'user_gateway_entries',
    ),
    'departments' => 
    array (
      'table' => 'departments',
    ),
    'quotes' => 
    array (
      'table' => 'quotes',
    ),
    'purchaseorders' => 
    array (
      'table' => 'purchase_orders',
    ),
    'orders' => 
    array (
      'table' => 'orders',
    ),
    'suppliers' => 
    array (
      'table' => 'suppliers',
    ),
    'tasks' => 
    array (
      'table' => 'todolists',
    ),
    'tags' => 
    array (
      'table' => 'tags',
    ),
    'miscs' => 
    array (
      'table' => 'miscs',
    ),
    'projects' => 
    array (
      'table' => 'projects',
    ),
    'notes' => 
    array (
      'table' => 'notes',
    ),
    'events' => 
    array (
      'table' => 'events',
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => 'D:\\erp\\SSEnterprises/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => 'D:\\erp\\SSEnterprises\\modules',
      'assets' => 'D:\\erp\\SSEnterprises\\public\\modules',
      'migration' => 'D:\\erp\\SSEnterprises\\database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => false,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => false,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => false,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => false,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
        'component-view' => 
        array (
          'path' => 'Resources/views/components',
          'generate' => false,
        ),
        'component-class' => 
        array (
          'path' => 'View/Component',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'Nwidart\\Modules\\Commands\\CommandMakeCommand',
      1 => 'Nwidart\\Modules\\Commands\\ComponentClassMakeCommand',
      2 => 'Nwidart\\Modules\\Commands\\ComponentViewMakeCommand',
      3 => 'Nwidart\\Modules\\Commands\\ControllerMakeCommand',
      4 => 'Nwidart\\Modules\\Commands\\DisableCommand',
      5 => 'Nwidart\\Modules\\Commands\\DumpCommand',
      6 => 'Nwidart\\Modules\\Commands\\EnableCommand',
      7 => 'Nwidart\\Modules\\Commands\\EventMakeCommand',
      8 => 'Nwidart\\Modules\\Commands\\JobMakeCommand',
      9 => 'Nwidart\\Modules\\Commands\\ListenerMakeCommand',
      10 => 'Nwidart\\Modules\\Commands\\MailMakeCommand',
      11 => 'Nwidart\\Modules\\Commands\\MiddlewareMakeCommand',
      12 => 'Nwidart\\Modules\\Commands\\NotificationMakeCommand',
      13 => 'Nwidart\\Modules\\Commands\\ProviderMakeCommand',
      14 => 'Nwidart\\Modules\\Commands\\RouteProviderMakeCommand',
      15 => 'Nwidart\\Modules\\Commands\\InstallCommand',
      16 => 'Nwidart\\Modules\\Commands\\ListCommand',
      17 => 'Nwidart\\Modules\\Commands\\ModuleDeleteCommand',
      18 => 'Nwidart\\Modules\\Commands\\ModuleMakeCommand',
      19 => 'Nwidart\\Modules\\Commands\\FactoryMakeCommand',
      20 => 'Nwidart\\Modules\\Commands\\PolicyMakeCommand',
      21 => 'Nwidart\\Modules\\Commands\\RequestMakeCommand',
      22 => 'Nwidart\\Modules\\Commands\\RuleMakeCommand',
      23 => 'Nwidart\\Modules\\Commands\\MigrateCommand',
      24 => 'Nwidart\\Modules\\Commands\\MigrateRefreshCommand',
      25 => 'Nwidart\\Modules\\Commands\\MigrateResetCommand',
      26 => 'Nwidart\\Modules\\Commands\\MigrateRollbackCommand',
      27 => 'Nwidart\\Modules\\Commands\\MigrateStatusCommand',
      28 => 'Nwidart\\Modules\\Commands\\MigrationMakeCommand',
      29 => 'Nwidart\\Modules\\Commands\\ModelMakeCommand',
      30 => 'Nwidart\\Modules\\Commands\\PublishCommand',
      31 => 'Nwidart\\Modules\\Commands\\PublishConfigurationCommand',
      32 => 'Nwidart\\Modules\\Commands\\PublishMigrationCommand',
      33 => 'Nwidart\\Modules\\Commands\\PublishTranslationCommand',
      34 => 'Nwidart\\Modules\\Commands\\SeedCommand',
      35 => 'Nwidart\\Modules\\Commands\\SeedMakeCommand',
      36 => 'Nwidart\\Modules\\Commands\\SetupCommand',
      37 => 'Nwidart\\Modules\\Commands\\UnUseCommand',
      38 => 'Nwidart\\Modules\\Commands\\UpdateCommand',
      39 => 'Nwidart\\Modules\\Commands\\UseCommand',
      40 => 'Nwidart\\Modules\\Commands\\ResourceMakeCommand',
      41 => 'Nwidart\\Modules\\Commands\\TestMakeCommand',
      42 => 'Nwidart\\Modules\\Commands\\LaravelModulesV6Migrator',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => 'D:\\erp\\SSEnterprises\\vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'nwidart',
      'author' => 
      array (
        'name' => 'Nicolas Widart',
        'email' => 'n.widart@gmail.com',
      ),
    ),
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => 'D:\\erp\\SSEnterprises\\modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
    'composer-output' => false,
  ),
  'no-captcha' => 
  array (
    'secret' => 'no-captcha-secret',
    'sitekey' => 'no-captcha-sitekey',
    'captcha' => false,
    'lang' => 'en',
    'attributes' => 
    array (
      'data-theme' => NULL,
      'data-type' => NULL,
      'data-size' => 'compact',
    ),
  ),
  'pdf' => 
  array (
    'mode' => 'utf-8',
    'format' => 'A4',
    'default_font_size' => 12,
    'default_font' => 'sans-serif',
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 10,
    'margin_bottom' => 10,
    'margin_header' => 0,
    'margin_footer' => 0,
    'orientation' => 'P',
    'title' => 'PDF',
    'author' => 'UltimateKode',
    'watermark' => '',
    'show_watermark' => true,
    'watermark_font' => 'sans-serif',
    'watermark_text_alpha' => 0.1,
    'custom_font_dir' => '',
    'custom_font_data' => 
    array (
    ),
    'auto_language_detection' => false,
    'tempDir' => 'D:\\erp\\SSEnterprises\\storage\\app\\public\\temp',
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'cachePath' => 'D:\\erp\\SSEnterprises\\storage\\app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => true,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'release' => 
  array (
    'start_version' => '1.0',
    'start_build' => '1',
    'string' => 'CompleteBillingSystem',
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\erp\\SSEnterprises\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'standard' => 
  array (
    'type' => false,
  ),
  'version' => 
  array (
    'version' => '8.0',
    'build' => '140',
    'date' => '6th Nov 2022',
    'zone' => 'http://zone.ultimatekode.com',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\erp\\SSEnterprises\\resources\\views',
    ),
    'compiled' => 'D:\\erp\\SSEnterprises\\storage\\framework\\views',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => 'D:\\erp\\SSEnterprises',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
  ),
  'captcha' => 
  array (
    'secret' => NULL,
    'sitekey' => NULL,
    'options' => 
    array (
      'timeout' => 30,
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
