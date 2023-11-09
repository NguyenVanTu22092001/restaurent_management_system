<?php

namespace App\Console\Commands;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteReservationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-reservation-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete unused reservations';

    /**
     * Execute the console command.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Reservation::where('ReservationDate', '<', Carbon::now()->subDays(1))->whereNull('status')->delete();
        $this->info('Delete unused reservations successfully');
    }
}
