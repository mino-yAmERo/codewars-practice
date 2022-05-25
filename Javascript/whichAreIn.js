let a1 = ["xyz", "live", "strong"];
let a2 = ["lively", "alive", "harp", "sharp", "armstrong"];

function inArray(array1,array2) {
    let arr = [];
    a1.forEach(function(item, index){
        console.log(index+" : "+item);
        let status = true;
        a2.forEach(function(value){
            console.log("value : "+value); 
            if (status) {
                if (value.includes(item) ) {
                    arr.push(item);
                    status = false;
                }
            }
        });

    });
    return arr.sort();
}
let result = inArray(a1,a2);
console.log("result : "+result);

/* Best Practice

1.
function inArray(array1,array2){
    return array1
    .filter(a1 => array2.find(a2 => a2.match(a1)))
    .sort()
}

2.
function inArray(a1, a2) {
    var str = a2.join(' ');
    return a1.filter(s => str.indexOf(s) !== -1).sort();
}

*/
