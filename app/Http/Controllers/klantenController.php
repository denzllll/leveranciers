<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateklantenRequest;
use App\Http\Requests\UpdateklantenRequest;
use App\Repositories\klantenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;


class klantenController extends AppBaseController
{
    /** @var  klantenRepository */
    private $klantenRepository;

    public function __construct(klantenRepository $klantenRepo)
    {
        $this->klantenRepository = $klantenRepo;
    }

    /**
     * Display a listing of the klanten.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $klantens = $this->klantenRepository->all();
        $klantens = DB::table('klanten')
        ->where('deleted_at',null)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('klantens.index')
            ->with('klantens', $klantens);
    }

    /**
     * Show the form for creating a new klanten.
     *
     * @return Response
     */
    public function create()
    {
        return view('klantens.create');
    }

    /**
     * Store a newly created klanten in storage.
     *
     * @param CreateklantenRequest $request
     *
     * @return Response
     */
    public function store(CreateklantenRequest $request)
    {
        $input = $request->all();

        $klanten = $this->klantenRepository->create($input);

        Flash::success('Klanten saved successfully.');

        return redirect(route('klantens.index'));
    }

    /**
     * Display the specified klanten.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $klanten = $this->klantenRepository->find($id);

        if (empty($klanten)) {
            Flash::error('Klanten not found');

            return redirect(route('klantens.index'));
        }

        return view('klantens.show')->with('klanten', $klanten);
    }

    /**
     * Show the form for editing the specified klanten.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $klanten = $this->klantenRepository->find($id);

        if (empty($klanten)) {
            Flash::error('Klanten not found');

            return redirect(route('klantens.index'));
        }

        return view('klantens.edit')->with('klanten', $klanten);
    }

    /**
     * Update the specified klanten in storage.
     *
     * @param int $id
     * @param UpdateklantenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateklantenRequest $request)
    {
        $klanten = $this->klantenRepository->find($id);

        if (empty($klanten)) {
            Flash::error('Klanten not found');

            return redirect(route('klantens.index'));
        }

        $klanten = $this->klantenRepository->update($request->all(), $id);

        Flash::success('Klanten updated successfully.');

        return redirect(route('klantens.index'));
    }

    /**
     * Remove the specified klanten from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $klanten = $this->klantenRepository->find($id);

        if (empty($klanten)) {
            Flash::error('Klanten not found');

            return redirect(route('klantens.index'));
        }

        $this->klantenRepository->delete($id);

        Flash::success('Klanten deleted successfully.');

        return redirect(route('klantens.index'));
    }

    public function restoreIndex()
    {
        // var_dump('sdasd');
        // exit();
        $klantens = DB::table('klanten')
            ->where('deleted_at',"!=" ,null)
            ->orderBy('created_at', 'desc')
            ->paginate(9);


            return view('klantens.index')
            ->with('klantens', $klantens);
    }

    public function restoreShow($id){
        $klanten = $this->klantenRepository->find($id);


        $klanten = DB::table('klanten')
        ->where('id',$id)
        ->get();

        if (empty($klanten)) {
            Flash::error('Klanten not found');

            return redirect(route('klantens.index'));
        }

        return view('klantens.show')->with('klanten', $klanten[0]);

    }

    public function restoreBack($id){
        $leveranciers = DB::table('klanten')
        ->where('id' ,$id)
        ->update([
            'deleted_at' => NULL
        ]);
        Flash::success('Restored successfully.');

        return redirect(route('klanten.restoreIndex'));
    }
}
