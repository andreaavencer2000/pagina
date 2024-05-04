const miArreglo = [101,102,103,104,105]

for(var i=0; i < miArreglo.length; i++){
    console.log("Posición "+i+" vale originalmente: "+miArreglo[i]);
    miArreglo[i] = miArreglo[i] + 5;
    console.log("Posición "+i+" más 5 = "+miArreglo[i]);
}