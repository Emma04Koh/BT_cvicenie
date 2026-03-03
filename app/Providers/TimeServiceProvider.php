<?php
    namespace App\Providers;
    class TimeServiceProvider
    {
        public function getTime(): string
        {
            return date('Y-m-d H:i:s');
        }
    }