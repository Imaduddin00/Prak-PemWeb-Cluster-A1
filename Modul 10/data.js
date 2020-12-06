var data_input = document.getElementById("data");
var hasil = document.getElementById("hasil");
var arr = [];
var edit = "";
var del = "";

function submit_data(){
    arr.push(data_input.value);
    console.log(arr);
    show_data();
}
function show_data(){
    hasil.innerHTML = "";
    arr.forEach((arr, i) => {
        edit = "<a href='#' onclick='edit_data("+i+")'>Edit</a>";
        del = "<a href='#' onclick='del_data("+i+")'>Delete</a>";
        hasil.innerHTML += "<li>" + arr + " [" + edit + "|" + del + "]" + "</li>";
    })
}
function edit_data(index){
    var nama_baru = prompt("Nama baru", arr[index]);
    arr[index] = nama_baru;
    show_data();
}
function del_data(index){
    delete arr[index];
    show_data();
}