// prettier-ignore

function newGejala(value) {
    console.log("atas");
    if(value == ""){
        value = document.getElementById("newGejala").value;
    }
    if (value != "") {
        $.ajax({
            url: '/gejala-baru?salue=' + value,
            type: 'get',
            success: function (result) {
                location.reload();
            },
        });
    }
}

// prettier-ignore
function editGejala(value, id) {
    if(value == ""){
        Swal.fire({
            title: 'Anda Ingin Menghapus Gejala?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Ya',
            denyButtonText: 'Tidak',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.ajax({
                    url: '/edit-gejala?value=' + value + '&id=' + id,
                    type: 'get',
                    success: function (result) {
                        if (result == "reload") {
                            location.reload();
                        }
                    },
                });
            } else if (result.isDenied) {
                location.reload();
              }
          })
    } else {
    $.ajax({
        url: '/edit-gejala?value=' + value + '&id=' + id,
        type: 'get',
        success: function (result) {
            // location.reload();
        },
    });
}
}

// prettier-ignore
function deleteGejala(id) {
        Swal.fire({
            title: 'Anda Ingin Menghapus Gejala?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Ya',
            denyButtonText: 'Tidak',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $value = "";
                $.ajax({
                    url: '/edit-gejala?value=' + $value + '&id=' + id,
                    type: 'get',
                    success: function (result) {
                        if (result == "reload") {
                            location.reload();
                        }
                    },
                });
            }
          })
}

var gejalaEnter = document.getElementById("newGejala");
if (gejalaEnter) {
    gejalaEnter.addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            event.preventDefault();
            console.log("bawah");
            $value = "";
            newGejala($value);
        }
    });
}

// prettier-ignore
function newPenyakit(value) {
    $.ajax({
        url: '/penyakit-baru?value=' + value,
        type: 'get',
        success: function (result) {
            console.log(result);
            if (result != "") {
                window.location.replace("/detail?id=" + result);
            }
        },
    });
}

// prettier-ignore
function saveBobot(value, id) {
    if(value != ""){
    $.ajax({
        url: '/save-bobot?id=' + id + '&bobot=' + value,
        type: 'get',
        success: function(result){
            location.reload();
        }
    });
}
}

// prettier-ignore
function editNamaPenyakit(value, id) {
    $.ajax({
        url: '/edit-nama-penyakit?id=' + id + '&value=' + value,
        type: 'get',
        success: function (result) {},
    });
}

function tes() {
    $('input[name="tesgejala"]:checked').each(function () {
        console.log(this.value);
    });
}

// prettier-ignore
function tesCheck(value) {
    var checkBox = document.getElementById("gejala" + value);

    if (checkBox.checked == true) {
        $.ajax({
            url: '/store-tes?value=' + value,
            type: 'get',
            success: function () {},
        });

        $("#inputLabelIcon" + value).html("");
        $("#inputLabelIcon" + value).append(
            "<i class='far fa-check-circle'></i>"
        );
    } else {
        $.ajax({
            url: '/remove-tes?value=' + value,
            type: 'get',
            success: function () {},
        });
        $("#inputLabelIcon" + value).html("");
        $("#inputLabelIcon" + value).append("<i class='far fa-circle'></i>");
    }
}

// prettier-ignore
function submitTes(){
    Swal.fire({
        icon: 'success',
        title: 'Data Telah Tersimpan',
        text: 'Lihat Hasil ?',
        showCancelButton: true,
        confirmButtonText: 'Hasil',
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url:'/tes-submit',
            type: 'get',
            success: function(){
                window.location.replace("/hasil");
            },
          });
        }
      })
}

function btnSee() {
    var x = document.getElementById("pass");

    if (x.type == "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

// /hapus-expert/{{ $item->id }}
//prettier-ignore
function deleteExpert(id, code, secid){
    if (code == "expert"){
        Swal.fire({
            title: 'Anda Ingin Menghapus Akun Expert?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Ya',
            denyButtonText: 'Tidak',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.replace("/hapus-expert/"+id);
            }
          })
    } else if (code == "penyakit"){
        Swal.fire({
            title: 'Anda Ingin Menghapus Penyakit?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Ya',
            denyButtonText: 'Tidak',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.replace("/hapus-penyakit?id="+id);
            }
          })
    } else if (code == "bobot"){
        Swal.fire({
            title: 'Anda Ingin Menghapus Gejala?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Ya',
            denyButtonText: 'Tidak',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.replace("/kurangi-gejala/"+id+"?id="+secid);
            }
          })
    }
}
