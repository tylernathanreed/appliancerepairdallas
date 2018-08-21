@extends('layouts.page')

@push('breadcrumbs')

    @component('components.breadcrumb')
        Manufacturer Numbers
    @endcomponent

@endpush

@section('page.heading')
    Manufacturer Numbers
@endsection

@section('page.main')

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Manufacturer</th>
				<th>Phone Number</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Appliance Parts Depot</td>
				<td>214-631-4343</td>
			</tr>
			<tr>
				<td>Asko</td>
				<td>800-898-1879</td>
			</tr>
			<tr>
				<td>Bosch / Thermador</td>
				<td>800-735-5547</td>
			</tr>
			<tr>
				<td>Dacor</td>
				<td>800-772-7778</td>
			</tr>
			<tr>
				<td>Dryer Vent Service</td>
				<td>214-802-0600</td>
			</tr>
			<tr>
				<td>First Source</td>
				<td>214-352-4978</td>
			</tr>
			<tr>
				<td>Frigidaire</td>
				<td>800-456-4407</td>
			</tr>
			<tr>
				<td>G E</td>
				<td>800-851-8777</td>
			</tr>
			<tr>
				<td>Global Microwave Repair</td>
				<td>800-325-8488</td>
			</tr>
			<tr>
				<td>Marcone</td>
				<td>800-592-7172</td>
			</tr>
			<tr>
				<td>Scotsman</td>
				<td>800-726-8762</td>
			</tr>
			<tr>
				<td>Westinghouse</td>
				<td>800-245-0600</td>
			</tr>
			<tr>
				<td>Whirlpool</td>
				<td>800-851-4605</td>
			</tr>
		</tbody>
	</table>

@endsection