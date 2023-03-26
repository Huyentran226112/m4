<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $task = new Tasks();
        $task->id = 1;
        $task->title = "Tạo project";
        $task->content = "Tạo project Laravel";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
    
        $task = new Task();
        $task->id = 2;
        $task->title = "Tạo migration";
        $task->content = "Tạo migration cho bảng categories";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
    
        $task = new Task();
        $task->id = 3;
        $task->title = "Tạo seeder";
        $task->content = "Tạo dữ liệu cho bảng categories";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
    
        $task = new Task();
        $task->id = 4;
        $task->title = "Câu lệnh if";
        $task->content = "Câu lệnh if trong Laravel";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
    }
}
