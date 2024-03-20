<?php

namespace App\Console\Commands;

use App\Mail\ProfileImageReminderEmail;
use App\Models\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendClientProfileImageRemindersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-client-profile-image-reminders-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email reminders to clients without profile images';

    public function handle()
    {
        $clientsWithoutImages = Client::whereNull('profile_image')->get();

        foreach ($clientsWithoutImages as $client) {
            # Prepare email content and send using Laravel Mail
            Mail::to($client->email)
                ->send(new ProfileImageReminderEmail($client));
        }

        $this->info('Sent profile image reminder emails to clients without images.');
    }
}
