var books= ["Staying Healthy", "Summer Exercises", "Math Exercises"];
	var quantity= [0,0,0];
	var cost= [79.99, 49.99, 59.99];
		
	function addToCollection(Book, newQuantity) {
		document.getElementById("BookList").style.display='block';
		var currentBook = 0;
		var currentQuantity = parseInt(document.getElementById(newQuantity).value);
		var existLi= document.getElementById(Book);
		for(var i=0; i<books.length; i++) 
			if(books[i] === Book){
				quantity[i] += currentQuantity;
				currentBook = i;
			}
		if(currentQuantity>0 && existLi)
			   document.getElementById(Book).innerHTML = "<li id='" + Book + "'>" + "You have " + quantity[currentBook] + " books of " + Book + "</li>";
		else
			if(currentQuantity>0)
				document.getElementById("BookList").innerHTML += "<li id='" + Book + "'>" + "You have " + quantity[currentBook] + " books of " + Book + "</li>";
			else
				document.getElementById(Book).innerHTML = "<li id='" + Book + "'>" + "The amount selected is not available, you have " + quantity[currentBook] + " books of " + Book + "</li>";
	}

	
	var promotion=[10, 20, 30];
	var validCodes= ["10%Off", "20%Off", "30%Off"];

	function promoCode(Book, promo, Px) {
		var bookCost =0;
		var currentPrice = 0;
		var currentDiscount = 0;
		var currentCost = 0;
		var currentCode= document.getElementById(Px).value; 
		var Code = "None";

		for(var i=0; i<books.length; i++) 
			if(books[i] === Book)
				currentCost = cost[i];
				
				
			
			for(var i=0; i<validCodes.length; i++) 
				if(validCodes[i]===currentCode){
					currentDiscount = promotion[i];
					Code=validCodes[i];
				}

			if(Code === currentCode){
				bookCost = currentCost;
				currentCost = currentCost - (currentCost * currentDiscount/100);
				currentCost = currentCost.toFixed(2);
				document.getElementById(promo).innerHTML = "<ul style='text-decoration: line-through;'>" + bookCost + "€ </ul>";
				document.getElementById(promo).innerHTML +="<ul> Discount: " + currentDiscount + "% Off! <br>" + currentCost + "€ </ul>";
			}
	}
	