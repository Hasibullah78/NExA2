@extends('layout')
@section('main')
<style>
    td,th{
        text-align: center;
    }
</style>
    <div class="row">
        <div class="col-12">
            @foreach ($records as $record)
            <div class="card text-center">
                <div class="card-header col-12 d-flex justify-content-center align-items-center">
            <img src="{{ asset($record->photo) }}" style="border-radius: 100%;" alt="{{ $record->photo }}"  width="120">
                </div>
                <div class="card-body">
                  {{ $record->name }}
                    {{-- <td>{{ $record->f_name }}</td> --}}
                <div class="card-footer text-muted mt-3">
                    {{ $record->post_name }}
                    @break
                </div>
              </div>

              @endforeach


            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('message.Item_Name') }}</th>
                                    <th scope="col">{{ __('message.Item_Unit') }}</th>
                                    <th scope="col">{{ __('message.Item_Type') }}</th>
                                    <th scope="col">{{ __('message.Item_SSN') }}</th>
                                    <th scope="col">{{ __('message.Registration_Date') }}</th>
                                    <th scope="col">{{ __('message.Profile_Edit') }}</th>



                                  </tr>

                            </thead>
                            <tbody>


                                    @foreach ($records as $record)
                                    <tr>
                                        <td>{{ $record->item_name }}</td>
                                        <td>{{ $record->item_unit }}</td>
                                        <td>{{ $record->itemtype }}</td>
                                        <td>{{ $record->item_ssn }}</td>
                                        <td>{{ $record->created_at }}</td>
                                    <td><a style="border-radius: 30%" href="{{ url('employee/edit/records'.$record->emp_id.'/'.$record->record_id) }}" class=" btn btn-secondary"><i class="fa fa-eye" style="font-size: 100%"></i>&nbsp;&nbsp;<i class="fa fa-edit" style="font-size: 100%"></i></a>

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
