let arr = [5, 3, 2, 8, 1, 4];
let arr2 = [5, 3, 1, 8, 0];

function sortArray(array) {
    let indexArr = [];
    let evenArr = [];
    if (array === []) return [];
    array.map(findOdd);

    function findOdd (item , index) {
        if(item %2 == 0) {
            indexArr.push(index);
            evenArr.push(item);
            delete array[index];
        }
    }
    function removeUndefined (item) {
        return item != undefined ;
    }
    console.log("Array : "+array);
    console.log("indexArray : "+indexArr);
    console.log("evenArray : "+evenArr);

    let sortArr = array.sort(function(a, b) {return a - b}); 
    let newArr = sortArr.filter(removeUndefined);

    console.log("Sort Arr : "+sortArr);
    console.log("New Arr : "+newArr);
    
    for (let i = 0 ; i < evenArr.length ; i++) {
        newArr.splice(indexArr[i] ,0,evenArr[i]);
    }
    console.log("New Arr after splice : "+newArr);
}
sortArray(arr);
sortArray(arr2);

/* Best Practice

    function sortArray(array) {
        const odd = array.filter((x) => x % 2).sort((a,b) => a - b);
        return array.map((x) => x % 2 ? odd.shift() : x);
    }
    
*/