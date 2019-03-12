@extends('admin.app.layout')

@section('title', config('app.name'))

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <form action="/admin/proposal" role="form">
                <div class="row">
                    <div class="col-lg-3 col-3">
                        <div class="input-group">
                            <input type="text" value="{{$keyword}}" name="keyword" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                    搜索
                                </button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>案由</th>
                    <th>提案者</th>
                    <th>届次</th>
                    <th>状态</th>
                    <th>提交时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                @foreach($proposalList as $proposal)
                    <tr>
                        <td>
                            {{$proposal->id}}
                        </td>
                        <td>
                            <a href="{{url('/admin/proposal/detail?id=').$proposal->id}}">{{$proposal->title}}</a>
                        </td>
                        <td>
                            {{$proposal->name}}
                        </td>
                        <td>
                            {{$proposal->jie_ci_title}}

                        </td>
                        <td>
                            @if($proposal->status==0)
                                不立案
                            @elseif($proposal->status==1)
                                新提交
                            @elseif($proposal->status==2)
                                驳回
                            @elseif($proposal->status==3)
                                并案
                            @endif
                        </td>
                        <td>
                            {{$proposal->created_at}}
                        </td>
                        <td>
                            <a href="{{url('/admin/proposal/detail?id=').$proposal->id}}" class="btn btn-info">审核</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            {!! str_replace('&lsaquo;','上一页',str_replace('&rsaquo;','下一页',$proposalList->appends(['keyword'=>$keyword])->links())) !!}
        </div>
    </div>
@endsection
