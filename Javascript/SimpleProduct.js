var input = require('fs').readFileSync('/dev/stdin', 'utf8');
var lines = input.split('\n');

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */
let PROD = parseInt(lines.shift());
console.log("PROD = "+ (PROD * parseInt(lines.shift() )));
