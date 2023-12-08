<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Backup\BackupDestination\BackupDestination;
use Spatie\Backup\Tasks\Backup\BackupJobFactory;
use Spatie\Backup\BackupDestination\BackupDestinationFactory;

class BackupController extends Controller
{
    public function createBackup()
    {
        $backupDestination = BackupDestinationFactory::create('local', storage_path('app/backup-temp'));

        $backupJob = BackupJobFactory::createFromArray(config('backup.backup.source'), $backupDestination);

        $backupJob->run();

        return redirect()->back()->with('success', 'Backup creado exitosamente.');
    }
}
