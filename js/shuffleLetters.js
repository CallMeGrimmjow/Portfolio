let shuffleFunc = function (id) {
    return document.getElementById(id);
};
let inc = 0;
let out = 0;
const str = 'Ezra Mosimann';
const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#*$£%&';
let t;

let anim = function () {
    inc++;
    if (inc % 7 === 0 && out < str.length) {
        shuffleFunc('index-anim').before(document.createTextNode(str[out]));
        out++;
    } else if (out >= str.length) {
        shuffleFunc('shuffle').innerHTML = '';
        clearInterval(t);
    } else
    shuffleFunc('shuffle').innerHTML =
        chars[Math.floor(Math.random() * chars.length)];
};
t = setInterval(anim, 30);
shuffleFunc('index-anim').innerHTML = '';
