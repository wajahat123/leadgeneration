<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getleads()
    {
        $lead = Lead::with(['user' => function ($query) {
            $query->where('role', 'support');
        }])->where('type', '=', ['tiktok', 'instagram'])->get();

        $lead1 = Lead::with(['user' => function ($query) {

            $query->where('role', 'sales');

        }])->where('type', '=', ['facebook', 'linkedin'])->get();

        $user = User::where('role', 'support')->get();
        $user1 = User::where('role', 'sales')->get();

        //   $assignedrole = $lead->with('user')->get();
        //   $assignedrole1 = $lead1->with('user')->get();

        return [$lead, $lead1];
        // return [$assignedrole, $assignedrole1];
        // return [$user,$user1];

    }

    public function distribution()
    {

        $insta_leads = Lead::whereIn('type', ['tiktok', 'instagram'])->whereNull('user_id')->get();

        $fb_leads = Lead::whereIn('type', ['facebook', 'linkedin'])->whereNull('user_id')->get();

        $support = User::where('role', 'support')->get();

        $sales = User::where('role', 'sales')->get();
        // dd($insta_leads->pluck('id'));


        // // dd($insta_leads);
        // $updtaed_lead = $insta_leads->update('user_id', $support->id);
        // $updatedlead1 = $fb_leads->update('user_id', $sales->id);

        // return [$insta_leads, $fb_leads];
        // dd(count($insta_leads), count($support));
        for ($i = 0; $i <= count($support); $i++) {

            for ($j = 0;  $j <= count($insta_leads) / count($support); $j++) {

                Lead::where('id', $insta_leads[$j]->id)->update([
                    'user_id' => $support[$i]->id
                ]);

                echo 'J'. $j . '<br>';
            }


        }


        dd('.....');
    }



}
