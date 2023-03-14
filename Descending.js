// Excercise javascript

let values = [20,25,1,3,5,10,12];
// ascending
for(let outter = 0; outter <= values.length-1; outter++ ) {
        let temporaryVariable = null;
        for(let inner = 0; inner <= values.length-1; inner++ ) {

            if(values[inner] > values[inner+1]) {
                temporaryVariable = values[inner+1];
                values[inner+1] = values[inner];
                values[inner] = temporaryVariable;
                
     
            }
        }    

}
console.log(descending(values));


function descending(data) {

    for(let inner = 0; inner <= data.length-1; inner++) {

        let temporaryVariable = null;

        for(let outter = 0; outter <= data.length-1; outter++) {

            if(data[outter] < data[outter+1]) {
                    temporaryVariable = data[outter+1];
                    data[outter+1] = data[outter];
                    data[outter] = temporaryVariable;
            }
        }
    }

    return data;
}

