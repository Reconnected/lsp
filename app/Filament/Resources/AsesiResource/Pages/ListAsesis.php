<?php

namespace App\Filament\Resources\AsesiResource\Pages;

use App\Filament\Resources\AsesiResource;
use App\Models\Asesi;
use App\Imports\ImportAsesis;
use Filament\Forms;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ListAsesis extends ListRecords
{
    protected static string $resource = AsesiResource::class;

    protected function getActions(): array
    {
        $file = '';

        return [
            Actions\CreateAction::make(),
            Actions\Action::make('uploadCSV')
            ->label('Upload Data')
            ->form([
                FileUpload::make('CSV_Attachment')
                ->label('Upload File CSV')
                
            ])
            ->action(function (array $data): void {
                try {
                    if (empty($data['CSV_Attachment'])) {
                        Notification::make()
                            ->title('tidak ada file')
                            ->danger()
                            ->send();
                        return;
                    }

                    $file = $data['CSV_Attachment'];

                    $filePath = $file->getRealPath();
                    
                    Excel::import(new ImportAsesis, $filePath);

                    // Asesi::create([
                    //     'image' => 'Image1',
                    //     'nama' => 'Azis',
                    //     'email' => 'azis@gmail.com',
                    //     'no_telepon' => '0812345',
                    //     'no_regis' => '2521AB',
                    //     'tgl_lahir' => '2003-03-25',
                    //     'status_kerja' => 0,
                    //     'asal_instansi' => 'SMK',
                    //     'skemas_id' => '1',
                    // ]);

                    Notification::make()
                            ->title('berhasil')
                            ->success()
                            ->send();
                } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {

                    $failures = $e->failures();
                    $message = 'Beberapa baris data gagal diimpor: <br>';
                    foreach ($failures as $failure) {
                        $message .= 'Baris ' . $failure->row() . ': ' . implode(', ', $failure->errors()) . '<br>';
                    }
                    Notification::make()
                            ->title('Gagal Validasi Impor')
                            ->body($message)
                            ->danger()
                            ->send();
                } 
            })
        ];
    }

    public function save(){
        if ($this->file != '') {
            Excel::import(new ImportAsesis, $this->file);
        }
        // Asesi::create([
        //     'image' => 'Image1',
        //     'nama' => 'Azis',
        //     'email' => 'azis@gmail.com',
        //     'no_telepon' => '0812345',
        //     'no_regis' => '2521AB',
        //     'tgl_lahir' => '2003-03-25',
        //     'status_kerja' => 0,
        //     'asal_instansi' => 'SMK',
        //     'skemas_id' => '1',
        // ]);
    }
}
