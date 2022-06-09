//Con lo aprendido en la clase, escribe un programa en JavaScript que imprima por consola la tabla de multiplicación,
//multiplicando el valor por los números 1 hasta el 10.
//En el cuerpo del programa se le asigna a una variable el valor de la tabla que se desea obtener
//y al ejecutar se debe obtener en la salida con el siguiente formato:

function TablaMultiplicacion(a){
  console.log("---------------------------------------")
  console.log("Imprimiendo tabla del "+ a +"");
  console.log("---------------------------------------")
	//i++ significa i=i+1;

	for(i = 1;i<=10;i++){
		console.log(a + "x" + i + "=" + a * i);
	}
}
TablaMultiplicacion(5);
console.log("=======================================")

//Utilizando como base el primer ejercicio anterior, modificarlo para que en lugar de recibir solo un valor, reciba dos.
// El primero para indicarle el numero inicial de las tablas que serán impresas por consola, y el segundo el valor de la última tabla de multiplicación que será impresa.
//Se deberá controlar que el primer valor en ningún caso sea mayor el segundo, en caso de serlo se debe enviar un mensaje indicando que no es posible procesar la petición.
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
