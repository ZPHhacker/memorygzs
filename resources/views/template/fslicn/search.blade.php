@extends('template.fslicn.layout')
@section('title','')
@section('body','vod-search')
@section('content')
<div class="container apptop">
    <div class="row">
        <div class="col-sm-12 hy-main-content">

            <div class="hy-layout clearfix topss">
                <div class="hy-video-head">
                    <span class="text-muted pull-right hidden-xs"></span>
                    <h4 class="margin-0"><span class="text-color">{{$searchkey}}</span>尝鲜相关的结果</h4>
                </div>
                @if($cxs)
                    @foreach($cxs as $key=>$s)
                <div class="hy-video-details active clearfix">
                    <div class="item clearfix">
                        <dl class="content">
                            <dt><a class="videopic" href="/play/{{$s['dy_addr']}}}.html" style="background: url({{$s['dy_img']}}) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span></a></dt>
                            <dd class="clearfix">
                                <div class="head">
                                    <h3> <a class="text-color" href="/play/{{$s['dy_addr']}}.html" >{{$s['dy_title']}}</a></h3>
                                </div>
                                <ul>
                                    <li class="text-muted"><span class="text-muted">简介：</span>{{$s['dy_desc']}}</li>

                                </ul>
                                <div class="block">
                                    <a class="text-muted" href="/play/{{$s['dy_addr']}}}.html">查看详情 <i class="icon iconfont icon-right"></i></a>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                    @endforeach
                @else
                @endif
            </div>

            <div class="hy-layout clearfix">
                <div class="hy-video-head">
                    <span class="text-muted pull-right hidden-xs"></span>
                    <h4 class="margin-0"><span class="text-color">{{$searchkey}}</span>全网搜索相关结果</h4>
                </div>
                @if($ss)
                    @foreach($ss as $s)
                        <div class="hy-video-details active clearfix">
                            <div class="item clearfix">
                                <dl class="content">
                                    <dt><a class="videopic" href="/play/{{$s['dy_addr']}}.html" style="background: url({{$s['dy_img']}}) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span></a></dt>
                                    <dd class="clearfix">
                                        <div class="head">
                                            <h3><a class="text-color" href="/play/{{$s['dy_addr']}}.html" >{{$s['dy_title']}}</a> <span class="sodypf">{{$s['dy_dypf']}}</span>
                                            </h3>
                                        </div>
                                        <p><span class="text-muted">类 &nbsp;型 ：</span><span class="text-muted">{{$s['dy_type']}}</span> <span class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="text-muted">{{$s['dy_dqdz']}}</span><span class="split-line"></span>
                                            </p>
                                        <ul>
                                   		    <li class="text-muted">{{$s['dy_show']}}</li>
                                            <li class="text-muted">{{$s['dy_desc']}}</li> 

                                        </ul>
                                        <div class="block">
                                            <a class="text-muted" href="/play/{{$s['dy_addr']}}.html">查看详情 <i
                                                        class="icon iconfont icon-right"></i></a>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    @endforeach
                @else
                @endif
            </div>
        </div>
    </div>
</div>


    <script>
        $(function () {
            var key = $('.text-color:eq(0)').text();
            $('#ff-wd').val(key)
        })
    </script>
  @endsection
