var total=0;
function UpdateCost(elem) {
  
    if (elem.checked == true) { 
		total += Number(elem.value); 
	}else{
		total -=Number(elem.value);
	}
  
	document.getElementById('total').value = total.toFixed(0);
}
