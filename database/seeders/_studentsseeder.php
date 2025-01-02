<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Studentsresult;
class _studentsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Stu_data = new Studentsresult();
        $Stu_data->fname = "Hassan";
        $Stu_data->lname ="Baloch" ;
        $Stu_data->age = 25 ;
        $Stu_data -> Grade = "B";
        $Stu_data-> Gender = "Male";
        $Stu_data->save();
    }
}
