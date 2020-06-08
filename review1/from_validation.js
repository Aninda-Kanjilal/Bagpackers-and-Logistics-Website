function validate() {
    var name = document.getElementById('name');
    var mail = document.getElementById('mail');
    var zip_code = document.getElementById('zipcode');

    /*Regex Code*/
    var filter_name = /^[a-zA-Z]+$/;
    var filter_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var filter_zipcode = /^[0-9]{6}$/;

    /*Conditions*/
    if (filter_zipcode.test(zip_code.value)) {
        document.getElementById('error_zipcode').innerHTML = '';
    } else {
        document.getElementById('error_zipcode').innerHTML = '<span>Invalid zipcode</span>';
    }
    if (filter_name.test(name.value)) {
        document.getElementById('error_name').innerHTML = '';
    } else {
        document.getElementById('error_name').innerHTML = '<span>Invalid name</span>';
    }
    if (filter_mail.test(mail.value)) {
        document.getElementById('error_mail').innerHTML = '';
    } else {
        document.getElementById('error_mail').innerHTML = '<span>Invalid mail</span>';
    }
    if (sel.selectedIndex == 0) {
        document.getElementById('error_select').innerHTML = '<span>Please select mode of transport</span>';
        return false;
    } else {
        document.getElementById('error_select').innerHTML = '';
    }
    
    /*Select Conditions*/
    var weight = document.getElementById('weight').selectedIndex;
    var distance = document.getElementById('distance').selectedIndex;
    var transport = document.getElementById('sel').selectedIndex;
   
    /*Air Combo*/ 
    if (weight == 1 && distance == 1 && transport == 1)
        {
            document.getElementById('price').innerHTML = 'Rs. 5,000';
        }
    else if (weight == 2 && distance == 2 && transport == 1)
        {
            document.getElementById('price').innerHTML = 'Rs. 7,000';
        }

    else if (weight == 3 && distance == 3 && transport == 1)
        {
            document.getElementById('price').innerHTML = 'Rs. 10,000';
        }
    else if (weight == 4 && distance == 4 && transport == 1)
        {
            document.getElementById('price').innerHTML = 'Rs. 13,000';
        }

    /*Road Combo*/
   else if (weight == 1 && distance == 1 && transport == 2)
    {
        document.getElementById('price').innerHTML = 'Rs. 3,500';
    }
    else if (weight == 2 && distance == 2 && transport == 2)
    {
        document.getElementById('price').innerHTML = 'Rs. 5,000';
    }
   else if (weight == 3 && distance == 3 && transport == 2)
    {
        document.getElementById('price').innerHTML = 'Rs. 10,000';
    }
    else if (weight == 4 && distance == 4 && transport == 2)
    {
        document.getElementById('price').innerHTML = 'Rs. 11,500';
    }
	else 
	{
        document.getElementById('price').innerHTML = 'Rs. 3,000';
    }
}
