<?php

use App\User;
use App\Record;
use App\Product;

// use SimpleSoftwareIO\QrCode\Facade as QrCode;
    // funcion para chequear si el un usuario tiene
    // permisos para acceder a determinado lugar.
    function checkrights($permissions, $allpermissions) {
        if ( in_array($permissions, explode(".", $allpermissions)) ) {
            return true;
        } else {
            return false;
        }
    }
    //me devuelve la cantidad de permisos que tiene el rol.
    function checkrightscant($allpermissions) {
            $a = 0 ;
        if ( $allpermissions != null)
            foreach(explode('.', $allpermissions) as $info)
                $a=$a+1;
        return $a;
    }

    // funcion para actualizar permisos para acceder a determinado lugar.
    function updaterights($allpermissions) {
        $pp = null;
        if( $allpermissions != '' )
        {
            $cantidad = count($allpermissions);
            $oo = 1 ;
            foreach ($allpermissions as $key) {
                if( $cantidad > $oo )
                    $pp = $key.'.'.$pp;
                else
                    $pp = $pp.$key;
                $oo++;
            }
        }
        return $pp ;
    }
    //funcion que guarda record en la BD
    function generaRecords($accion, $descripcion)
    {
        $reporte = Record::create([
            'accion' => $accion,
            'descripcion' => $descripcion,
            'user_id' => auth()->user()->id,
        ]);
    }

    //me devuelve el producto pasado por parametro
    function dameProducto($id) {
        $product = Product::find($id) ;
        return $product;
    }
    //me devuelve la cantidad de producto que tiene el combo
    function cantProductoCombo($productCombo) {
        $a = 0 ;
        if ( $productCombo != null)
            foreach(explode('.', $productCombo) as $info)
                $a=$a+1;
        return $a;
    }









    // function qr_generacion()
    // {
    //     return QrCode::generate('hola mundo');
    // }
    /*
    1 venta de chip
    */
    // function generarReporteChips($accion, $descripcion, $pago)
    // {
    //     $reporte = Reporteschips::create([
    //         'accion' => $accion,
    //         'descripcion' => $descripcion,
    //         'user_id' => auth()->user()->id,
    //         'pago' => $pago,
    //     ]);
    // }

