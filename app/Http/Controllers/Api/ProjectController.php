<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{

    public function projectIndex() {

        $projects = Project :: with('technologies') -> paginate(10);

        return response() -> json([
            'projects' => $projects
        ]);
    }

    public function projectIndexPage() {
    
        $projects = Project :: paginate(10);
    
        return response()->json([
            'projects' => $projects
        ]);
}
}

