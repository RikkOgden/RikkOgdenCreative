//Create an object:
var testObject = {
  //add object properties - name/value pairs. anything that 'does something' within an object, ie: a function of an object, is called a 'method'
  name: "rikk",       //data
  age : 41,           //data
  greet: function(){  //method
    console.log("i belong to an object called testObject");
  }
}
//output any property (data) or method of the object
//eg
testObject.greet();
console.log("my name is " + testObject.name + ", my age is "  + testObject.age);


//create re-useable objects using a constructor function
// this is known as a blueprint in JS
//in other languages this would be called a 'class'

//1. define our blueprint (or class) with a name - begin name with uppercase char
//2. add the parameters we will use - fullName, favColor

function Person(fullName, age){
//define the params and any methods
  this.name   = fullName;     //data
  this.age    = age;     //data
  this.greet = function(){    //method
  console.log("hello there, my name is " + this.name + " and my age is " + this.age + "." );
  }
}

//create the objects using the constructor function.
//Pass in the parameters to define the object's data.
var rikk = new Person("Rikk Ogden", "41");
var sarah = new Person("Sarah Ogden", "35");

rikk.greet();
sarah.greet();
