@extends('template.fslicn.layout')
@section('body','vod-type')
@section('title','会员专属视频')
@section('content')
    <div class="container apptop">
        <div class="row">
            <div class="hy-cascade clearfix">
                <div class="left-head hidden-sm hidden-xs">
                    <ul class="clearfix">
                        <li><a href="/viplist.html" class="active">会员专享</a></li>
                        <li><a href="/autocxlist/5/1.html">抢先视频</a></li>
                        <li><a href="/movielist/all/1.html" >电影</a></li>
                        <li><a href="/tvlist/all/1.html">电视剧</a></li>
                        <li><a href="/zylist/all/1.html">综艺</a></li>
                        <li><a href="/dmlist/all/1.html">动漫</a></li>
                        </ul>
                </div>
            </div>
            <div class="hy-layout clearfix">
                {!! config('adconfig.list_top') !!}
            </div>
            <div class="hy-layout clearfix" style="margin-top: 0;">
                <div class="hy-switch-tabs active clearfix">
                    <span class="text-muted pull-right hidden-xs">如果您喜欢本站请动动小手分享给您的朋友！</span>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">会员专属视频</a></li>
                    </ul>
                </div>
                <div class="hy-video-list">
                    <div class="item">
                        <ul class="clearfix">
                            <div class="item">
                            @if(isset($vipdata)&&!empty($vipdata))
                                @foreach($vipdata as $key=>$dy)
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <a class="videopic lazy" href="/play/{{$dy['dy_id']}}.html" title="{{$dy['dy_title']}}" data-src="{{$dy['dy_img']}}" onclick="jilu(this)">
                                        <span class="play hidden-xs"></span><span class="score"></span></a>
                                    <div class="title">
                                        <h5 class="text-overflow"><a href="/play/{{$dy['dy_id']}}.html" title="{{$dy['dy_title']}}" src="{{$dy['dy_img']}}" onclick="jilu(this)">{{$dy['dy_title']}}</a></h5>
                                    </div>
                                    <div class="subtitle text-muted text-muted text-overflow hidden-xs"></div>
                                </div>
                                @endforeach()
                            @else
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="hy-page clearfix">
                    <ul class="cleafix">
                        <li><a>共1页</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection