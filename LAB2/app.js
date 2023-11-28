var num = 10;
  let name = "win"
  age = 20;

  fruit = ["apple","mango","tangmo"];
  obj ={name:"Tammarat", age:19, tel:"123-456"}

  data = {adress:["11", "jira","Buriram",31000]. name: "John" };
  console.log(fruit[1]);
  console.log(obj.tel);
  console.log(data.adress[2]);

  document.getElementById("msg"),innerHTML = data.adress[2];

  let longTxt = data.name + " . " + fruit[0];

  longTxt = `${data.name} :
             ${fruit[1]}`;
  $(Function(){
    $("#msg").html(longTxt);
  }); //jquery ready

