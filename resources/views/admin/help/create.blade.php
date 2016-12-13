@extends('layouts.admin')
@section('content')
	<div class="right_col" role="main">
		<div class="">
    		<div class="page-title">
      			<div class="title_left">
        			<h3>Form Elements</h3>
      			</div>
      			<div class="title_right">
        			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          				<div class="input-group">
				            <input type="text" class="form-control" placeholder="Search for...">
				            <span class="input-group-btn">
              					<button class="btn btn-default" type="button">Go!</button>
            				</span>
          				</div>
        			</div>
      			</div>
    		</div>
  		</div>
	  	<div class="row">
	    	<div class="col-md-12 col-sm-12 col-xs-12">
	      		<div class="x_panel">
	        		<div class="x_title">
	          			<h2>Agrega información <small>xxxxxxxxxxxxxxxxxxx</small></h2>
	          			<ul class="nav navbar-right panel_toolbox">
	            			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
	            			</li>
	          			</ul>
	          			<div class="clearfix"></div>
	        		</div>
	        		<div class="x_content">
	          			<br />
						{!!Form::open(['route'=>'Admin.Help.store', 'method'=>'POST', 'class'=>'form-horizontal form-label-left'])!!}
							@include('forms.Admin.help')
							<div class="form-group">
				              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
				              	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
				                <button type="submit" class="btn btn-danger">Cancelar</button>
				              </div>
				            </div>
	        			{!!Form::close()!!}
	        		</div>
				</div>
			</div>
		</div>
	</div>
@stop