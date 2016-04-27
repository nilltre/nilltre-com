@extends('app')
@section('content')
<div class="employees">
	<h1>Employees</h1>
	<div class="admin pull-right">
		<a href="/portal/employees/create"><i class="icon-plus n3green"></i></a>
	</div>
	<table class="sortable">
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Title</th>
			<th>Skillset</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Division</th>
			<th>Actions</th>
		</tr>
		<tr>
			<td>Niklas</td>
			<td>Svensson</td>
			<td>C.E.O</td>
			<td>- <i class="icon-award"></i></td>
			<td>0730-515020 <i class="icon-mobile"></i></td>
			<td>niklas@nilltre.com <i class="icon-mail"></i></td>
			<td>Helsingborg <i class="icon-direction"></i></td>
			<td><i class="icon-link-ext"></i> <i class="icon-attach"></i> <i class="icon-cog"></i> <i class="icon-cancel red"></i></td>
		</tr>
		
	</table>
</div>
@stop
@section('scripts')
<script src="/js/sorttable.js"></script>
@stop