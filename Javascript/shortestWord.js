//------ Shortest Word ------//
// https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9 
let str = "bitcoin take over the world maybe who knows perhaps";
let str2 = "Let's travel abroad shall we";
findShort(str);
findShort(str2);

function findShort(s) {
    let arr = s.split(' ');
    let newArr = arr.map(e);
    let min = Math.min.apply(Math, newArr);
    console.log("the shortest word length : "+min);
    return min
}
function e(str) {
    console.log('string: '+str+', length: '+str.length);
    return str.length;
}

