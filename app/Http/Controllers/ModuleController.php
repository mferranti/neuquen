<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateModuleRequest;
use App\Http\Requests\UpdateModuleRequest;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ModuleController extends AppBaseController
{
    /** @var  ModuleRepository */
    private $moduleRepository;

    function __construct(ModuleRepository $moduleRepo)
    {
        $this->moduleRepository = $moduleRepo;
    }

    /**
     * Display a listing of the Module.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->moduleRepository->pushCriteria(new RequestCriteria($request));
        $modules = $this->moduleRepository->all();

        return view('modules.index')
            ->with('modules', $modules);
    }

    /**
     * Show the form for creating a new Module.
     *
     * @return Response
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created Module in storage.
     *
     * @param CreateModuleRequest $request
     *
     * @return Response
     */
    public function store(CreateModuleRequest $request)
    {
        $input = $request->all();

        $module = $this->moduleRepository->create($input);

        Flash::success('Module saved successfully.');

        return redirect(route('modules.index'));
    }

    /**
     * Display the specified Module.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $module = $this->moduleRepository->findWithoutFail($id);

        if (empty($module)) {
            Flash::error('Module not found');

            return redirect(route('modules.index'));
        }

        return view('modules.show')->with('module', $module);
    }

    /**
     * Show the form for editing the specified Module.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $module = $this->moduleRepository->findWithoutFail($id);

        if (empty($module)) {
            Flash::error('Module not found');

            return redirect(route('modules.index'));
        }

        return view('modules.edit')->with('module', $module);
    }

    /**
     * Update the specified Module in storage.
     *
     * @param  int              $id
     * @param UpdateModuleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateModuleRequest $request)
    {
        $module = $this->moduleRepository->findWithoutFail($id);

        if (empty($module)) {
            Flash::error('Module not found');

            return redirect(route('modules.index'));
        }

        $module = $this->moduleRepository->update($request->all(), $id);

        Flash::success('Module updated successfully.');

        return redirect(route('modules.index'));
    }

    /**
     * Remove the specified Module from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $module = $this->moduleRepository->findWithoutFail($id);

        if (empty($module)) {
            Flash::error('Module not found');

            return redirect(route('modules.index'));
        }

        $this->moduleRepository->delete($id);

        Flash::success('Module deleted successfully.');

        return redirect(route('modules.index'));
    }
}
