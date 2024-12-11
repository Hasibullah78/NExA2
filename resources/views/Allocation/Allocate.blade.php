@extends('layout')
@section('main')



<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{-- <button type="button" class="close" data-dismiss="alert">×</button>
                   <span class="text-black" style="text-center">{{ session('success') }}</span> --}}
                   <p class="text-black" style="text-align: center">{{ session('success') }}</p>
                </div>
                @endif
            </div>


            <div class="card-body">

                <form action="{{ url('items/allcate/records') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class=" col-md-6">
                                <div class="form-group" style="text-align: center">
                                    <label for="item_quantity"><span>{{ __('message.Employees') }}</span></label>


                                    <select name="emp_id"  dir="rtl" class="form-select"   style="text-align: center;font-size:120%">
                                        @foreach ($employees as $emp)
                                        <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  {{-- <div class="form-group" style="text-align: center">
                                    <label for="item_quantity"><span>{{ __('message.Item_Name') }}</span></label> --}}

                                    {{-- <h4 style="text-align: center">Items</h4> --}}
                                    {{-- <select name="item_id"  dir="rtl" class="form-select"   style="text-align: center;font-size:120%">
                                        @foreach ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select> --}}
                                  {{-- </div> --}}

                            </div>







                            <div class="container my-4">
                                <h3 class="mb-3">Inventory Table with Selection</h3>
                                <table class="table table-bordered table-hover table-sm display" id="example" style="min-width: 845px">
                                    <thead class="table-light">
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="selectAll" name="item_id[]" />
                                            </th>
                                            <th>Item Name</th>
                                            <th>Quantity</th>
                                            <th>In Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            @foreach ($items as $item)
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox" />
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td><input type="number" name="item_unit[]"></td>
                                            <td>{{ $item->item_unit }}</td>

                                        </tr>
                                            @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <div class="container h-100 mt-5">
                                <div class="row h-100">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <button class="btn btn-lg btn-secondary"  id="button" style="border-radius: 10%">

                                          <i class="fas fa-save"></i> {{ __('message.allocate') }}

                                    </div>

                                </div>
                            </div>
                </form>



            </div>
        </div>

    @endsection

