<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
public function AdminDashboard(){ 
    $TotalUsers = User::count();
    $users = User::all();
    return view('admin.admin_dashboard', compact('TotalUsers','users'));
}

function view_users()
{
    $users = User::all();
    return view('users.index',compact('users'));
}


function collection()
{
    return view('admin.collection');
}
function cheque()
{
    return view('admin.cheque');
}
function disbursement()
{
    return view('admin.disbursement');
}
function reporting()
{
    return view('admin.reporting');
}
}
