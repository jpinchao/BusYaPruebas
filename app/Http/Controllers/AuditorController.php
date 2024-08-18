<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditor;

class AuditorController extends Controller
{
    public function index(Request $request)
    {
        $audits = Auditor::query()
            ->when($request->filled('start_date'), function ($query) use ($request) {
                $query->whereDate('created_at', '>=', $request->get('start_date'));
            })
            ->when($request->filled('end_date'), function ($query) use ($request) {
                $query->whereDate('created_at', '<=', $request->get('end_date'));
            })
            ->when($request->filled('action_type'), function ($query) use ($request) {
                $query->where('event', $request->get('action_type'));
            })
            ->paginate(10);

        return view('cuenta_auditor.indexAuditor', compact('audits'));
    }
}


