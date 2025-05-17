<?php
namespace App\Firebase;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class FirebaseService
{
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/firebase_credentials.json');
        $this->database = $factory->createDatabase();
    }

    public function getDatabase(): Database
    {
        return $this->database;
    }
}
