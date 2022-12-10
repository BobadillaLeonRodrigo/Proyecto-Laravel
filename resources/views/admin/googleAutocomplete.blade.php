@extends('layouts.master')
@section('title')
Maps 
@endsection
@section('content')
<div>
    </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-12 border border-5 border-dark rounded-4">
                        <div class="card-header display-6 text-center card-body text-secundary">
                            <strong><em>Google Maps</em></strong>
                        </div>
                            <center>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60243
                                    .892006056594!2d-99.56042784813565!3d19.31524812829206!2m3!1f0!2f0!3
                                    f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20b8d249fe495%3A0xe03523f8
                                    45467ad0!2sUTVT%20Universidad%20Tecnol%C3%B3gica%20Del%20Valle%20de%
                                    20Toluca!5e0!3m2!1ses-419!2smx!4v1670644591017!5m2!1ses-419!2smx" 
                                        width="98%" 
                                        height="500" 
                                        style="border:0;" 
                                        allowfullscreen 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade"
                                        alt="Mapa de GoogleMaps">
                                </iframe>
                            </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection