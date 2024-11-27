<!DOCTYPE html>
<html >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <link href=" {{ asset('backend/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
   <style>
* {
            font-family: 'NotoSansArabic', sans-serif;
            direction: rtl; /* Right-to-left layout for Pashto/Arabic */
            text-align: right;
        }

#customers {
  /* font-family: Arial, Helvetica, sans-serif; */
  /* font-family: 'NotoSans', sans-serif; */

  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  text-align: center;
}

    </style>
</head>
<body>
    <div id="d1">
        <table id="customers">
           <thead>
                <tr>
                    <th>Id</th>

                    <th>Name</th>
                    <th> F Name</th>
                    <th>Position</th>
                    <th> Phone</th>
                    <th>Photo</th>
                    {{-- <th>پروفایل او ایډیټ</th> --}}
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
                    @php
                        $image= $record->photo
                    @endphp
                    <td>  <img src="{{ $image }}" height="60" width="60" style="border-radius: 100%"></td>

                {{-- <td><a style="border-radius: 30%" href="{{ url('/edit/records'.$record->id) }}" ></a>
                    <a style="border-radius: 30%" href="{{ url('/edit/records'.$record->id) }}" ></a>
                </td> --}}
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>
</html>
