<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return 'danh sach san pham';
    }

    /**
     * Show the form for creating a new resource.
     */
    //hien thi from thoong tin
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    //suwar lys theem sanr phaamr (post)
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    //laays ra thoong ti  cua 1 sanr phaam (get)
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //hien thi from suwa san phma (get)
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // xy ly suwa san pham
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
