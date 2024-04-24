<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DatabaseBackup  extends Command
{
    protected $signature = 'database:backup';
    public function handle()
    {
        $dbName = env('DB_DATABASE');
        $dbUser = env('DB_USERNAME');
        $dbPassword = env('DB_PASSWORD');
        $backupPath = base_path('database/'.date('d-M-Y-H:i:s').'db_backup.sql');
        $command = "mysqldump --user={$dbUser} --password={$dbPassword} {$dbName} > {$backupPath}";

        try {
            shell_exec($command);
        }catch (\Exception $e) {
            $this->error('Database backup failed');
            return;
        }


        $this->info('Database backup has been created and stored at ' . $backupPath);
    }
}
