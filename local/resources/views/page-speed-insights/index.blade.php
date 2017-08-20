@extends('master')
@section('scripts')
    {{ Html::script('js/fe.pagespeedinsight.js') }}
@stop

@section('title')
    SMARTLINKS
@stop
@section("container")
<span class="test-class">This is page insights</span>
<div class="container"><h2>Example tab 2 (using standard nav-tabs)</h2></div>

<div id="exTab2" class="container">
    <ul class="nav nav-tabs">
        <li class="active">
            <a  href="#1" data-toggle="tab">Overview</a>
        </li>
        <li><a href="#2" data-toggle="tab">Without clearfix</a>
        </li>
        <li><a href="#3" data-toggle="tab">Solution</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="1">
            <div class="col-lg-9">
                test trái
            </div>
            <div class="col-lg-3">
                test phải
            </div>
        </div>
        <div class="tab-pane" id="2">
            <h3>Notice the gap between the content and tab after applying a background color</h3>
        </div>
        <div class="tab-pane" id="3">
            <h3>add clearfix to tab-content (see the css)</h3>
        </div>
    </div>
</div>

@stop