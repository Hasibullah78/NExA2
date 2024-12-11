@extends('layout')
@section('main')

<div class="card">
    {{-- <form action="{{ url('/add/items') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data"> --}}
        @if (session('success'))
        <div class="alert alert-success col-12 d-flex justify-content-center align-items-center"  role="alert">
            <button type="button" style="border: none" class="close" data-dismiss="alert">
           <span class="text-black">{{ session('success') }}</span>
        </div>
        @endif




        <div class="card-body">

            <form action="{{ url('/items/save') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class=" col-md-3">
                            <div class="form-group" style="text-align: center">
                                <label for="Item"><span>{{ __('message.Item_Name') }}</span></label>
                                <input type="text"   dir="rtl" required class="form-control" name="item_name" class="form-control"  placeholder=" ">
                                @error('name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" style="text-align: center">
                                <label for="Item"><span>{{ __('message.Item_Type') }}</span></label>
                                <input type="text" required  dir="rtl" class="form-control" name="item_type" placeholder=" ">
                                @error('e_f_name')
                                <span class=" text-danger">{{ $message }}</span>
                                 @enderror
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="text-align: center">
                                <label for="Item"><span>{{ __('message.Category_Name') }}</span></label>
                                <select name="item_categories"  dir="rtl" class="form-select"   style="text-align: center">
                                    @foreach ($itm_categories as $itm_cat)
                                    <option value="{{ $itm_cat->id }}">{{ $itm_cat->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" style="text-align: center">
                                <label for="Item"><span>{{ __('message.Item_Unit') }}</span></label>

                                    <input type="number" required  dir="rtl" class="form-control" name="item_quantities" placeholder=" ">
                                    @error('e_f_name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="text-align: center">
                                <label for="Item"><span>{{ __('message.Item_SSN') }}</span></label>
                                <input type="text" required  dir="rtl" class="form-control" name="item_ssn" placeholder=" ">
                                @error('e_f_name')
                                <span class=" text-danger">{{ $message }}</span>
                                 @enderror
                            </div>
                        </div>
                    </div>
                    <div class="container h-100 mt-5">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <button class="btn btn-lg btn-secondary"  id="button" style="border-radius: 10%">
                                  <i class="fas fa-save"></i> {{ __('message.Save') }}
                            </div>

                        </div>
                    </div>

            </form>

        </div>

     </div>





    @endsection

