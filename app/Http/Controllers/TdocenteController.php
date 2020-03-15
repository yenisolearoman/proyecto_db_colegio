<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTdocenteRequest;
use App\Http\Requests\UpdateTdocenteRequest;
use App\Repositories\TdocenteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TdocenteController extends AppBaseController
{
    /** @var  TdocenteRepository */
    private $tdocenteRepository;

    public function __construct(TdocenteRepository $tdocenteRepo)
    {
        $this->tdocenteRepository = $tdocenteRepo;
    }

    /**
     * Display a listing of the Tdocente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tdocentes = $this->tdocenteRepository->paginate(10);

        return view('tdocentes.index')
            ->with('tdocentes', $tdocentes);
    }

    /**
     * Show the form for creating a new Tdocente.
     *
     * @return Response
     */
    public function create()
    {
        return view('tdocentes.create');
    }

    /**
     * Store a newly created Tdocente in storage.
     *
     * @param CreateTdocenteRequest $request
     *
     * @return Response
     */
    public function store(CreateTdocenteRequest $request)
    {
        $input = $request->all();

        $tdocente = $this->tdocenteRepository->create($input);

        Flash::success('Tdocente saved successfully.');

        return redirect(route('tdocentes.index'));
    }

    /**
     * Display the specified Tdocente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tdocente = $this->tdocenteRepository->find($id);

        if (empty($tdocente)) {
            Flash::error('Tdocente not found');

            return redirect(route('tdocentes.index'));
        }

        return view('tdocentes.show')->with('tdocente', $tdocente);
    }

    /**
     * Show the form for editing the specified Tdocente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tdocente = $this->tdocenteRepository->find($id);

        if (empty($tdocente)) {
            Flash::error('Tdocente not found');

            return redirect(route('tdocentes.index'));
        }

        return view('tdocentes.edit')->with('tdocente', $tdocente);
    }

    /**
     * Update the specified Tdocente in storage.
     *
     * @param int $id
     * @param UpdateTdocenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTdocenteRequest $request)
    {
        $tdocente = $this->tdocenteRepository->find($id);

        if (empty($tdocente)) {
            Flash::error('Tdocente not found');

            return redirect(route('tdocentes.index'));
        }

        $tdocente = $this->tdocenteRepository->update($request->all(), $id);

        Flash::success('Tdocente updated successfully.');

        return redirect(route('tdocentes.index'));
    }

    /**
     * Remove the specified Tdocente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tdocente = $this->tdocenteRepository->find($id);

        if (empty($tdocente)) {
            Flash::error('Tdocente not found');

            return redirect(route('tdocentes.index'));
        }

        $this->tdocenteRepository->delete($id);

        Flash::success('Tdocente deleted successfully.');

        return redirect(route('tdocentes.index'));
    }
}
