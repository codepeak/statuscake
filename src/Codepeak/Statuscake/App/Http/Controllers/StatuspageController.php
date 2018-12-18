<?php

namespace Codepeak\Statuscake\App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Class StatuspageController
 *
 * @package  Codepeak\Statuscake\Http\Controllers
 * @license  MIT License https://opensource.org/licenses/MIT
 * @author   Robert Lord, Codepeak AB <robert@codepeak.se>
 * @link     https://codepeak.se
 */
class StatuspageController extends Controller
{
    /**
     * Perform the default checks
     *
     * @return mixed
     */
    public function index()
    {
        // Check database connection
        try {
            // Make sure the connection exists
            \DB::connection()->getPdo();

            // Make sure the database exists
            \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
            return $this->generateResponse('Could not connect to the database: ' . $e->getMessage(), 501);
        }

        // Everything is OK
        return $this->generateResponse('OK');
    }

    /**
     * Generate response
     *
     * @param string $content
     * @param int    $statusCode
     *
     * @return mixed
     */
    protected function generateResponse($content, $statusCode = 200)
    {
        return response($content, $statusCode)
            ->header('Content-Type', 'text/plain');
    }
}
