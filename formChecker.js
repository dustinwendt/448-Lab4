function reset()
{
	document.getElementById('gibson').value = 0;
	document.getElementById('fender').value = 0;
	document.getElementById('epiphone').value = 0;
	return false;
}

function shippingValidate()
{
	var shippingChoice = document.store.shipping;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	for(i=0;i<shippingChoice.length;i++)
	{
		if(shippingChoice[i].checked == true)
		{
			return true;
		}
	}
	return false;
}

function validate()
{
	var num_gib = document.getElementById('gibson').value;
	var num_fen = document.getElementById('fender').value;
	var num_epi = document.getElementById('epiphone').value;

	if(num_gib < 0 || num_fen < 0 || num_epi <0)
	{
		alert("Quantities cannot be nonzero");
		reset();
		return false;
	}
	else if(!shippingValidate())
	{
		alert("Please select a shipping option");
		return false;
	}
	else if(username.indexOf('@') == -1 || username.value.indexOf('.') == -1)
	{
		alert("Please enter a username in the form of a valid e-mail");
		return false;
	}
	else if(password == '')
	{
		alert("Please enter a password");
		return false;
	}
	return true;
}
