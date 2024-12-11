@extends('layout')
@section('main')
@php
    use App\Models\ItemCategory;

@endphp

<div class="card">
    <div class="row">
        <div class="col-12 mx-auto justify-content-center align-items-center">


                <div class="card-header">
                    <h4 class="card-title" style="text-align: center">  {{ __('message.item_list') }}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display"  style="min-width: 845px; border-radius:20%" >
                            <thead>
                                <tr>
                                    <th scope="col" class="th" style="text-align: center">{{ __('message.SSN') }}</th>
                                    <th scope="col" style="text-align: center"> {{ __('message.Item_Name') }}</th>
                                    <th scope="col" style="text-align: center">{{ __('message.Item_Type') }}</th>
                                    <th scope="col" style="text-align: center">{{ __('message.Item_Unit') }}</th>
                                    <th scope="col" style="text-align: center">{{ __('message.Item_SSN') }}</th>
                                    <th scope="col" style="text-align: center">{{ __('message.Category_Name') }}</th>
                                    <th scope="col" style="text-align: center"> {{ __('message.Registration_Date') }}</th>
                                    <th scope="col" class="th" style="text-align: center" >{{ __('message.Profile_Edit') }}</th>

                                  </tr>
                            </thead>
                            <tbody>
                                    @foreach ($records as $record)
                                    @php
                                    $category=ItemCategory::select('name')->where('id',$record->item_category_id)->first();
                                @endphp
                                    <tr>
                                        <td style="text-align: center">{{ $record->id }}</td>
                                        <td style="text-align: center">{{ $record->name }}</td>
                                        <td style="text-align: center">{{ $record->itemtype }}</td>
                                        <td style="text-align: center">{{ $record->item_unit }}</td>
                                        <td style="text-align: center">{{ $record->item_ssn }}</td>
                                        <td style="text-align: center">{{ $category->name }}</td>
                                        <td style="text-align: center">{{ $record->created_at }}</td>
                                    <td style="text-align: center"><a style="border-radius: 30%" href="{{ url('/view/item'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-eye" style="font-size: 100%"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a style="border-radius: 30%" href="{{ url('/edit/item'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-edit" style="font-size: 100%"></i></a>
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
