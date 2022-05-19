@extends('layouts.main')

@section('container')

        <div class="garis">
        <h2 >Review Dokumen</h2>
        <hr align="left" width="90%" size="4" color="gray" noshade >

        <button style= "margin-top:10px; margin-left:14px ;width: 75px; height: 25px; background-color: #7CFC00; border-color:antiquewhite ; color: black"><a href="/upload">Upload</a></button>
        <button style= "margin-top:10px; margin-left:14px ;width: 75px; height: 25px; background-color: gray; border-color:antiquewhite ; color: black"><a href="/prodi">Return</a></button>       </div>
        <br>
        @foreach($data as $data)

        {{ $data->kode }}
        {{ $data->name }}

        @endforeach
        <center> <br>
        <iframe src="/assets/{{$data->file}}" width="800px" height="1700px" ></iframe>
        </center> 

@endsection
