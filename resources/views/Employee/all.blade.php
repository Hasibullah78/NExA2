@extends('layout')
@section('main')
<style rel="stylesheet">
   #textalign,th,td{
    text-align: center;
}
</style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center">{{ __('message.Employee_list') }}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('message.SSN') }}</th>

                                    <th scope="col">{{ __('message.Name') }}</th>
                                    <th scope="col">{{ __('message.F_Name') }}</th>
                                    <th scope="col">{{ __('message.Position_Name') }}</th>
                                    <th scope="col">{{ __('message.Phone') }}</th>
                                    <th cope="col">{{ __('message.Photo') }}</th>
                                    <th id="textalign" scope="col">{{ __('message.Profile_Edit') }}</th>
                                  </tr>
                            </thead>
                            <tbody>
                                    @foreach ($records as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->f_name }}</td>
                                        <td>{{ $record->position_name }}</td>
                                        <td>{{ $record->phone }}</td>
                                        <td>  <img src="{{ asset($record->photo) }}" style="border-radius: 100%" alt="{{ $record->photo }}" height="60" width="60"></td>

                                    <td><a style="border-radius: 30%" href="{{ url('employee/view/records'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-eye" style="font-size: 100%"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a style="border-radius: 30%" href="{{ url('employee/edit/records'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-edit" style="font-size: 100%"></i></a>
                                    </td>

                                        {{-- <td>{{ $record->item_unit }}</td> --}}
                                    </tr>
                                    @endforeach





                            </tbody>

                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
