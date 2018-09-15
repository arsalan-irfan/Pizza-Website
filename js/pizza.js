var pizza=[{
    id:1,
    name:"Magherita",
    image:"vegePizza/Magherita.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1 
},{
    id:2,
    name:"Mushroom Truffle",
    image:"vegePizza/pizza1.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:3,
    name:"Paneer Tikka",
    image:"vegePizza/pizza2.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:4,
    name:"Cheese And Mushroom Combo",
    image:"vegePizza/pizza3.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:5,
    name:"Vegie Special",
    image:"vegePizza/pizza4.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:6,
    name:"Chicken Tikka",
    image:"chickenPizza/pizza1.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1 
},{
    id:7,
    name:"Chicken Fajita",
    image:"chickenPizza/pizza2.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:8,
    name:"Chicken Tandoori",
    image:"chickenPizza/pizza3.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:9,
    name:"Chicken Supreme",
    image:"chickenPizza/pizza4.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:10,
    name:"Chicken Cheese",
    image:"chickenPizza/pizza5.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:11,
    name:"Beef Behari",
    image:"beefPizza/pizza1.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:12,
    name:"BBQ",
    image:"beefPizza/pizza2.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:13,
    name:"Beef Overloaded",
    image:"beefPizza/pizza3.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1  
},{
    id:14,
    name:"Beef Special",
    image:"beefPizza/pizza4.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1 
},{
    id:15,
    name:"Malai Boti",
    image:"beefPizza/pizza5.jpg",
    sizeId:0,
    price:0,
    quantity:0,
    topping:1 
}
];

var noOfPizza=0;
var selectedItems=[];
var userRegistered=[];
var totalPrice=0;
var size=["small","Regular","large","Xlarge"];
var vegeRate=[250,500,750,1000];
var chickenRate=[350,600,850,1100];
var beefRate=[450,700,950,1200];
function selectedPizza(id,name,image,pizzaSize,price,totalOrderPrice,quantity,topping,toppingCharges,type){
    this.id=id;
    this.name=name;
    this.image=image;
    this.pizzaSize=pizzaSize;
    this.price=price;
    this.totalOrderPrice=totalOrderPrice
    this.quantity=quantity;
    this.topping=topping;
    this.toppingCharges=toppingCharges;
    this.type=type;

}


function quantityInc(id){
    var n=id-1;
    //alert("hello"+pizza[n].quantity);
    if(pizza[n].quantity<10){    
     document.getElementById("quantity"+id).innerHTML=++pizza[n].quantity;
    }
}
function quantitydec(id){
    var n=id-1;
    //alert("hello"+pizza[n].quantity);
    if(pizza[n].quantity>0){    
     document.getElementById("quantity"+id).innerHTML=--pizza[n].quantity;
    }
}
function toppingInc(id){
    var n=id-1;
    //alert("hello"+pizza[n].quantity);
    if(pizza[n].topping<=4){
        ++pizza[n].topping;
    }
    document.getElementById("topping"+id).innerHTML=pizza[n].topping+"x";
}
function toppingdec(id){
    var n=id-1;
    //alert("hello"+pizza[n].quantity);
    if(pizza[n].topping>1){
        --pizza[n].topping;
    }
    document.getElementById("topping"+id).innerHTML=pizza[n].topping+"x";
}
function sizeInc(id){
    var n=id-1;
    if(pizza[n].sizeId<3){
       ++pizza[n].sizeId;    
      }
   else if(a>3){
    pizza[n].sizeId=0;
       }
   document.getElementById("size"+id).innerHTML=size[pizza[n].sizeId];
}
function sizeDec(id){
    var n=id-1;
    if(pizza[n].sizeId>0){
       --pizza[n].sizeId;    
      }
   else if(a<0){
    pizza[n].sizeId=3;
       }
   document.getElementById("size"+id).innerHTML=size[pizza[n].sizeId];
 }
function addToCart(id,type){
    var index=id-1;
    var topping;
    var tempObj;
    var toppingCharges=0;

    var totalBill=0;
    var pizzaId,name,image,pizzaSize,price,totalOrderPrice,quantity;
    if(pizza[index].quantity===0){
        alert("No order added");
    }
    else{
    pizza[index].price=vegeRate[pizza[index].sizeId];
    topping=pizza[index].topping;
 
    
    if(topping>1){ 
        toppingCharges=30*(topping-1);
    }
    
    totalOrderPrice=toppingCharges+(pizza[index].price*pizza[index].quantity);

    pizzaId=pizza[index].id
    name=pizza[index].name;
    image=pizza[index].image;
    pizzaSize=size[pizza[index].sizeId];
    price=pizza[index].price;
    topping=pizza[index].topping;
    quantity=pizza[index].quantity;    
    //alert(pizza[index].name + "\n" + pizza[index].price + "\n" + size[pizza[index].sizeId]+"\n"+pizza[index].topping+"x");
    
    tempObj= new selectedPizza(pizzaId,name,image,pizzaSize,price,totalOrderPrice,quantity,topping,toppingCharges,type);
    selectedItems.push(tempObj);
    noOfPizza+=quantity;
    localStorage.setItem("pizza",noOfPizza);
    document.getElementById("totalPizza").innerHTML=localStorage.getItem("pizza");
    localStorage.setItem("itemsSelected", JSON.stringify(selectedItems));
    alert("order added to cart successfull!");
    }
}

function displayTable(){
    var totalBill=0;
    var selectedItems=JSON.parse(localStorage.getItem("itemsSelected"));
    var noOfPizza=localStorage.getItem("pizza");
    document.getElementById("tableBody").innerHTML=""
    for(var i=0 ; i<selectedItems.length ; i++){
        document.getElementById("tableBody").innerHTML += "<div class='row text-center'><div class='col-1 tableElements'><span class='tableText1'>"+(i+1)+"</span></div><div class='col-2 tableElements'><img src='"+selectedItems[i].image+"' class='tableImage'></div><div class='col-2 tableElements'><span class='tableText1'>"+selectedItems[i].name+"</span></div><div class='col-1 tableElements'><span class='tableText1'>"+selectedItems[i].quantity+"</span></div><div class='col-1 tableElements'><span class='tableText1'>"+selectedItems[i].topping+"</span></div><div class='col-2 tableElements'><span class='tableText1'>"+selectedItems[i].pizzaSize+"</span></div><div class='col-1 tableElements'><span class='tableText1'>"+selectedItems[i].type+"</span></div><div class='col-1 tableElements'><span class='tableText1'>"+selectedItems[i].totalOrderPrice+"</span></div><div class='col-1 tableButton'><button class='btn btn-danger' onClick='deleteData("+i+");'><i class='far fa-trash-alt'></i> Delete</button></div></div>";
        
        totalBill+=selectedItems[i].totalOrderPrice;
    }
    
    document.getElementById("noOfPizza").innerHTML=noOfPizza;
    document.getElementById("totalBill").innerHTML=totalBill;
}
function deleteData(n){
    
    var selectedItems=JSON.parse(localStorage.getItem("itemsSelected"));
    var noOfPizza=localStorage.getItem("pizza");
    noOfPizza-=selectedItems[n].quantity;
    selectedItems.splice(n,1);
    localStorage.removeItem("ItemSelected");
    localStorage.removeItem("pizza");
    localStorage.setItem("itemsSelected", JSON.stringify(selectedItems));
    localStorage.setItem("pizza",noOfPizza);
    displayTable();
}
function userRegistration(){  
    var loglenght = localStorage.length - 1;
    var records = 0;
    for(var i=0 ; i <= loglenght; i++){
        var itemkey = localStorage.key(i);
        var value = localStorage.getItem(itemkey);
        var valueobj = JSON.parse(value);
        // || (valueobj.email == document.getElementById("email").value)
        if((valueobj.customerId == document.getElementById("username").value)  ){
            alert("Username Already Used ! Try another username.");
            records = 1;
           return false;
           break;
        }

    }
    if(records==0){
        alert("record" + records);
        setData();
    }
}
function setData(){
    alert("In Function!");
    var customerData={
        customerId:document.getElementById("username").value,
        pwd:document.getElementById("pwd").value,
        gender:document.getElementById("gender").value,
        dob:document.getElementById("dob").value,
        fname:document.getElementById("fname").value,
        lname:document.getElementById("lname").value,
        phone:document.getElementById("phone").value,
        email:document.getElementById("email").value
    };
    
    var data = JSON.stringify(customerData);
    var id = JSON.stringify(document.getElementById("username").value);
    localStorage.setItem(id, data);
    alert("Successfully Registered!");
}