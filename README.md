1. Que hace esta función

```
function mystery(num) {
    if (num % 2 === 0) {
        return "even";
    } else {
        return "odd";
    }
}

console.log(mystery(5));
```

- A. Devuelve "odd" porque el número 5 es impar.
- B. Devuelve "even" porque el número 5 es impar.
- C. Devuelve undefined porque la función no tiene un valor de retorno.
- D. Devuelve un error porque la función no acepta parámetros.


2. ¿Qué realiza el siguiente código JavaScript?
```
let x = 10;
let y = "10";

if (x === y) {
    console.log("Equal");
} else {
    console.log("Not equal");
}

```

- [] A. Imprime "Equal" porque ambos valores son iguales.
- [] B. Imprime "Not equal" porque los valores son diferentes tipos de datos.
- [] C. Imprime "Equal" porque la comparación no tiene en cuenta el tipo de dato.
- [] D. Imprime "Not equal" porque la variable y no está definida.


3. Que realiza este fragmento de código en JavaScript

```
let arr = [1, 2, 3, 4, 5];
arr.pop();
console.log(arr);

```

- [] A. Imprime [1, 2, 3, 4] porque el método pop() elimina el último elemento del array.
- [] B. Imprime [1, 2, 3, 4, 5, 6] porque el método pop() agrega un nuevo elemento al array.
- [] C. Imprime [2, 3, 4, 5] porque el método pop() elimina el primer elemento del array.
- [] D. Imprime [] porque el método pop() vacía el array.

4. Que realiza este fragmento de código en JavaScript

```

function greet(name) {
    return "Hello, " + name + "!";
}

console.log(greet());

```

- [] A. Imprime "Hello, !" porque no se ha pasado ningún argumento a la función.
- [] B. Imprime undefined porque no se ha pasado ningún argumento a la función.
- [] C. Imprime "Hello, undefined!" porque el valor por defecto de name es undefined.
- [] D. Imprime un error porque la función requiere un argumento.

5. ¿Qué realiza el siguiente código JavaScript?

```

let count = 0;
for (let i = 0; i < 5; i++) {
    count += i;
}
console.log(count);

```

- [] A. Imprime 0 porque count se inicializa en 0.
- [] B. Imprime 10 porque la suma de los números del 0 al 4 es 10.
- [] C. Imprime 15 porque la suma de los números del 1 al 5 es 15.
- [] D. Imprime 20 porque el bucle se ejecuta 5 veces.