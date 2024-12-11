@extends('layout')
@section('main')


@php
    // $user_p_profile=$user_profile;
    // $user_p_name=$user_name;
    // return view('dashboard',compact('all_employees','allocated_employees','all_items','item_category','admin_users','sub_users','positions'));

    $all_employees_1=0;
    $allocated_employees_1=0;
    $all_items_1=0;
    $item_category_1=0;
    $admins_users_1=0;
    $sub_users_1=0;
    $positions_1=0;

@endphp
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f0f4f8;
    }

    .row {
        display: flex;
        flex-wrap: wrap;

    }


    .card {
        position: relative;
        /* padding: 10px; */
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s, box-shadow 0.3s;
        color: #fff;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        font-size: 1.3em;
        font-weight: bold;
        text-align: center;
        margin-bottom: 15px;
    }

    .card-body {
        text-align: center;
        font-size: 1.1em;
        z-index: 1;
    }

    .card canvas {
        position: absolute;
        top: -20px;
        left: -20px;
        z-index: 0;
        width: 200%;
        height: 200%;
        opacity: 0.2;
    }

    /* Background Colors */
    .bg-cyan { background-color: rgb(24, 255, 255); }
    .bg-danger { background-color: rgb(255, 77, 77); }
    .bg-primary { background-color: rgb(0, 106, 255); }
    .bg-orange { background-color: rgb(255, 153, 0); }
    .bg-blue { background-color: rgb(0, 106, 255); }
    .bg-green { background-color: rgb(4, 255, 0); }
</style>
</head>
<body>

<div class="row">
<div class="col-md-4">
    <div class="card bg-cyan">
        <canvas id="chart1"></canvas>
        <div class="card-header">{{ __('message.D_All_Emp') }}</div>
        @foreach ($all_employees as $emp)
        @php
            ++$all_employees_1;
        @endphp
      @endforeach
        <div class="card-body"> {{ $all_employees_1 }}</div>
    </div>
</div>
<div class="col-md-4">
    <div class="card bg-danger">
        <canvas id="chart2"></canvas>
        <div class="card-header">{{ __('message.D_Allocated_Emp') }}</div>
        @foreach ($allocated_employees as $teach)
        @php
            ++$allocated_employees_1;
        @endphp
      @endforeach
        <div class="card-body"> {{ $allocated_employees_1 }}</div>
    </div>
</div>
<div class="col-md-4">
    <div class="card bg-primary">
        <canvas id="chart3"></canvas>
        <div class="card-header">{{ __('message.D_Positions') }}</div>
        @foreach ($positions as $teach)
        @php
            ++$positions_1;
        @endphp
      @endforeach
        <div class="card-body"> {{ $positions_1 }}</div>
    </div>
</div>
</div>

<div class="row">
<div class="col-md-4">
    <div class="card bg-orange">
        <canvas id="chart4"></canvas>
        <div class="card-header">{{ __('message.D_Item') }}</div>
        @foreach ($all_items as $teach)
        @php
            ++$all_items_1;
        @endphp
      @endforeach
        <div class="card-body">{{ $all_items_1 }}</div>
    </div>
</div>
<div class="col-md-4">
    <div class="card bg-blue">
        <canvas id="chart5"></canvas>
        <div class="card-header">{{ __('message.D_item_Category') }}</div>
        @foreach ($item_category as $teach)
                       @php
                           ++$item_category_1;
                       @endphp
                     @endforeach
        <div class="card-body"> {{ $item_category_1 }}</div>
    </div>
</div>
<div class="col-md-4">
    <div class="card bg-green">
        <canvas id="chart6"></canvas>
        <div class="card-header">{{ __('message.D_Sys_users') }}</div>
        <div class="card-body">
            @foreach ($admin_users as $teach)
            @php
                ++$admins_users_1;
            @endphp
          @endforeach
          @foreach ($sub_users as $student)
          @php
              ++$sub_users_1;
          @endphp
        @endforeach
        {{ __('message.Sub_User') }}: {{ $sub_users_1 }}&nbsp;  {{ __('message.Admin') }}: {{ $admins_users_1 }}
        </div>
    </div>
</div>
</div>

<script>
// Mock data for pie charts
const chartData = [
    { id: 'chart1', data: [ {{ $all_employees_1 }},{{ $allocated_employees_1 }}], labels: ['Employees', 'Others'] },
    { id: 'chart2', data: [ {{ $allocated_employees_1 }},{{ $allocated_employees_1 }}], labels: ['Allocated', 'Unallocated'] },
    { id: 'chart3', data: [ {{ $positions_1 }},{{ $positions_1 }}], labels: ['Positions Filled', 'Vacant'] },
    { id: 'chart4', data: [ {{ $all_items_1 }},{{ $all_items_1 }}], labels: ['Used Items', 'Available Items'] },
    { id: 'chart5', data: [ {{ $item_category_1 }},{{ $item_category_1 }}], labels: ['Used Categories', 'Unused'] },
    { id: 'chart6', data: [ {{ $sub_users_1 }},{{ $positions_1 }}], labels: ['Admins', 'Users'] }
];

// Generate pie charts
chartData.forEach(chart => {
    const ctx = document.getElementById(chart.id).getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: chart.labels,
            datasets: [{
                data: chart.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)'
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            plugins: {
                legend: { display: false }
            }
        }
    });
});
</script>





@endsection



