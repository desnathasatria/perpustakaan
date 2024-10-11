function delete_form() {
    $("[name='nama_pengirim']").val("");
    $("[name='email_pengirim']").val("");
    $("[name='pesan']").val("");
}

function delete_error() {
    $("#error-nama_pengirim").html("");
    $("#error-email_pengirim").html("");
    $("#error-pesan").text("");
}

$(document).ready(function () {
    get_kritik_saran();
});

function get_kritik_saran() {
    $.ajax({
        url: base_url + _controller + "/get_data_message",
        method: "GET",
        dataType: "json",
        success: function (data) {
            $("#data_kritik_saran").empty();
            if (data.length === 0) {
                $("#data_kritik_saran").html("<p>Tidak ada kritik dan saran.</p>");
            } else {
                data.forEach(function (item) {
                    var status_kritik = "";
                    if (item.status == 3) {
                        status_kritik = "Sudah dibalas";
                    } else if (item.status == 2) {
                        status_kritik = "Telah dibaca oleh admin";
                    } else if (item.status == 1) {
                        status_kritik = "Belum dicek oleh admin";
                    }

                    var list = `
                        <div class="col-lg-6 mb-4">
                            <div class="p-4 bg-light rounded">
                                <h5>${item.name}</h5>
                                <p class="mb-1">${item.message}</p>
                                <p class="text-muted">Tanggal: ${item.date_send}</p>
                                <p class="text-muted">Status: ${status_kritik}</p>
                            </div>
                        </div>
                    `;

                    $("#data_kritik_saran").append(list);
                });
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error: " + error);
        }
    });
}

function insert_message() {
    var formData = new FormData();
    formData.append("nama_pengirim", $("[name='nama_pengirim']").val());
    formData.append("email_pengirim", $("[name='email_pengirim']").val());
    formData.append("pesan", $("[name='pesan']").val());

    $.ajax({
        type: "POST",
        url: base_url + "/" + _controller + "/insert_message",
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        success: function (response) {
            delete_error();
            if (response.errors) {
                for (var fieldName in response.errors) {
                    $("#error-" + fieldName).html(response.errors[fieldName]);
                }
            } else if (response.success) {
                delete_error();
                delete_form();
                alertify.success("Berhasil menambah kritik dan saran");
                get_kritik_saran(); // Refresh the kritik dan saran display
            } else if (response.error) {
                alertify.error(response.error);
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error: " + error);
        },
    });
}