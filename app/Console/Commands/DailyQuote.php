<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AbsensiStatus;
use Carbon\Carbon;

class DailyQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset status para pegawai kantor instansi';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $absen = AbsensiStatus::query()->whereNull('tanggal')->orWhereDate('tanggal','<',Carbon::now())->update(['status' => 0,'tanggal' => null]);
        $this->info('Successfully reset status absensi semua pegawai.');
    }
}
