<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTalumnoRequest;
use App\Http\Requests\UpdateTalumnoRequest;
use App\Repositories\TalumnoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TalumnoController extends AppBaseController
{
    /** @var  TalumnoRepository */
    private $talumnoRepository;

    public function __construct(TalumnoRepository $talumnoRepo)
    {
        $this->talumnoRepository = $talumnoRepo;
    }

    /**
     * Display a listing of the Talumno.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $talumnos = $this->talumnoRepository->paginate(10);

        return view('talumnos.index')
            ->with('talumnos', $talumnos);
    }

    /**
     * Show the form for creating a new Talumno.
     *
     * @return Response
     */
    public function create()
    {
        return view('talumnos.create');
    }

    /**
     * Store a newly created Talumno in storage.
     *
     * @param CreateTalumnoRequest $request
     *
     * @return Response
     */
    public function store(CreateTalumnoRequest $request)
    {
        $input = $request->all();

        $talumno = $this->talumnoRepository->create($input);

        Flash::success('Talumno saved successfully.');

        return redirect(route('talumnos.index'));
    }

    /**
     * Display the specified Talumno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $talumno = $this->talumnoRepository->find($id);

        if (empty($talumno)) {
            Flash::error('Talumno not found');

            return redirect(route('talumnos.index'));
        }

        return view('talumnos.show')->with('talumno', $talumno);
    }

    /**
     * Show the form for editing the specified Talumno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $talumno = $this->talumnoRepository->find($id);

        if (empty($talumno)) {
            Flash::error('Talumno not found');

            return redirect(route('talumnos.index'));
        }

        return view('talumnos.edit')->with('talumno', $talumno);
    }

    /**
     * Update the specified Talumno in storage.
     *
     * @param int $id
     * @param UpdateTalumnoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTalumnoRequest $request)
    {
        $talumno = $this->talumnoRepository->find($id);

        if (empty($talumno)) {
            Flash::error('Talumno not found');

            return redirect(route('talumnos.index'));
        }

        $talumno = $this->talumnoRepository->update($request->all(), $id);

        Flash::success('Talumno updated successfully.');

        return redirect(route('talumnos.index'));
    }

    /**
     * Remove the specified Talumno from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $talumno = $this->talumnoRepository->find($id);

        if (empty($talumno)) {
            Flash::error('Talumno not found');

            return redirect(route('talumnos.index'));
        }

        $this->talumnoRepository->delete($id);

        Flash::success('Talumno deleted successfully.');

        return redirect(route('talumnos.index'));
    }
}
