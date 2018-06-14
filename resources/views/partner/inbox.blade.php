@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu2')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
  <div class="panel-heading" style="background-color:#337AB7; color:white;" >
        <h2 style="margin-top:0px; margin-bottom:0px;">
            hộp thư đến     
        </h2>
   </div>
	<hr/>
	@foreach($inbox as $ib)
    <div class="col-sm-12">
        <div class="bs-calltoaction bs-calltoaction-info">
            <div class="row">
                <div class="col-md-8 cta-contents">
                    <h1 class="cta-title">{{$ib->description}}</h1>
                    <div class="cta-desc">
                        <p>{{$ib->email_sender}}</p>
                        <p>{{$ib->created_at}}</p>
                        <p>{{$ib->file}}</p>
                    </div>
                </div>
                <div class="col-md-4 cta-button ">
                    <a href="#" class="btn btn-lg btn-block btn-info">Details</a>
                </div>
             </div>
        </div><hr/>
    </div>
    @endforeach

</div>

<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection