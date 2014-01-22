@extends('base-layout')
@section('core-style')
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/sb-admin.css')}}
	{{HTML::style('font-awesome/css/font-awesome.min.css')}}
@stop

@section('page-style')
	<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">	
@stop

@section('core-footer-js')
	{{HTML::script('js/jquery-1.10.2.js')}}
	{{HTML::script('js/bootstrap.js')}}
@stop

@section('page-footer-js')
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>
@stop