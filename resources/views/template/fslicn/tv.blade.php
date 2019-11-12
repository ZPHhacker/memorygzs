@extends('template.fslicn.layout')
@section('body','vod-type')
@section('title','热门大剧')
@section('content')
    <div class="container apptop">
        <div class="row">
            <div class="hy-cascade clearfix">
                <div class="left-head hidden-sm hidden-xs">
                    <ul class="clearfix">
                        <li><a href="/viplist.html">会员专享</a></li>
                        <li><a href="/autocxlist/5/1.html">抢先视频</a></li>
                        <li><a href="/movielist/all/1.html">电影</a></li>
                        <li><a href="/tvlist/all/1.html" class="active">电视剧</a></li>
                        <li><a href="/zylist/all/1.html">综艺</a></li>
                        <li><a href="/dmlist/all/1.html">动漫</a></li>
                        </ul>
                </div>
                <div class="content-meun clearfix">
                    <a class="head" href="javascript:;" data-toggle="collapse" data-target="#collapse"></a>
                    <div class="item collapse in" id="collapse">
                        <ul class="visible-sm visible-xs clearfix">
                            <li class="text"><span class="text-muted">按频道</span></li>
                            <li><a href="/autocxlist/5/1.html" id="">抢先</a></li>
                            <li><a href="/movielist/all/1.html" target="_self" id="idc4ca4238a0b923820dcc509a6f75849b">电影</a></li>
                            <li><a class="active" href="/tvlist/all/1.html" target="_self" id="idc4ca4238a0b923820dcc509a6f75849b">电视剧</a></li>
                            <li><a href="/zylist/all/1.html" target="_self" id="idc4ca4238a0b923820dcc509a6f75849b">综艺</a></li>
                            <li><a href="/dmlist/all/1.html" target="_self" id="idc4ca4238a0b923820dcc509a6f75849b">动漫</a></li>
                            </ul>

                        <ul class="clearfix">
                            <li><a href="/tvlist/all/1.html" class="acat {{$cat=='all'?'active':''}}" style="white-space: pre-wrap;">全部</a></li>
                            @foreach($tvtype as $key=>$v)
                                <li><a href='/tvlist/{{$v}}/1.html' class='acat {{$cat==$v?'active':''}}' style='white-space: pre-wrap;margin-bottom: 4px;'>{{$key}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hy-layout clearfix">
                {!! config('adconfig.list_top') !!}
            </div>
            <div class="hy-layout clearfix" style="margin-top: 0;">
                <div class="hy-switch-tabs active clearfix">
                    <span class="text-muted pull-right hidden-xs">如果您喜欢本站请动动小手分享给您的朋友！</span>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">最新电视剧</a></li>
                    </ul>
                </div>
                <div class="hy-video-list">
                    <div class="item">
                        <ul class="clearfix">
                            @foreach($dsj as $ds)
                            <div class="col-md-2 col-sm-3 col-xs-4">
							<a class="videopic lazy" href="/play/{{$ds['url']}}.html" title="{{$ds['title']}}" onclick="jilu(this)" data-src="{{$ds['img']}}" ><span class="play hidden-xs"></span><span class="score">{{$ds['js']}}</span></a>
							<div class="title">
								<h5 class="text-overflow"><a href="/play/{{$ds['url']}}.html" title="{{$ds['title']}}" onclick="jilu(this)" src="{{$ds['img']}}">{{$ds['title']}}</a></h5>
							</div>
							<div class="subtitle text-muted text-muted text-overflow hidden-xs">{{$ds['star']}}</div>
						</div>
                          @endforeach
                        </ul>
                    </div>
                </div>
                <div class="hy-page clearfix">
                    <ul class="cleafix">
                        {!! $pagehtml !!}
                        <li><a>共24页</a></li></ul>
                </div>		</div>
        </div>
    </div>
@endsection