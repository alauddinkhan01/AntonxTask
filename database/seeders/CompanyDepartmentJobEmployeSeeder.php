<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employe;
use App\Models\Jobs;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyDepartmentJobEmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Companies
        $Companies[]= Company::create(['company_name' => 'Acme Inc']);//1
        $Companies[]= Company::create(['company_name' => 'Panda']);//2
        $Companies[]= Company::create(['company_name' => 'LuLu']);//3
        $Companies[]= Company::create(['company_name' => 'StarBox']);//4

        // Departments 
        $Departments[]= Department::create(['company_id' => 1,'department_name' => 'IT Department',]);//1
        $Departments[]= Department::create(['company_id' => 1,'department_name' => 'Sale Department',]);//2
        $Departments[]= Department::create(['company_id' => 1,'department_name' => 'Marketing Department',]);//3
        $Departments[]= Department::create(['company_id' => 1,'department_name' => 'Resources Department',]);//4
       
        $Departments[]= Department::create(['company_id' => 2,'department_name' => 'ABC Department',]);//1
        $Departments[]= Department::create(['company_id' => 2,'department_name' => 'DEF Department',]);//2
        $Departments[]= Department::create(['company_id' => 2,'department_name' => 'JKL Department',]);//3
        $Departments[]= Department::create(['company_id' => 2,'department_name' => 'MNO Department',]);//4
        
        $Departments[]= Department::create(['company_id' => 3,'department_name' => 'PQR Department',]);//1
        $Departments[]= Department::create(['company_id' => 3,'department_name' => 'STU Department',]);//2
        $Departments[]= Department::create(['company_id' => 3,'department_name' => 'VWX Department',]);//3
        $Departments[]= Department::create(['company_id' => 3,'department_name' => 'XYZ Department',]);//4
       
        $Departments[]= Department::create(['company_id' => 4,'department_name' => 'FKD Department',]);//1
        $Departments[]= Department::create(['company_id' => 4,'department_name' => 'FDU Department',]);//2
        $Departments[]= Department::create(['company_id' => 4,'department_name' => 'SKL Department',]);//3
        $Departments[]= Department::create(['company_id' => 4,'department_name' => 'JML Department',]);//4
        
        //Jobs
        $Departments[]= Jobs::create(['department_id' => 1,'job_title' => 'Document Controller',]);
        $Departments[]= Jobs::create(['department_id' => 1,'job_title' => 'Marketing Manager',]);
        $Departments[]= Jobs::create(['department_id' => 1,'job_title' => 'Sale Manager',]);
        $Departments[]= Jobs::create(['department_id' => 1,'job_title' => 'Store Keepre',]);
        
        $Departments[]= Jobs::create(['department_id' => 2,'job_title' => 'Document Controller',]);
        $Departments[]= Jobs::create(['department_id' => 2,'job_title' => 'Marketing Manager',]);
        $Departments[]= Jobs::create(['department_id' => 2,'job_title' => 'Sale Manager',]);
        $Departments[]= Jobs::create(['department_id' => 2,'job_title' => 'Store Keepre',]);
        
        $Departments[]= Jobs::create(['department_id' => 3,'job_title' => 'Document Controller',]);
        $Departments[]= Jobs::create(['department_id' => 3,'job_title' => 'Marketing Manager',]);
        $Departments[]= Jobs::create(['department_id' => 3,'job_title' => 'Sale Manager',]);
        $Departments[]= Jobs::create(['department_id' => 3,'job_title' => 'Store Keepre',]);
        
        $Departments[]= Jobs::create(['department_id' => 4,'job_title' => 'Document Controller',]);
        $Departments[]= Jobs::create(['department_id' => 4,'job_title' => 'Document Controller',]);
        $Departments[]= Jobs::create(['department_id' => 4,'job_title' => 'Marketing Manager',]);
        $Departments[]= Jobs::create(['department_id' => 4,'job_title' => 'Marketing Manager',]);
        
        $Departments[]= Jobs::create(['department_id' => 5,'job_title' => 'Sale Manager',]);
        $Departments[]= Jobs::create(['department_id' => 5,'job_title' => 'Sale Manager',]);
        $Departments[]= Jobs::create(['department_id' => 5,'job_title' => 'Sale Manager',]);
        $Departments[]= Jobs::create(['department_id' => 5,'job_title' => 'Sale Manager',]);
       
        $Departments[]= Jobs::create(['department_id' => 6,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 6,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 6,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 6,'job_title' => 'Store Keepre',]);
       
        $Departments[]= Jobs::create(['department_id' => 7,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 7,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 7,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 7,'job_title' => 'Store Keepre',]);

        $Departments[]= Jobs::create(['department_id' => 8,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 8,'job_title' => 'Store Keepre',]);

        $Departments[]= Jobs::create(['department_id' => 9,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 9,'job_title' => 'Store Keepre',]);

        $Departments[]= Jobs::create(['department_id' => 10,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 10,'job_title' => 'Store Keepre',]);

        $Departments[]= Jobs::create(['department_id' => 11,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 11,'job_title' => 'Store Keepre',]);

        $Departments[]= Jobs::create(['department_id' => 12,'job_title' => 'Store Keepre',]);
        $Departments[]= Jobs::create(['department_id' => 12,'job_title' => 'Store Keepre',]);


        // employes
        $Departments[]= Employe::create(['job_id' => 1,'company_id'=> 1,'first_name' => 'Ali','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 2,'company_id'=> 1,'first_name' => 'Salim','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 3,'company_id'=> 1,'first_name' => 'Rahid','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 4,'company_id'=> 1,'first_name' => 'Javeed','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 5,'company_id'=> 1,'first_name' => 'Kaleem','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 6,'company_id'=> 2,'first_name' => 'Waseem','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 7,'company_id'=> 2,'first_name' => 'Sohail','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 8,'company_id'=> 2,'first_name' => 'Kareem','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 5,'company_id'=> 2,'first_name' => 'Subhan','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 6,'company_id'=> 2,'first_name' => 'Jamal','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 7,'company_id'=> 2,'first_name' => 'Kanual','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 8,'company_id'=> 3,'first_name' => 'Waheed','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 5,'company_id'=> 3,'first_name' => 'Akif','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 6,'company_id'=> 3,'first_name' => 'JM','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 7,'company_id'=> 3,'first_name' => 'SAM','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 8,'company_id'=> 3,'first_name' => 'Kaw','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 1,'company_id'=> 3,'first_name' => 'Xaw','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 2,'company_id'=> 4,'first_name' => 'Jaw','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 3,'company_id'=> 4,'first_name' => 'Sak','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 4,'company_id'=> 4,'first_name' => 'Kar','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 36,'company_id'=> 4,'first_name' => 'Akhatar','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 35,'company_id'=> 4,'first_name' => 'Sameei','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 35,'company_id'=> 4,'first_name' => 'Sali','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 30,'company_id'=> 4,'first_name' => 'Jawad','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 28,'company_id'=> 1,'first_name' => 'Kali','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 26,'company_id'=> 1,'first_name' => 'Aleem','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 27,'company_id'=> 1,'first_name' => 'Sumam','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 24,'company_id'=> 1,'first_name' => 'Kamran','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 15,'company_id'=> 2,'first_name' => 'Subh','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 18,'company_id'=> 2,'first_name' => 'Jam','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 19,'company_id'=> 2,'first_name' => 'Kan','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 20,'company_id'=> 2,'first_name' => 'Wahi','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 15,'company_id'=> 2,'first_name' => 'Aki','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 12,'company_id'=> 2,'first_name' => 'Jaw','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 11,'company_id'=> 2,'first_name' => 'Ubaid','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 20,'company_id'=> 4,'first_name' => 'Subhan','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 19,'company_id'=> 4,'first_name' => 'Dawood','last_name'=>'Khan','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 17,'company_id'=> 4,'first_name' => 'Wak','last_name'=>'Butt','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 14,'company_id'=> 4,'first_name' => 'Si','last_name'=>'Seyed','date_of_hire'=>Carbon::now()]);
        $Departments[]= Employe::create(['job_id' => 33,'company_id'=> 4,'first_name' => 'Wan','last_name'=>'Zia','date_of_hire'=>Carbon::now()]);

    }
}
