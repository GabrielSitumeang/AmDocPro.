@extends('layouts.main')

@section('container')

        <div class="garis">
        <h2 >Review Dokumen</h2>
        <hr align="left" width="90%" size="4" color="gray" noshade >
        <button style= "margin-top:10px; margin-left:14px ;width: 75px; height: 25px; background-color: #7CFC00; border-color:antiquewhite ; color: black"><a href="/upload">Upload</a></button>
        <button style= "margin-top:10px; margin-left:14px ;width: 75px; height: 25px; background-color: gray; border-color:antiquewhite ; color: black"><a href="/prodi">Return</a></button>       </div>
        <center> <br>
        <embed src="assets/file/" width="800px" height="2100px" />
        </center> 

@endsection
