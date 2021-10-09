<?php

namespace Illuminate\Foundation\Auth;

use Cookie;
trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        //dd(Cookie::get('bakcURL'));
//        if (method_exists($this, 'redirectTo')) {
//            return $this->redirectTo();
//        }
        return property_exists($this, 'redirectTo') ? $this->redirectTo : Cookie::get('bakcURL');
        //return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
