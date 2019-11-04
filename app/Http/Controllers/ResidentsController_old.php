<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Imports\UsersImport;
use App\Exports\ResidentsExport;
use Excel;
use Session;
use File;
use DB;

class ResidentsController extends Controller
{
    public function index(Request $request)
    {
        
        $resident_type = DB::TABLE('R_RESIDENT_TYPE AS RT')
                        ->PLUCK('RT.TYPE_NAME','RT.TYPE_ID');
               // dd($data);
        return view('resident.basicinfo', compact('resident_type'));
        //return view('administration.samplemigrate');
        
    }
    // return view('administration.samplemigrate');
    public function loadresident()
    {                        
      
            $display_data = DB::TABLE('T_RESIDENT_BASIC_INFO AS T')
            ->SELECT('T.RESIDENT_ID','T.LASTNAME','T.FIRSTNAME','T.MIDDLENAME','T.QUALIFIER','T.SEX','T.DATE_OF_BIRTH','T.CIVIL_STATUS','T.OCCUPATION','T.WORK_STATUS',
                'T.CITIZENSHIP','T.RELATION_TO_HOUSEHOLD_HEAD','T.CONTACT_NUMBER','T.DATE_OF_BIRTH','T.PLACE_OF_BIRTH','T.ADDRESS_UNIT_NO','T.ADDRESS_PHASE',
                'T.ADDRESS_HOUSE_NO','T.ADDRESS_STREET','T.ADDRESS_SUBDIVISION','T.ADDRESS_BUILDING','T.DATE_STARTED_WORKING','T.DATE_OF_ARRIVAL','T.ACTIVE_FLAG');
            //->WHERE('T.ACTIVE_FLAG',1); 

        return datatables()->of($display_data)->addIndexColumn()->make(true);
    } 

    public function export()
    {
        //Excel::store(new ResidentsExport, 'users.xlsx');
        return Excel::download(new ResidentsExport, 'Residents.xlsx');
    }

    public function migratedata()
    {
        return view('administration.samplemigrate');
    }

    public function import(Request $request) 
    {
        $extension = File::extension($request->file->getClientOriginalName());
        if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
            Excel::import(new UsersImport,request()->file('file'));
            
        }
       
    }

    public function edit(Request $request)
    {
        DB::TABLE('T_RESIDENT_BASIC_INFO')
            ->WHERE('RESIDENT_ID', request('resident_id'))
            ->UPDATE(
                [
                    'LASTNAME' => request ('editlname'),
                    'MIDDLENAME' => request ('editmname'),
                    'FIRSTNAME' => request ('editfname'),
                    'QUALIFIER' => request ('editqname'),
                    'DATE_OF_BIRTH' => request ('editbdate'),
                    
                    'SEX' => request ('editgender'),
                    'CIVIL_STATUS' => request ('editcstatus'),
                    
                    'OCCUPATION' => request ('editoccu'),
                    'WORK_STATUS' => request ('editwstatus'),
                    'DATE_STARTED_WORKING' => request ('editstartw'),
                    'CITIZENSHIP' => request ('editcitiz'),
                    'RELATION_TO_HOUSEHOLD_HEAD' => request ('editrhead'),
                    'DATE_OF_ARRIVAL' => request ('editarrtime'),
                    'ARRIVAL_STATUS' => request('editastatus'),
                    'IS_INDIGENOUS' => request ('edit_isinde'),
                    'CONTACT_NUMBER' => request ('editcontact'),
                    'PLACE_OF_BIRTH' => request ('editpbirth'),
                    'ADDRESS_UNIT_NO' => request ('edit_hunitno'),
                    'ADDRESS_HOUSE_NO' => request ('edit_houseno'),
                    'ADDRESS_STREET' => request ('edit_street'),
                    'ADDRESS_PHASE' => request ('edit_hphase'),
                    'ADDRESS_SUBDIVISION' => request ('edit_hsubdivision'),
                    'ADDRESS_BUILDING' => request ('edit_hbuilding'),
                    'EDUCATIONAL_ATTAINMENT' => request ('editeducationatt'),
                    'UPDATED_AT' => DB::raw('CURRENT_TIMESTAMP')
                ]   
            );

            if (request('editastatus') != 3) 
            {
                DB::TABLE('T_TRANSIENT_RECORD')
                ->WHERE('RESIDENT_ID', request('resident_id'))
                ->UPDATE(
                    [
                        'NATURALIZED_DATE' => DB::RAW('CURRENT_TIMESTAMP'),
                        'UPDATED_AT' => DB::RAW('CURRENT_TIMESTAMP')
                    ]);
            }
             echo "good";
    }

    public function deactivate()
    {
        DB::TABLE('T_RESIDENT_BASIC_INFO')
        ->WHERE('RESIDENT_ID', request('resident_id'))
        ->UPDATE([ 'ACTIVE_FLAG' => 0 ]);
        echo "good";
    }

    public function store(Request $request)
    {
       
            $last_id = DB::TABLE('T_HOUSEHOLD_INFORMATION')
            ->INSERTGETID(
                [
                    'HOME_OWNERSHIP' => request ('homeownership'),
                
                    'HOME_MATERIALS' => request ('buildmaterial'),
                    'NUMBER_OF_ROOMS' => request ('numberofrooms'),
                   
                    //'STREET_ADDRESS' => request ('streetno'),
                    'TOILET_HOME' => request ('toilet') ,
                    'PLAY_AREA_HOME' => request ('playarea'),
                    'BEDROOM_HOME' => request ('bedroom'),
                    'DINING_ROOM_HOME' => request ('dining'),
                    'SALA_HOME' => request ('sala'),
                    'KITCHEN_HOME' => request ('kitchen'),
                    'WATER_UTILITIES' => request ('runningwater'),
                    'ELECTRICITY_UTILITIES' => request ('electricity'),
                    'AIRCON_UTILITIES' => request ('aircon'),
                    'PHONE_UTILITIES' => request ('mobile'),
                    'COMPUTER_UTILITIES' => request ('computer'),
                    'INTERNET_UTILITIES' => request ('internet'),
                    'TV_UTILITIES' => request ('boxtv'),
                    'CD_PLAYER_UTILITIES' => request ('cdplayer'),
                    'RADIO_UTILITIES' => request ('boxradio'),
                    'COMICS_ENTERTAINMENT' => request ('comics'),
                    'NEWS_PAPER_ENTERTAINMENT' => request ('newspaper'),
                    'PETS_ENTERTAINMENT' => request ('pets'),
                    'BOOKS_ENTERTAINMENT' => request ('books'),
                    'STORY_BOOKS_ENTERTAINMENT' => request ('storybooks'),
                    'TOYS_ENTERTAINMENT' => request ('toys'),
                    'BOARD_GAMES_ENTERTAINMENT' => request ('boardgames'),
                    'PUZZLES_ENTERTAINMENT' => request ('puzzles'),
                    'PERSON_STAYING_IN_HOUSEHOLD' => request ('personinhousehold'),
                    
                    'CREATED_AT' => DB::RAW('CURRENT_TIMESTAMP'),
                    'ACTIVE_FLAG' => 1
                ]
            );
           
     
            $res_last_id = DB::TABLE('T_RESIDENT_BASIC_INFO')
            ->INSERTGETID(
                [
                    'HOUSEHOLD_ID' => $last_id,
                    'LASTNAME' => request ('lastname'),
                    'MIDDLENAME' => request ('middlename'),
                    'FIRSTNAME' => request ('firstname'),
                    'ADDRESS_HOUSE_NO' => request('houseno'),
                    'ADDRESS_STREET' => request('hstreet'),
                    'ADDRESS_PHASE' => request('hphase'),
                    'ADDRESS_BUILDING' => request('hbuilding'),
                    'ADDRESS_UNIT_NO' => request('hunitno'),
                    'ADDRESS_SUBDIVISION' => request('hsubdivision'),

                    'QUALIFIER' => request ('qualifier'),
                    'DATE_OF_BIRTH' => request ('dateofbirth'),
                    'PLACE_OF_BIRTH' => request ('placeofbirth'),
                    'SEX' => request ('sex_gender'),
                    'CIVIL_STATUS' => request ('civilstatus'),
                    'IS_OFW' => request ('is_ofw'),
                    'OCCUPATION' => request ('occupation'),
                    'WORK_STATUS' => request ('workstatus'),
                    'DATE_STARTED_WORKING' => request ('dateofstartwork'),
                    'CITIZENSHIP' => request ('citizenship'),
                    'RELATION_TO_HOUSEHOLD_HEAD' => request ('relationtohead'),
                    'DATE_OF_ARRIVAL' => request ('dateofarrive'),
                    'ARRIVAL_STATUS' => request('arrivalreason'),
                    'IS_INDIGENOUS' => request ('is_indegenous'),
                    'CONTACT_NUMBER' => request ('contactnumber'),
                    'EDUCATIONAL_ATTAINMENT' => request ('educationatt'),
                    'CREATED_AT' => DB::RAW('CURRENT_TIMESTAMP'),
                    'ACTIVE_FLAG' => 1
                ]
               
            ); 

            if (request('arrivalreason') == 3) 
            {
                DB::TABLE('T_TRANSIENT_RECORD')
                ->INSERT(
                    [
                        'RESIDENT_ID' => $res_last_id,
                        'REASON_FOR_COMING' => request('r_coming'),
                        'PERIOD_OF_STAY_START_DATE' => request('p_startdate'),
                        'PERIOD_OF_STAY_END_DATE' => request('p_enddate'),
                        'CREATED_AT' => DB::RAW('CURRENT_TIMESTAMP')
                    ]);
            }
            echo "good";
           
    
    }

}


       // //dd($display_data);
       //  return Datatables::of($display_data)->make(true);

        //return datatables()->of($display_data)->make(true);
// $path = $request->file('select_file')->getRealPath();

//                  $data = Excel::load($path)->get();

//                  if($data->count() > 0)
//                  {
//                     foreach($data->toArray() as $key => $value)
//                     {
//                        foreach($value as $row)
//                        {
//                             $insert_data[] = array(
//                              'fname'  => $row['firstname'],
//                              'mname'   => $row['middlename'],
//                              'lname'   => $row['lastname']
//                             );
//                        }
//                     }

//                       if(!empty($insert_data))
//                       {
//                             DB::table('Z_SAMPLE_MIGRATION')->insert($insert_data);
//                       }
//                  }
//                  return back()->with(['success' => 'Excel Data Imported successfully.']);