<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\User;
use App\Model\Property;

class UserViwedNews implements ShouldQueue
{
    public $user;
    public $listing;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user,Property $listing)
    {
        $this->user=$user;
        $this->listing=$listing;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
         $viewed=$this->user->viewedListings;
        if($viewed->contains($this->listing)){
            $viewed->where('id',$this->listing->id)->first()->pivot->increment('count');
            return;
        }
        $this->user->viewedListings()->attach($this->listing,[
            'count'=>1
        ]);
    }
}