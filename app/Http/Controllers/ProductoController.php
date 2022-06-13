<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va la lista de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar marcas
        $marcas=Marca::all();
        //seleccionar categoria
        $Categoria = Categoria::all();
        //mostrar las vistas con las marcas y categorias
       return view ('productos.new')
       ->with('categorias', $Categoria)
       ->with('marcas', $marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //acceder a los datos del formulsrio utilizando el objeto request
        //y el metodo all()
        /*echo "<pre>";
        var_dump($request->imagen);
        echo "<pre>";*/

        //crear el objeto UploadedFile

        $archivo = $request->imagen;
        //capturar nombre original del archivo
        $nombre_archivo = $archivo->getClientOriginalName();
        //mover el archivo a la carpeta "public/img/"
        $ruta = public_path();
        $archivo->move("$ruta/img", $nombre_archivo);
        //registrar producto
        $pro = new Producto;
        $pro->nombre = $request->nombre;
        $pro->descripcion = $request->descripcion;
        $pro->precio = $request->precio;
        $pro->imagen = $nombre_archivo;
        $pro->marca_id = $request->marca;
        $pro->categoria_id = $request->categoria;
        $pro->save();
        echo "producto registrado";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "aqui va el detalle del producto con  id: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "aqui va el form para editar el producto con id: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}