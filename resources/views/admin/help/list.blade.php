@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
	<div class="">
    	<div class="page-title">
      		<div class="title_left">
        		<h3>Tables <small>Some examples to get you started</small></h3>
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
    	<div class="clearfix"></div>
    	<div class="row">
      		<div class="col-md-12 col-sm-6 col-xs-12">
        		<div class="x_panel">
          			<div class="x_title">
            			<h2>Boardered table <small>Bordered table subtitle</small></h2>
            			<ul class="nav navbar-right panel_toolbox">
              				<li>
              					<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              				</li>
            			</ul>
            			<div class="clearfix"></div>
          			</div>
          			<div class="x_content">
	            		<table class="table table-bordered">
			              <thead>
			                <tr>
			                  <th>Titulo</th>
			                  <th>Descripcion</th>
			                  <th>Vista</th>
			                  <th>Operacion</th>
			                </tr>
			              </thead>
			              @foreach($infos as $info)
			              <tbody>
	                  	<td>{{str_limit($info->titulo, 15)}}</td>
                      <td>{{str_limit($info->descripcion, 110)}}</td>
                      <td>{{$info->helppage->helpPageName}}</td>
                      <td>
                        {!!link_to_route('Admin.Help.edit', $title = 'Editar', $parameters =$info->id, $attributes = ['class'=>'btn btn-primary'])!!}
                      </td>
			              </tbody>
			              @endforeach
	            		</table>
                  {!!$infos->render()!!}
          			</div>
        		</div>
      		</div>      
    	</div>
 	</div>
</div>
@stop