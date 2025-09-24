<?php

namespace App\Observers;
use App\Models\Student;
use Illuminate\Support\Str;
class StudentObserver
{
    public function retrieved(Student $student):void{
        // $student->increment('counter'); Agar ap ko counter lagana hai tu uske lia alag se ake coloumn bana hoga counter name se phr uske default valu
    // 0 set karne hoge uske baad se ap retrived men increment laga sakty ho user jab jab ispe aaega tu counter increment karega
    }
    public function created(Student $student):void{

    }
    public function saving(Student $student):void{
        $student->name = Str::slug($student->name,'-');
    }
}
