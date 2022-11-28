//Declares a variable, optionally initializing it to a value
//stare, używane w latach 1995-2015
var a = 'zmienna a';

//Declares a block-scoped, local variable, optionally initializing it to a value.
//cannot be redeclare // must be Declared before use // have Block Scope
let b = 'zmienna b';

//Declares a block-scoped, read-only named constant.
//cannot be redeclare // cannot be Reassigned // have Block Scope
const c = 'stała c';

//Using document.write() after an HTML document is loaded, will delete all existing HTML
//The document.write() method should only be used for testing.
document.write('To jest document.write');

//alert
alert("To jest alert");

let prom = prompt("To jest prompt", '');
alert(`prompt = '${prom}' `);

//zwraca true or false
confirm('To jest confirm');