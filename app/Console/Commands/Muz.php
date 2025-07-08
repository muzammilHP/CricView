<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Customer;
use Mail;
class Muz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student:sendmail';
    // protected $signature = 'student:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Student Added successfully';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $usersMail=Customer::select('email')->get();
        $emails=[];
        foreach($usersMail as $mail){
            $emails[]=$mail['email'];
        }
        Mail::send('Mails.mail',[],function ($message) use ($emails){
            $message->to($emails)->subject('This is test mail for cron');
        });
    //     $data['Fname']='Muzammil';
    //     $data['Lname']='Nawaz';
    //     $data['email']='muzwork124@gmail.com';
    //     $data['contact']='03055148558';
    //     $data['created_at']=now()->format('Y-m-d H:i:s');
    //     $data['updated_at']=now()->format('Y-m-d H:i:s');
        
    //    \DB::table('students')->insert($data);

    //    $this->info('Success');
    }
}
