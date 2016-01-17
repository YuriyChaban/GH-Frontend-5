var  product = [
	{ item_food: "meat",      cash: 40 },
	{ item_food: "milk",      cash: 15 },
	{ item_food: "bread",     cash: 7  },
	{ item_food: "buckwheat", cash: 20  },
	{ item_food: "bananas",   cash: 13  },
]

function Bayer(item_food, cost) {
	this.item_food = item_food;
	this.cost = cost;

	this.buy = function (nameFoodItems) {
		for (var i = 0; i < product.length; i++) {
			if (product[i].item_food == nameFoodItems) {
				if (this.cost >= product[i].cash) {
					this.cost -= product[i].cash;
					return this.name  + " purchase " + nameFoodItems + ". Product price: " + product[i].cash + "$";
				}
				else {
					return "You can not make the purchase. " + nameFoodItems + "You ended funds";
				}
			}
		}
		throw "Unfortunately, " + this.name + "you can not make other purchases. =(";
	}
}

var bayer1 = new Bayer();
bayer1.name = prompt("Welcome to our supermarket! Please enter you name!");
bayer1.cost = Number(prompt("What can we offer to you, " + bayer1.name + " How much you expect?"));
while (isNaN(bayer1.cost)) {
	bayer1.cost = Number(prompt(bayer1.name + "You have to make the amount by which you expect?"));
}


log("You are a new bayer: " + bayer1.name + "!");
log("You expect for the amount: " + bayer1.cost + "$");


log("__________Price list:__________");
for (var i = 0; i < product.length; i++) {
	log("Product name: | " +product[i].item_food + " | Product price: | " + product[i].cash + "$");
}

var Buy = true;

do {
	var userSelection = prompt("You want to buy meat, milk, bread, buckwheat, bananas?");
	log(bayer1.buy(userSelection.toLowerCase()));

	log(bayer1.name + " remains: " + bayer1.cost + "$");
	var Selection = prompt("Do you want to make another purchase? Please answer yes or no");
	if (Selection.toLowerCase() == "no") {
		Buy = false;
	}
}
while (Buy);

log(bayer1.name + " thank you for choosing our supermarket.");
log("We will be glad to see you in our supermarket!");