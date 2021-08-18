@extends('layouts.master')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mb-0">

                    {{--<div class="card-body p-4">--}}
                    <form action="{{route('arama')}}" method="POST" style="margin-bottom: 0px;">
                        @csrf
                    <div class="search"></i> <input type="text" class="form-control" name="sehirAra"
                                                                            placeholder="Şehir Ara" autocomplete="off">
                        <button class="btn btn-primary">Ara</button>
                    </div>
                    </form>
                    {{--</div>--}}
                </div>
            </div>
        </div>
</div>

