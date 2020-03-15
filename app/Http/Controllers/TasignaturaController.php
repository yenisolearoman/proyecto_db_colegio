<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTasignaturaRequest;
use App\Http\Requests\UpdateTasignaturaRequest;
use App\Repositories\TasignaturaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TasignaturaController extends AppBaseController
{
    /** @var  TasignaturaRepository */
    private $tasignaturaRepository;

    public function __construct(TasignaturaRepository $tasignaturaRepo)
    {
        $this->tasignaturaRepository = $tasignaturaRepo;
    }

    /**
     * Display a listing of the Tasignatura.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tasignaturas = $this->tasignaturaRepository->paginate(10);

        return view('tasignaturas.index')
            ->with('tasignaturas', $tasignaturas);
    }

    /**
     * Show the form for creating a new Tasignatura.
     *
     * @return Response
     */
    public function create()
    {
        return view('tasignaturas.create');
    }

    /**
     * Store a newly created Tasignatura in storage.
     *
     * @param CreateTasignaturaRequest $request
     *
     * @return Response
     */
    public function store(CreateTasignaturaRequest $request)
    {
        $input = $request->all();

        $tasignatura = $this->tasignaturaRepository->create($input);

        Flash::success('Tasignatura saved successfully.');

        return redirect(route('tasignaturas.index'));
    }

    /**
     * Display the specified Tasignatura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tasignatura = $this->tasignaturaRepository->find($id);

        if (empty($tasignatura)) {
            Flash::error('Tasignatura not found');

            return redirect(route('tasignaturas.index'));
        }

        return view('tasignaturas.show')->with('tasignatura', $tasignatura);
    }

    /**
     * Show the form for editing the specified Tasignatura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tasignatura = $this->tasignaturaRepository->find($id);

        if (empty($tasignatura)) {
            Flash::error('Tasignatura not found');

            return redirect(route('tasignaturas.index'));
        }

        return view('tasignaturas.edit')->with('tasignatura', $tasignatura);
    }

    /**
     * Update the specified Tasignatura in storage.
     *
     * @param int $id
     * @param UpdateTasignaturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTasignaturaRequest $request)
    {
        $tasignatura = $this->tasignaturaRepository->find($id);

        if (empty($tasignatura)) {
            Flash::error('Tasignatura not found');

            return redirect(route('tasignaturas.index'));
        }

        $tasignatura = $this->tasignaturaRepository->update($request->all(), $id);

        Flash::success('Tasignatura updated successfully.');

        return redirect(route('tasignaturas.index'));
    }

    /**
     * Remove the specified Tasignatura from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tasignatura = $this->tasignaturaRepository->find($id);

        if (empty($tasignatura)) {
            Flash::error('Tasignatura not found');

            return redirect(route('tasignaturas.index'));
        }

        $this->tasignaturaRepository->delete($id);

        Flash::success('Tasignatura deleted successfully.');

        return redirect(route('tasignaturas.index'));
    }
}
