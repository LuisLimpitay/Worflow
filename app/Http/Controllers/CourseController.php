<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Dictation;
use App\Models\DictationUser;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\MagicConst\Dir;

class CourseController extends Controller
{
    public function home()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    /****************************************************************************
     Este metodo me trae los detalles y las fechas de Dictado con sus CUPOS
    /*ESTO ME MUESTRA TODOS LOS DICTADOS DE UN CURSO SIN FILTROS
        $dictations = $course->dictations;
    -----------------------------------------------------------------------------*/
    public function show(Course $course)
    {
        $course_id= $course->id;
        if (Auth::check()) {
            $dictado = auth()->user()->dictations;
            $ids = $dictado->pluck('id');
            $dictations = Dictation::with('courses')
                ->where('stock', '>', '0')
                ->where('course_id', $course_id )
                ->whereNotIn('id', $ids)
                ->orderby('date', 'DESC')
                ->paginate(4);
        } else {
            $dictations = Dictation::with('courses')
                ->where('stock' ,'>', 0)
                ->where('course_id', $course_id )
                ->orderby('date', 'DESC')
                ->paginate(4);
            //dd($dictations);

        }
        return view('courses.show', compact('course', 'dictations'));
    }


    public function pay(Request $request, Dictation $dictation){

        $payment_id = $request->get('payment_id');
        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id". "?access_token=APP_USR-7514103405686170-062715-526546dcc9adaf00ec44b8db3b75c69d-782013547");
        $response = json_decode($response);
        $reference = $response->id;

        if ($response->status == 'approved') {
            auth()->user()->dictations()->attach($dictation,
                [
                    'quantity' => '1',
                    'ammount' => $dictation->courses->price,
                    'payment_id' => '1',
                    'reference' => $reference,
                    'status' => 'Aprobado',
                    'user_id' => auth()->id()
                ]);
            $stock = $dictation->stock;
            $status1 = $dictation->status;
            $affected = DB::table('dictations')
                ->where('id', $dictation->id)
                ->update(['stock' => $dictation->stock - 1]);
            if($stock == 1)
                $status1 = 'completo';
            $affected2 = DB::table('dictations')
                ->where('id', $dictation->id)
                ->update(['status' => $status1]);

        }
        return redirect()->route('home')->with('info', 'inscripcion exitosa tarjeta');
    }

    public function pending(Request $request, Dictation $dictation){

        $payment_id = $request->get('payment_id');
        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id". "?access_token=APP_USR-7514103405686170-062715-526546dcc9adaf00ec44b8db3b75c69d-782013547");
        $response = json_decode($response);
        $reference = $response->id;

        if ($response->status == 'pending') {
            auth()->user()->dictations()->attach($dictation,
                        [
                            'quantity' => '1',
                            'ammount' => $dictation->courses->price,
                            'payment_id' => '2',
                            'reference' => $reference,
                            'status' => 'Pendiente',
                            'user_id' => auth()->id()
                        ]);
                    $stock = $dictation->stock;
                    $status1 = $dictation->status;
                    $affected = DB::table('dictations')
                        ->where('id', $dictation->id)
                        ->update(['stock' => $dictation->stock - 1]);
                    if($stock == 1)
                        $status1 = 'completo';
                    $affected2 = DB::table('dictations')
                        ->where('id', $dictation->id)
                        ->update(['status' => $status1]);

        }
        return redirect()->route('home')->with('info', 'inscripcion exitosa efectivo');

    }

    //Se lo mando a mi blade checkout
    public function checkout(Dictation $dictation)
    {
        $dictations = Dictation::where('id', $dictation->id)->get();
        //dd($dictations);
        return view('courses.checkout', compact('dictations', 'dictation'));
    }

    public function qa()
    {
        return view('qa');
    }

    public function contact()
    {
        return view('contact');
    }
    
}
