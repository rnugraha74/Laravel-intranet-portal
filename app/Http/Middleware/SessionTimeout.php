<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\Store;

class SessionTimeout {

    protected $session;
    protected $timeout = 1200;

    public function __construct(Store $session){
        $this->session = $session;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $isLoggedIn = $request->path() != 'logout';
        if(! session('lastActivityTime'))
            $this->session->put('lastActivityTime', time());
        elseif(time() - $this->session->get('lastActivityTime') > $this->timeout){
            $this->session->forget('lastActivityTime');
            $cookie = cookie('intend', $isLoggedIn ? url()->current() : 'home');
            $email = $request->user()->email;
            auth()->logout();
            return message('You had not activity in '.$this->timeout/60 .' minutes ago.', 'warning', 'login')->withInput(compact('email'))->withCookie($cookie);
        }
        $isLoggedIn ? $this->session->put('lastActivityTime', time()) : $this->session->forget('lastActivityTime');
        return $next($request);
    }

}