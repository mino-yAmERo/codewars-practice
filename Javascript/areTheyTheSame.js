let array1 = [121, 144, 19, 161, 19, 144, 19, 11];
let array2 = [11*11, 121*121, 144*144, 19*19, 161*161,19*19, 144*144, 19*19];

function comp (arr1, arr2) {
    console.log(arr1); console.log(arr2);
    array1 = arr1; array2 = arr2;
    if ( array1 === null || array2 === null) return false;

    if ( !(Array.isArray(arr1)) ){
        array1 = Object.values(arr1);
    }
    if ( !(Array.isArray(arr2)) ){
        array2 = Object.values(arr2);
    }
    
    if (array1.length !== array2.length ) return false;

    let result = true;
    array1.forEach((v1, i) => {
        let status = true; 
        array2.forEach((v2, index) => { if (status) 
        if ((v1*v1) == v2 ) {
            status = false; 
            array1.splice(i,1);
            array2.splice(index,1);
        }});
        if (status) result = false;  
    });
    array2.forEach((v2) => {
        let status = true; 
        array1.forEach((v1) => { if (status) if ( (v2) == (v1*v1) ) status = false; });
        if (status) result = false;
    });

    return result;              
}

let result = comp(array1 ,array2);
console.log(result);

/*  BEST Practice
    1.
    function comp(array1, array2) {
        if(array1 == null || array2 == null) return false;
            array1.sort((a, b) => a - b); array2.sort((a, b) => a - b);
            return array1.map(v => v * v).every((v, i) => v == array2[i]);
    }

    2.
    const comp = (array1, array2) => 
        Array.isArray(array1) && Array.isArray(array2) &&
        array1.every(item => {
            const index = array2.indexOf(Math.pow(item, 2))
            return index > -1 ? array2.splice(index, 1) : false
        })
}
*/