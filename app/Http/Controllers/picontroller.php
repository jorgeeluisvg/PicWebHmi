<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\SerialPort;

class picontroller extends Controller
{
    public function encenderLed()
    {
        SerialPort::open("/dev/ttyUSB0"); // Cambia el puerto serial según tu configuración
        SerialPort::write("1");
        SerialPort::close();
        return redirect()->back();
    }

    public function apagarLed()
    {
        SerialPort::open("/dev/ttyUSB0"); // Cambia el puerto serial según tu configuración
        SerialPort::write("0");
        SerialPort::close();
        return redirect()->back();
    }
}
