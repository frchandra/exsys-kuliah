@extends('layouts.main')

@section('container')
<h1>Hello, world!</h1>

<form class="row row-cols-lg-auto g-3 align-items-center" action="{{ env('APP_URL') }}/" method="POST">
    @csrf
    <div class="col-6">
        <label class="visually-hidden">gejalaPertama</label>
        <div class="input-group">
        <input type="text" class="form-control" name=gejalaPertama placeholder="gejalaPertama">
        </div>
    </div> 

    <div class="col-6">
        <label class="visually-hidden">berair</label>
        <div class="input-group">
        <input type="text" class="form-control" name=berair placeholder="berair">
        </div>
    </div> 

    <div class="col-6">
        <label class="visually-hidden">berairParah</label>
        <div class="input-group">
        <input type="text" class="form-control" name=berairParah placeholder="berairParah">
        </div>
    </div> 

    <div class="col-6">
        <label class="visually-hidden">disentri</label>
        <div class="input-group">
        <input type="text" class="form-control" name=disentri placeholder="disentri">
        </div>
    </div> 

    <div class="col-6">
        <label class="visually-hidden">bepergian</label>
        <div class="input-group">
        <input type="text" class="form-control" name=bepergian placeholder="bepergian">
        </div>
    </div> 

    <div class="col-6">
        <label class="visually-hidden">demam</label>
        <div class="input-group">
        <input type="text" class="form-control" name=demam placeholder="demam">
        </div>
    </div> 

    <div class="col-6">
        <label class="visually-hidden">durasi</label>
        <div class="input-group">
        <input type="text" class="form-control" name=durasi placeholder="durasi">
        </div>
    </div> 



    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


@endsection