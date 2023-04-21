<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Code;
use Barryvdh\DomPDF\Facade\Pdf;

class CreateCodesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:qrcode {--so-luong=} {--thep-chu=} {--coc=} {--mac-be-tong=}';


    protected $description = 'Create QR code command!';

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
        $listCodes = [];
        $data = $this->prepareData();
        $dateFomated = date('mY', time());
        $logoPath = public_path('/images/logo.jpg');
        for($i = 1; $i <= $this->option()['so-luong']; $i++)
        {
            $data['serial'] = rand(1000,9999).substr(time(), 4, -1).rand(1000,9999);
            $code = Code::create($data);
            $code_id = $dateFomated.' - '. sprintf("%05d", $code->id);
            $code->update(['code_id' => $code_id]);
            $listCodes[] = $code;
            $this->info(($code->code_id ?? '').' created!');
        }
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        Pdf::loadView('export_pdf', compact('listCodes', 'logoPath'))->setPaper('A4')->save('files/'.$dateFomated.substr(time(), 4, -1).'.pdf', 'local');
        
        $this->info('End!');
        return 0;
    }

    protected function prepareData()
    {
        $data = [];
        $options = $this->options();
        $data['phone'] = '0968846686';
        $data['coc'] = $options['coc'] ?? '';
        $data['thep_chu'] = $options['thep-chu'] ?? '';
        $data['mac_be_tong'] = $options['mac-be-tong'] ?? '';
        return $data;
    }

}
