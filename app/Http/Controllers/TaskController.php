<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Button;
use App\Combo;
use App\Task;
use App\User;
use App\Http\Requests\TaskFormRequest;

class TaskController extends Controller
{
  private $baseUrl = 'tasks';

  private function findTask($id)
  {
    return Task::find($id);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $actions = $this->getActions();
    $buttons = $this->getButtons();
    $combos  = $this->getCombos();
    $options = $this->getOptions();

    $tasks = Task::where('user_id', Auth::user()->id)->orderby('priority')->paginate(10);

    return view('tasks.index')
      ->with([
        'models'  => $tasks,
        'baseUrl' => $this->baseUrl,
        'actions' => $actions,
        'buttons' => $buttons,
        'combos'  => $combos,
        'options' => $options,
      ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $actions = $this->getActions();
    $buttons = $this->getButtons();
    $combos  = $this->getCombos();
    $options = $this->getOptions();
    $options['form']['disabled'] = null;

    $task = new \App\Task();
    $task->user_id = Auth::user()->id;

    return view('tasks.create')
      ->with([
        'model'   => $task,
        'baseUrl' => $this->baseUrl,
        'actions' => $actions,
        'buttons' => $buttons,
        'combos'  => $combos,
        'options' => $options,
      ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(TaskFormRequest $request)
  {
    $actions  = $this->getActions();
    $messages = $this->getMessages();

    $input = \Request::except('_token');
    $task = new \App\Task($input);
    $task->save();

    return redirect()->route($actions['form']['index'])
      ->with('msgSuccess', $messages['success']['store']);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $actions = $this->getActions();
    $options = $this->getOptions();
    $buttons = $this->getButtons();
    $combos  = $this->getCombos();

    $task = $this->findTask($id);
    if (is_null($task)) {
      return redirect()->route($actions['form']['index'])
        ->withErros([$messages['error']['find']]);
    }

    return view('tasks.show')
      ->with([
        'model'   => $task,
        'actions' => $actions,
        'options' => $options,
        'buttons' => $buttons,
        'combos'  => $combos,
      ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $actions = $this->getActions();
    $options = $this->getOptions();
    $options['form']['disabled'] = null;
    $buttons = $this->getButtons();
    $combos  = $this->getCombos();

    $task = $this->findTask($id);
    if (is_null($task)) {
      return redirect()->route($actions['form']['index'])
        ->withErros([$messages['error']['find']]);
    }

    return view('tasks.edit')
      ->with([
        'model'   => $task,
        'actions' => $actions,
        'options' => $options,
        'buttons' => $buttons,
        'combos'  => $combos,
      ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(TaskFormRequest $request, $id)
  {
    $actions = $this->getActions();
    $messages = $this->getMessages();

    $task = $this->findTask($id);
    if (is_null($task)) {
      return redirect()->route($actions['form']['index'])
        ->withErrors([$messages['error']['find']]);
    }
    $input = \Request::all();
    $result = $task->update($input);
    if (!$result) {
      return redirect()->route($actions['form']['index'])
        ->withErrors([$messages['error']['update']]);
    }

    return redirect()->route($actions['form']['index'])
      ->with('msgSuccess', $messages['success']['update']);
  }

  /**
   * Show the form for destroy the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function delete($id)
  {
    $actions = $this->getActions();
    $options = $this->getOptions();
    $buttons = $this->getButtons();
    $combos  = $this->getCombos();

    $task = $this->findTask($id);
    if (is_null($task)) {
      return redirect()->route($actions['form']['index'])
        ->withErros([$messages['error']['find']]);
    }

    return view('tasks.delete')
      ->with([
        'model'   => $task,
        'actions' => $actions,
        'options' => $options,
        'buttons' => $buttons,
        'combos'  => $combos,
      ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $actions  = $this->getActions();
    $messages = $this->getMessages();

    $task = $this->findTask($id);
    if (is_null($task)) {
      return redirect()->route($actions['form']['index'])
        ->withErrors([$messages['error']['find']]);
    }

    $result = $task->delete();
    if (!$result) {
      return redirect()->route($actions['form']['index'])
        ->withErrors([$messages['error']['delete']]);
    }

    return redirect()->route($actions['form']['index'])
      ->with('msgSuccess', $messages['success']['delete']);
    }

    /**
   * Display a listing of the actions.
   *
   * @return \array
   */
  public function getActions()
  {
    $actions['form']['index']   = "$this->baseUrl.index";
    $actions['form']['store']   = "$this->baseUrl.store";
    $actions['form']['update']  = "$this->baseUrl.update";
    $actions['form']['destroy'] = "$this->baseUrl.destroy";

    return $actions;
  }
  /**
   * Display a listing of the buttons.
   *
   * @return \array
   */
  public function getButtons()
  {
    $btns = \App\Button::all();
    foreach ($btns as $btn) {
      $buttons[$btn->code]['name']  = $btn->name;
      $buttons[$btn->code]['link']  = "$this->baseUrl.$btn->link";
      $buttons[$btn->code]['icon']  = $btn->icon;
      $buttons[$btn->code]['class'] = $btn->class;
    }
    $buttons['home']['link'] = 'home';

    return $buttons;
  }
  /**
   * Display a listing of the combos.
   *
   * @return \App\Combo
   */
  public function getCombos()
  {
    $combo = new Combo();
    $combos['users']     = $combo->usersForSelect();
    $combos['simnao']    = $combo->optionsForSelect('simnao');
    $combos['status']    = $combo->optionsForSelect('status');
    $combos['percent10'] = $combo->optionsForSelect('percent10');

    return $combos;
  }
  /**
   * Display a listing of the messages.
   *
   * @return \array
   */
  private function getMessages()
  {
    $messages['success']['store']  = 'Registro incluído com sucesso!';
    $messages['success']['update'] = 'Registro atualizado com sucesso!';
    $messages['success']['delete'] = 'Registro excluído com sucesso!';
    $messages['error']['find']     = 'Registro não localizado!';
    $messages['error']['delete']   = 'Falha ao excluir o registro!';
    $messages['error']['update']   = 'Falha ao editar o registro!';

    return $messages;
  }
  /**
   * Display a listing of the options.
   *
   * @return \array
   */
  private function getOptions()
  {
    $options['form']['disabled']  = 'disabled';

    return $options;
  }

}
