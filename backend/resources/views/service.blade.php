@extends('layouts.app')

@section('title', 'Service')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/service/service.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/site/cssanimation.min.css')}}"/>
@stop
@section('content')
    <div class="wrapper">
        <div class="wbreadcrumb">
            <div class="container">
                <nav id="breadcrumb" class="breadcrumb">
                    <ul class="srow">
                        <li class="home-page"><i class="ficon fa fa-home"></i></li>
                        <li><span>Giải pháp ESM</span></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="page-content container">
            <div class="detail-content main-content srow">
                <h1 class="page-title"><a class="title" href="https://esm.com.vn/service">Giải pháp ESM</a></h1>
                <div class="grid-view main-item">
                    @if(count($services) >0)
                        @foreach($services as $service)
                            <div class="item wow @if($service->id % 2 == 0) fadeInLeft @else fadeInRight @endif">
                                <div class="inner-item srow">
                                    <div class="pic-thumb" data-scrolly-down="blurInTop"
                                         data-scrolly-top="blurInBottom">
                            <span class="bg-pic">
                                <img src="{{$service->image}}"
                                     alt="{{$service->service_name}}"/>
                            </span>
                                    </div>
                                    <div class="summary" data-scrolly-down="blurInTop" data-scrolly-top="blurInBottom">
                                        <div class="sicon">
                                            <img src="{{$service->icon}}"
                                                 alt="Branding"/>
                                        </div>
                                        <h3 class="item-title">{{$service->service_name}}</h3>
                                        <div class="short">
                                            {!! str_replace("\n",'</br>', $service->description)!!}
                                        </div>
                                        <br>
                                        @if($service->content)
                                            <div>
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#quickView{{$service->id}}">
                                                    Xem thêm
                                                </button>
                                            </div>
                                        @endif
                                        <div class="modal fade" id="quickView{{$service->id}}" data-backdrop="false"
                                             tabindex="-1" aria-modal="true" role="dialog"
                                             aria-labelledby="modalTitle{{$service->id}}">
                                            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-primary"
                                                            id="modalTitle{{$service->id}}">
                                                            {{$service->service_name}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-body">
                                                        {!! str_replace("\n",'</br>', $service->content)!!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="btn btn-secondary btn-icon-split btn-sm"
                                                                data-dismiss="modal">
                                                                <span class="icon text-white-50">
                                                                  <i class="fas fa-times"></i>
                                                                </span>
                                                            <span class="text">Close</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript"
            src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@endsection
