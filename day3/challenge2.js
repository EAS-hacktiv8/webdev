// nomor 1
console.log("Nomor 1");
let indexWhile = 1
while(indexWhile <= 120){
    console.log(`Halo, saya orang urutan ke ${indexWhile}`);
    indexWhile++;
}

for (let indexFor = 1; indexFor <= 120; indexFor++) {
    console.log(`Halo, saya orang urutan ke ${indexFor}`);
}

// nomor 2
console.log("Nomor 2");
let baris = 0;
while (baris < 100) {
    if (baris %2 !=0) {
        console.log("0".repeat(100))
    } else {
        console.log("")
    }
    baris++;
}
