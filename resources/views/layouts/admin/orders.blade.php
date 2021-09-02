@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

    <div class="row pt-4">
        <div class="col">
          <div class="card card-danger">
              <h5 class="card-title text-center pt-4" style="font-size: 2em;">{{ __('adminlte::menu.orders') }}</h5>
              <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col"  colspan="2">{{ __('adminlte::menu.name') }}</th>
                          <th scope="col">{{ __('adminlte::menu.suppliers') }}</th>
                          <th scope="col">{{ __('adminlte::menu.status') }}</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td  colspan="2">Type-XR</td>
                          <td>Adidas</td>
                          <td>
                            <div class="bg-success " style="width: 65px !important;" >
                                <p class="text-light text-center">{{ __('adminlte::menu.success') }}</p>
                            </div>
                          </td>
                          <td class="float-right">
                              <button type="button" class="btn btn-primary">
                                <i class="fa fa-fw fa-shopping-bag"></i>
                                <a>{{ __('adminlte::menu.view') }}</a>
                              </button>
                              <button type="button" class="btn btn-info">
                                <i class="fa fa-fw fa-pen"></i>
                                <a>{{ __('adminlte::menu.edit') }}</a>
                              </button>
                              <button type="button" class="btn btn-danger">
                                <i class="fa fa-fw fa-trash"></i>
                                <a>{{ __('adminlte::menu.delete') }}</a>
                              </button>
                        </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td  colspan="2">Type-SSR</td>
                          <td>Nike</td>
                          <td>
                            <div class="bg-info " style="width: 65px !important;" >
                                <p class="text-light text-center">{{ __('adminlte::menu.ondelivery') }}</p>
                            </div>
                          </td>
                          <td class="float-right">
                            <button type="button" class="btn btn-primary">
                              <i class="fa fa-fw fa-shopping-bag"></i>
                              <a>{{ __('adminlte::menu.view') }}</a>
                            </button>
                            <button type="button" class="btn btn-info">
                              <i class="fa fa-fw fa-pen"></i>
                              <a>{{ __('adminlte::menu.edit') }}</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                              <i class="fa fa-fw fa-trash"></i>
                              <a>{{ __('adminlte::menu.delete') }}</a>
                            </button>
                      </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Type-Opollo</td>
                          <td>Pulma</td>
                          <td>
                            <div class="bg-success " style="width: 65px !important;" >
                                <p class="text-light text-center">{{ __('adminlte::menu.success') }}</p>
                            </div>
                          </td>
                          <td class="float-right">
                            <button type="button" class="btn btn-primary">
                              <i class="fa fa-fw fa-shopping-bag"></i>
                              <a>{{ __('adminlte::menu.view') }}</a>
                            </button>
                            <button type="button" class="btn btn-info">
                              <i class="fa fa-fw fa-pen"></i>
                              <a>{{ __('adminlte::menu.edit') }}</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                              <i class="fa fa-fw fa-trash"></i>
                              <a>{{ __('adminlte::menu.delete') }}</a>
                            </button>
                      </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="2">Type-Kitkat</td>
                            <td>vans</td>
                            <td>
                                <div class="bg-warning " style="width: 65px !important;" >
                                    <p class="text-light text-center">{{ __('adminlte::menu.onprocess') }}</p>
                                </div>
                            </td>
                            <td class="float-right">
                                <button type="button" class="btn btn-primary">
                                  <i class="fa fa-fw fa-shopping-bag"></i>
                                  <a>{{ __('adminlte::menu.view') }}</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                  <i class="fa fa-fw fa-pen"></i>
                                  <a>{{ __('adminlte::menu.edit') }}</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                  <i class="fa fa-fw fa-trash"></i>
                                  <a>{{ __('adminlte::menu.delete') }}</a>
                                </button>
                          </td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td colspan="2">Type-Asmr</td>
                            <td>Kenneth</td>
                            <td>
                                <div class="bg-danger " style="width: 65px !important;" >
                                    <p class="text-light text-center">{{ __('adminlte::menu.cancel') }}</p>
                                </div>
                            </td>
                            <td class="float-right">
                                <button type="button" class="btn btn-primary">
                                  <i class="fa fa-fw fa-shopping-bag"></i>
                                  <a>{{ __('adminlte::menu.view') }}</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                  <i class="fa fa-fw fa-pen"></i>
                                  <a>{{ __('adminlte::menu.edit') }}</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                  <i class="fa fa-fw fa-trash"></i>
                                  <a>{{ __('adminlte::menu.delete') }}</a>
                                </button>
                          </td>
                          </tr>



                          <tr>
                            <th scope="row">6</th>
                            <td colspan="2">Type-A33r</td>
                            <td>vans</td>
                            <td>
                                <div class="bg-secondary " style="width: 65px !important;" >
                                    <p class="text-light text-center">{{ __('adminlte::menu.return') }}</p>
                                </div>
                            </td>
                            <td class="float-right">
                                <button type="button" class="btn btn-primary">
                                  <i class="fa fa-fw fa-shopping-bag"></i>
                                  <a>{{ __('adminlte::menu.view') }}</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                  <i class="fa fa-fw fa-pen"></i>
                                  <a>{{ __('adminlte::menu.edit') }}</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                  <i class="fa fa-fw fa-trash"></i>
                                  <a>{{ __('adminlte::menu.delete') }}</a>
                                </button>
                          </td>
                          </tr>

                          <tr>
                            <th scope="row">7</th>
                            <td colspan="2">Type-Var</td>
                            <td>vans</td>
                            <td>
                                <div class="bg-secondary " style="width: 65px !important;" >
                                    <p class="text-light text-center">{{ __('adminlte::menu.return') }}</p>
                                </div>
                            </td>
                            <td class="float-right">
                                <button type="button" class="btn btn-primary">
                                  <i class="fa fa-fw fa-shopping-bag"></i>
                                  <a>{{ __('adminlte::menu.view') }}</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                  <i class="fa fa-fw fa-pen"></i>
                                  <a>{{ __('adminlte::menu.edit') }}</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                  <i class="fa fa-fw fa-trash"></i>
                                  <a>{{ __('adminlte::menu.delete') }}</a>
                                </button>
                          </td>
                          </tr>

                          <tr>
                            <th scope="row">8</th>
                            <td colspan="2">Type-Shketz</td>
                            <td>Vans</td>
                            <td>
                                <div class="bg-success " style="width: 65px !important;" >
                                    <p class="text-light text-center">{{ __('adminlte::menu.success') }}</p>
                                </div>
                            </td>
                            <td class="float-right">
                                <button type="button" class="btn btn-primary">
                                  <i class="fa fa-fw fa-shopping-bag"></i>
                                  <a>{{ __('adminlte::menu.view') }}</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                  <i class="fa fa-fw fa-pen"></i>
                                  <a>{{ __('adminlte::menu.edit') }}</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                  <i class="fa fa-fw fa-trash"></i>
                                  <a>{{ __('adminlte::menu.delete') }}</a>
                                </button>
                          </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
      </div>
  </div>

@stop
