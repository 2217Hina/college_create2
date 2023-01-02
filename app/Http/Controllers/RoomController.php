<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;


class RoomController extends Controller
{
    public function index(Room $room)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $room->get();//$postの中身を戻り値にする。
}
}


