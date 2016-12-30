$("#pais").change(function(event)
{
		$.get("Myplans/"+event.target.value, function(response, state)
		{
		console.log(response);
	});
});