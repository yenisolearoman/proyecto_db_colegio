<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTasignacionRequest;
use App\Http\Requests\UpdateTasignacionRequest;
use App\Repositories\TasignacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TasignacionController extends AppBaseController
{
    /** @var  TasignacionRepository */
    private $tasignacionRepository;

    public function __construct(TasignacionRepository $tasignacionRepo)
    {
        $this->tasignacionRepository = $tasignacionRepo;
    }

    /**
     * Display a listing of the Tasignacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tasignacions = $this->tasignacionRepository->paginate(10);

        return view('tasignacions.index')
            ->with('tasignacions', $tasignacions);
    }

    /**
     * Show the form for creating a new Tasignacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tasignacions.create');
    }

    /**
     * Store a newly created Tasignacion in storage.
     *
     * @param CreateTasignacionRequest $request
     *
     * @return Response
     */
    public function store(CreateTasignacionRequest $request)
    {
        $input = $request->all();

        $tasignacion = $this->tasignacionRepository->create($input);

        Flash::success('Tasignacion saved successfully.');

        return redirect(route('tasignacions.index'));
    }

    /**
     * Display the specified Tasignacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tasignacion = $this->tasignacionRepository->find($id);

        if (empty($tasignacion)) {
            Flash::error('Tasignacion not found');

            return redirect(route('tasignacions.index'));
        }

        return view('tasignacions.show')->with('tasignacion', $tasignacion);
    }

    /**
     * Show the form for editing the specified Tasignacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tasignacion = $this->tasignacionRepository->find($id);

        if (empty($tasignacion)) {
            Flash::error('Tasignacion not found');

            return redirect(route('tasignacions.index'));
        }

        return view('tasignacions.edit')->with('tasignacion', $tasignacion);
    }

    /**
     * Update the specified Tasignacion in storage.
     *
     * @param int $id
     * @param UpdateTasignacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTasignacionRequest $request)
    {
        $tasignacion = $this->tasignacionRepository->find($id);

        if (empty($tasignacion)) {
            Flash::error('Tasignacion not found');

            return redirect(route('tasignacions.index'));
        }

        $tasignacion = $this->tasignacionRepository->update($request->all(), $id);

        Flash::success('Tasignacion updated successfully.');

        return redirect(route('tasignacions.index'));
    }

    /**
     * Remove the specified Tasignacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tasignacion = $this->tasignacionRepository->find($id);

        if (empty($tasignacion)) {
            Flash::error('Tasignacion not found');

            return redirect(route('tasignacions.index'));
        }

        $this->tasignacionRepository->delete($id);

        Flash::success('Tasignacion deleted successfully.');

        return redirect(route('tasignacions.index'));
    }
}
