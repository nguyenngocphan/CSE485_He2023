<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $channels = Channel::orderBy('id','desc')->paginate(5);
        return view("index", compact("channels"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a Company instance
        $channel = new Channel([
            'ChannelName' => $request->input('ChannelName'),
            'Description' => $request->input('Description'),
            'SubcribersCount' => $request->input('SubcribersCount'),
            'URL' => $request->input('URL'),
            // Add other fields as needed
        ]);

        // Save the Company instance to the database
        $channel->save();

        return redirect()->route('channels.index')->with('success', 'Channel has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $channel = DB::selectOne("SELECT * FROM channels WHERE id = ?", [15]);
        return response()->json($channel);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $channel = Channel::find($id);
        return view("edit", compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate and update the employee data
        $channel = Channel::findOrFail($id);
        $channel->ChannelName = $request->input('ChannelName');
        $channel->Description = $request->input('Description');
        $channel->SubcribersCount = $request->input('SubcribersCount');
        $channel->URL = $request->input('URL');
        $channel->save();

        return redirect()->route('channels.index')->with('success', 'Channel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $channel = Channel::find($id);
        $channel->delete();

        return redirect()->route('channels.index')->with('success', 'Channel deleted successfully');
    }
}
