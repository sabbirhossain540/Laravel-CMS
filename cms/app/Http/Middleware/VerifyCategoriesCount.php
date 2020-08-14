<?php

namespace App\Http\Middleware;

use Closure;

use App\Category;

class VerifyCategoriesCount
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
        if(Category::all()->count()==0){
            session()->flash('error', 'You Need To Add Categories to be able to Create a Post');
            return redirect(route('categories.create'));
        }

        return $next($request);
    }
}
