<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateleveranciersRequest;
use App\Http\Requests\UpdateleveranciersRequest;
use App\Repositories\leveranciersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class leveranciersController extends AppBaseController
{
    /** @var  leveranciersRepository */
    private $leveranciersRepository;

    public function __construct(leveranciersRepository $leveranciersRepo)
    {
        $this->leveranciersRepository = $leveranciersRepo;
    }

    /**
     * Display a listing of the leveranciers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $leveranciers = $this->leveranciersRepository->all();

        return view('leveranciers.index')
            ->with('leveranciers', $leveranciers);
    }

    /**
     * Show the form for creating a new leveranciers.
     *
     * @return Response
     */
    public function create()
    {
        return view('leveranciers.create');
    }

    /**
     * Store a newly created leveranciers in storage.
     *
     * @param CreateleveranciersRequest $request
     *
     * @return Response
     */
    public function store(CreateleveranciersRequest $request)
    {
        $input = $request->all();

        $leveranciers = $this->leveranciersRepository->create($input);

        Flash::success('Leveranciers saved successfully.');

        return redirect(route('leveranciers.index'));
    }

    /**
     * Display the specified leveranciers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leveranciers = $this->leveranciersRepository->find($id);

        if (empty($leveranciers)) {
            Flash::error('Leveranciers not found');

            return redirect(route('leveranciers.index'));
        }

        return view('leveranciers.show')->with('leveranciers', $leveranciers);
    }

    /**
     * Show the form for editing the specified leveranciers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leveranciers = $this->leveranciersRepository->find($id);

        if (empty($leveranciers)) {
            Flash::error('Leveranciers not found');

            return redirect(route('leveranciers.index'));
        }

        return view('leveranciers.edit')->with('leveranciers', $leveranciers);
    }

    /**
     * Update the specified leveranciers in storage.
     *
     * @param int $id
     * @param UpdateleveranciersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateleveranciersRequest $request)
    {
        $leveranciers = $this->leveranciersRepository->find($id);

        if (empty($leveranciers)) {
            Flash::error('Leveranciers not found');

            return redirect(route('leveranciers.index'));
        }

        $leveranciers = $this->leveranciersRepository->update($request->all(), $id);

        Flash::success('Leveranciers updated successfully.');

        return redirect(route('leveranciers.index'));
    }

    /**
     * Remove the specified leveranciers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leveranciers = $this->leveranciersRepository->find($id);

        if (empty($leveranciers)) {
            Flash::error('Leveranciers not found');

            return redirect(route('leveranciers.index'));
        }

        $this->leveranciersRepository->delete($id);

        Flash::success('Leveranciers deleted successfully.');

        return redirect(route('leveranciers.index'));
    }
}
