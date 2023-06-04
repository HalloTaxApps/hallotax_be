<?php

namespace App\Http\Controllers;

use App\Models\DataMessage;
use Illuminate\Http\Request;

class DataMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMessage = DataMessage::all();

        return response()->json([
            'data' => $dataMessage
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataMessage = DataMessage::create([
            "last_msg" => $request->last_msg,
            'receiverId' => $request->reveiverId,
            'senderId' => $request->senderId,
            'status' => $request->status,
            'type' => $request->type
        ]);

        return response()->json([
            'data' => $dataMessage
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataMessage $dataMessage)
    {
        return response()->json([
            'data' => $dataMessage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataMessage $dataMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataMessage $dataMessage)
    {
        $dataMessage->last_msg = $request->last_msg;
        $dataMessage->receiverId = $request->receiverId;
        $dataMessage->status = $request->status;
        $dataMessage->save();
        
        return response()->json([
            'data' => $dataMessage
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataMessage $dataMessage)
    {
        $dataMessage->delete();

        return response()->json([
            'message' => "Message Deleted"
        ]);
    }
}
