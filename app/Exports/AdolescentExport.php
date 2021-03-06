<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class AdolescentExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
	use RegistersEventListeners;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $adolescent = collect(DB::select('
        	SELECT 
				CONCAT(R.LASTNAME, ", ", R.FIRSTNAME, ", ", R.LASTNAME) AS FULLNAME
				,H.HOUSEHOLD_ID
				,IF(R.SEX="FEMALE", "Babae", "Lalaki") AS KASARIAN
				,TIMESTAMPDIFF(YEAR, R.DATE_OF_BIRTH, CURDATE()) AS "Age"
				,R.CIVIL_STATUS
				,A.MMRTD_DATE
				,IF (A.IS_REFERRED=1, "✓", "✗") AS IS_REFERRED
			FROM t_hs_adolescent AS A
			INNER JOIN t_resident_basic_info AS R
			ON R.RESIDENT_ID = A.RESIDENT_ID
			LEFT JOIN t_household_information AS H
			ON H.HOUSEHOLD_ID = R.HOUSEHOLD_ID
        	'));
        return $adolescent;
    }

        /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
    	return [
    		 'Pangalan'
			,'HH #'
			,'Kasarian'
			,'Edad'
			,'Estado Sibil'
			,'Petsa nang nabigyan ng MMRTD'
			,'Na-refer?'
    	];
    }
}
