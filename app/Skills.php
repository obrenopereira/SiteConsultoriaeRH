<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Skills 
{
     public function getSkillsByCaseId($id) 
    {
        $empresa = DB::table('skills')
                    ->where(['skills.id_case' => $id])
                    ->get();
        return $empresa;
    }
    public function addSkill($skill, $id)
    {
        $insert = DB::table('skills')->insertGetId([
            'name'      => $skill,
            'id_case' => $id,
        ]);

        return $insert;
    }
    public function removeSkill($id)
    {
      DB::table('skills')->where('id', $id)->delete();
      return true;
    }

}