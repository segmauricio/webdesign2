function TablaMultiplicion(a){
  console.log("---------------------------------------")
  console.log("Imprimiendo tabla del "+ a +"");
  console.log("---------------------------------------")
	//i++ significa i=i+1;

	for(i = 1;i<=10;i++){
		console.log(a + "x" + i + "=" + a * i);
	}
}
TablaMultiplicion(5);
console.log("=======================================")

var num1=3;
var num2=9;
var tabla=0;
if(num1>num2){
  console.log("Intente de nuevo.")
}else{
  for(var l=num1; l<=num2; l++){
    console.log("---------------------------------------")
    console.log("Tabla del", num1);
    console.log("---------------------------------------")
    for(var i=1; i<=10; i++){
      tabla=num1*i;
      console.log(num1+"x"+i+"="+tabla);
    }
    num1=num1+1;
    console.log("======================================= ");
  }
}
