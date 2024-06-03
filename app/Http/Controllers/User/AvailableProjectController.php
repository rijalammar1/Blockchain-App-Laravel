<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Services\CampaignService;
use App\Http\Controllers\Controller;
use App\Services\PaymentMethodService;

class AvailableProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    //  postBuyProject
    public function previewTransaction(Request $request, string $id)
    {
        $validated = $request->validate([
            'quantity' => 'required|numeric',
        ]);

        $project = ProjectService::getProjectById($id);
        $totalPrice = $project->campaign->price_per_unit * $validated['quantity'];
        $quantityBuy = $validated['quantity'];
        $paymentMethods = PaymentMethodService::getPaymentMethod();
        return view('auth.user.available_project.preview_transaction', compact('project', 'quantityBuy', 'totalPrice', 'paymentMethods'));
    }

    // buyProject
    public function buyProject(string $id)
    {
        $project = ProjectService::getProjectById($id);
        return view('auth.user.available_project.buy', compact('project'));
    }

    public function index()
    {
        $campaigns = CampaignService::getCampaigns();
        return view('auth.user.available_project.index', compact('campaigns'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = ProjectService::getProjectById($id);
        return view('auth.user.available_project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}