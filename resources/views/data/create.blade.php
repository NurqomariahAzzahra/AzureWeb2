<?php

use App\Http\Controllers\DataController;
?>
@extends('template.layout')

@section('content')
<div class="container  ">
    <div class="row">

        <div class="col-6">
            <h1>data entry</h1>
            <hr>
            <form class=" form-horizontal" method='POST' action="/Data/">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-3" for='nama'>Nama:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id='nama' name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for='nilai_1'>nilai 1:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id='nilai_1' name="nilai_1" min="0" max="100">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for='nilai_2'>nilai 2:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id='nilai_2' name="nilai_2" min="0" max="100">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for='nilai_3'>nilai 3:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id='nilai_3' name="nilai_3" min="0" max="100">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for='keterangan'>keterangan:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id='keterangan' name="keterangan">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button class="btn btn-primary" name='Create'>Create</button>
                        <a href="/Data" class="btn btn-secondary" name='cancel'>cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection