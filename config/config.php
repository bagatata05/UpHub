<?php
/**
 * UpLiftHub application configuration.
 * Adjust database credentials and APP_BASE for your environment.
 */

declare(strict_types=1);

// Web path from document root (e.g. /UpHub or '' if vhost points here)
define('APP_BASE', '/UpHub');
define('APP_URL', 'http://localhost/UpHub'); // Full URL for emails

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'UpHub');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

define('UPLOAD_MAX_IMAGE_BYTES', 2 * 1024 * 1024);
define('ALLOWED_IMAGE_MIMES', ['image/jpeg', 'image/png', 'image/webp', 'image/gif']);

// Placeholder keys for future API integration (replace in production)
define('GOOGLE_MAPS_API_KEY', 'YOUR_GOOGLE_MAPS_API_KEY');

/**
 * Symfony Mailer DSN (Data Source Name)
 * Examples:
 * - SMTP: smtp://user:pass@host:port
 * - Gmail: gmail+smtp://user:pass@default
 * - Postmark: postmark+api://ID@default
 * - Sendgrid: sendgrid+api://KEY@default
 */
define('MAILER_DSN', 'gmail+smtp://naphiera%40gmail.com:bviubwvekwgthwbf@default');
define('MAILER_FROM', 'naphiera@gmail.com');

// Session
define('SESSION_NAME', 'UPLIFTHUB_SESS');

// Forgot-password token validity (hours)
define('RESET_TOKEN_HOURS', 24);
