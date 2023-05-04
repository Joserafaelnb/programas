var input = require('fs').readFileSync('/dev/stdin', 'utf8');
var lines = input.split('\n');

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

let R = parseFloat(lines.shift());
R = Math.pow(R,2)*3.14159;
R = R.toFixed(4);
console.log("A="+R );