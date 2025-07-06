<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Arena;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BookingRequest;
use App\Models\Order;
use App\Models\Tempat;

class BookingController extends Controller
{

    public $sources = [
        [
            'model'      => Booking::class,
            'date_field' => 'time_from',
            'date_field_to' => 'time_to',
            'field'      => 'user_id',
            'number'      => 'arena_id',
            'prefix'     => '',
            'suffix'     => '',
        ],
    ];

    public function index(Request $request){

        $bookings = [];
        $tempats = Tempat::with('arenas')->get();
        $arenas = Arena::where('status',1)->get();

        foreach ($this->sources as $source) {
            $models = $source['model']::where('status', '0')
                ->get();
            foreach ($models as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);
                $crudFieldValueTo = $model->getOriginal($source['date_field_to']);
                $arena = Arena::findOrFail($model->getOriginal($source['number']));
                $user = User::findOrFail( $model->getOriginal($source['field']));
                $timeBreak = \Carbon\Carbon::parse($crudFieldValueTo)->format('H:i');


                if (!$crudFieldValue && $crudFieldValueTo) {
                    continue;
                }

                $bookings[] = [
                    'title' => trim($source['prefix'] . "($arena->number)" . $user->name
                        . " " ). " " . $timeBreak,
                    'start' => $crudFieldValue,
                    'end' => $crudFieldValueTo,
                ];
            }
        }

        return view('welcome', compact('arenas', 'bookings', 'tempats'));
    }
//gambar sing gede tok sing diubah, njiote kang database tempat
    public function detailBooking($id){
        $arenas = Arena::with('tempats')->where('tempat_id', $id)->where('status', 1)->get();
// dd($arenas);
        return view('detail-arena' ,compact('arenas'));
    }

    public function booking(Request $request,$id){

        $arenas = Arena::where('status', 1)->where('id', $id)->first();
        $arenaNumber = $request->get('number');

        return view('booking', compact('arenas', 'arenaNumber'));
    }

    public function order(Request $request){
        // $field = $request->all();

        $order = new Order;
        $order->name = $request->name;
        $order->adress = $request->adress;
        $order->phone = $request->phone;
        $order->tempat_id = $request->tempat_id;
        $order->lapangan_id = $request->arena_id;
        $order->total_price = $request->total_price;
        $order->status = 'unpaid';
        $order->save();


    }
    public function store(Request $request, BookingRequest $bookingRequest)
    {
        dd($request);
        // $arena = Arena::findOrFail($request->arena_id);


        // $request->validate([
        //     'filename' => 'required',
        //     'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        // ]);


        // $orderDate = date('Y-m-d H:i:s');
        // $paymentDue = (new \DateTime($orderDate))->modify('+1 hour')->format('Y-m-d H:i:s');

        // $booking = Booking::create($request->validated() + [
        //     'user_id' => auth()->id(),
        //     'grand_total' => $arena->price,
        //     'status' => !isset($request->status) ? 0 : $request->status,
        // ]);

        // return redirect()->route('booking.success', [$paymentDue])->with([
        //     'message' => 'Terimakasih sudah booking, Silahkan upload bukti pembayaran !',
        //     'alert-type' => 'success'
        // ]);
    }

    public function success($paymentDue){
        return view('success', compact('paymentDue'));
    }
}
