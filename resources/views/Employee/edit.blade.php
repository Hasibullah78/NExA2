@extends('layout')
@section('main')
<script src="{{ asset('jquery.js') }}"></script>

@foreach ($records as $record)
    <form action="{{ url('employee/update/'.$record->id) }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
        <div class="alert alert-success" style="text-align: center" role="alert">
            <button type="button" style="border: none; outline:none" class="close" data-dismiss="alert">
           <span class="text-black">{{ session('success') }}</span>
        </div>
        @endif
        @if (session('danger'))
        <div class="alert alert-danger" style="text-align: center" role="alert">
            <button type="button" class="" data-dismiss="alert">
           <span class="text-black" >{{ session('danger') }}</span>
        </div>
        @endif
        <div class="card mt-5">
            <div class="card-body">



            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                        <input class="form-check-input" type="checkbox" name="name_checkbox"   id="name_checkbox">
                                        <label><small> {{ __('message.checkfor') }}</small> {{ __('message.editing') }}</label><br>
                        <label for="name" ><span>{{ __('message.Name') }}</span></label>
                        {{-- <h4 style="text-align: center">نوم</h4> --}}
                        <input type="text" disabled style="font-size: 120%"  dir="rtl" required class="form-control" name="name" id="name" class="form-control" value="{{ $record->name }}" placeholder="">
                        @error('name')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                        {{-- <label for="position"><strong>د پلار نوم</strong></label> --}}
                        <input class="form-check-input" type="checkbox" name="f_name_checkbox"   id="f_name_checkbox">
                                        <label><small> Check for</small> editing</label><br>
                        <label for="name" ><span>{{ __('message.F_Name') }}</span></label>


                        <input type="text" id="f_name" disabled style="font-size: 120%" required  dir="rtl" class="form-control" name="f_name" value="{{ $record->f_name }}" placeholder=" ">
                        @error('e_f_name')
                        <span class=" text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                        {{-- <label for="position"><strong>د پلار نوم</strong></label> --}}
                        <input class="form-check-input" type="checkbox" name="phone_checkbox"   id="phone_checkbox">
                                        <label><small> Check for</small> editing</label><br>
                        <label for="name" ><span>{{ __('message.Phone') }}</span></label>

                        <input type="text" id="phone" disabled style="font-size: 120%" required class="form-control"  dir="rtl" name="phone" value="{{ $record->phone }}" style="font-size: 150%" placeholder="">
                        @error('e_f_name')
                        <span class=" text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
             <div class="row">
                <div class="col-md-3">
                    <div class="form-group" style="text-align: center">
                        {{-- <input class="form-check-input" type="checkbox" name="item_checkbox"   id="item_checkbox">
                                        <label><small> Check for</small> editing</label><br> --}}
                        <label for="name" style="font-size: 20px" ><span>{{ __('message.old_post_name') }}</span></label><br><br>
                        <span style="font-size: 22">{{ $record->position_name }}</span>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                        <input class="form-check-input" type="checkbox" name="position_checkbox"   id="position_checkbox">
                        <label><small> Check for</small> editing</label><br>
                        <label for="name" ><span>{{ __('message.choose_new_one') }}</span></label><br>
                        <select name="position" id="position"  disabled  dir="rtl" class="form-select"   style="text-align: center; font-size:110%">
                            @foreach ($positions as $position)
                            <option value="{{ $position->id }}"><i>{{ $position->name }}</i></option>
                            @endforeach
                        </select>
                      </div>
                </div>


                <div class="col-md-1">
                    <div class="form-group" style="text-align: center">
                        {{-- <label for="position"><strong>د پلار نوم</strong></label> --}}
                        <label for="name" ><span>{{ __('message.Photo') }}</span></label><br>
                        <img src="{{asset($record->photo)  }}" alt="{{ $record->photo }}" style="border-radius: 100%" width="80">
                        {{-- <input type="file" autofocus required class="form-control" name="pic"  dir="rtl" placeholder=""> --}}
                        @error('e_f_name')
                        <span class=" text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                    <input class="form-check-input" type="checkbox" name="photo_checkbox"   id="photo_checkbox">
                                        <label><small> Check for</small> editing</label><br>
                        <label for="name" ><span>{{ __('message.Photo') }}</span></label>

                        <input type="file" id="photo" disabled autofocus required class="form-control" name="photo"  dir="rtl" placeholder="">
                        @error('e_f_name')
                        <span class=" text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div>


            @endforeach
            <div class="container h-100 mt-5">
                <div class="row h-100">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <button class="btn btn-lg btn-secondary"  id="button" style="border-radius: 10%">
                          <i class="fas fa-save"></i> {{ __('message.Save') }}
                    </div>

                </div>
            </div>

            </div>
        </form>


<script>
    $(document).ready(function(){


        $("#name_checkbox").change(function(){
            if ($('#name_checkbox').is(':checked')) {

                $('#name').prop('disabled', false);
                // $('#button').prop('disabled', false);

                }
                else
                $('#name').prop('disabled', true);
        });
        $("#f_name_checkbox").change(function(){
            if ($('#f_name_checkbox').is(':checked')) {

                $('#f_name').prop('disabled', false);
                // $('#button').prop('disabled', false);

                } else
                      $('#f_name').prop('disabled', true);
        });
        $("#phone_checkbox").change(function(){
            if ($('#phone_checkbox').is(':checked')) {

                $('#phone').prop('disabled', false);
                // $('#button').prop('disabled', false);

                } else
                      $('#phone').prop('disabled', true);
        });
        $("#position_checkbox").change(function(){
            if ($('#position_checkbox').is(':checked')) {

                $('#position').prop('disabled', false);
                // $('#button').prop('disabled', false);

                } else
                      $('#position').prop('disabled', true);
        });
        $("#photo_checkbox").change(function(){
            if ($('#photo_checkbox').is(':checked')) {

                $('#photo').prop('disabled', false);
                // $('#button').prop('disabled', false);

                } else
                      $('#photo').prop('disabled', true);
        });
        // $("#image").mouseout(function(){
        //     $("#image").css({"height" : "80","width":"80"});

    });
</script>

    @endsection


