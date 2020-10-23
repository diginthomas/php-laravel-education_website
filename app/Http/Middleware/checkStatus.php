<?php

namespace App\Http\Middleware;
Use App\AdminData;
use Closure;

class checkStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {     
           $usr=new AdminData();
       $usr = AdminData::find(3);
    if($usr->status==false){
        return abort(401);
    }


        return $next($request);
    }
}
