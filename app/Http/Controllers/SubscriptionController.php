<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use App\Repositories\SubscriptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SubscriptionController extends AppBaseController
{
    /** @var  SubscriptionRepository */
    private $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepo)
    {
        $this->subscriptionRepository = $subscriptionRepo;
    }

    /**
     * Display a listing of the Subscription.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subscriptions = $this->subscriptionRepository->all();

        return view('subscriptions.index')
            ->with('subscriptions', $subscriptions);
    }

    /**
     * Show the form for creating a new Subscription.
     *
     * @return Response
     */
    public function create()
    {
        return view('subscriptions.create');
    }

    /**
     * Store a newly created Subscription in storage.
     *
     * @param CreateSubscriptionRequest $request
     *
     * @return Response
     */
    public function store(CreateSubscriptionRequest $request)
    {
        $input = $request->all();

        $subscription = $this->subscriptionRepository->create($input);

        Flash::success('Subscription saved successfully.');

        return redirect(route('subscriptions.index'));
    }

    /**
     * Display the specified Subscription.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subscription = $this->subscriptionRepository->find($id);

        if (empty($subscription)) {
            Flash::error('Subscription not found');

            return redirect(route('subscriptions.index'));
        }

        return view('subscriptions.show')->with('subscription', $subscription);
    }

    /**
     * Show the form for editing the specified Subscription.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subscription = $this->subscriptionRepository->find($id);

        if (empty($subscription)) {
            Flash::error('Subscription not found');

            return redirect(route('subscriptions.index'));
        }

        return view('subscriptions.edit')->with('subscription', $subscription);
    }

    /**
     * Update the specified Subscription in storage.
     *
     * @param int $id
     * @param UpdateSubscriptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubscriptionRequest $request)
    {
        $subscription = $this->subscriptionRepository->find($id);

        if (empty($subscription)) {
            Flash::error('Subscription not found');

            return redirect(route('subscriptions.index'));
        }

        $subscription = $this->subscriptionRepository->update($request->all(), $id);

        Flash::success('Subscription updated successfully.');

        return redirect(route('subscriptions.index'));
    }

    /**
     * Remove the specified Subscription from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subscription = $this->subscriptionRepository->find($id);

        if (empty($subscription)) {
            Flash::error('Subscription not found');

            return redirect(route('subscriptions.index'));
        }

        $this->subscriptionRepository->delete($id);

        Flash::success('Subscription deleted successfully.');

        return redirect(route('subscriptions.index'));
    }
}
