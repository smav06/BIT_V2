<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class HouseProfileController extends Controller
{
    public function index()
    {

        return view('resident.houseprofile');
    }

    public function loadhousehold()
    {
        $householdata = DB::TABLE('v_household_information');
        return datatables()->of($householdata)->make(true);
        //return datatables()->of($householdata)->addIndexColumn()->make(true);
    }
     // $householdata = DB::TABLE('T_RESIDENT_BASIC_INFO AS T')
     //    ->JOIN('T_HOUSEHOLD_INFORMATION AS HI','T.HOUSEHOLD_ID','HI.HOUSEHOLD_ID')
     //    //->JOIN('R_BARANGAY_INFORMATION AS BI', 'HI.BARANGAY_ID', 'BI.BARANGAY_ID')
     //    ->SELECT(
     //        'HI.HOUSEHOLD_ID','T.LASTNAME','T.FIRSTNAME','HI.HOME_OWNERSHIP','HI.PERSON_STAYING_IN_HOUSEHOLD','HI.HOME_MATERIALS','HI.BARANGAY_ZONE_ADDRESS','T.LASTNAME','T.FIRSTNAME','T.MIDDLENAME',

     //            'HI.TOILET_HOME','HI.PLAY_AREA_HOME','HI.BEDROOM_HOME','HI.DINING_ROOM_HOME','HI.SALA_HOME','HI.KITCHEN_HOME','HI.WATER_UTILITIES','HI.ELECTRICITY_UTILITIES','HI.AIRCON_UTILITIES', 'HI.PHONE_UTILITIES','HI.COMPUTER_UTILITIES','HI.INTERNET_UTILITIES','HI.TV_UTILITIES','HI.CD_PLAYER_UTILITIES','HI.RADIO_UTILITIES','HI.COMICS_ENTERTAINMENT','HI.NEWS_PAPER_ENTERTAINMENT','HI.PETS_ENTERTAINMENT','HI.BOOKS_ENTERTAINMENT','HI.STORY_BOOKS_ENTERTAINMENT','HI.TOYS_ENTERTAINMENT','HI.BOARD_GAMES_ENTERTAINMENT','HI.PUZZLES_ENTERTAINMENT','HI.NUMBER_OF_ROOMS'
     //    );

    //         'HI.PHONE_UTILITIES','HI.COMPUTER_UTILITIES','HI.INTERNET_UTILITIES','HI.TV_UTILITIES','HI.CD_PLAYER_UTILITIES','HI.RADIO_UTILITIES','H    
    public function edit(Request $request)
    {

         DB::TABLE('T_HOUSEHOLD_INFORMATION')
            ->WHERE('HOUSEHOLD_ID', request('EditCatID'))
            ->UPDATE(   
                [

                    'HOME_OWNERSHIP' => request ('homeowner'),
                    'PERSON_STAYING_IN_HOUSEHOLD' => request ('pstaying'),
                    'HOME_MATERIALS' => request ('build_mat'),
                
                    'NUMBER_OF_ROOMS' => request ('noofrooms'),
                    'TOILET_HOME' => request ('toilet'),
                    'PLAY_AREA_HOME'  => request ('playarea'),
                    'BEDROOM_HOME'  => request ('bedroom'),
                    'DINING_ROOM_HOME'  => request ('dining'),
                    'SALA_HOME'  => request ('sala'),
                    'KITCHEN_HOME'  => request ('kitchen'),
                    'WATER_UTILITIES'  => request ('runningwater'),
                    'ELECTRICITY_UTILITIES'  => request ('electricity'),
                    'AIRCON_UTILITIES'  => request ('aircon'),
                    'PHONE_UTILITIES'  => request ('mobile'),
                    'COMPUTER_UTILITIES'  => request ('computer'),
                    'INTERNET_UTILITIES'  => request ('internet'),
                    'TV_UTILITIES'  => request ('boxtv'),
                    'CD_PLAYER_UTILITIES'  => request ('cdplayer'),
                    'RADIO_UTILITIES'  => request ('boxradio'),
                    'COMICS_ENTERTAINMENT'  => request ('comics'),
                    'NEWS_PAPER_ENTERTAINMENT'  => request ('newspaper'),
                    'PETS_ENTERTAINMENT'  => request ('pets'),
                    'BOOKS_ENTERTAINMENT'  => request ('books'),
                    'STORY_BOOKS_ENTERTAINMENT'  => request ('storybooks'),
                    'TOYS_ENTERTAINMENT'  => request ('toys'),
                    'BOARD_GAMES_ENTERTAINMENT' => request ('boardgames'),
                    'PUZZLES_ENTERTAINMENT' => request ('puzzles'),
                    'UPDATED_AT' => DB::raw('CURRENT_TIMESTAMP')
                ]
            );
            echo "good";


    }

   
}
