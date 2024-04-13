<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class picontroller extends Controller
{
    public function encenderLed()
    {
        $serialPort = "/dev/ttyUSB0"; // Adjust the serial port according to your setup
        $baudRate = 9600; // Adjust baud rate if needed

        // Open the serial port
        $fp = fopen($serialPort, 'w+');

        // Send command to turn on LED
        fwrite($fp, "1");

        // Close the serial port
        fclose($fp);

        return redirect()->back();
    }

    public function apagarLed()
    {
        $serialPort = "/dev/ttyUSB0"; // Adjust the serial port according to your setup
        $baudRate = 9600; // Adjust baud rate if needed

        // Open the serial port
        $fp = fopen($serialPort, 'w+');

        // Send command to turn off LED
        fwrite($fp, "0");

        // Close the serial port
        fclose($fp);

        return redirect()->back();
    }
}
