<?php

namespace App\Http\Middleware;

use App\Models\Appointment;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class UserHasEnoughAppointments
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $appointments = Appointment::where('user_id', '=', Auth::user()->id)
            ->get();
        $count = count($appointments);
        if ($count >= 3) {
            return $next($request);
        }

        throw ValidationException::withMessages(['machines' => 'Je hebt nog niet genoeg afspraken staan om een machine toe te voegen.']);

    }
}
