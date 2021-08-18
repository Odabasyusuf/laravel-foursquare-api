@extends('layouts.master')

<style>
    .row{
        display: block !important;
    }
</style>

<div class="container" style="text-align: center">
    <div class="row">
        <div class="col-md-12 mt-2 col-xl-2">
            <a href="javascript:history.back()">
                <button type="button" class="btn btn-light"><svg style="margin-bottom: 3px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>   Geri   </button>
            </a>
        </div>

            <div class="modal-body">
                <iframe width="90%" height="90%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.openstreetmap.org/export/embed.html?bbox={{$lng}}%2C{{$lat}}&amp;layer=mapnik&amp;marker={{$lat}}%2C{{$lng}}"
                        style="border: 1px solid black"></iframe>
                <br/>
            </div>

    </div>
</div>
