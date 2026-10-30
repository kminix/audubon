<?php

namespace App\Http\Controllers;


use Audubon\Entities\Bird;
use Audubon\Repositories\BirdRepository;
use Illuminate\Http\Request;
use LaravelDoctrine\ORM\Facades\EntityManager;


class BirdController extends Controller
{
    public function index()
    {

        //dd(EntityManager::getRepository(Bird::class)->findAll());
        return view('bird-sightings', [
            'sightings' => EntityManager::getRepository(Bird::class)->findAll()
        ]);

    }


    public function create()
    {
        return view('create-bird-sighting');
    }


    public function store(Request $request, BirdRepository $birdRepository): string
    {

        $validated = $request->validate([
            'species' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'sighted_at' => 'required|date',
            'location' => 'required|string|max:30',
            'name' => 'nullable|string|max:25',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:30',
        ]);


        $birdRepository->create($validated);

        return redirect('/');
    }


}