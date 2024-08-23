## Comprención de código:

Sobre las siguientes 5 preguntas encontrará un fragmento de código, de acuerdo al resultado seleccione la opción correcta:

### 1. 

```
function mystery($num) {
    if ($num % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

echo mystery(5);
```

- A. Devuelve "odd" porque el número 5 es impar.
- B. Devuelve "even" porque el número 5 es impar.
- C. Devuelve undefined porque la función no tiene un valor de retorno.
- D. Devuelve un error porque la función no acepta parámetros.


### 2.
```
$x = 10;
$y = "10";

if ($x === $y) {
    echo "Equal";
} else {
    echo "Not equal";
}

```

- A. Imprime "Equal" porque ambos valores son iguales.
- B. Imprime "Not equal" porque los valores son diferentes tipos de datos.
- C. Imprime "Equal" porque la comparación no tiene en cuenta el tipo de dato.
- D. Imprime "Not equal" porque la variable y no está definida.


### 3.

```
$arr = [1, 2, 3, 4, 5];
array_pop($arr);
print_r($arr);

```

- A. Imprime [1, 2, 3, 4] porque el método pop() elimina el último elemento del array.
- B. Imprime [1, 2, 3, 4, 5, 6] porque el método pop() agrega un nuevo elemento al array.
- C. Imprime [2, 3, 4, 5] porque el método pop() elimina el primer elemento del array.
- D. Imprime porque el método pop() vacía el array.

### 4. 

```
function greet($name) {
    return "Hello, " . $name . "!";
}

echo greet();
```

- A. Imprime "Hello, !" porque no se ha pasado ningún argumento a la función.
- B. Imprime undefined porque no se ha pasado ningún argumento a la función.
- C. Imprime "Hello, undefined!" porque el valor por defecto de name es undefined.
- D. Imprime un error porque la función requiere un argumento.

### 5:
```

$count = 0;
for ($i = 0; $i < 5; $i++) {
    $count += $i;
}
echo $count;

```

- A. Imprime 0 porque count se inicializa en 0.
- B. Imprime 10 porque la suma de los números del 0 al 4 es 10.
- C. Imprime 15 porque la suma de los números del 1 al 5 es 15.
- D. Imprime 20 porque el bucle se ejecuta 5 veces.