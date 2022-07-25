@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.dataDua.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.data-duas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.dataDua.fields.id') }}
                        </th>
                        <td>
                            {{ $dataDua->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataDua.fields.nama') }}
                        </th>
                        <td>
                            {{ $dataDua->nama }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.data-duas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#data_dua_input_datas" role="tab" data-toggle="tab">
                {{ trans('cruds.inputData.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="data_dua_input_datas">
            @includeIf('admin.dataDuas.relationships.dataDuaInputDatas', ['inputDatas' => $dataDua->dataDuaInputDatas])
        </div>
    </div>
</div>

@endsection