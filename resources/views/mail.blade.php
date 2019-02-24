<h3>Site nacleica.md</h3>
@foreach($info as $key => $item)
	{!! '<b style="text-transform: uppercase;">' . $key . '</b>' . " : " . $item  !!} <br> <br>
@endforeach