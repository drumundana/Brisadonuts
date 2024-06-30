<?php
// logger.php

// Define the path to the log file
define('LOG_FILE', __DIR__ . '/log/lpalog.log');

/**
 * Write a log message to the log file.
 * 
 * @param string $message The message to log
 * @param string $level The level of the log (e.g., ERROR, INFO)
 */
function writeLog($message, $level = 'INFO') {
    $timestamp = date('Y-m-d H:i:s');
    $formattedMessage = "[{$timestamp}] [{$level}] {$message}" . PHP_EOL;

    // Ensure the log directory exists
    if (!is_dir(__DIR__ . '/log')) {
        mkdir(__DIR__ . '/log', 0777, true);
    }

    // Append the log message to the log file
    file_put_contents(LOG_FILE, $formattedMessage, FILE_APPEND);
}

/**
 * Handle uncaught exceptions.
 * 
 * @param Exception $exception The uncaught exception
 */
function handleException($exception) {
    writeLog('Uncaught exception: ' . $exception->getMessage(), 'ERROR');
    // Optionally, display a generic error message to the user
    echo 'An error occurred. Please try again later.';
}

/**
 * Handle PHP errors.
 * 
 * @param int $errno The error number
 * @param string $errstr The error message
 * @param string $errfile The filename where the error occurred
 * @param int $errline The line number where the error occurred
 */
function handleError($errno, $errstr, $errfile, $errline) {
    $errorMessage = "Error [{$errno}]: {$errstr} in {$errfile} on line {$errline}";
    writeLog($errorMessage, 'ERROR');
    // Return false to let the default PHP error handler process the error as well
    return false;
}

// Set custom error and exception handlers
set_exception_handler('handleException');
set_error_handler('handleError');
