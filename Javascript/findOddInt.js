let Arr = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];
let Arr2 = [1,1,2,-2,5,2,4,4,-1,-2,5] ;
let Arr3 = [20,1,1,2,2,3,3,5,5,4,20,4,5];
let Arr4 = [1,2,2,1,3,4,4,5,6,6,5,3,3]
function findOdd(A) {
    let arrSort = A.sort();
    console.log(arrSort);
    let count = 0;
    let prevValue ;
    arrSort.map(countOdd);
    function countOdd(val){
        if ( val == prevValue ) {
            count ++ ;
            prevValue = val;
        } else {
            if (count%2 != 0) return;
            count = 0
            count++
            prevValue = val;
        }
    }
    console.log("value : "+prevValue+" count : "+count);
}
findOdd(Arr);
findOdd(Arr2);
findOdd(Arr3);
findOdd(Arr4);